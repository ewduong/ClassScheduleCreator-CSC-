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

	<header id="searchHeader">
		<section id="courses">
			<div id="search-section">
				<h2 class="section-heading">Search for Courses</h2>
				<hr class="primary">
				<form method="post" id="ui_element" class="sb_wrapper">
					<p>
						<select id="season-dropdown" name="season">
							<option>Spring 2016</option>
							<option>Fall 2016</option>
						</select>
					</p>
					
					<div class="search-block">
							<span class="sb_down"></span>
							<input class="sb_input" type="text" disabled/>
							<input class="sb_search" type="submit" name="Submit" value=""/>
					</div>
					<p></p>
					<div class="search-block">
						<ul class="sb_dropdown">
							<li class="sb_filter">Filter your search</li>
							<li><input type="checkbox" id="course-crn-checkbox"/><label class="search-label" for="course-crn"><strong>Course CRN</strong></label></li>
							<input type="text" id="course-crn-textbox" class="search-textbox" name="course_CRN" />
							<div id="subject-div">
							<li><input type="checkbox" id="subject-checkbox"/><label class="search-label" for="subject">Subject</label></li>
							<select id="subject-textbox" class="search-textbox" name="subject">
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
							</div>
							<li><input type="checkbox" id="title-checkbox"/><label class="search-label" for="title">Title</label></li>
							<input type="text" id="title-textbox" class="search-textbox" name="title" />
							<li><input type="checkbox" id="day-checkbox"/><label class="search-label" for="day">Day</label></li>
							<div id="dayBox" class="search-textbox">
								<table id="dayTable">
									<tr>
										<td><input type="checkbox" name="day[]" value="M"><label id="dayColor" for="day">Monday</label></td>
										<td><input type="checkbox" name="day[]" value="T"><label id="dayColor" for="day">Tuesday</label></td>
										<td><input type="checkbox" name="day[]" value="W"><label id="dayColor" for="day">Wednesday</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="day[]" value="R"><label id="dayColor" for="day">Thursday</label></td>
										<td><input type="checkbox" name="day[]" value="F"><label id="dayColor" for="day">Friday</label></td>
										<td><input type="checkbox" name ="day[]" value="S"><label id="dayColor" for="day">Saturday</label></td>
									</tr>
								</table>
							</div>
							<li><input type="checkbox" id="start-checkbox"/><label class="search-label" for="start">Start Time</label></li>
							<input class="search-textbox" id="start-textbox" type="time" name="start">
							<li><input type="checkbox" id="end-checkbox"/><label class="search-label" for="end">End Time</label></li>
							<input class="search-textbox" id="end-textbox" type="time" name="end">
							<li><input type="checkbox" id="instructor-checkbox"/><label class="search-label" for="instructor">Professor</label></li>
							<input type="text" id="instructor-textbox" class="search-textbox" name="instructor" />
							<li><input type="checkbox" id="location-checkbox"/><label class="search-label" for="location">Location</label></li>
							<input type="text" id="location-textbox" class="search-textbox" name="location" />
						</ul>
					</div>
				</form>	
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

		$fields = array('course_CRN', 'subject', 'course', 'section', 'credits', 'title', 'day', 'start', 'end', 'instructor', 'location');
		$course_CRN = $subject = $title = $day = $start = $end = $instructor = $location = false;
		$sql = "SELECT a.course_CRN, b.subject, b.course, b.section, b.credits, b.title, a.day, a.start, a.end, a.instructor, a.location FROM class a, course b WHERE a.course_CRN = b.CRN AND ";
		$wfieldname = "";

		if (isset($_POST['Submit'])) {
			
			if ($_POST['season'] == "Spring 2016") {
				$conn->select_db('spring_2016');
			} else if ($_POST['season'] == "Fall 2016") {
				$conn->select_db('fall_2016');
			}	
		
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
				echo "<section id=\"schedule-section\">";
				echo "<h2 class=\"section-heading\">".$_POST['season']."</h2>";
				echo "<div class=\"component\"><table class=\"overflow-y\" id=\"course-search\">
					<thead>
						<tr>
							<th>Course CRN</th>
							<th>Subject</th>
							<th>Course #</th>
							<th>Section</th>
							<th>Credits</th>
							<th>Title</th>
							<th>Day</th>
							<th>Start</th>
							<th>End</th>
							<th>Instructor</th>
							<th>Location</th>
						</tr>
					</thead>";
					
				// output data of each row onto table
				echo "<tbody>";
				while($row = $result->fetch_assoc()) {
					echo "<tr>
							<td>".$row["course_CRN"]."</td>
							<td>".$row["subject"]."</td>
							<td>".$row["course"]."</td>
							<td>".$row["section"]."</td>
							<td>".$row["credits"]."</td>
							<td>".$row["title"]."</td>
							<td>".$row["day"]."</td>
							<td>".$row["start"]."</td>
							<td>".$row["end"]."</td>
							<td>".$row["instructor"]."</td>
							<td>".$row["location"]."</td>
						</tr>";
				}
				echo "</tbody></table></div></section>";
			} else {
				echo "<br/><center><font color=\"red\">Nothing from the database matched your keywords! Sorry =/</font></center><br/>";
			}
		}															
	$conn->close();
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
	<script src="js/jquery.stickyheader.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
</body>
</html>
