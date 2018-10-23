<?php
// Before Username Validation, we will make a copy of the database so that 
	$con=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("online_exam_db",$con);
	$query = "SELECT * FROM loginform WHERE username='$username'";
	$result = mysql_query($query);
	while ($row=mysql_fetch_array($result))
	{
		$userid=$row["username"];
		echo $userid;
	}
//hmm... lets create the username validation now!
//echo $username;
if ($username == '')
{
	$errunavail = "Username Field is Blank!!!";
	$errunavailencode = base64_encode($errunavail);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?erruserid=$errunavailencode' </SCRIPT>";	
}
else if($username == $userid)
{
	$errunavail = "Id is Unavailable!";
	$errunavailencode = base64_encode($errunavail);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?erruserid=$errunavailencode' </SCRIPT>";
}
else
{
	$username_valid = "yes";
	echo $username_valid;
}
// Atlast! end of Username validation!!!

//e-mail validation process coding here !!!
if ($emailid == '')
{
	$erremailid = "e-mail Address Field is Blank!!!";
	$erremailidencode = base64_encode($erremailid);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?erremailid=$erremailidencode' </SCRIPT>";	
}
else if (!preg_match("/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)*\.([a-zA-Z]{2,6})$/", $emailid))
{
	$erremailid = "e-mail Address is Incorrect!!!";
	$erremailidencode = base64_encode($erremailid);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?erremailid=$erremailidencode' </SCRIPT>";	
}
else
{
	$emailaddress_valid = "yes";
	echo $emailaddress_valid;
}
// end of email validation!!!


//Name validation process coding here !!!
if ($fullname == '')
{
	$errname = "Name Field is Blank!!!";
	$errnameencode = base64_encode($errname);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?errname=$errnameencode' </SCRIPT>";
}
else if (!preg_match("#^[-A-Za-z' ]*$#",$fullname))
{
	$errname = "Name Field is not filled with characters!!!";
	$errnameencode = base64_encode($errname);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?errname=$errnameencode' </SCRIPT>";
}
else
{
	$fullname_valid = "yes";
	echo $fullname_valid;
}
// end of Name validation!!!

//Password Field Validation
if($password == '')
{
	$errpassword = "Password Field is Blank!!!";
	$errpasswordencode = base64_encode($errpassword);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?errpassword=$errpasswordencode' </SCRIPT>";	
}
else
{
	$password_valid = "yes";
	echo $password_valid;
}
//end of Password Field Validation

//Retype Password Field Validation
if($retypepass == '')
{
	$errretypepassword = "Retype Password Field is Blank!!!";
	$errretypepasswordencode = base64_encode($errretypepassword);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?errretypepassword=$errretypepasswordencode' </SCRIPT>";
}
else if(strlen($password) != strlen($retypepass))
{
	$errretypepassword = "Passwords doesnt match!!!";
	$errretypepasswordencode = base64_encode($errretypepassword);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?errretypepassword=$errretypepasswordencode' </SCRIPT>";
}
else
{
	$retypepassword_valid = "yes";
	echo $retypepassword_valid;
}
// Uff... Here ends Retype Password Validation

//College/University validation process coding here !!!
if ($unicol == '')
{
	$errunicol = "University/College Field is Blank!!!";
	$errunicolencode = base64_encode($errunicol);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?errunicol=$errunicolencode' </SCRIPT>";
}
else if (!preg_match("#^[-A-Za-z' ]*$#",$unicol))
{
	$errunicol = "University/College Field is not filled with characters!!!";
	$errunicolencode = base64_encode($errunicol);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?errunicol=$errunicolencode' </SCRIPT>";
}
else
{
	$unicol_valid = "yes";
	echo $unicol_valid;
}
//age validation starts here!!!
if ($age == '')
{
	$errage = "Age Field is Blank!!!";
	$errageencode = base64_encode($errage);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?errage=$errageencode' </SCRIPT>";
}
else if ($age < 17 or $age > 30)
{
	$errage = "Please enter the Correct Age!!!";
	$errageencode = base64_encode($errage);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?errage=$errageencode' </SCRIPT>";
}
//Problem here :(
/*$check_age = is_Integer($age);
else if (!$check_age)
{
	$errage = "We think AGE field requires a Integer!!!";
	$errageencode = base64_encode($errage);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> history.go('register.php?errage=$errageencode'); </SCRIPT>";
}*/
else
{
	$age_valid = "yes";
	echo "age".$age_valid;
}
// end of Age validation!!!

