<?PHP
	$season_array = array (
							'Spring 2016'=>'spring_2016',
							'Summer 2016'=>'summer_2016',
//							'Test 2016'=>'test_2016',
							'Fall 2016'=>'fall_2016'
							);
//	$selected = $_POST['season'] ? $_POST ['season'] : 'summer_2016';

	foreach ($season_array as $display => $value)
	{
		print ( '<option value="'.$value.'"');
//		if ($selected == $value) print (' SELECTED ');
		print ('>'.$display.'</option>');
    }
?>