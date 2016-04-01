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
	<link rel="stylesheet" href="css/buttons.css" type="text/css">
	
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
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">Enter Course Requirement</h2>
						<hr class="primary">
						<form method ="post" id="search-form">
						<p>
							<select id="season-dropdown" name="season">
								<option>Spring 2016</option>
								<option>Fall 2016</option>
							</select>
						</p>
						<div class="multi-field-wrapper">
							<div class="multi-fields">
								<div class="multi-field">
									<label for="subject-label[]">Subject: </label>
										<select name="subject[]" class="button button-rounded">
											<option value="0"></option>
											<option value="1">ARCH</option>
											<option value="2">BIOL</option>
											<option value="3">BMED</option>
											<option value="4">BLDG</option>
											<option value="5">TBAN</option>
											<option value="6">CHEM</option>
											<option value="7">TCAN</option>
											<option value="8">CIVE</option>
											<option value="9">CIVT</option>
											<option value="10">COMM</option>
											<option value="11">COMP</option>
											<option value="12">TCON</option>
											<option value="13">CONM</option>
											<option value="14">TCMC</option>
											<option value="15">DSGN</option>
											<option value="16">ECON</option>
											<option value="17">ELEC</option>
											<option value="18">TEIT</option>
											<option value="19">ENGR</option>
											<option value="20">ENGL</option>
											<option value="21">FMGT</option>
											<option value="22">TFMC</option>
											<option value="23">HIST</option>
											<option value="24">HUMN</option>
											<option value="25">HUSS</option>
											<option value="26">INDS</option>
											<option value="27">INTS</option>
											<option value="28">TJEC</option>
											<option value="29">LITR</option>
											<option value="30">MGMT</option>
											<option value="31">HUSS</option>
											<option value="32">MANF</option>
											<option value="33">MATH</option>
											<option value="34">MECH</option>
											<option value="35">TCAD</option>
											<option value="36">PHIL</option>
											<option value="37">POLS</option>
											<option value="38">TPMC</option>
											<option value="39">PHYS</option>
											<option value="40">SOCL</option>
											<option value="41">SURV</option>
										</select>
									<label for="course-label[]">Course #: </label>
									<input type='text' placeholder='Search...' id="course-search-box-thing" name="course[]"/>
									<button type="button" class="remove-field button button-box button-small"><i class="fa fa-minus"></i></button>
								</div>
							</div>
							<p><button type="button" class="add-field button button-box"><i class="fa fa-plus"></i></button></p>
							<p><input type="submit" name="Submit" class="button button-pill button-flat-primary"></p>
						</div>
						</form>
						
						<?php
							$subjects = array('', 'ARCH', 'BIOL', 'BMED', 'BLDG', 'TBAN', 'CHEM', 'TCAN', 'CIVE', 'CIVT', 'COMM', 'COMP', 'TCON', 'CONM', 'TCMC', 'DSGN', 'ECON', 'ELEC', 'TEIT', 'ENGR', 'ENGL', 'FMGT', 'TFMC', 'HIST', 'HUMN', 'HUSS', 'INDS', 'INTS', 'TJEC', 'LITR', 'MGMT', 'HUSS', 'MANF', 'MATH', 'MECH', 'TCAD', 'PHIL', 'POLS', 'TPMC', 'PHYS', 'SOCL', 'SURV');
							$reqlist="python /usr/share/httpd/schedulegenerator.py '[";
							$i = 0;
							$del='';
							if (isset($_POST['Submit'])) {
								foreach($_POST['subject'] as $key=>$subjectValue) {
									foreach($_POST['course'] as $courseNumber) {
										if ($key == $i) {
											$reqlist .= $del.'("'.$subjects[$subjectValue].'",'.$courseNumber.')';
										}
										$i++;
										$del=',';
									}
									$i = 0;
								}
								$reqlist.="]'";
								echo 'reqlist: '.$reqlist;
							}
							$command = escapeshellcmd($reqlist);
							//$output = eval(shell_exec($command." 2>&1"));
							$output = shell_exec($command." 2>&1");
							//$output = shell_exec('whoami');
							echo "</br>output: ".$output;
							
							foreach(eval("return ".$output.";") as $set) {
								foreach($set as $CRN) {
									echo "</br>CRN: ".$CRN;
								}
								echo "</br>";
							}
						?>
					</div>
				</div>
			</div>
		</section>
	</header>

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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
	<script type="text/javascript" src="js/buttons.js"></script>
	
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
</body>

</html>
