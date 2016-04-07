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
<style>
.team-member {
	text-align:center;
}
.team-member h3 {
	margin: 2px;
}
.team-member img {
	margin: 10px auto 2px;
	display: block;
	max-width:200px;
	max-height:250px;
	width: auto;
	height: auto;
}
.member-name {
	color:#fff;
}
.title {
	font-size:16px;
	line-height:26px;
}
.member-social .fa-facebook {
	background-color:#3b5998;
	color:#FFF;
	padding:4px 12px;
	font-size:30px;
}
.member-social .fa-linkedin {
	background-color:#007bb5;
	font-size:30px;
	color:#fff;
	padding:4px 8px;
}
.member-social .fa-facebook:hover,.member-social .fa-linkedin:hover {
	color: #FFC;
}
</style>

</head>

<body id="page-top">
<?php include('includes/nav.html');?>

<header>
<h2 style="font-size:230%">Meet Our Talented Team</h2>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 team-member">
        <img src="img/team/team-img-03.jpg" alt=""/>
            <div class"member-name">
               <h3>Lucas Grey</h3>
               <span class="title">Computer Science</span>
            </div>
            <div class="member-social">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="col-sm-4 team-member">
        <img src="img/team/team-img-03.jpg" alt=""/>
            <div class"member-name">
               <h3>Bhaju Khanal</h3>
               <span class="title">Computer Networking</span>
            </div>
            <div class="member-social">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="col-sm-4 team-member">
        <img src="img/team/team-img-03.jpg" alt=""/>
            <div class"member-name">
               <h3>Michael Golov</h3>
               <span class="title">Computer Engineering</span>
            </div>
            <div class="member-social">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!--Row with two equal columns-->
    <div class="row">
        <div class="col-sm-4 col-md-offset-2 team-member">
        <img src="img/team/team-img-03.jpg" alt=""/>        
            <div class="member-name">
               <h3>Jatinder Singh</h3>
               <span class="title">Computer Science</span>
            </div>
            <div class="member-social">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="col-sm-4 team-member">
        <!--Column right-->
        <img src="img/team/team-img-03.jpg" alt=""/>
            <div class="member-name">
               <h3>Eric Duong</h3>
               <span class="title">Computer Science</span>
            </div>
            <div class="member-social">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
     </div>
</div>
<div class="container">
	<div class="row">
        	<div class="col-sm-4 col-sm-offset-4 back-screen-sm padding-bottom">
             <h3 style="text-align:center;">Email and Social</h3>
             <p style="padding-left:20px;">
                     E-mail: <a href='#'>scheduleit.com</a><br>
                     Twitter: <a href="#">@scheduleit</a><br>
                     Facebook: <a href="#">Scheduleit FB page</a><br>
             </p>
            </div>
   </div>
</div>
</header>
<?php include('includes/footer.html');?>
<?php include('includes/search-form.html');?>

</body>
</html>