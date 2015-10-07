<?php

	include 'include/db.php';

	$action = $_POST['action'];

	if($action == 'add_class')
	{
		$className = $_POST['className'];
		$classSection = $_POST['classSection'];
		$subjectName = $_POST['subjectName'];
		$teacherMode = $_POST['teacherMode'];
		$username = $_POST['username'];

		$classNS = $className." ".$classSection;

		$sql = "SELECT teacherId, orgId FROM teacher WHERE username='$username'";
		$result = mysql_query($sql);
		if($test = mysql_fetch_array($result))
		{
			$teacherId = $test['teacherId'];
			$orgId = $test['orgId'];
		}

		$sql = "INSERT INTO class (name,subject,teacherId,orgId,mode) VALUES('$classNS','$subjectName','$teacherId','$orgId','$teacherMode')";
		if (mysql_query($sql)) {
			echo "Successfully added";
		}
		else
		{
			echo "error";
		}	
	}
	else
	{
		echo "error";
	}

	
?>