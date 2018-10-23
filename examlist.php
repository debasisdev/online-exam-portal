<?php
include ('session.php');
?>
<html>
<head>
<title>
Welcome! to Webby BCA Online Examination System
</title>
<style language="text/css">
<!--
.style1 {font-family: Verdana, Arial, sans-serif}
.style1 {font-size:smaller}
.a{width:50;height:25;color:black;background-color:skyblue;font-size:15;font-family:arial}
-->
</style>
<basefont face="verdana"/>
</head>

<body bgcolor="#d7d4d4"><div class="style1">
Dear <?php echo "<B>".$username."</B>";?>, you can choose from the following subjects or logout by click on Logout Button:
</div>
<?php 
	
if ($semester == "1st Semester") { ?>
<form action="takeexam.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="fstSem" onsubmit="return chkRadl()">
<script>
	function chkRadl(){
		bchk=false
		for(i=0;i<fstSem.r.length;i++){
			//alert(sndSem.r[i].checked)
			if(fstSem.r[i].checked==true){
				bchk=true
			}
		
		}
		if(bchk){
			return true
		}
		else{
			alert("Please choose any subject!!")
			return false
			}
	}


</script>
<script>
	document.cookie="test=start"
</script>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Choose any subject of First Semester&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="ENG"  name=r>Technical English and Report Writing
<br>
<input type=radio Value="MATH"  name=r>Mathematical Foundation for Computer Science
<br>
<input type=radio Value="C"  name=r>Programming in C
<br>
<input type=radio Value="MP"  name=r>Computer Organization and Microprocessors
<br>
<input type=radio Value="STAT"  name=r>Probability and Statistics
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<br>
<br>
<div align="right"><input type="submit" style="cursor:hand" class1="a" value="Go" onmouseover="this.style.color='magenta'" onmouseout="this.style.color='black'" style="border:1 black solid;background-color:white;width:150"></input></div>
</form>
<?php } 

else if ($semester == "2nd Semester") { ?>
<form action="takeexam.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" name="sndSem" method="post" onsubmit="return chkRad()">

<script>
	function chkRad(){
		bchk=false
		for(i=0;i<sndSem.r.length;i++){
			//alert(sndSem.r[i].checked)
			if(sndSem.r[i].checked==true){
				bchk=true
			}
		
		}
		if(bchk){
			return true
		}
		else{
			alert("Please choose any subject!!")
			return false
			}
	}


</script>
<script>
	document.cookie="test=start"
</script>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Choose any subject of Second Semester&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
	<input type=radio Value="BC"  name=r>Business Communication & Personality Development
	<br>
	<input type=radio Value="DM"  name=r>Discrete Mathematical Structure with Applications to computer science
	<br>
	<input type=radio Value="DC"  name=r>Data Structures using C
	<br>
	<input type=radio Value="COBOL"  name=r>Business Data Processing COBOL
	<br>
	<input type=radio Value="SAD"  name=r>System Analysis & Design
</div>
<div>&nbsp;</div>
</fieldset>
<br>


<div align="right"><input type="submit" style="cursor:hand" class1="a" value="Go" onmouseover="this.style.color='magenta'" onmouseout="this.style.color='black'" style="border:1 black solid;background-color:white;width:150"></input></div>

</form>
<?php } 

else if ($semester == "3rd Semester") { ?>
<form action="takeexam.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" id=form1 name=form1 onsubmit="return chkRadt()">

<script>
	function chkRadt(){
		bchk=false
		for(i=0;i<form1.r.length;i++){
			//alert(sndSem.r[i].checked)
			if(form1.r[i].checked==true){
				bchk=true
			}
		
		}
		if(bchk){
			return true
		}
		else{
			alert("Please choose any subject!!")
			return false
			}
	}


</script>
<script>
	document.cookie="test=start"
</script>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Choose any subject of Third Semester&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<br>
<input type=radio Value="ACC"  name=r>Accounting & Financial Management
<br>
<input type=radio Value="CONA"  name=r>Computer Oriented Numerical Methods
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<br>
<br>
<div align="right"><input type="submit" style="cursor:hand" class1="a" value="Go" onmouseover="this.style.color='magenta'" onmouseout="this.style.color='black'" style="border:1 black solid;background-color:white;width:150"></input></div>
</form>
<?php } 

