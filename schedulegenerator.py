#!/usr/bin/env python

'''*****************************
 * Information comes in by schedulelist
 * as ((subj,course),(subj,course), ...)
       #not actually
 * where each (subj,course) is a 'requirement'
 *
 *
 * This function returns the valid premutations of
 * the courses that fit the input lists
 *
 *'''
from sets import Set
import MySQLdb, datetime, sys, ast, string

def buildRoster(schedulelist,db_name):
  fullRoster=[]
  requirement=['','',[]]
  db=MySQLdb.connect(user="root",passwd="Csc2016!",db=db_name)
  for courseReq in schedulelist:
    requirement=['','',[]]
    querystat="select CRN from course where subject='"+(str)(courseReq[0])+"' and course='"+(str)(courseReq[1])+"';"
    #print querystat
    db.query(querystat)
    r=db.store_result()
    courseCRNS=[]
    for row in r.fetch_row(maxrows=0):
      courseCRNS+=row
    requirement[0]=courseReq[0]
    requirement[1]=courseReq[1]
    course=[Set([]),[]]  #this first object should be a set
    for courseCRN in courseCRNS:
      labs=1
      #is this a lab?
      labcheck="select credits from course where CRN='"+(str)(courseCRN)+"';"
      #print labcheck
      db.query(labcheck)
      lab=db.store_result()
      credits = lab.fetch_row(maxrows=0)
      #print credits
      if credits[0][0]=="0":
        continue
      while 1:
        course=[Set([]),[]]  #this is to reset the object
        course[0].add(int(courseCRN))     #add each class to the list with each CRN
        #get the classes for the lecture
        quer="select day, start, end from class where course_CRN='"+(str)(courseCRN)+"';"
        #print quer
        db.query(quer)
        r=db.store_result()
        for row in r.fetch_row(maxrows=0):
          course[1]+=[(row[0],(datetime.datetime.min + row[1]).time(),(datetime.datetime.min + row[2]).time())]
        #is there a lab to this class
        labquery="select credits,subject from course where CRN='"+(str)(courseCRN+labs)+"';"
        #print labquery
        db.query(labquery)
        rlab=db.store_result()
        credit_hours = rlab.fetch_row(maxrows=0)
        #print "subject: " + credit_hours[0][1]
        #print credit_hours
        if not credit_hours:
          labqueryspec="select credits,subject from course where CRN='"+(str)(courseCRN+labs+1)+"';"
          db.query(labqueryspec)
          specrlab=db.store_result()
          spec_credit_hours = specrlab.fetch_row(maxrows=0)
          if not spec_credit_hours:
            break
          if spec_credit_hours[0][0]=="0" and spec_credit_hours[0][1]==courseReq[0]:
            course[0].add(int(courseCRN+labs+1))
            spec_labclass_quer="select day, start, end from class where course_CRN='"+(str)(courseCRN+labs+1)+"';"
            db.query(spec_labclass_quer)
            spec_rr=db.store_result()
            for lab_row in spec_rr.fetch_row(maxrows=0):
              #print lab_row
              course[1]+=[(lab_row[0],(datetime.datetime.min + lab_row[1]).time(),(datetime.datetime.min + lab_row[2]).time())]
            labs+=2
            requirement[2]+=[course]    #add the course to the requirement list
          else:
            if labs > 1:
              break
            requirement[2]+=[course]    #add the course to the requirement list
            break
            
        if credit_hours[0][0]=="0" and credit_hours[0][1]==courseReq[0]:
          course[0].add(int(courseCRN+labs))
          #query for classes
          labclass_quer="select day, start, end from class where course_CRN='"+(str)(courseCRN+labs)+"';"
          #print labclass_quer
          db.query(labclass_quer)
          rr=db.store_result()
          for lab_row in rr.fetch_row(maxrows=0):
            #print lab_row
            course[1]+=[(lab_row[0],(datetime.datetime.min + lab_row[1]).time(),(datetime.datetime.min + lab_row[2]).time())]
          labs+=1
          requirement[2]+=[course]    #add the course to the requirement list
        else:
          if labs > 1:
            break
          requirement[2]+=[course]    #add the course to the requirement list
          break
        #print course
    fullRoster+=[requirement]
  #printSetList(fullRoster)
  return fullRoster

def printReqSet(req):
  for course in req:
    print course[0]
    for klass in course[1]:
      print klass[0],
      print klass[1],
      print klass[2]

def printSetList(roster):
  for req in roster:
    print req[0],
    print ", ",
    print req[1]
    for course in req[2]:
      print course[0]
      for klass in course[1]:
        print klass[0],
        print klass[1],
        print klass[2]

def uniq(lst):
    last = object()
    for item in lst:
        if item == last:
            continue
        yield list(item)
        last = item

def createSchedule(roster):
  #disgusting time/space complexity.
  #five nested loops but there's probably no way around it.
  reqset=roster.pop(0)
  partials=[]
  while roster:
    nextReq=roster.pop(0)
    partials=[]
    for course in reqset[2]:
      #printReqSet(reqset)
      for compCourse in nextReq[2]:
        #print course[0]
        if course[0].issuperset(compCourse[0]): #incase the course is in two or more reqs
          continue
        failFlag=False
        for klass in course[1]:
          failFlag=False
          for compClass in compCourse[1]:
            #check time bounds
            if klass[0] != compClass[0]:
              continue
            if klass[1]<=compClass[1] and klass[2]>=compClass[1]: #compClass start is not within the klass
              #fail to next course
              failFlag=True
              break
            if klass[1]<=compClass[2] and klass[2]>=compClass[2]: #compClass end is not within the klass
              #fail to next course
              failFlag=True
              break
              #otherwise, _this_ klass has no problems with _this_ compared klass
          '''compClass in compCourse'''
          #if no failures, _this_ klass has no problem with _any_ compared klass in this compared course
          if failFlag:
            break
        '''klass in course'''
        #if no failures, _this_ course has no problems with _this_ compared course.
        if failFlag:
          continue
        partials+=[(course[0] | compCourse[0], course[1] + compCourse[1])]
      '''compCourse in nextReq'''
      #if no failures, _this_ course has no problems with _any_ compared course.
    '''course in req'''
    reqset[2]=partials
  '''while nextReq in roster'''
  #reqlist= [list(sched[0]) for sched in reqset[2]]
  return list(uniq(sorted([sched[0] for sched in reqset[2]],reverse=True)))

if __name__ == '__main__':
    lst=sys.argv[1]

    #lst = [("PHIL",4501),("ENGL",1100),("MGMT",1500),("MATH",1850)]
    #print "=================================================="
    values=ast.literal_eval(string.replace(lst,"\\",""))

    roster= buildRoster(values[0],values[1])

    print createSchedule(roster)

