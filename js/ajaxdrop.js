$(document).ready(function(){
$('#semester-sch').on('change',function(){
	var semesterID = $(this).val();
	if(semesterID){
		$.ajax({
			type:'POST',
			url:'includes/ajaxData.php',
			data:'semester_id='+semesterID,
			success:function(html){
				$('#subject-sch').html(html);
				$('#subject2').html(html);
				$('#subject3').html(html);
				$('#subject4').html(html);
				$('#subject5').html(html);
				$('#course-sch').html('<option value="">----------</option>'); 
				$('#course2').html('<option value="">----------</option>'); 
				$('#course3').html('<option value="">----------</option>'); 
				$('#course4').html('<option value="">----------</option>'); 
				$('#course5').html('<option value="">----------</option>'); 
			}
		}); 
	}else{
		$('#subject-sch').html('<option value="">----------</option>');
		$('#course-sch').html('<option value="">-----------</option>');
		$('#subject2').html('<option value="">----------</option>');
		$('#course2').html('<option value="">----------</option>');
		$('#subject3').html('<option value="">----------</option>');
		$('#course3').html('<option value="">----------</option>');
		$('#subject4').html('<option value="">----------</option>');
		$('#course4').html('<option value="">----------</option>');
		$('#subject5').html('<option value="">----------</option>');
		$('#course5').html('<option value="">----------</option>');
	}
});
$('#subject-sch').on('change',function(){
	var subjectID = $(this).val();
	var semesterField = document.getElementById('semester-sch');
	var semesterID = semesterField.value;
	if(subjectID){
		$.ajax({
			type:'POST',
			url:'includes/ajaxData.php',
			data:'subject_id='+subjectID+'&semester_id='+semesterID,
			success:function(html){
				$('#course-sch').html(html);
			}
		}); 
	}else{
		$('#course-sch').html('<option value="">------</option>'); 
	}
});
$('#subject2').on('change',function(){
	var subjectID = $(this).val();
	var semesterField = document.getElementById('semester-sch');
	var semesterID = semesterField.value;
	if(subjectID){
		$.ajax({
			type:'POST',
			url:'includes/ajaxData.php',
			data:'subject_id='+subjectID+'&semester_id='+semesterID,
			success:function(html){
				$('#course2').html(html);
			}
		}); 
	}else{
		$('#course2').html('<option value="">------</option>'); 
	}
});
$('#subject3').on('change',function(){
	var subjectID = $(this).val();
	var semesterField = document.getElementById('semester-sch');
	var semesterID = semesterField.value;
	if(subjectID){
		$.ajax({
			type:'POST',
			url:'includes/ajaxData.php',
			data:'subject_id='+subjectID+'&semester_id='+semesterID,
			success:function(html){
				$('#course3').html(html);
			}
		}); 
	}else{
		$('#course3').html('<option value="">------</option>'); 
	}
});
$('#subject4').on('change',function(){
	var subjectID = $(this).val();
	var semesterField = document.getElementById('semester-sch');
	var semesterID = semesterField.value;
	if(subjectID){
		$.ajax({
			type:'POST',
			url:'includes/ajaxData.php',
			data:'subject_id='+subjectID+'&semester_id='+semesterID,
			success:function(html){
				$('#course4').html(html);
			}
		}); 
	}else{
		$('#course4').html('<option value="">------</option>'); 
	}
});
$('#subject5').on('change',function(){
	var subjectID = $(this).val();
	var semesterField = document.getElementById('semester-sch');
	var semesterID = semesterField.value;
	if(subjectID){
		$.ajax({
			type:'POST',
			url:'includes/ajaxData.php',
			data:'subject_id='+subjectID+'&semester_id='+semesterID,
			success:function(html){
				$('#course5').html(html);
			}
		}); 
	}else{
		$('#course5').html('<option value="">------</option>'); 
	}
});
});