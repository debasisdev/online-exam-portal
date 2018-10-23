<?php
	$con=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("online_exam_db",$con);
	$query = "SELECT * FROM session WHERE username='$username'";
	$result = mysql_query($query,$con);
	while($row=mysql_fetch_array($result))
	{
		$usernme = $row["username"];
		$semestr = $row["semester"];
	}	
	$query2 = "DELETE FROM session WHERE username='$username'";
	$result2 = mysql_query($query2)or die(mysql_error());
	$message = "You have successfully logged out!!";
	$messageencode = base64_encode($message);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='login.php?erruserid=$messageencode' </SCRIPT>";		
?>
	
