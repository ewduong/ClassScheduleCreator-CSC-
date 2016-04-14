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
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/web-fonts.css" type="text/css">

<!-- Plugin CSS -->
<link rel="stylesheet" href="css/animate.min.css" type="text/css">

<!-- Custom CSS -->
<link rel="stylesheet" href="css/creative.css" type="text/css">
<link rel="stylesheet" href="css/custom.dropdown.css" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body id="page-top">
<?php include('includes/nav.html');?>
<header>
    <div class="row">
        <div class="header-content-inner">
            <h1><img src="img/logo_120.png" alt= "ScheduleIt">SCHEDULE<span style="opacity: 0.8; font-size:90%">IT</span></h1>
            <p>
            A web application to make the process of course registration for students of Wentworth Institute of Technology quicker, easier, and more efficient. We do the work for you, so you don't have to!</p>
            <hr class="light">
            <div class="text-center">
                <h2 class="section-heading">Want to create your own Schedule?</h2>
                <a href="schedule.php" class="btn btn-default btn-xl">Click Here!</a>
<!--                <a id="open-search-button" class="btn btn-default btn-xl">Find Out More</a>-->
            </div>
        </div>
    </div>
    <div style="padding:20px;width:80%;margin:10px auto;">
        <div class="row back-screen">
            <div class="col-lg-12">
                <h2>At Your Service</h2>
                <hr class="light">
                <p style="text-align:justify;">ScheduleIt is a web application to make the process of course registration for students of Wentworth Institute of Technology easier, quicker, and more efficient. It will create a working schedule for the next or current semester without any registration confliction. The web application will allow the student to visually create a class schedule without the need to: manually find the classes through a multi-page process, manually record CRNs for adding classes in bulk, and finally attempt to add the desired classes to the students own schedule. With ScheduleIt, the student will be able to automate the manual process just described, and achieve the most optimal schedule with the least amount of complications.</p>
            </div>
        </div>
    </div>
</header>
<br clear="all" style="height:1px;">
<?php  include('includes/footer.html');?>
<?php include('includes/search-form.html');?>
	
</body>
</html>