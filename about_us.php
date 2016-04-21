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
<?php include ('includes/js.html'); ?>

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
	border:#000 1px outset;
}
.member-name {
	color:#fff;
	text-shadow:#333 3px 2px;
}
.title {
	font-size:16px;
	line-height:26px;
	text-shadow:#333 2px 2px;
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
h3 {
	font-size:28px;
	text-shadow:#333 2px 2px;
}
</style>

</head>

<body id="page-top">
<?php include('includes/nav.html');?>

<header>
<h3>Meet Our Talented Team</h3>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 team-member">
<img src="img/lucas_grey.jpg" width="200" height="200" alt="Lucas Grey">
            <div class"member-name">
               <h3>Lucas Grey</h3>
               <span class="title">Computer Science</span>
            </div>
            <div class="member-social">
<!--               <a href="#"><i class="fa fa-facebook"></i></a>-->
               <a href="https://www.linkedin.com/in/luke-grey-23a83596"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="col-sm-4 team-member">
<img src="img/bhaju_khanal.jpg" width="200" height="200" alt="Bhaju Khanal">
            <div class"member-name">
               <h3>Bhaju Khanal</h3>
               <span class="title">Computer Networking</span>
            </div>
            <div class="member-social">
<!--               <a href="#"><i class="fa fa-facebook"></i></a>-->
               <a href="https://www.linkedin.com/in/bhaju-khanal-26529470"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="col-sm-4 team-member">
<img src="img/michael_golov.jpg" width="200" height="200" alt="Michael Golov">
            <div class"member-name">
               <h3>Michael Golov</h3>
               <span class="title">Computer Engineering</span>
            </div>
            <div class="member-social">
<!--               <a href="#"><i class="fa fa-facebook"></i></a>-->
               <a href="https://www.linkedin.com/in/michael-golov-84bb4284"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!--Row with two equal columns-->
    <div class="row">
        <div class="col-sm-4 col-md-offset-2 team-member">
 <img src="img/jatinder_singh.jpg" width="200" height="200" alt="Jatinder Singh">
            <div class="member-name">
               <h3>Jatinder Singh</h3>
               <span class="title">Computer Science</span>
            </div>
            <div class="member-social">
<!--               <a href="#"><i class="fa fa-facebook"></i></a>-->
               <a href="https://www.linkedin.com/in/jatinder-singh-1b9844a3"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="col-sm-4 team-member">
        <!--Column right-->

            <div class="member-name"><img src="img/eric_duong.jpg" width="200" height="200" alt="Eric Duong">
               <h3>Eric Duong</h3>
               <span class="title">Computer Science</span>
            </div>
            <div class="member-social">
<!--               <a href="#"><i class="fa fa-facebook"></i></a>-->
               <a href="https://www.linkedin.com/in/eric-duong-61109391" target="new"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
     </div>
</div>
<div class="container">
	<div class="row">
        	<div class="col-sm-4 col-sm-offset-4 back-screen-sm padding-bottom">
             <h3 style="text-align:center;text-shadow:#333 3px 2px; margin:6px auto;">Follow Us!</h3>
             <p style="padding-left:20px;font-size:18px;margin-bottom:10px;">
                     Twitter: <a href="https://twitter.com/WITScheduleIt">@scheduleit</a><br>
                     Facebook: <a href="https://www.facebook.com/witscheduleit/">Scheduleit FB page</a><br>
                     
             </p>
            </div>
   </div>
</div>
</header>
<?php include('includes/footer.html');?>
<?php include('includes/search-form.html');?>

</body>
</html>