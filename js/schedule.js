var calendar;
$(document).ready(function() {
  calendar = $('#calendar');
  calendar.fullCalendar({
    theme: true,
    header: false,
    height: 525,
    columnFormat: 'ddd',
    defaultView: 'agendaWeek',
    defaultDate: '2016-02-14',
    minTime: '08:00:00',
    maxTime: '20:00:00',
    events: eval(document.getElementById('calendar').getAttribute("data-events")),
    allDaySlot: false,
    editable: false,
    eventLimit: true,
    eventColor: '#378006'
  });
 });
 function changeMintime(){
   calendar.fullCalendar({
     minTime: '10:00:00',
     maxTime: '20:00:00'
   })
 }
 var myEvent = {
    id: "Event1",
    title:"my new event",
    start: '2016-02-14T18:00:00+00:00',
    end: '2016-02-14T19:0:00+00:00',
    backgroundColor: "red"
  }
  var myEvent2 = {
     id: "Event2",
     title:"my new event",
     start: '2016-02-15T13:00:00+00:00',
     end: '2016-02-15T14:0:00+00:00'
  }

  function addEvent(event) {
    calendar.fullCalendar('renderEvent', event);
  }
  function addEvents(events){
    for (i = 0; i < events.length; i++) {
      addEvent(events[i]);
    }
  }
  function removeEvent(event){
    calendar.fullCalendar('removeEvents', event.id);
  }
  function removeEvents(events){
    for (i = 0; i < events.length; i++) {
      removeEvent(events[i].id);
    }
  }
