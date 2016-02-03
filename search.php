<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>ScheduleCreator</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" > 

</head>

<body>

   <!-- Header
   ================================================== -->
   <header>

      <div class="row">

         <div class="twelve columns">

            <div class="logo">
               <a href="index.html"><img alt="" src="images/logo2.png"></a>
            </div>

            <nav id="nav-wrap">

               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

               <ul id="nav" class="nav">

	               <li><a href="index.html">Home</a></li>
	               <li class="current"><a href="search.php">Search Courses</a>
	               <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="styles.html">Features</a></li>

               </ul> <!-- end #nav -->

            </nav> <!-- end #nav-wrap -->

         </div>

      </div>

   </header> <!-- Header End -->

   <!-- Intro Section
   ================================================== -->
   <section id="intro">

      <!-- Flexslider Start-->
	   <div>

		   <ul class="slides">

			   <!-- Slide -->
			   <li>
				   <div class="row">
					   <div class="twelve columns">
						   <div class="slider-text">
							   <h1>ScheduleCreator<span>.</span></h1>
							   <p>
							   <div class="box">
								  <div class="container-1">
									  <span class="icon"><i class="fa fa-search"></i></span>
									  <form method ="post" id="searchform">
										<input type="search" id ="search" name="searchvalue" placeholder="Search...">
										<input type="submit" name="Submit" style="display: none">
									  </form>
								  </div>
								</div>
							   </p>
						   </div>
                     <div class="slider-image">

                     </div>
					   </div>
				   </div>
			   </li>
			   <div class="row align-center text-center centered">
					<?php
						include('includes/dbconnect.php');

						if (isset($_POST['Submit'])) {
							if (!empty($_REQUEST['searchvalue'])) {
								$sql = "SELECT * FROM class WHERE Instructor LIKE '%".$_POST['searchvalue']."%'"; 
								$result = $conn->query($sql);
												
								if ($result->num_rows > 0) {
									echo "<center><table class=\"bordered\">
									<tr><th>ID</th>
									<th>Course CRN</th>
									<th>Day</th>
									<th>Start</th>
									<th>End</th>
									<th>Instructor</th>
									<th>Location</th></tr>";
									
									// output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<tr><td>".$row["id"]."</td>
										<td>".$row["course_CRN"]."</td>
										<td>".$row["day"]."</td>
										<td>".$row["start"]."</td>
										<td>".$row["end"]."</td>
										<td>".$row["instructor"]."</td>
										<td>".$row["location"]."</td></tr>";
									}
									
									echo "</table>";
									} else {
										echo "0 results";
									}
							} else {
								$sql = "SELECT id, instructor, location FROM class"; 
								$result = $conn->query($sql);
												
								if ($result->num_rows > 0) {
									echo "<table class=\"bordered\"><tr><th>ID</th><th>Instructor</th><th>Location</th></tr>";
									// output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<tr><td>".$row["id"]."</td><td>".$row["instructor"]."</td><td>".$row["location"]."</td></tr>";
									}
									
									echo "</table></center>";
									} else {
										echo "0 results";
									}
							}
						}
						
						$conn->close();
					?>
			   </div>

		
	   </div> <!-- Flexslider End-->

 

  
	
    <!--  <div class="row">
         <div class="twelve columns align-center">
            <h1>Our latest posts and rants.</h1>
         </div>
      </div>
	?>
    -->

   <!-- Tweets Section
   ================================================== -->
   <!-- <section id="tweets">

      <div class="row">

       

      </div>

   </section> <!-- Tweet Section End-->

   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="footer-nav">
					<li><a href="index.html">Home.</a></li>
              	<li><a href="search.html">Search Courses</a></li>
              	<li><a href="#">About</a></li>
              	<li><a href="#">Contact</a></li>
               <li><a href="#">Features.</a></li>
			   </ul>

            <ul class="footer-social">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
               <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>Copyright &copy; 2016 CSC</li>
              
            </ul>

         </div>

         <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/doubletaptogo.js"></script>
   <script src="js/init.js"></script>

</body>

</html>