//City validation process coding here !!!
if ($city == '')
{
	$errcity = "City Field is Blank!!!";
	$errcityencode = base64_encode($errcity);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?errcity=$errcityencode' </SCRIPT>";
}
else if (!preg_match("#^[-A-Za-z' ]*$#",$city))
{
	$errcity = "City doesnt contains characters!!!";
	$errcityencode = base64_encode($errcity);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?errcity=$errcityencode' </SCRIPT>";
}
else
{
	$city_valid = "yes";
	echo $city_valid;
}
// end of City validation!!!
//College validation process coding here !!!
if ($country == '')
{
	$errcountry = "Country Field is Blank!!!";
	$errcountryencode = base64_encode($errcountry);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?errcountry=$errcountryencode' </SCRIPT>";
}
else if (!preg_match("#^[-A-Za-z' ]*$#",$country))
{
	$errcountry = "Country doesnt contains characters!!!";
	$errcountryencode = base64_encode($errcountry);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='register.php?errcountry=$errcountryencode' </SCRIPT>";
}
else
{
	$country_valid = "yes";
	echo $country_valid;
}
// end of Country validation!!!
if($username_valid and $emailaddress_valid and $fullname_valid and $password_valid and $retypepassword_valid and $unicol_valid and $age_valid and $city_valid and $country_valid=="yes")
{
	$con1=mysql_connect("localhost","root","") or die(mysql_error("Could not Connect the database"));
	mysql_select_db("online_exam_db",$con1) or die(mysql_error("Could not Select the database"));
	$rs1=mysql_query("select * from loginform",$con1) or die(mysql_error("Could not Select the tables"));
	$query1="INSERT INTO loginform(username, name, password, retypepassword, emailaddress, unicol, gender, age, sem, city, country)";
	$query1.="values('$username', '$fullname', '$password', '$retypepass', '$emailid', '$unicol', '$gender', '$age', '$sem', '$city', '$country')"; 
	mysql_query($query1);
	$query2="INSERT INTO login(username, password, semester) values ('$username', '$password', '$sem')";
	echo "Insertion Successful!";
	mysql_query($query2);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='registersucess.php?name=$fullname' </SCRIPT>";
}
?>
<HTML><HEAD><STYLE TYPE="text/css">
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
</STYLE><BODY>
<TABLE width="612" align="center">
<TR>
	<TD width="564"><span class="style1">Whether Username is Valid</span></TD>
	<TD width="27"><?php echo $username_valid; ?></TD>
</TR>
<TR>
	<TD><span class="style1">Whether Fullname is Valid</span></TD>
	<TD><?php echo $fullname_valid; ?></TD>
</TR>
<TR>
	<TD><span class="style1">Whether Password is Valid</span></TD>
	<TD><?php echo $password_valid; ?></TD>
</TR>
<TR>
	<TD><span class="style1">Whether Retype Password is Valid</span></TD>
	<TD><?php echo $retypepassword_valid; ?></TD>
</TR>
<TR>
	<TD><span class="style1">Whether University / College is Valid</span></TD>
	<TD><?php echo $unicol_valid; ?></TD>
</TR>
<TR>
	<TD><span class="style1">Whether Age is Valid</span></TD>
	<TD><?php echo $age_valid; ?></TD>
</TR>
<TR>
	<TD><span class="style1">Whether City is Valid</span></TD>
	<TD><?php echo $city_valid; ?></TD>
</TR>
<TR>
	<TD><span class="style1">Whether Country is Valid</span></TD>
	<TD><?php echo $country_valid; ?></TD>
</TR>
</TABLE>
</HTML></BODY>