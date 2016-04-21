<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ScheduleIt</title>

<?php include ('includes/js.html'); ?>
</head>

<body id="page-top">
<?PHP include ('includes/nav.html'); ?>
<header>
<?php

if ($_POST && $_POST ['season'] == '')
{
	print ('	<div class="system-message">	
	<h2>No Semester Selected</h2>	
	<p>You have to at least select a semester to search from </p>	</div>');
	include('includes/search-form-static.html');
}
else
{
//	print ('	<div class="system-message">	<h2>There Was An Error</h2>	<p>You reached this page in error.   were no classes found in the database using your search criteria.  Search again below</p>	</div>');
	include('includes/search-form-static.html');
}

/*echo '<pre>';
print_r ($_POST);
echo '</pre>';*/

?>
</header>

<?PHP include ('includes/footer.html'); ?>
	<script src="js/jquery.stickyheader.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>

</body>
</html>