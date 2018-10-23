<?php 
include('session.php');
	$con=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("online_exam_db",$con);
	$query = "SELECT * FROM login WHERE username='$username'";
	$result = mysql_query($query);
	while ($row=mysql_fetch_array($result))
	{
		$usernme = $row["username"];
		$passwrd = $row["password"];
		$semestr = $row["semester"];
	}
	echo $usernme;
	echo $passwrd;
	echo $semestr;
	if ($username == '')
	{
		$errunavail = "Username Field is Blank!!!";
		$errunavailencode = base64_encode($errunavail);
		echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='login.php?erruserid=$errunavailencode' </SCRIPT>";	
	}
	else if ($password == '')
	{
		$errunavail = "Password Field is Blank!!!";
		$errunavailencode = base64_encode($errunavail);
		echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='login.php?erruserid=$errunavailencode' </SCRIPT>";	
	}
	else if ($username != $usernme)
	{
		$errunavail = "Invalid Username!!!";
		$errunavailencode = base64_encode($errunavail);
		echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='login.php?erruserid=$errunavailencode' </SCRIPT>";	
	}
	else if ($password != $passwrd)
	{
		$errunavail = "Invalid Password but valid Username!!!";
		$errunavailencode = base64_encode($errunavail);
		echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='login.php?erruserid=$errunavailencode' </SCRIPT>";	
	}
	else if ($username == $usernaame)
	{
		$errunavail = "Session already started!!!";
		$errunavailencode = base64_encode($errunavail);
		echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='login.php?erruserid=$errunavailencode' </SCRIPT>";	
	}
	else if ($semester != $semestr)
	{
		$errunavail = "Please Enter the Correct Semester!!!";
		$errunavailencode = base64_encode($errunavail);
		echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='login.php?erruserid=$errunavailencode' </SCRIPT>";	
	}
	else
	{
		$con1=mysql_connect("localhost","root","") or die(mysql_error("Could not Connect the database"));
		mysql_select_db("online_exam_db",$con1) or die(mysql_error("Could not Select the database"));
		$query3="INSERT INTO session(username, semester) values ('$username',  '$semester')";
		mysql_query($query3);
		echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='exam.php?username=$username&semester=$semester' </SCRIPT>";
	}
?>