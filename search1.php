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
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="search1.php">Search Courses</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Browse Professors</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
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
                <form method ="post" id="search-form">
                                    <p>Course CRN: <input type='text' placeholder='Search...' id="search-text-input" name="course_CRN" /></p>
                                    <p>Day: <input type='text' placeholder='Search...' id="search-text-input" name="day" /></p>
                                    <p>Start: <input type='text' placeholder='Search...' id="search-text-input" name="start" /></p>
                                    <p>End: <input type='text' placeholder='Search...' id="search-text-input" name="end" /></p>
                                    <p>Professor: <input type='text' placeholder='Search...' id="search-text-input" name="instructor" /></p>
                                    <p>Location: <input type='text' placeholder='Search...' id="search-text-input" name="location" /></p>
                                    <input type="submit" name="Submit" style="display: none">
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

                        $fields = array('course_CRN', 'day', 'start', 'end', 'instructor', 'location');
                        $course_CRN = $title = $day = $start = $end = $instructor = $location = false;
                        $sql = "SELECT course_CRN, day, start, end, instructor, location FROM class WHERE ";
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
                            
                            // sql statement generator based on text boxes filled in (still wip)
                            foreach($fields AS $fieldname) {
                                if ($$fieldname) {
                                    $wfieldname = $_POST[$fieldname];
                                    // if there is whitespace, replace with %
                                    if (preg_match('/\s/', $wfieldname)) {
                                        str_replace(" ", "%", $wfieldname);
                                    }
                                    $sql .= $fieldname." LIKE '%".$_POST[$fieldname]."%' AND ";
                                    
                                    //echo "sql generated: ".$sql."<br />";
                                }
                            }
                            
                            $sql = str_lreplace("AND", "", $sql); // remove trailing AND in sql statement
                            
                            /*
                            if (!(empty($_REQUEST['instructor']) && empty($_REQUEST['location']))) {
                                $sql = "SELECT course_CRN, day, start, end, instructor, location FROM class WHERE instructor LIKE '%".$_POST['instructor']."%' AND location LIKE '%".$_POST['location']."%'";
                            } else if (!empty($_REQUEST['instructor'])) {
                                $sql = "SELECT course_CRN, day, start, end, instructor, location FROM class WHERE instructor LIKE '%".$_POST['instructor']."%'";
                                //echo "sql generated: ".$sql."<br />";
                            } else {
                                $sql = "SELECT course_CRN, day, start, end, instructor, location FROM class";  
                            }
                            */
                            
                            //echo "sql generated: ".$sql."<br />";
                            //$sql = "SELECT course_CRN, day, start, end, instructor, location FROM class WHERE instructor LIKE '%Yuna%Kim%'";
                            echo "sql generated: ".$sql."<br />";
                            
                            
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                echo "<center><table class=\"bordered\">
                                    <tr>
                                        <th class='text-center'>Course CRN</th>
                                        <th class='text-center'>Day</th>
                                        <th class='text-center'>Start</th>
                                        <th class='text-center'>End</th>
                                        <th class='text-center'>Instructor</th>
                                        <th class='text-center'>Location</th>
                                    </tr>";
                                    
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                        <td class='text-center'>".$row["course_CRN"]."</td>
                                        <td class='text-center'>".$row["day"]."</td>
                                        <td class='text-center'>".$row["start"]."</td>
                                        <td class='text-center'>".$row["end"]."</td>
                                        <td class='text-center'>".$row["instructor"]."</td>
                                        <td class='text-center'>".$row["location"]."</td>
                                    </tr>";
                                }
                                    
                                echo "</table>";
                                } else {
                                    echo "0 results";
                                }
                        }           
                        $conn->close();
                    ?>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Want to search for courses?</h2>
                    <hr class="light">
                    <p class="text-faded"></p>
                    <a href="#" class="btn btn-default btn-xl">Search Courses</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                        <h3>Sturdy Templates</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2></h2>
                <a href="#" class="btn btn-default btn-xl wow tada"></a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h4 class="section-heading">Version 1.0</h4>
                    <hr class="primary">
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <h4 class="section-heading">Help</h4>
                </div>
                <div class="col-lg-4 text-center">
                    <h4 class="section-heading"><a href="https://github.com/mgolov/ClassScheduleCreator-CSC-/issues">Report Issues</a></h4>
                </div>
            </div>
        </div>
    </section>

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

</body>

</html>