else if($semester=="4th Semester"){ ?>
<form action="takeexam.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" id=form1 name=form1 onsubmit="return chkRadv()">

<script>
	function chkRadv(){
		bchk=false
		for(i=0;i<form1.r.length;i++){
			//alert(sndSem.r[i].checked)
			if(form1.r[i].checked==true){
				bchk=true
			}
		
		}
		if(bchk){
			return true
		}
		else{
			alert("Please choose any subject!!")
			return false
			}
	}


</script>
<script>
	document.cookie="test=start"
</script>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Choose any subject of Forth Semester&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<br>
<input type=radio Value="SS"  name=r>System Software
<br>
<input type=radio Value="CG"  name=r>Computer Graphics
<br>
<input type=radio Value="SE"  name=r>Software Engineering
<br>
<input type=radio Value="UNIX"  name=r>Unix Operating System
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<br>
<br>
<div align="right"><input type="submit" style="cursor:hand" class1="a" value="Go" onmouseover="this.style.color='magenta'" onmouseout="this.style.color='black'" style="border:1 black solid;background-color:white;width:150"></input></div>
</form>
<?php } 

else if($semester == "5th Semester") { ?>
<form action="takeexam.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" id=form1 name=form1 onsubmit="return chkRada()">

<script>
	function chkRada(){
		bchk=false
		for(i=0;i<form1.r.length;i++){
			//alert(sndSem.r[i].checked)
			if(form1.r[i].checked==true){
				bchk=true
			}
		
		}
		if(bchk){
			return true
		}
		else{
			alert("Please choose any subject!!")
			return false
			}
	}


</script>
<script>
	document.cookie="test=start"
</script>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Choose any subject of Fifth Semester&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<br>
<input type=radio Value="JAVA"  name=r>Java Programming & Web Page Development
<br>
<input type=radio Value="ADA"  name=r>Analysis & Design of Algorithms
<br>
<input type=radio Value="CN"  name=r>Computer Networks-I
<br>
<input type=radio Value="SM"  name=r>Simulation & Modeling
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<br>
<br>
<div align="right"><input type="submit" style="cursor:hand" class1="a" value="Go" onmouseover="this.style.color='magenta'" onmouseout="this.style.color='black'" style="border:1 black solid;background-color:white;width:150"></input></div>
</form>
<?php } 

else if($semester == "6th Semester") { ?>
<form action="takeexam.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="POST" id=form1 name=form1>

<script>
	function chkRado(){
		bchk=false
		for(i=0;i<form1.r.length;i++){
			//alert(sndSem.r[i].checked)
			if(form1.r[i].checked==true){
				bchk=true
			}
		
		}
		if(bchk){
			return true
		}
		else{
			alert("Please choose any subject!!")
			return false
			}
	}


</script>
<script>
	document.cookie="test=start"
</script>
<br>
<br>

<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Choose any subject of Sixth Semester&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<br>
<input type="radio" value="CN2"  name="r">Computer Networks-II
<br>
<input type="radio" value="AI"  name="r">Artificial Intelligence
<br>
<input type="radio" value="IIT"  name="r">Internet & Information Technology
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<br>
<br>
<div align="right"><input type="submit" style="cursor:hand" class1="a" value="Go" onmouseover="this.style.color='magenta'" onmouseout="this.style.color='black'" style="border:1 black solid;background-color:white;width:150"></input></div>
</form>
<?php } include ('sessionlive.php'); ?>
</body>
</html>