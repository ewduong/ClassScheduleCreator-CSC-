<!DOCTYPE html>
<html lang="en">

<head>

    <script type="text/javascript" src="simpleCart.js"></script>
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
                        <a class="page-scroll" href="contact.html">Contact Us</a>
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

    <section class="bg-primary" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Want to create your own Schedule?</h2>
                    <hr class="light">
                    <p class="text-faded"></p>
                    <a href="schedule.php" class="btn btn-default btn-xl">Click Here!</a>
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
</body>

</html>
