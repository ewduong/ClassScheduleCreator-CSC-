<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ScheduleIt</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
	
	<!-- Calender Stuff -->
	<link rel='stylesheet' href='../lib/cupertino/jquery-ui.min.css' />
    <link href='fullcalendar.css' rel='stylesheet' />
    <link href='fullcalendar.print.css' rel='stylesheet' media='print' />
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <img src="img/logo.png" alt= "ScheduleIt" style="width:50px;height:50px;" align="left">
                 <a class="navbar-brand page-scroll" href="index.php">ScheduleIt</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.php">Home</a>
                    </li>
					  <li>
                        <a class="page-scroll" href="search.php">Search Courses</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="schedule.php">Create Schedule</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.html">About Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
			
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<header>
		<section id="courses">
			<div class="conatiner">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Search for Courses</h2>
						<hr class="primary">
						<form method ="post" id="search-form">
							<p><label for="course-crn">Course CRN: </label><input type='text' placeholder='Search...' id="search-text-input" name="course_CRN" /></p>
							<p><label for="subject">Subject: </label>
								<select name="subject">
									<option></option>
									<option>ARCH</option>
									<option>BIOL</option>
									<option>BMED</option>
									<option>BLDG</option>
									<option>TBAN</option>
									<option>CHEM</option>
									<option>TCAN</option>
									<option>CIVE</option>
									<option>CIVT</option>
									<option>COMM</option>
									<option>COMP</option>
									<option>TCON</option>
									<option>CONM</option>
									<option>TCMC</option>
									<option>DSGN</option>
									<option>ECON</option>
									<option>ELEC</option>
									<option>TEIT</option>
									<option>ENGR</option>
									<option>ENGL</option>
									<option>FMGT</option>
									<option>TFMC</option>
									<option>HIST</option>
									<option>HUMN</option>
									<option>HUSS</option>
									<option>INDS</option>
									<option>INTS</option>
									<option>TJEC</option>
									<option>LITR</option>
									<option>MGMT</option>
									<option>HUSS</option>
									<option>MANF</option>
									<option>MATH</option>
									<option>MECH</option>
									<option>TCAD</option>
									<option>PHIL</option>
									<option>POLS</option>
									<option>TPMC</option>
									<option>PHYC</option>
									<option>SOCL</option>
									<option>SURV</option>
								</select>
							<label for="title">Title: </label><input type='text' placeholder='Search...' id="search-text-input" name="title" /></p>
							<p><label for="day">Day: </label>
							<input type="checkbox" name="day[]" value="M"><label for="day">Monday</label>
							<input type="checkbox" name="day[]" value="T"><label for="day">Tuesday</label>
							<input type="checkbox" name="day[]" value="W"><label for="day">Wednesday</label>
							<input type="checkbox" name="day[]" value="R"><label for="day">Thursday</label>
							<input type="checkbox" name="day[]" value="F"><label for="day">Friday</label>
							<input type="checkbox" name ="day[]" value="S"><label for="day">Saturday</label></p>
							<p><label for="start">From: </label><input type="time" name="start">
							<label for="end">To: </label><input type="time" name="end"></p>
							<p><label for="instructor">Professor: </label><input type='text' placeholder='Search...' id="search-text-input" name="instructor" /></p>
							<p><label for="location">Location: </label><input type='text' placeholder='Search...' id="search-text-input" name="location" /></p>
							<input type="submit" name="Submit">
						</form>
					</div>
				</div>
			</div>
		</section>
	</header>
	
	<?php
		include('includes/dbconnect.php');
		
		// replace last occurence of $search string (for sql statement remove last AND)
		function str_lreplace($search, $replace, $subject) {
			$pos = strrpos($subject, $search);

			if($pos !== false) {
				$subject = substr_replace($subject, $replace, $pos, strlen($search));
			}

			return $subject;
		}

		$fields = array('course_CRN', 'subject', 'title', 'day', 'start', 'end', 'instructor', 'location');
		$course_CRN = $subject = $title = $day = $start = $end = $instructor = $location = false;
		$sql = "SELECT a.course_CRN, b.subject, b.title, a.day, a.start, a.end, a.instructor, a.location FROM class a, course b WHERE a.course_CRN = b.CRN AND ";
		$wfieldname = "";

		if (isset($_POST['Submit'])) {
			foreach($fields AS $fieldname) { // Loop trough each field to see if empty or not
				if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
					$$fieldname = false;
				} else {
					$$fieldname = true;
				}
			}
			
			// sql statement generator based on text boxes and checkboxes filled in
			foreach($fields AS $fieldname) {
				if ($$fieldname) {
					$wfieldname = $_POST[$fieldname];
					
					// cycle through checkboxes and add to sql statement according to whats checked else do the other adding to sql statement
					if ($fieldname == "day") {
						$sql .= $fieldname." REGEXP '";
						if (!empty($_POST['day'])) {
							foreach($_POST['day'] as $day) {
								$sql .= $day."|";
							}
						}
						$sql = str_lreplace("|", "' AND ", $sql);
					} else {
						$wfieldname = preg_replace('!\s+!', '%', $wfieldname);
						$sql .= $fieldname." LIKE '%".$wfieldname."%' AND ";
					}
					
				}
			}
			
			$sql = str_lreplace("AND", "", $sql); // remove trailing AND in sql statement
			
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				echo "<section id=\"about\">
						<div class=\"container\">
							<div class=\"row\">
								<div class=\"col-lg-12 text-center\">";
				echo "<div id=\"wrapper\"><table id=\"course-list\" cellspacing=\"0\" cellpadding=\"0\">
					<thead>
						<tr>
							<th><span>Course CRN</span></th>
							<th><span>Subject</span></th>
							<th><span>Title</span></th>
							<th><span>Day</span></th>
							<th><span>Start</span></th>
							<th><span>End</span></th>
							<th><span>Instructor</span></th>
							<th><span>Location</span></th>
						</tr>
					</thead>";
					
				// output data of each row onto table
				echo "<tbody>";
				while($row = $result->fetch_assoc()) {
					echo "<tr>
							<td>".$row["course_CRN"]."</td>
							<td>".$row["subject"]."</td>
							<td>".$row["title"]."</td>
							<td>".$row["day"]."</td>
							<td>".$row["start"]."</td>
							<td>".$row["end"]."</td>
							<td>".$row["instructor"]."</td>
							<td>".$row["location"]."</td>
						</tr>";
				}
				echo "</tbody></table></div></div></div></section>";
				
				// output data of each row onto calendar
				echo "<div style=\"background-color:white\" id='calendar'></div>";
				$del="[";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					if($row["day"] == "M"){
							$del .= "{id: '".$row["course_CRN"]."', title: '".$row["title"]." @ ".$row["location"]."', start: '2016-02-15T".test($row["start"])."', end: '2016-02-15T".test($row["end"])."'}";
					} else if($row["day"] == "T"){
							$del .= "{id: '".$row["course_CRN"]."', title: '".$row["title"]." @ ".$row["location"]."', start: '2016-02-16T".test($row["start"])."', end: '2016-02-16T".test($row["end"])."'}";
					} else if($row["day"] == "W"){
							$del .= "{id: '".$row["course_CRN"]."', title: '".$row["title"]." @ ".$row["location"]."', start: '2016-02-17T".test($row["start"])."', end: '2016-02-17T".test($row["end"])."'}";
					} else if($row["day"] == "R"){
							$del .= "{id: '".$row["course_CRN"]."', title: '".$row["title"]." @ ".$row["location"]."', start: '2016-02-18T".test($row["start"])."', end: '2016-02-18T".test($row["end"])."'}";
					} else if($row["day"] == "F"){
							$del .= "{id: '".$row["course_CRN"]."', title: '".$row["title"]." @ ".$row["location"]."', start: '2016-02-19T".test($row["start"])."', end: '2016-02-19T".test($row["end"])."'}";
					} else if($row["day"] == "S"){
							$del .= "{id: '".$row["course_CRN"]."', title: '".$row["title"]." @ ".$row["location"]."', start: '2016-02-20T".test($row["start"])."', end: '2016-02-20T".test($row["end"])."'}";
					}
					$del.=", ";
				}
				$del=substr($del,0,strlen($del)-2)."]";

				echo "<div style=\"background-color:transparent\" id='calendar'></div>";
				echo "<button style=\"background-color:transparent\" id='AddanEvent' onclick=\"addEvents($del);style.display = 'none'\">ADD EVENTS</button>";
				echo "<button style=\"background-color:transparent\" id='print' onclick=\"printPage()\">Print Schedule</button>";
				echo "<button style=\"background-color:transparent\" id='removeEvent' onclick=\"removeEvents($del)\">REMOVE EVENT</button>";
			} else {
				echo "<br/>Nothing from the database matched your keywords! Sorry =/";
			}
		}															
	$conn->close();
		
	function test($string){
		$hour = intval(substr($string,0,2));
		if( $hour >= 1 && $hour < 8){
			$hour += 12;
			return (strval($hour).substr($string,2));
		}
		else{
			return ($string);
		}
	}
	?>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2></h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Top</a>
            </div>
        </div>
    </aside>

	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	<script src="js/tablesorter.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
	
	<!-- Calender Stuff -->
    <script src='lib/moment.min.js'></script>
    <script src='fullcalendar.min.js'></script>
	
	<script>
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
          allDaySlot: false,
          editable: false,
          eventLimit: true,
          eventColor: '#378006'
        });

       });
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
	
		function printPage(){
		  window.print();
		}

      </script>
	  
	<script>
		$(function() {
  
  transition_timeout = 40;
  
  $('.title_items').click(function() {
    
    current = $(this).next().find('li');
    
    $(this).toggleClass('active');
    current.toggleClass('visible');
    
    if ($(this).hasClass('active')) {
      for( i = 0; i <= current.length; i++ ) {
        $(current[i]).css('transition-delay', transition_timeout * i + 'ms');
      }
    }
    else {
      for( i = current.length, j = -1; i >= 0; i--, j++) {
        $(current[i]).css('transition-delay', transition_timeout * j + 'ms');
      }
    }
  
  });
});
	</script>

</body>

</html>
