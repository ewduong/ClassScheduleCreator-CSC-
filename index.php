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
                 <a class="navbar-brand page-scroll" href="#page-top">ScheduleIt</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#courses">Search Courses</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="schedule.html">Create Schedule</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About Us</a>
                    </li>
                    <li>
                        <!--<a class="page-scroll" href="#contact">Contact</a>-->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>ScheduleIt</h1>
                <hr>
                <p>A web application to make the process of course registration for students of Wentworth Institute of Technology easier, quicker, and more efficient. We do the work for you, so you don't have to!</p>
            </div>
        </div>
    </header>

 <section id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Search for Courses</h2>
                    <hr class="primary">
                    <form method ="post" id="search-form">
                                    <p><label for="course-crn">Course CRN: </label><input type='text' placeholder='Search...' id="search-text-input" name="course_CRN" /></p>
									<p><label for="subject">Subject: </label><select name="subject">
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
                                    //echo 'Field '.$fieldname.' empty!';
                                    $$fieldname = false;
                                    //echo $$fieldname ? ' true <br />' : ' false <br />';
                                } else {
                                    $$fieldname = true;
                                    //echo $fieldname.' ';
                                    //echo $$fieldname ? ' true <br />' : ' false <br />';
                                }
                            }
                            
                            // sql statement generator based on text boxes and checkboxes filled in
                            foreach($fields AS $fieldname) {
                                if ($$fieldname) {
                                    $wfieldname = $_POST[$fieldname];
                                    // if there is whitespace, replace with %
                                    if (preg_match('/\s/', $wfieldname)) {
                                        str_replace(" ", "%", $wfieldname);
                                    }
									//echo $$fieldname."<br />";
									
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
										$sql .= $fieldname." LIKE '%".$_POST[$fieldname]."%' AND ";
									}
									
                                }
                            }
                            
                            $sql = str_lreplace("AND", "", $sql); // remove trailing AND in sql statement
                            
                            //echo "sql generated: ".$sql."<br />";
                            
                            
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
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
                                    
                                // output data of each row
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
                                echo "</tbody></table></div>";
                                } else {
                                    echo "<br/>Nothing from the database matched your keywords! Sorry =/";
                                }
                        }           
                        $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Want to create your own Schedule?</h2>
                    <hr class="light">
                    <p class="text-faded"></p>
                    <a href="schedule.html" class="btn btn-default btn-xl">Click Here!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
             <div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">At Your Service<span>.</span></h2>
					<hr class="primary">
					<p class="text-muted">This is a web application to make the process of course registration for students of Wentworth Institute of Technology easier, quicker, and more efficient. The web application will allow students to filter out specific details that are desired by the student, such as not having early classes. It will create a working schedule for the next or current semester without any registration confliction. The web application will allow the student to visually create a class schedule without the need to: manually find the classes through a multi-page process, manually record CRNs for adding classes in bulk, and finally attempt to add the desired classes to the students own schedule. With the web application, the student will be able to automate the manual process just described, and achieve
					the most optimal schedule with the least amount of complications.</p>
					</div>
				</div>
			</div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <a href="#" class="btn btn-default btn-xl wow tada">Top</a>
            </div>
        </div>
    </aside>

	<!--
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h4 class="section-heading">Version 1.0</h4>
                    <hr class="primary">
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h4><a href="https://github.com/mgolov/ScheduleIt/blob/master/README.md">Help</a></h4>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h4><a href="https://github.com/mgolov/ScheduleIt/issues">Report Issues</a></h4>
                </div>
            </div>
        </div>
    </section>
	-->

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

</body>

</html>
