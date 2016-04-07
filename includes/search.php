<?PHP
$fields = array('course_CRN', 'subject', 'course', 'section', 'credits', 'title', 'day', 'instructor', 'location');
$course_CRN = $subject = $title = $day = $start = $end = $instructor = $location = false;
$sql = "SELECT a.course_CRN, b.subject, b.course, b.section, b.credits, b.title, a.day, DATE_FORMAT(a.start,'%l:%i%p') as start_format, DATE_FORMAT(a.end,'%l:%i%p') as end_format, a.instructor, a.location FROM class a, course b WHERE a.course_CRN = b.CRN AND ";
$wfieldname = "";

$_POST['season'] = str_replace ('&nbsp;', '', $_POST ['season']);


if (trim ($_POST['season']) == "spring_2016") {
	$conn->select_db('spring_2016');
} else if (trim ($_POST['season']) == "fall_2016") {
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

if ($_POST['start'] && $_POST['end']) {
	$sql .= "AND `start` BETWEEN '".$_POST['start'].":00' AND '".$_POST['end'].":00'  ";
} elseif ($_POST['start']) {
	$sql .= "AND `start` > '".$start.":00'";
} elseif ($_POST['end']) {
	$sql .= "AND `end` > '".$end.":00'";
}
//	echo $sql.'<br>';
	$result = $conn->query($sql);
if ($result->num_rows > 0) {
	print ('<section id="schedule-section">
	<h4 class="section-heading">Search Result For '.ucwords (str_replace ("_", " ", $_POST['season'])).'</h2>
	<a id="open-search-button" class="btn btn-default btn-xl">Search Again</a>
	<div class="component"><table class="overflow-y" id="course-search">
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
		</thead>');
		
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
				<td>".$row["start_format"]."</td>
				<td>".$row["end_format"]."</td>
				<td>".$row["instructor"]."</td>
				<td>".$row["location"]."</td>
			</tr>";
	}
	echo "</tbody></table></div></section>";
	include ('includes/search-form.html');
} else {
	print ('<div class="system-message">
<h2>No Results Found</h2>
<i class="fa fa-warning fa-2"></i><p>There were no classes found in the database based on your search criteria.  Search again below</p>
</div>'); 
	include('includes/search-form-static.html');
}
$conn->close();


// replace last occurence of $search string (for sql statement remove last AND)
function str_lreplace($search, $replace, $subject) {
	$pos = strrpos($subject, $search);

	if($pos !== false) {
		$subject = substr_replace($subject, $replace, $pos, strlen($search));
	}
	return $subject;
}

?>