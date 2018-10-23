<?php
include ("session.php");
include ("active.php");
?>
<HTML>
	<HEAD>
		<META NAME="GENERATOR" Content="Hypertext Preprocessor">
		<STYLE LANGUAGE="text/css">
<!--
.style1 {font-family: Verdana, Arial, sans-serif}
.style1 {font-size:smaller}
.a{width:50;height:25;color:black;background-color:skyblue;font-size:15;font-family:arial}
-->
</STYLE>
</HEAD>
	<BASEFONT face="arial"/>
	</HEAD>

	<BODY BGCOLOR="#d7d4d4">
<?php
	$con=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("online_exam_db",$con);
	$query = "SELECT * FROM student_history WHERE username='$username'";
	$result = mysql_query($query);
	while ($row=mysql_fetch_array($result))
	{
		$userid=$row["username"];
		$semest=$row["semester"];
		$score=$row["score"];
		$grade=$row["grade"];
		$subje=$row["subject"];
	}
	//echo $sUsrSub;
	//$subject = $r;
	?>

<?php
if($r == "C"){ ?>

<br>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
var errmsg="Can't take exam again !"
location.href="examlist.php?errormessage=errmsg"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>

<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Programming in C</b></div>
<div align="right" id="eTime" style="font-size:13"></div>

<br>
<fieldset width="500">
<legend><b style="FONT-SIZE: 17px; COLOR: green">&nbsp;C was originally developed by &nbsp;</b>
</legend>
<div style="FONT-SIZE: 8px">&nbsp;</div>
<div style="PADDING-LEFT: 12px">
<input type=radio Value=""  name=c1>H.K.Gundurao
<br>
<input type=radio Value=""  name=c1>N.S.Manjunath
<br>
<input type=radio Value=""  name=c1>M.N.Nachappa
<br>
<input type=radio Value="4"  name=c1>Dennis.M.Ritchie
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="FONT-SIZE: 17px; COLOR: green">&nbsp;C was developed in the year of &nbsp;</b>
</legend>
<div style="FONT-SIZE: 8px">&nbsp;</div>
<div style="PADDING-LEFT: 12px">
<input type=radio Value="1"  name=c2>70s
<br>
<input type=radio Value=""  name=c2>80s
<br>
<input type=radio Value=""  name=c2>90s
<br>
<input type=radio Value=""  name=c2>60s
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="FONT-SIZE: 17px; COLOR: green">&nbsp;Which one adds the characters of one string to another  &nbsp;</b>
</legend>
<div style="FONT-SIZE: 8px">&nbsp;</div>
<div style="PADDING-LEFT: 12px">
<input type=radio Value="1"  name=c3>strcat
<br>
<input type=radio Value=""  name=c3>strchr
<br>
<input type=radio Value=""  name=c3>strcmp
<br>
<input type=radio Value=""  name=c3>strcmpi
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="FONT-SIZE: 17px; COLOR: green">&nbsp;Give a short description of isalnum() &nbsp;</b>
</legend>
<div style="FONT-SIZE: 8px">&nbsp;</div>
<div style="PADDING-LEFT: 12px">
<input type=radio Value="1"  name=c4>Test whether a character is an alphabet or a number
<br>
<input type=radio Value=""  name=c4>Character classification macro that returns non-zero if c is a letter(A-z or a-z)
<br>
<input type=radio Value=""  name=c4>Tests whether a character is an ascii(0 to 127) character.
<br>
<input type=radio Value=""  name=c4>Character classification macro that returns non-zero value if c is a digit('0'-'9')
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="FONT-SIZE: 17px; COLOR: green">&nbsp;printf() command is used for &nbsp;</b>
</legend>
<div style="FONT-SIZE: 8px">&nbsp;</div>
<div style="PADDING-LEFT: 12px">
<input type=radio Value=""  name=c5>To input a string
<br>
<input type=radio Value="2"  name=c5>To display a string
<br>
<input type=radio Value=""  name=c5>To concatenate a string to another string
<br>
<input type=radio Value=""  name=c5>To convert a string to ascii value
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Choose the right answer of this expression, 7%5+10.0*10/3 &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=c6>32.0
<br>
<input type=radio Value=""  name=c6>21.7
<br>
<input type=radio Value=""  name=c6>32.7
<br>
<input type=radio Value=""  name=c6>45.76
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;The 'break' Statement is used to &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=c7>Continue loops
<br>
<input type=radio Value="2"  name=c7>Terminate loops
<br>
<input type=radio Value=""  name=c7>Returns into loops
<br>
<input type=radio Value=""  name=c7>Divide into loops
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which one is a header file?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=c8>#include"stdio.h"
<br>
<input type=radio Value=""  name=c8>printf();
<br>
<input type=radio Value=""  name=c8>scanf();
<br>
<input type=radio Value=""  name=c8>getch();
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;The inverse of getchar() is &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=c9>getch()
<br>
<input type=radio Value=""  name=c9>getche()
<br>
<input type=radio Value=""  name=c9>return()
<br>
<input type=radio Value="4"  name=c9>putchar()
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which function we used to count the number of characters in the string? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=c10>strlen()
<br>
<input type=radio Value=""  name=c10>strcat()
<br>
<input type=radio Value=""  name=c10>strcmp()
<br>
<input type=radio Value=""  name=c10>strcpy()
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 

else if ($r == "ENG") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Technical English & Report Writing</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which one is not a present tense &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=te1>was
<br>
<input type=radio Value=""  name=te1>is
<br>
<input type=radio Value=""  name=te1>have
<br>
<input type=radio Value=""  name=te1>are
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which is Present continuous tense &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=te2>I am going to the college
<br>
<input type=radio Value=""  name=te2>I was gone to the college
<br>
<input type=radio Value=""  name=te2>I will go to the college
<br>
<input type=radio Value=""  name=te2>I have to go to the college
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;"The pasent had died before the doctor came", which tense? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=te3>Present continuous
<br>
<input type=radio Value="2"  name=te3>Past perfect
<br>
<input type=radio Value=""  name=te3>Future
<br>
<input type=radio Value=""  name=te3>Past continuous
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Who got Gitanjali award? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=te4>John Smith
<br>
<input type=radio Value=""  name=te4>Rogger
<br>
<input type=radio Value=""  name=te4>Dannis Rithie
<br>
<input type=radio Value="4"  name=te4>Rabindranath Tagore
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;The story "Packing" who was written? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=te5>Jerome K.Jerome
<br>
<input type=radio Value=""  name=te5>Willium 
<br>
<input type=radio Value=""  name=te5>Dan W.Patterson
<br>
<input type=radio Value=""  name=te5>Sarat chandra chttopadyay
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;In an application, where the address was written? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=te6>Top left
<br>
<input type=radio Value=""  name=te6>Top right
<br>
<input type=radio Value=""  name=te6>Bottom left
<br>
<input type=radio Value=""  name=te6>Bottom right
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Who wrote "The Listener" poetry? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=te7>Rogger 
<br>
<input type=radio Value=""  name=te7>Robinson 
<br>
<input type=radio Value="3"  name=te7>Walter Delamer
<br>
<input type=radio Value=""  name=te7>Rabindranath Tagore
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;How many types of tenses has grammer? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=te8>Two
<br>
<input type=radio Value=""  name=te8>One
<br>
<input type=radio Value="3"  name=te8>Three
<br>
<input type=radio Value=""  name=te8>Four
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Rogger goes to his farm. Here Rogger is a &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=te9>Adjective
<br>
<input type=radio Value=""  name=te9>Pronoun
<br>
<input type=radio Value=""  name=te9>Conjunction
<br>
<input type=radio Value="4"  name=te9>Noun
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Who wrote "Art of letter writing" ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=te10>Jhon Smith
<br>
<input type=radio Value=""  name=te10>Willium
<br>
<input type=radio Value="3"  name=te10>Jacob
<br>
<input type=radio Value=""  name=te10>Mayor
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 

else if($r == "MATH") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Mathematical Foundation</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;How many integers between 1 and 567 are divisible by 3, 5 or 7? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=mf1>200
<br>
<input type=radio Value=""  name=mf1>100
<br>
<input type=radio Value="3"  name=mf1>308
<br>
<input type=radio Value=""  name=mf1>340
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;A U B, This is shows that A and B are  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=mf2>Intersection
<br>
<input type=radio Value="2"  name=mf2>Union
<br>
<input type=radio Value=""  name=mf2>Belongs
<br>
<input type=radio Value=""  name=mf2>Subset
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What do u mean by a set theory ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=mf3>A set is intuitively understood as a well defined collection of objects.
<br>
<input type=radio Value=""  name=mf3>A set is a collection of events.
<br>
<input type=radio Value=""  name=mf3>A set is a numerical collections.
<br>
<input type=radio Value=""  name=mf3>A set is an integer only.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;If A=(1,2)and B=(3,1,4), then A x B = ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=mf4>{(3,1),(3,2),(1,1),(1,2),(4,1),(4,2)}
<br>
<input type=radio Value=""  name=mf4>{(1,1),(1,2),(2,1),(2,2)}
<br>
<input type=radio Value="3"  name=mf4>{(1,3),(1,1),(1,4),(2,3),(2,1),(2,4)}
<br>
<input type=radio Value=""  name=mf4>{(3,3),(3,1),(3,4),(1,3),(1,1),(1,4),(4,3),(4,1),(4,4)}
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>


<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;If U={1,2,3,4,5}is the universal set and A={1,2},B={2,3},C={3,5}then A x B'=?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=mf5>{(1,1),(1,4),(1,5),(2,1),(2,4),(2,5)}
<br>
<input type=radio Value=""  name=mf5>{(3,3),(3,5),(4,3),(4,5),(5,3),(5,5)}
<br>
<input type=radio Value=""  name=mf5>{(3,1),(3,2),(3,4),(4,1),(4,2),(4,4),(5,1),(5,2),(5,4)}
<br>
<input type=radio Value=""  name=mf5>{(3,2),(3,3),(4,2),(4,3),(5,2),(5,3)}
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;How many integers between 1 and 567 are divisible by 3, 5 or 7? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=mf6>200
<br>
<input type=radio Value=""  name=mf6>100
<br>
<input type=radio Value="3"  name=mf6>308
<br>
<input type=radio Value=""  name=mf6>340
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;A U B, This is shows that A and B are  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=mf7>Intersection
<br>
<input type=radio Value="2"  name=mf7>Union
<br>
<input type=radio Value=""  name=mf7>Belongs
<br>
<input type=radio Value=""  name=mf7>Subset
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What do u mean by a set theory ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=mf8>A set is intuitively understood as a well defined collection of objects.
<br>
<input type=radio Value=""  name=mf8>A set is a collection of events.
<br>
<input type=radio Value=""  name=mf8>A set is a numerical collections.
<br>
<input type=radio Value=""  name=mf8>A set is an integer only.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;If A=(1,2)and B=(3,1,4), then A x B = ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=mf9>{(3,1),(3,2),(1,1),(1,2),(4,1),(4,2)}
<br>
<input type=radio Value=""  name=mf9>{(1,1),(1,2),(2,1),(2,2)}
<br>
<input type=radio Value="3"  name=mf9>{(1,3),(1,1),(1,4),(2,3),(2,1),(2,4)}
<br>
<input type=radio Value=""  name=mf9>{(3,3),(3,1),(3,4),(1,3),(1,1),(1,4),(4,3),(4,1),(4,4)}
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>


<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;If U={1,2,3,4,5}is the universal set and A={1,2},B={2,3},C={3,5}then A x B'=?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=mf10>{(1,1),(1,4),(1,5),(2,1),(2,4),(2,5)}
<br>
<input type=radio Value=""  name=mf10>{(3,3),(3,5),(4,3),(4,5),(5,3),(5,5)}
<br>
<input type=radio Value=""  name=mf10>{(3,1),(3,2),(3,4),(4,1),(4,2),(4,4),(5,1),(5,2),(5,4)}
<br>
<input type=radio Value=""  name=mf10>{(3,2),(3,3),(4,2),(4,3),(5,2),(5,3)}
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php }

else if($r == "AI") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}
-->
</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="POST" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Artificial Intelligence</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;When LISP language was invented?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ai1>1945
<br>
<input type=radio Value=""  name=ai1>1990
<br>
<input type=radio Value="3"  name=ai1>1950
<br>
<input type=radio Value=""  name=ai1>1940
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Who invented LISP language ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ai2>D.Christopher
<br>
<input type=radio Value="2"  name=ai2>John Mccarthy
<br>
<input type=radio Value=""  name=ai2>Dan W.Patterson
<br>
<input type=radio Value=""  name=ai2>E.C.Charmaik
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of AI?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ai3>Acquired Intelligence
<br>
<input type=radio Value="2"  name=ai3>Artificial Intelligence
<br>
<input type=radio Value=""  name=ai3>Accounts Information
<br>
<input type=radio Value=""  name=ai3>Air India
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Who invented PROLOG ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ai4>Alain Colmerauer
<br>
<input type=radio Value=""  name=ai4>John McCarthy
<br>
<input type=radio Value=""  name=ai4>Elein Rich 
<br>
<input type=radio Value=""  name=ai4>Knight
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of IPL ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ai5>Information Processing Language
<br>
<input type=radio Value=""  name=ai5>Line Processing Language
<br>
<input type=radio Value=""  name=ai5>Internet Protocol Language
<br>
<input type=radio Value=""  name=ai5>Information Protocol language
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which year, J.A.Robinson introduced resolution as an inference method  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ai6>1945
<br>
<input type=radio Value=""  name=ai6>1990
<br>
<input type=radio Value="3"  name=ai6>1965
<br>
<input type=radio Value=""  name=ai6>1968
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;AI also has much in common with  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ai7>Medical
<br>
<input type=radio Value="2"  name=ai7>Engineering
<br>
<input type=radio Value=""  name=ai7>Chemistry
<br>
<input type=radio Value=""  name=ai7>biology
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Edward Feigenbanum summaried about knowledge based System in year  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ai8>1956
<br>
<input type=radio Value=""  name=ai8>1965
<br>
<input type=radio Value="3"  name=ai8>1977
<br>
<input type=radio Value=""  name=ai8>1970
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;In function call (car '(a b c)), which value returned ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ai9>c
<br>
<input type=radio Value="2"  name=ai9>a
<br>
<input type=radio Value=""  name=ai9>b
<br>
<input type=radio Value=""  name=ai9>b c
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;(append '(a)'(b c)), its returns  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ai10>(a b c)
<br>
<input type=radio Value=""  name=ai10>(a c)
<br>
<input type=radio Value=""  name=ai10>(c b)
<br>
<input type=radio Value=""  name=ai10>(a b)
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 

else if($r == "IIT") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm" onSubmit="return chkRad(frm.iit1,frm.iit2,frm.iit3,frm.iit4,frm.iit5,frm.iit6,frm.iit7,frm.iit8,frm.iit9,frm.iit10)">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Internet & Information Technology</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is internet?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=iit1>Message can be send throughout the world all the time.
<br>
<input type=radio Value=""  name=iit1>Message can be send only specified area for a particular amount of time.
<br>
<input type=radio Value=""  name=iit1>Message can be send only particular area all the time.
<br>
<input type=radio Value=""  name=iit1>Message can be send throughout the world for a specified time.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is full form of HTTP?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=iit2>Hyper Text Transfortation Protocol
<br>
<input type=radio Value="2"  name=iit2>Hyper Text Transfer Protocol
<br>
<input type=radio Value=""  name=iit2>Hyper Text Transmit Protocol
<br>
<input type=radio Value=""  name=iit2>Hyper Text tour Protocol
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of IIS ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=iit3>Internet Information Service
<br>
<input type=radio Value=""  name=iit3>Intranet Information Service
<br>
<input type=radio Value=""  name=iit3>Indian Institute of Service
<br>
<input type=radio Value=""  name=iit3>Internet Institute of society
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of WAIS ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=iit4>World Artificial Intelligence System
<br>
<input type=radio Value=""  name=iit4>World Association in Society
<br>
<input type=radio Value=""  name=iit4>Wide Area Internet System
<br>
<input type=radio Value="4"  name=iit4>Wide Area Information System
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of SGML ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=iit5>Standard General Mark-up language
<br>
<input type=radio Value="2"  name=iit5>Standard Generalised Mark-up language
<br>
<input type=radio Value=""  name=iit5>System General Mark-up language
<br>
<input type=radio Value=""  name=iit5>System Generalised Mark-up language
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of HTML ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=iit6>Hyper Text Mark-up Language
<br>
<input type=radio Value=""  name=iit6>Hyper Test Mark-up Language
<br>
<input type=radio Value=""  name=iit6>High Text Mark-up Language
<br>
<input type=radio Value=""  name=iit6>Hover Text Mark up Language
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of CSS ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=iit7>Cascading Style Sheet
<br>
<input type=radio Value=""  name=iit7>Common Style Sheet
<br>
<input type=radio Value=""  name=iit7>Cascadeing System Software
<br>
<input type=radio Value=""  name=iit7>Cummilative Style Sheet
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;H1 is refferred for what?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=iit8>Paragraph writing
<br>
<input type=radio Value=""  name=iit8>Hyper link
<br>
<input type=radio Value="3"  name=iit8>Heading 
<br>
<input type=radio Value=""  name=iit8>Font style
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Marquee Tag is refferred for what?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=iit9>Moving the text or image left or right 
<br>
<input type=radio Value=""  name=iit9>Color the fonts
<br>
<input type=radio Value=""  name=iit9>Change their Style
<br>
<input type=radio Value=""  name=iit9>Make a preformat document
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;HREF is refferred for what?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=iit10>It is linking the pages to the other pages.
<br>
<input type=radio Value=""  name=iit10>It is show the values of the other pages.
<br>
<input type=radio Value=""  name=iit10>It is print the gif images.
<br>
<input type=radio Value=""  name=iit10>It is show the JPEG files.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center">
<input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'">
</div>
</form>
<?php } 
else if ($r == "CN2") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Computer Network-II</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of TCP/IP ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn21>Transfer Common Protocol / Intranet Protocol
<br>
<input type=radio Value="2"  name=cn21>Transmission Control Protocol / Internet Protocol
<br>
<input type=radio Value=""  name=cn21>Text Control Protocol / Internet Protocol
<br>
<input type=radio Value=""  name=cn21>Tele Common Protocol / Intranet Protocol
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of MIME ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn22>Multiple Internet mail Extention
<br>
<input type=radio Value="2"  name=cn22>Multipurpose Internet mail Extention
<br>
<input type=radio Value=""  name=cn22>Multimedia Internet mail Extention
<br>
<input type=radio Value=""  name=cn22>Multiple Intranet mail Extention
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of SMTP ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn23>Significant mail transmission protocol
<br>
<input type=radio Value="2"  name=cn23>Simple mail transmission protocol
<br>
<input type=radio Value=""  name=cn23>Short mail transmission protocol
<br>
<input type=radio Value=""  name=cn23>Simple mail transfer protocol
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of DHCP ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=cn24>Dynamic host configaration protocol
<br>
<input type=radio Value=""  name=cn24>Dynamic horizantal configaration protocol
<br>
<input type=radio Value=""  name=cn24>Dynamic host confirm protocol
<br>
<input type=radio Value=""  name=cn24>Domain host confirm protocol
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of FQDN ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn25>Fixed Qualified Domain Name
<br>
<input type=radio Value=""  name=cn25>Fixed Quantity Domain Name
<br>
<input type=radio Value=""  name=cn25>Fully Quantity Domain Name
<br>
<input type=radio Value="4"  name=cn25>Fully Qualified Domain Name
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of SMTP ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn26>Significant mail transmission protocol
<br>
<input type=radio Value="2"  name=cn26>Simple mail transmission protocol
<br>
<input type=radio Value=""  name=cn26>Short mail transmission protocol
<br>
<input type=radio Value=""  name=cn26>Simple mail transfer protocol
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of MIME ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn27>Multiple Internet mail Extention
<br>
<input type=radio Value="2"  name=cn27>Multipurpose Internet mail Extention
<br>
<input type=radio Value=""  name=cn27>Multimedia Internet mail Extention
<br>
<input type=radio Value=""  name=cn27>Multiple Intranet mail Extention
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of MIME ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn28>Multiple Internet mail Extention
<br>
<input type=radio Value="2"  name=cn28>Multipurpose Internet mail Extention
<br>
<input type=radio Value=""  name=cn28>Multimedia Internet mail Extention
<br>
<input type=radio Value=""  name=cn28>Multiple Intranet mail Extention
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of SMTP ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn29>Significant mail transmission protocol
<br>
<input type=radio Value="2"  name=cn29>Simple mail transmission protocol
<br>
<input type=radio Value=""  name=cn29>Short mail transmission protocol
<br>
<input type=radio Value=""  name=cn29>Simple mail transfer protocol
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of DHCP ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=cn210>Dynamic host configaration protocol
<br>
<input type=radio Value=""  name=cn210>Dynamic horizantal configaration protocol
<br>
<input type=radio Value=""  name=cn210>Dynamic host confirm protocol
<br>
<input type=radio Value=""  name=cn210>Domain host confirm protocol
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center">
<input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'">
</div>
</form>
<?php } 

else if($r == "MP") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}

var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}


</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Microprocessor & Computer Organization</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of CPU ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=co1>Computer Processing Unit
<br>
<input type=radio Value="2"  name=co1>Central Processing Unit
<br>
<input type=radio Value=""  name=co1>Common Path Unit
<br>
<input type=radio Value=""  name=co1>Cummilative Processing Unit
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is Mnemonics ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=co2>The binary instructions are given abbreviated names called mnemonics.
<br>
<input type=radio Value=""  name=co2>The alphabetic instructions are given abbreviated names called mnemonics.
<br>
<input type=radio Value=""  name=co2>The numerical instructions are given abbreviated names called mnemonics.
<br>
<input type=radio Value=""  name=co2>The alpha-numeric instructions are given abbreviated names called mnemonics.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the nibble ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=co3>The group of 2-bits is called nibble.
<br>
<input type=radio Value=""  name=co3>The group of 3-bits is called nibble.
<br>
<input type=radio Value=""  name=co3>The group of 8-bits is called nibble.
<br>
<input type=radio Value="4"  name=co3>The group of 4-bits is called nibble.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;FORTRAN is a what ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=co4>A high level language.
<br>
<input type=radio Value=""  name=co4>A middle level language.
<br>
<input type=radio Value=""  name=co4>A low level language.
<br>
<input type=radio Value=""  name=co4>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is a Compiler ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=co5>It is a program which converts our machine level language into high level language.
<br>
<input type=radio Value=""  name=co5>It is a program which converts our high level language into low level language.
<br>
<input type=radio Value="3"  name=co5>It is a program which converts our high level language into machine level language.
<br>
<input type=radio Value=""  name=co5>It is a program which converts our low level language into high level language.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of CPU ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=co6>Computer Processing Unit
<br>
<input type=radio Value="2"  name=co6>Central Processing Unit
<br>
<input type=radio Value=""  name=co6>Common Path Unit
<br>
<input type=radio Value=""  name=co6>Cummilative Processing Unit
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is Mnemonics ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=co7>The binary instructions are given abbreviated names called mnemonics.
<br>
<input type=radio Value=""  name=co7>The alphabetic instructions are given abbreviated names called mnemonics.
<br>
<input type=radio Value=""  name=co7>The numerical instructions are given abbreviated names called mnemonics.
<br>
<input type=radio Value=""  name=co7>The alpha-numeric instructions are given abbreviated names called mnemonics.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the nibble ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=co8>The group of 2-bits is called nibble.
<br>
<input type=radio Value=""  name=co8>The group of 3-bits is called nibble.
<br>
<input type=radio Value=""  name=co8>The group of 8-bits is called nibble.
<br>
<input type=radio Value="4"  name=co8>The group of 4-bits is called nibble.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;FORTRAN is a what ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=co9>A high level language.
<br>
<input type=radio Value=""  name=co9>A middle level language.
<br>
<input type=radio Value=""  name=co9>A low level language.
<br>
<input type=radio Value=""  name=co9>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is a Compiler ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=co10>It is a program which converts our machine level language into high level language.
<br>
<input type=radio Value=""  name=co10>It is a program which converts our high level language into low level language.
<br>
<input type=radio Value="3"  name=co10>It is a program which converts our high level language into machine level language.
<br>
<input type=radio Value=""  name=co10>It is a program which converts our low level language into high level language.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 

else if($r == "STAT") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}

//------------------------------------ to be copied --------------------------
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

//------------------------------ eof copy------------------------------
</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Probability & Statistics</b></div>
<!--copy this-->
	<div align="right" id="eTime" style="font-size:13"></div>
<!--copy end-->
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What do you mean by 'raw data' ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ps1>The data does not give any useful information. It is rather confusing to mind. 
<br>
<input type=radio Value=""  name=ps1>The data does give any useful information. It is rather confusing to mind.
<br>
<input type=radio Value=""  name=ps1>The data does not give any useless information. It is rather confusing to mind.
<br>
<input type=radio Value=""  name=ps1>The data does give any useful information and it is rather easy to understand.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What do you mean by 'Continuous frequency distribution' ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ps2>A frequency distribution in which class intervals are not considered.
<br>
<input type=radio Value=""  name=ps2>A frequency distribution in which class intervals are not useful.
<br>
<input type=radio Value="3"  name=ps2>A frequency distribution in which class intervals are considered.
<br>
<input type=radio Value=""  name=ps2>A frequency distribution in which class intervals are not allowed.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Find the Arithmatic mean of 10 nos. 18,15,18,16,17,18,15,19,17,17 ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ps3>22
<br>
<input type=radio Value=""  name=ps3>11
<br>
<input type=radio Value="3"  name=ps3>17
<br>
<input type=radio Value=""  name=ps3>10
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;When an ordinary six faced die is thrown find the probability of getting 4 ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ps4>1/2
<br>
<input type=radio Value=""  name=ps4>1/3
<br>
<input type=radio Value=""  name=ps4>1/5
<br>
<input type=radio Value="4"  name=ps4>1/6
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is chance that a (1)leap year and (2) non leap year has 53 Sundays ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ps5>(3/7,2/7)
<br>
<input type=radio Value="2"  name=ps5>(3/7,1/7)
<br>
<input type=radio Value=""  name=ps5>(1/7,2/7)
<br>
<input type=radio Value=""  name=ps5>(1/7,2/7)
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What do you mean by 'raw data' ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ps6>The data does not give any useful information. It is rather confusing to mind. 
<br>
<input type=radio Value=""  name=ps6>The data does give any useful information. It is rather confusing to mind.
<br>
<input type=radio Value=""  name=ps6>The data does not give any useless information. It is rather confusing to mind.
<br>
<input type=radio Value=""  name=ps6>The data does give any useful information and it is rather easy to understand.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What do you mean by 'Continuous frequency distribution' ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ps7>A frequency distribution in which class intervals are not considered.
<br>
<input type=radio Value=""  name=ps7>A frequency distribution in which class intervals are not useful.
<br>
<input type=radio Value="3"  name=ps7>A frequency distribution in which class intervals are considered.
<br>
<input type=radio Value=""  name=ps7>A frequency distribution in which class intervals are not allowed.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Find the Arithmatic mean of 10 nos. 18,15,18,16,17,18,15,19,17,17 ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ps8>22
<br>
<input type=radio Value=""  name=ps8>11
<br>
<input type=radio Value="3"  name=ps8>17
<br>
<input type=radio Value=""  name=ps8>10
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;When an ordinary six faced die is thrown find the probability of getting 4 ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ps9>1/2
<br>
<input type=radio Value=""  name=ps9>1/3
<br>
<input type=radio Value=""  name=ps9>1/5
<br>
<input type=radio Value="4"  name=ps9>1/6
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is chance that a (1)leap year and (2) non leap year has 53 Sundays ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ps10>(3/7,2/7)
<br>
<input type=radio Value="2"  name=ps10>(3/7,1/7)
<br>
<input type=radio Value=""  name=ps10>(1/7,2/7)
<br>
<input type=radio Value=""  name=ps10>(1/7,2/7)
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 

else if($r == "DM") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Discrete Mathematical Structure with Applications to computer science</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;'and' is denoted by ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=dms1>^
<br>
<input type=radio Value=""  name=dms1>v
<br>
<input type=radio Value=""  name=dms1>>
<br>
<input type=radio Value=""  name=dms1><
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;'If then' is denoted by ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=dms2><->
<br>
<input type=radio Value=""  name=dms2><=>
<br>
<input type=radio Value="3"  name=dms2>->
<br>
<input type=radio Value=""  name=dms2><-
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is a spanning tree ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=dms3>A tree, which is a spanning original graph of a graph G is called spanning tree.
<br>
<input type=radio Value="2"  name=dms3>A tree, which is a spanning subgraph of a graph G is called Spanning tree.
<br>
<input type=radio Value=""  name=dms3>A tree, which is a spanning graph of a subgraph G is called Spanning tree.
<br>
<input type=radio Value=""  name=dms3>A tree, which is a spanning subgraph of a subgraph G is called Spanning tree.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is a self loop ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=dms4>The defination of graph permits an edge e of the form e=(x,y).Such an edge e is called self loop.
<br>
<input type=radio Value="2"  name=dms4>The defination of graph permits an edge e of the form e=(x,x).Such an edge e is called self loop.
<br>
<input type=radio Value=""  name=dms4>The defination of graph permits an edge e of the form e=(y,y).Such an edge e is called self loop.
<br>
<input type=radio Value=""  name=dms4>The defination of graph permits an edge e of the form e=(y,x).Such an edge e is called self loop.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is pseudograph ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=dms5>The graph having loops and also  multiple edges is called pseudograph.
<br>
<input type=radio Value="2"  name=dms5>The graph having loops but no multiple edges is called psedograph.
<br>
<input type=radio Value=""  name=dms5>The graph having no loops and also  multiple edges is called pseudograph.
<br>
<input type=radio Value=""  name=dms5>The graph having one loops and also  multiple edges is called pseudograph.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;'and' is denoted by ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=dms6>^
<br>
<input type=radio Value=""  name=dms6>v
<br>
<input type=radio Value=""  name=dms6>>
<br>
<input type=radio Value=""  name=dms6><
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;'If then' is denoted by ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=dms7><->
<br>
<input type=radio Value=""  name=dms7><=>
<br>
<input type=radio Value="3"  name=dms7>->
<br>
<input type=radio Value=""  name=dms7><-
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is a spanning tree ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=dms8>A tree, which is a spanning original graph of a graph G is called spanning tree.
<br>
<input type=radio Value="2"  name=dms8>A tree, which is a spanning subgraph of a graph G is called Spanning tree.
<br>
<input type=radio Value=""  name=dms8>A tree, which is a spanning graph of a subgraph G is called Spanning tree.
<br>
<input type=radio Value=""  name=dms8>A tree, which is a spanning subgraph of a subgraph G is called Spanning tree.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is a self loop ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=dms9>The defination of graph permits an edge e of the form e=(x,y).Such an edge e is called self loop.
<br>
<input type=radio Value="2"  name=dms9>The defination of graph permits an edge e of the form e=(x,x).Such an edge e is called self loop.
<br>
<input type=radio Value=""  name=dms9>The defination of graph permits an edge e of the form e=(y,y).Such an edge e is called self loop.
<br>
<input type=radio Value=""  name=dms9>The defination of graph permits an edge e of the form e=(y,x).Such an edge e is called self loop.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is pseudograph ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=dms10>The graph having loops and also  multiple edges is called pseudograph.
<br>
<input type=radio Value="2"  name=dms10>The graph having loops but no multiple edges is called psedograph.
<br>
<input type=radio Value=""  name=dms10>The graph having no loops and also  multiple edges is called pseudograph.
<br>
<input type=radio Value=""  name=dms10>The graph having one loops and also  multiple edges is called pseudograph.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 

else if($r == "DC") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Data Structures using C</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Give the full form of LIFO ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ds1>Low index in high index first out.
<br>
<input type=radio Value=""  name=ds1>Lower index flow out
<br>
<input type=radio Value="3"  name=ds1>Last in first out.
<br>
<input type=radio Value=""  name=ds1>Last index for outer.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What Stack States ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ds2>LIFO
<br>
<input type=radio Value=""  name=ds2>FIFO
<br>
<input type=radio Value=""  name=ds2>LILO
<br>
<input type=radio Value=""  name=ds2>FILO
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Give a short description of isalnum()  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ds3>Test whether a character is an alphabet or a number
<br>
<input type=radio Value=""  name=ds3>Character classification macro that returns non-zero if c is a letter(A-z or a-z)
<br>
<input type=radio Value=""  name=ds3>Tests whether a character is an ascii(0 to 127) character.
<br>
<input type=radio Value=""  name=ds3>Character classification macro that returns non-zero value if c is a digit('0'-'9')
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Pointer is used in what ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ds4>C
<br>
<input type=radio Value=""  name=ds4>UNIX
<br>
<input type=radio Value=""  name=ds4>COBOL
<br>
<input type=radio Value=""  name=ds4>FORTRAN
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;The opposite of Constructor {} is   &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ds5>Friend function
<br>
<input type=radio Value=""  name=ds5>Pointer
<br>
<input type=radio Value=""  name=ds5>Union
<br>
<input type=radio Value="4"  name=ds5>Destructor ~{}
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Give the full form of LIFO ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ds6>Low index in high index first out.
<br>
<input type=radio Value=""  name=ds6>Lower index flow out
<br>
<input type=radio Value="3"  name=ds6>Last in first out.
<br>
<input type=radio Value=""  name=ds6>Last index for outer.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What Stack States ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ds7>LIFO
<br>
<input type=radio Value=""  name=ds7>FIFO
<br>
<input type=radio Value=""  name=ds7>LILO
<br>
<input type=radio Value=""  name=ds7>FILO
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Give a short description of isalnum()  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ds8>Test whether a character is an alphabet or a number
<br>
<input type=radio Value=""  name=ds8>Character classification macro that returns non-zero if c is a letter(A-z or a-z)
<br>
<input type=radio Value=""  name=ds8>Tests whether a character is an ascii(0 to 127) character.
<br>
<input type=radio Value=""  name=ds8>Character classification macro that returns non-zero value if c is a digit('0'-'9')
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Pointer is used in what ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ds9>C
<br>
<input type=radio Value=""  name=ds9>UNIX
<br>
<input type=radio Value=""  name=ds9>COBOL
<br>
<input type=radio Value=""  name=ds9>FORTRAN
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;The opposite of Constructor {} is   &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ds10>Friend function
<br>
<input type=radio Value=""  name=ds10>Pointer
<br>
<input type=radio Value=""  name=ds10>Union
<br>
<input type=radio Value="4"  name=ds10>Destructor ~{}
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php }

else if($r == "ACC") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Accounting & Financial Management</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is Journal ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ac1>The monthly business transactions are recorded in a book, called Journal.
<br>
<input type=radio Value="2"  name=ac1>The daily business transactions are recorded in a book, called Journal.
<br>
<input type=radio Value=""  name=ac1>The yearly business transactions are recorded in a book, called Journal.
<br>
<input type=radio Value=""  name=ac1>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is purpose of purchase book ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ac2>This book is used to record credit purchase of goods only.
<br>
<input type=radio Value=""  name=ac2>This book is used to record debit purchase of goods only.
<br>
<input type=radio Value=""  name=ac2>This book is used to record credit and debit purchase of goods only.
<br>
<input type=radio Value=""  name=ac2>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is Cash book ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ac3>Cash book is a special journal in which all credit transactions are recorded directly.
<br>
<input type=radio Value=""  name=ac3>Cash book is a special journal in which all debit transactions are recorded directly.
<br>
<input type=radio Value="3"  name=ac3>Cash book is a special journal in which all cash transactions are recorded directly.
<br>
<input type=radio Value=""  name=ac3>Cash book is a special journal in which all credit and debit transactions are recorded directly.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is a balance sheet ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ac4>Balance sheet is just a statement of assets and liabilities.
<br>
<input type=radio Value=""  name=ac4>Balance sheet is just a statement of capital.
<br>
<input type=radio Value=""  name=ac4>Balance sheet is just a statement of liabilities.
<br>
<input type=radio Value=""  name=ac4>Balance sheet is just a statement of only assets.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Formula to calculate break-even point is:  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ac5>BEP=Fixed cost x Sales / Sales - Variable cost.
<br>
<input type=radio Value=""  name=ac5>BEP=Fixed cost x Profit / Sales - Variable cost.
<br>
<input type=radio Value=""  name=ac5>BEP=Fixed cost x purchase / Sales - Variable cost.
<br>
<input type=radio Value=""  name=ac5>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is Journal ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ac6>The monthly business transactions are recorded in a book, called Journal.
<br>
<input type=radio Value="2"  name=ac6>The daily business transactions are recorded in a book, called Journal.
<br>
<input type=radio Value=""  name=ac6>The yearly business transactions are recorded in a book, called Journal.
<br>
<input type=radio Value=""  name=ac6>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is purpose of purchase book ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ac7>This book is used to record credit purchase of goods only.
<br>
<input type=radio Value=""  name=ac7>This book is used to record debit purchase of goods only.
<br>
<input type=radio Value=""  name=ac7>This book is used to record credit and debit purchase of goods only.
<br>
<input type=radio Value=""  name=ac7>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is Cash book ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ac8>Cash book is a special journal in which all credit transactions are recorded directly.
<br>
<input type=radio Value=""  name=ac8>Cash book is a special journal in which all debit transactions are recorded directly.
<br>
<input type=radio Value="3"  name=ac8>Cash book is a special journal in which all cash transactions are recorded directly.
<br>
<input type=radio Value=""  name=ac8>Cash book is a special journal in which all credit and debit transactions are recorded directly.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is a balance sheet ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ac9>Balance sheet is just a statement of assets and liabilities.
<br>
<input type=radio Value=""  name=ac9>Balance sheet is just a statement of capital.
<br>
<input type=radio Value=""  name=ac9>Balance sheet is just a statement of liabilities.
<br>
<input type=radio Value=""  name=ac9>Balance sheet is just a statement of only assets.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Formula to calculate break-even point is:  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ac10>BEP=Fixed cost x Sales / Sales - Variable cost.
<br>
<input type=radio Value=""  name=ac10>BEP=Fixed cost x Profit / Sales - Variable cost.
<br>
<input type=radio Value=""  name=ac10>BEP=Fixed cost x purchase / Sales - Variable cost.
<br>
<input type=radio Value=""  name=ac10>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 

else if($r == "UNIX") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Unix Operating System</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Give the meaning of portability ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=u1>The code can be saved from virus.
<br>
<input type=radio Value="2"  name=u1>The code can be changed and compiled on a new machine.
<br>
<input type=radio Value=""  name=u1>The code can be modify and compiled on a new machine.
<br>
<input type=radio Value=""  name=u1>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is boot block ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=u2>It is a last block in the system file.
<br>
<input type=radio Value=""  name=u2>It is a middle block in the system file.
<br>
<input type=radio Value="3"  name=u2>It is a very first block in the system file.
<br>
<input type=radio Value=""  name=u2>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the function of command cp ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=u3>It copies the content of one file to another file.
<br>
<input type=radio Value=""  name=u3>It copies the content of one file to another file and deletes the contents of first file.
<br>
<input type=radio Value=""  name=u3>It send the content of one file to another file.
<br>
<input type=radio Value=""  name=u3>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What does the tail filter ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=u4>It displays the last lines from the end of file by default.
<br>
<input type=radio Value="2"  name=u4>It displays 10 lines from the end of file by default.
<br>
<input type=radio Value=""  name=u4>It displays 2 lines from the end of file by default.
<br>
<input type=radio Value=""  name=u4>It displays 20 lines from the end of file by default.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Bourne Shell command prompt is denoted by:  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=u5>"%"
<br>
<input type=radio Value=""  name=u5>"$"
<br>
<input type=radio Value=""  name=u5>"&"
<br>
<input type=radio Value=""  name=u5>"^"
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Give the meaning of portability ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=u6>The code can be saved from virus.
<br>
<input type=radio Value="2"  name=u6>The code can be changed and compiled on a new machine.
<br>
<input type=radio Value=""  name=u6>The code can be modify and compiled on a new machine.
<br>
<input type=radio Value=""  name=u6>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is boot block ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=u7>It is a last block in the system file.
<br>
<input type=radio Value=""  name=u7>It is a middle block in the system file.
<br>
<input type=radio Value="3"  name=u7>It is a very first block in the system file.
<br>
<input type=radio Value=""  name=u7>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the function of command cp ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=u8>It copies the content of one file to another file.
<br>
<input type=radio Value=""  name=u8>It copies the content of one file to another file and deletes the contents of first file.
<br>
<input type=radio Value=""  name=u8>It send the content of one file to another file.
<br>
<input type=radio Value=""  name=u8>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What does the tail filter ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=u9>It displays the last lines from the end of file by default.
<br>
<input type=radio Value="2"  name=u9>It displays 10 lines from the end of file by default.
<br>
<input type=radio Value=""  name=u9>It displays 2 lines from the end of file by default.
<br>
<input type=radio Value=""  name=u9>It displays 20 lines from the end of file by default.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Bourne Shell command prompt is denoted by:  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=u10>"%"
<br>
<input type=radio Value=""  name=u10>"$"
<br>
<input type=radio Value=""  name=u10>"&"
<br>
<input type=radio Value=""  name=u10>"^"
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 
else if($r == "CG") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Computer Graphics</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Give the full form of DDA ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cg1>Digital Different Analyzer.
<br>
<input type=radio Value=""  name=cg1>Domain Differential Analyzer.
<br>
<input type=radio Value="3"  name=cg1>Digital Differential Analyzer.
<br>
<input type=radio Value=""  name=cg1>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is Octrees ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=cg2>Octrees are hierarchical tree structure.
<br>
<input type=radio Value=""  name=cg2>Octrees are horizontal tree structure.
<br>
<input type=radio Value=""  name=cg2>Octrees are vertical tree structure.
<br>
<input type=radio Value=""  name=cg2>Octrees are diagonal tree structure.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is track ball ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cg3>Track ball is a ball that can be rotated with the leg.
<br>
<input type=radio Value=""  name=cg3>Track ball is a ball that can be rotated with the nose.
<br>
<input type=radio Value="3"  name=cg3>Track ball is a ball that can be rotated with the finger or palm of the hand.
<br>
<input type=radio Value=""  name=cg3>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is Joy stick ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=cg4>A joystick contains a small vertical level mounted on a have that is used to move the cursor movement.
<br>
<input type=radio Value=""  name=cg4>A joystick contains a large vertical level mounted on a have that is used to move the cursor movement.
<br>
<input type=radio Value=""  name=cg4>A joystick contains a small horizontal level mounted on a have that is used to move the cursor movement.
<br>
<input type=radio Value=""  name=cg4>A joystick contains a large horizontal level mounted on a have that is used to move the cursor movement.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is tablet ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cg5>The term tablet is used to describe a smooth surface.
<br>
<input type=radio Value=""  name=cg5>The term tablet is used to describe a rought surface.
<br>
<input type=radio Value=""  name=cg5>The term tablet is used to describe a simple surface.
<br>
<input type=radio Value="4"  name=cg5>The term tablet is used to describe a flat surface.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Give the full form of DDA ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cg6>Digital Different Analyzer.
<br>
<input type=radio Value=""  name=cg6>Domain Differential Analyzer.
<br>
<input type=radio Value="3"  name=cg6>Digital Differential Analyzer.
<br>
<input type=radio Value=""  name=cg6>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is Octrees ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=cg7>Octrees are hierarchical tree structure.
<br>
<input type=radio Value=""  name=cg7>Octrees are horizontal tree structure.
<br>
<input type=radio Value=""  name=cg7>Octrees are vertical tree structure.
<br>
<input type=radio Value=""  name=cg7>Octrees are diagonal tree structure.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is track ball ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cg8>Track ball is a ball that can be rotated with the leg.
<br>
<input type=radio Value=""  name=cg8>Track ball is a ball that can be rotated with the nose.
<br>
<input type=radio Value="3"  name=cg8>Track ball is a ball that can be rotated with the finger or palm of the hand.
<br>
<input type=radio Value=""  name=cg8>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is Joy stick ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=cg9>A joystick contains a small vertical level mounted on a have that is used to move the cursor movement.
<br>
<input type=radio Value=""  name=cg9>A joystick contains a large vertical level mounted on a have that is used to move the cursor movement.
<br>
<input type=radio Value=""  name=cg9>A joystick contains a small horizontal level mounted on a have that is used to move the cursor movement.
<br>
<input type=radio Value=""  name=cg9>A joystick contains a large horizontal level mounted on a have that is used to move the cursor movement.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is tablet ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cg10>The term tablet is used to describe a smooth surface.
<br>
<input type=radio Value=""  name=cg10>The term tablet is used to describe a rought surface.
<br>
<input type=radio Value=""  name=cg10>The term tablet is used to describe a simple surface.
<br>
<input type=radio Value="4"  name=cg10>The term tablet is used to describe a flat surface.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 

else if($r == "BC") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Business Communication & Personality Development</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which one is not a present tense &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=bc1>was
<br>
<input type=radio Value=""  name=bc1>is
<br>
<input type=radio Value=""  name=bc1>have
<br>
<input type=radio Value=""  name=bc1>are
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which is Present continuous tense &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=bc2>I am going to the college
<br>
<input type=radio Value=""  name=bc2>I was gone to the college
<br>
<input type=radio Value=""  name=bc2>I will go to the college
<br>
<input type=radio Value=""  name=bc2>I have to go to the college
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;"The pasent had died before the doctor came", which tense? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=bc3>Present continuous
<br>
<input type=radio Value="2"  name=bc3>Past perfect
<br>
<input type=radio Value=""  name=bc3>Future
<br>
<input type=radio Value=""  name=bc3>Past continuous
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Who got Gitanjali award? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=bc4>John Smith
<br>
<input type=radio Value=""  name=bc4>Rogger
<br>
<input type=radio Value=""  name=bc4>Dannis Rithie
<br>
<input type=radio Value="4"  name=bc4>Rabindranath Tagore
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;The story "Packing" who was written? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=bc5>Jerome K.Jerome
<br>
<input type=radio Value=""  name=bc5>Willium 
<br>
<input type=radio Value=""  name=bc5>Dan W.Patterson
<br>
<input type=radio Value=""  name=bc5>Sarat chandra chttopadyay
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;In an application, where the address was written? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=bc6>Top left
<br>
<input type=radio Value=""  name=bc6>Top right
<br>
<input type=radio Value=""  name=bc6>Bottom left
<br>
<input type=radio Value=""  name=bc6>Bottom right
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Who wrote "The Listener" poetry? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=bc7>Rogger 
<br>
<input type=radio Value=""  name=bc7>Robinson 
<br>
<input type=radio Value="3"  name=bc7>Walter Delamer
<br>
<input type=radio Value=""  name=bc7>Rabindranath Tagore
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;How many types of tenses has grammer? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=bc8>Two
<br>
<input type=radio Value=""  name=bc8>One
<br>
<input type=radio Value="3"  name=bc8>Three
<br>
<input type=radio Value=""  name=bc8>Four
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Rogger goes to his farm. Here Rogger is a &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=bc9>Adjective
<br>
<input type=radio Value=""  name=bc9>Pronoun
<br>
<input type=radio Value=""  name=bc9>Conjunction
<br>
<input type=radio Value="4"  name=bc9>Noun
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Who wrote "Art of letter writing" ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=bc10>Jhon Smith
<br>
<input type=radio Value=""  name=bc10>Willium
<br>
<input type=radio Value="3"  name=bc10>Jacob
<br>
<input type=radio Value=""  name=bc10>Mayor
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 

else if($r == "SE") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Software Engineering</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Define Software Engineering? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=se1>Software Engineering is instructions (Computer Program) that when executed provide desired function and performance.
<br>
<input type=radio Value="2"  name=se1>Software Engineering is the systematic approach to the development, operation, maintenance, and retirement of software.
<br>
<input type=radio Value=""  name=se1>Software Engineering is a collection of numerical methods.
<br>
<input type=radio Value=""  name=se1>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which Component is not able in the SRS ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=se2>Functionality
<br>
<input type=radio Value="2"  name=se2>Internal interfaces.
<br>
<input type=radio Value=""  name=se2>Performance.
<br>
<input type=radio Value=""  name=se2>External interfaces.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of COCOMO model? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=se3>Common Cost Model
<br>
<input type=radio Value=""  name=se3>Comersial Constructive Model
<br>
<input type=radio Value=""  name=se3>Cummilative Cost Model
<br>
<input type=radio Value="4"  name=se3>Constructive Cost Model
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What types of Resource available in the Project Management? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=se4>One type (Human Resource)
<br>
<input type=radio Value=""  name=se4>Two types (Human Resource, Hardware Resource)
<br>
<input type=radio Value="3"  name=se4>Three types (Human Resource, Hardware Resource, Software Resource)
<br>
<input type=radio Value=""  name=se4>Four types (Human Resource, Hardware Resource, Software Resource, Customer Resource)
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;The classic life-cycle paradigm is sometimes called as &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=se5>Spiral model
<br>
<input type=radio Value=""  name=se5>COCOMO model
<br>
<input type=radio Value=""  name=se5>Top-down model
<br>
<input type=radio Value="4"  name=se5>Waterfall model
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Define Software Engineering? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=se6>Software Engineering is instructions (Computer Program) that when executed provide desired function and performance.
<br>
<input type=radio Value="2"  name=se6>Software Engineering is the systematic approach to the development, operation, maintenance, and retirement of software.
<br>
<input type=radio Value=""  name=se6>Software Engineering is a collection of numerical methods.
<br>
<input type=radio Value=""  name=se6>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which Component is not able in the SRS ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=se7>Functionality
<br>
<input type=radio Value="2"  name=se7>Internal interfaces.
<br>
<input type=radio Value=""  name=se7>Performance.
<br>
<input type=radio Value=""  name=se7>External interfaces.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of COCOMO model? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=se8>Common Cost Model
<br>
<input type=radio Value=""  name=se8>Comersial Constructive Model
<br>
<input type=radio Value=""  name=se8>Cummilative Cost Model
<br>
<input type=radio Value="4"  name=se8>Constructive Cost Model
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What types of Resource available in the Project Management? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=se9>One type (Human Resource)
<br>
<input type=radio Value=""  name=se9>Two types (Human Resource, Hardware Resource)
<br>
<input type=radio Value="3"  name=se9>Three types (Human Resource, Hardware Resource, Software Resource)
<br>
<input type=radio Value=""  name=se9>Four types (Human Resource, Hardware Resource, Software Resource, Customer Resource)
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;The classic life-cycle paradigm is sometimes called as &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=se10>Spiral model
<br>
<input type=radio Value=""  name=se10>COCOMO model
<br>
<input type=radio Value=""  name=se10>Top-down model
<br>
<input type=radio Value="4"  name=se10>Waterfall model
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 

else if($r == "SS") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>System Software</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Define System Software? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ss1>System Software is a collection of programs used to assists the system to perform related works.
<br>
<input type=radio Value=""  namess1>System Software is a collection of programs used to assists the system to perform defferent works.
<br>
<input type=radio Value=""  name=ss1>System Software is a collection of data used to assists the system to perform related works.
<br>
<input type=radio Value=""  name=ss1>System Software is a collection of programs used to assists the system to developed related works.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;The language in the form 1's & 0's called  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ss2>Assembly language
<br>
<input type=radio Value=""  name=ss2>Numeric language
<br>
<input type=radio Value=""  name=ss2>Alphanumeric language
<br>
<input type=radio Value="4"  name=ss2>Machine language
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;How many tasks has the lexical phase? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ss3>Two
<br>
<input type=radio Value="2"  name=ss3>Three
<br>
<input type=radio Value=""  name=ss3>Four
<br>
<input type=radio Value=""  name=ss3>Five
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which one is a component of System Software? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ss4>MBR
<br>
<input type=radio Value=""  name=ss4>MAR
<br>
<input type=radio Value=""  name=ss4>Add
<br>
<input type=radio Value="4"  name=ss4>Loaders
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;BALR are used for what ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ss5>It is used to compile the base register.
<br>
<input type=radio Value="2"  name=ss5>It is used to loading the base register.
<br>
<input type=radio Value=""  name=ss5>It is used to assemble the base register.
<br>
<input type=radio Value=""  name=ss5>It is used to testing the base register.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Define System Software? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ss6>System Software is a collection of programs used to assists the system to perform related works.
<br>
<input type=radio Value=""  name=ss6>System Software is a collection of programs used to assists the system to perform defferent works.
<br>
<input type=radio Value=""  name=ss6>System Software is a collection of data used to assists the system to perform related works.
<br>
<input type=radio Value=""  name=ss6>System Software is a collection of programs used to assists the system to developed related works.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;The language in the form 1's & 0's called  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ss7>Assembly language
<br>
<input type=radio Value=""  name=ss7>Numeric language
<br>
<input type=radio Value=""  name=ss7>Alphanumeric language
<br>
<input type=radio Value="4"  name=ss7>Machine language
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;How many tasks has the lexical phase? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ss8>Two
<br>
<input type=radio Value="2"  name=ss8>Three
<br>
<input type=radio Value=""  name=ss8>Four
<br>
<input type=radio Value=""  name=ss8>Five
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which one is a component of System Software? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ss9>MBR
<br>
<input type=radio Value=""  name=ss9>MAR
<br>
<input type=radio Value=""  name=ss9>Add
<br>
<input type=radio Value="4"  name=ss9>Loaders
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;BALR are used for what ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=ss10>It is used to compile the base register.
<br>
<input type=radio Value="2"  name=ss10>It is used to loading the base register.
<br>
<input type=radio Value=""  name=ss10>It is used to assemble the base register.
<br>
<input type=radio Value=""  name=ss10>It is used to testing the base register.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 

else if($r == "COBOL") { ?>
<script src="score.js"></script>
<script>

var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Business Data Processing COBOL</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Is COBOL is platform independent ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=d1>No
<br>
<input type=radio Value="2"  name=d1>Yes
<br>
<input type=radio Value=""  name=d1>Not exactly
<br>
<input type=radio Value=""  name=d1>Some Computers it is Indepent
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which level language is COBOL ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=d2>Assembly language
<br>
<input type=radio Value=""  name=d2>Low level language
<br>
<input type=radio Value="3"  name=d2>High level language
<br>
<input type=radio Value=""  name=d2>Middle level language
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;In which position we write program in the COBOL compilar ?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=d3>5
<br>
<input type=radio Value=""  name=d3>6
<br>
<input type=radio Value="3"  name=d3>7
<br>
<input type=radio Value=""  name=d3>8
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which comes first? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=d4>HALT
<br>
<input type=radio Value=""  name=d4>PROCEDURAL
<br>
<input type=radio Value=""  name=d4>PROGRAM
<br>
<input type=radio Value="4"  name=d4>IDENTIFICATION
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Is COBOL a programming language? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=d5>No
<br>
<input type=radio Value="2"  name=d5>Yes
<br>
<input type=radio Value=""  name=d5>Not exactly
<br>
<input type=radio Value=""  name=d5>It is a operating system
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Is COBOL is platform independent ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=d6>No
<br>
<input type=radio Value="2"  name=d6>Yes
<br>
<input type=radio Value=""  name=d6>Not exactly
<br>
<input type=radio Value=""  name=d6>Some Computers it is Indepent
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which level language is COBOL ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=d7>Assembly language
<br>
<input type=radio Value=""  name=d7>Low level language
<br>
<input type=radio Value="3"  name=d7>High level language
<br>
<input type=radio Value=""  name=d7>Middle level language
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;In which position we write program in the COBOL compilar ?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=d8>5
<br>
<input type=radio Value=""  name=d8>6
<br>
<input type=radio Value="3"  name=d8>7
<br>
<input type=radio Value=""  name=d8>8
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which comes first? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=d9>HALT
<br>
<input type=radio Value=""  name=d9>PROCEDURAL
<br>
<input type=radio Value=""  name=d9>PROGRAM
<br>
<input type=radio Value="4"  name=d9>IDENTIFICATION
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Is COBOL a programming language? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=d10>No
<br>
<input type=radio Value="2"  name=d10>Yes
<br>
<input type=radio Value=""  name=d10>Not exactly
<br>
<input type=radio Value=""  name=d10>It is a operating system
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 

else if($r == "SAD") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>System Analysis & Design</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What do you mean by SDLC ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=sad1>Source destination life cycle
<br>
<input type=radio Value=""  name=sad1>System destination life cycle
<br>
<input type=radio Value="3"  name=sad1>System development life cycle
<br>
<input type=radio Value=""  name=sad1>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of DFD ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=sad2>Data flow dictionary
<br>
<input type=radio Value="2"  name=sad2>Data flow diagram
<br>
<input type=radio Value=""  name=sad2>Data force diagram
<br>
<input type=radio Value=""  name=sad2>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form od DD ?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=sad3>Document Dictionary
<br>
<input type=radio Value=""  name=sad3>Demand Draft
<br>
<input type=radio Value="3"  name=sad3>Data Dictionary
<br>
<input type=radio Value=""  name=sad3>None of this
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of SE ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=sad4>Software Engineering
<br>
<input type=radio Value="2"  name=sad4>Structured English
<br>
<input type=radio Value=""  name=sad4>Source English
<br>
<input type=radio Value=""  name=sad4>None of this
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;How many types of classification has cost and benefits? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=sad5>One
<br>
<input type=radio Value=""  name=sad5>Two
<br>
<input type=radio Value="3"  name=sad5>Three
<br>
<input type=radio Value=""  name=sad5>Four
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What do you mean by SDLC ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=sad6>Source destination life cycle
<br>
<input type=radio Value=""  name=sad6>System destination life cycle
<br>
<input type=radio Value="3"  name=sad6>System development life cycle
<br>
<input type=radio Value=""  name=sad6>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of DFD ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=sad7>Data flow dictionary
<br>
<input type=radio Value="2"  name=sad7>Data flow diagram
<br>
<input type=radio Value=""  name=sad7>Data force diagram
<br>
<input type=radio Value=""  name=sad7>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form od DD ?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=sad8>Document Dictionary
<br>
<input type=radio Value=""  name=sad8>Demand Draft
<br>
<input type=radio Value="3"  name=sad8>Data Dictionary
<br>
<input type=radio Value=""  name=sad8>None of this
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of SE ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=sad9>Software Engineering
<br>
<input type=radio Value="2"  name=sad9>Structured English
<br>
<input type=radio Value=""  name=sad9>Source English
<br>
<input type=radio Value=""  name=sad9>None of this
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;How many types of classification has cost and benefits? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=sad10>One
<br>
<input type=radio Value=""  name=sad10>Two
<br>
<input type=radio Value="3"  name=sad10>Three
<br>
<input type=radio Value=""  name=sad10>Four
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</form>
<?php } 

else if($r == "JAVA") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Java Programming & Web Page Development</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is full form of jdk ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=j1>Java dictionary kit
<br>
<input type=radio Value=""  name=j1>Java description kit
<br>
<input type=radio Value="3"  name=j1>Java devolpment kit
<br>
<input type=radio Value=""  name=j1>None of this.
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the function of java compiler ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=j2>Its transalates the java source code into its bytecode
<br>
<input type=radio Value=""  name=j2>Its transalates the java bytecode into its source code
<br>
<input type=radio Value="3"  name=j2>Its interpreter executes the class file which is generated by compiler
<br>
<input type=radio Value=""  name=j2>Its java debugger jdb.exe enables to bebug our java program
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is Java Virtual Machine ? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=j3>Its a key addition to JDK1.1 is support for JavaBeans, a component model for java
<br>
<input type=radio Value="2"  name=j3>Its sits,metaphorically, between the java program and the machine it is running
<br>
<input type=radio Value=""  name=j3>It is capable od Dynamically linking in new class libraries, methods and objects
<br>
<input type=radio Value=""  name=j3>It is used to run java applets
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Who developed Java? &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=j4>James Gosling
<br>
<input type=radio Value=""  name=j4>Dennis Ritchie
<br>
<input type=radio Value=""  name=j4>Newton
<br>
<input type=radio Value=""  name=j4>Pascal
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;In which year Java was developed?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=j5>1991<br>
<input type=radio Value=""  name=j5>1990<br>
<input type=radio Value=""  name=j5>1997<br>

<input type=radio Value=""  name=j5>1995<br>
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;Which company developed Java?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=j6>Sun Microsystems<br>
<input type=radio Value=""  name=j6>TechTrend<br>
<input type=radio Value=""  name=j6>Microsoft Corporation<br>

<input type=radio Value=""  name=j6>Intel Corporation<br>
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp; What is the full form of JVM?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=j7> Java Virtual Machine <br>
<input type=radio Value=""  name=j7> Java Visual Machine <br>
<input type=radio Value=""  name=j7> Java Visual Memory<br>
<input type=radio Value=""  name=j7> Java Virtual Memory<br>
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp; Which function is used to compile a java program?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=j8> Javac <br>
<input type=radio Value=""  name=j8> Javah <br>
<input type=radio Value=""  name=j8> Java<br>
<input type=radio Value=""  name=j8> Javadoc<br>
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp; What function is used to print the output of a java file?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=j9> System.out.println <br>
<input type=radio Value=""  name=j9> Out.println <br>
<input type=radio Value=""  name=j9> Readln <br>
<input type=radio Value=""  name=vj3> Writeln <br>
<div align="center"><input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'"></div>
</div>
<div>&nbsp;</div>
</fieldset>
</form>
<?php } 
else if ($r == "CN") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Computer Networks</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of TCP/IP ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn1>Transfer Common Protocol / Intranet Protocol
<br>
<input type=radio Value="2"  name=cn1>Transmission Control Protocol / Internet Protocol
<br>
<input type=radio Value=""  name=cn1>Text Control Protocol / Internet Protocol
<br>
<input type=radio Value=""  name=cn1>Tele Common Protocol / Intranet Protocol
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of MIME ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn2>Multiple Internet mail Extention
<br>
<input type=radio Value="2"  name=cn2>Multipurpose Internet mail Extention
<br>
<input type=radio Value=""  name=cn2>Multimedia Internet mail Extention
<br>
<input type=radio Value=""  name=cn2>Multiple Intranet mail Extention
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of SMTP ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn3>Significant mail transmission protocol
<br>
<input type=radio Value="2"  name=cn3>Simple mail transmission protocol
<br>
<input type=radio Value=""  name=cn3>Short mail transmission protocol
<br>
<input type=radio Value=""  name=cn3>Simple mail transfer protocol
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of DHCP ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=cn4>Dynamic host configaration protocol
<br>
<input type=radio Value=""  name=cn4>Dynamic horizantal configaration protocol
<br>
<input type=radio Value=""  name=cn4>Dynamic host confirm protocol
<br>
<input type=radio Value=""  name=cn4>Domain host confirm protocol
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of FQDN ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn5>Fixed Qualified Domain Name
<br>
<input type=radio Value=""  name=cn5>Fixed Quantity Domain Name
<br>
<input type=radio Value=""  name=cn5>Fully Quantity Domain Name
<br>
<input type=radio Value="4"  name=cn5>Fully Qualified Domain Name
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of SMTP ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn6>Significant mail transmission protocol
<br>
<input type=radio Value="2"  name=cn6>Simple mail transmission protocol
<br>
<input type=radio Value=""  name=cn6>Short mail transmission protocol
<br>
<input type=radio Value=""  name=cn6>Simple mail transfer protocol
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of MIME ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn7>Multiple Internet mail Extention
<br>
<input type=radio Value="2"  name=cn7>Multipurpose Internet mail Extention
<br>
<input type=radio Value=""  name=cn7>Multimedia Internet mail Extention
<br>
<input type=radio Value=""  name=cn7>Multiple Intranet mail Extention
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of MIME ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn8>Multiple Internet mail Extention
<br>
<input type=radio Value="2"  name=cn8>Multipurpose Internet mail Extention
<br>
<input type=radio Value=""  name=cn8>Multimedia Internet mail Extention
<br>
<input type=radio Value=""  name=cn8>Multiple Intranet mail Extention
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of SMTP ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=cn9>Significant mail transmission protocol
<br>
<input type=radio Value="2"  name=cn9>Simple mail transmission protocol
<br>
<input type=radio Value=""  name=cn9>Short mail transmission protocol
<br>
<input type=radio Value=""  name=cn9>Simple mail transfer protocol
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of DHCP ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=cn10>Dynamic host configaration protocol
<br>
<input type=radio Value=""  name=cn10>Dynamic horizantal configaration protocol
<br>
<input type=radio Value=""  name=cn10>Dynamic host confirm protocol
<br>
<input type=radio Value=""  name=cn10>Domain host confirm protocol
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center">
<input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'">
</div>
</form>
<?php } 
else if ($r == "ADA") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Analysis and Design of Algorithms</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of ADA?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ada1>Analysis and design of algorithm
<br>
<input type=radio Value=""  name=ada1>Design and analysis of algorithm
<br>
<input type=radio Value=""  name=ada1>Defining and designing of algorithm
<br>
<input type=radio Value=""  name=ada1>Developing and analysis of algorithm
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;How many types of asymptotic notations are there ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ada2>4
<br>
<input type=radio Value=""  name=ada2>5
<br>
<input type=radio Value=""  name=ada2>6
<br>
<input type=radio Value=""  name=ada>3
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;How many types of complexities are there?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ada3>2
<br>
<input type=radio Value=""  name=ada3>3
<br>
<input type=radio Value=""  name=ada3>4
<br>
<input type=radio Value=""  name=ada3>6
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What are the 2 types that is used to represent Horner’s polynomial?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ada4>Dense & Sparse
<br>
<input type=radio Value=""  name=ada4>Density and Speed
<br>
<input type=radio Value=""  name=ada4>Developing & Analyzing
<br>
<input type=radio Value=""  name=ada4>Deploy & Separate
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of D And C?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ada5>Divide and Conquer
<br>
<input type=radio Value=""  name=ada5>Dense and conquer
<br>
<input type=radio Value=""  name=ada5>Divide and catch
<br>
<input type=radio Value=""  name=ada5>Develop and conquer
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of BFS?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ada6>Breadth first Search
<br>
<input type=radio Value=""  name=ada6>Dense and conquer
<br>
<input type=radio Value=""  name=ada6>Divide and catch
<br>
<input type=radio Value=""  name=ada6>Develop and conquer
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What is the full form of ADA?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ada7>Analysis and design of algorithm
<br>
<input type=radio Value=""  name=ada7>Design and analysis of algorithm
<br>
<input type=radio Value=""  name=ada7>Defining and designing of algorithm
<br>
<input type=radio Value=""  name=ada7>Developing and analysis of algorithm
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;How many types of asymptotic notations are there ?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ada8>4
<br>
<input type=radio Value=""  name=ada8>5
<br>
<input type=radio Value=""  name=ada8>6
<br>
<input type=radio Value=""  name=ada8>3
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;How many types of complexities are there?  &nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ada9>2
<br>
<input type=radio Value=""  name=ada9>3
<br>
<input type=radio Value=""  name=ada9>4
<br>
<input type=radio Value=""  name=ada9>6
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What are the 2 types that is used to represent Horner’s polynomial?&nbsp;</b>
</legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=ada10>Dense & Sparse
<br>
<input type=radio Value=""  name=ada10>Density and Speed
<br>
<input type=radio Value=""  name=ada10>Developing & Analyzing
<br>
<input type=radio Value=""  name=ada10>Deploy & Separate
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center">
<input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'">
</div>
</form>
<?php } 
else if ($r == "SM") { ?>
<script src="score.js"></script>
<script>

var clval=document.cookie.split("=")
var ckvl=clval[1].split(";")
//alert(ckvl[0])
if(ckvl[0]!="start"){
alert("Can't take exam again !")
location.href="Login.htm"
}
var iCnt=60
var tmr=null
function window.onload(){
	
	iCnt--
	eTime.innerHTML="Time Remaining: <b style=color:red>" + iCnt + "</b> Sec "
	if (iCnt==0){
		alert("Time Out !")
		iCnt=0
		window.clearInterval(tmr)
		document.forms[0].method="POST"
		document.forms[0].action="result.php"
		document.forms[0].submit()
	}
	
	
    tmr=setTimeout("window.onload()",1000)
}

</script>
<form action="result.php?username=<?php echo $username; ?>&semester=<?php echo $semester; ?>" method="post" name="frm">
<div align="center" style="FONT-FAMILY: arial;font-size:20;color:green"><b>Simulation and Modelling</b></div>
<div align="right" id="eTime" style="font-size:13"></div>
<br>
<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What are the two types of models?&nbsp;</b></legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=sim1>
Physical  and mathematical<br>
<input type=radio Value=""  name=sim1>
Personal and dynamic<br>
<input type=radio Value=""  name=sim1>
Static and numerical<br>
<input type=radio Value=""  name=sim1>
Analytical and physical</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What are 2 types of systems?&nbsp;</b></legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=sim2>
Endogenous and exogenous<br>
<input type=radio Value=""  name=sim2>
Physical and mathematical<br>
<input type=radio Value=""  name=sim2>
Static and dynamic<br>
<input type=radio Value=""  name=sim2>
Analytical &amp; numerical</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">What are 2 types of activities?  &nbsp;</b></legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=sim3>
Stochastic and deterministic<br>
<input type=radio Value=""  name=sim3>
Physical and analytical<br>
<input type=radio Value=""  name=sim3>
Continuous and discrete<br>
<input type=radio Value=""  name=sim3>
Endogenous &amp; exogenous</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">Which language is used to write simulation programs?&nbsp;</b></legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=sim4>
Sim script<br>
<input type=radio Value=""  name=sim4>
C
<br>
<input type=radio Value=""  name=sim4>
C++
<br>
<input type=radio Value=""  name=sim4>
COBOL
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What are 2 types of oriented simulation?&nbsp;</b></legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=sim5>
Event and interval<br>
<input type=radio Value=""  name=sim5>
Physical and mathematical<br>
<input type=radio Value=""  name=sim5>
Static and dynamic<br>
<input type=radio Value=""  name=sim5>
Analytical &amp; numerical</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">What are 2 types of activities?</b></legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=sim6>
Stochastic and deterministic<br>
<input type=radio Value=""  name=sim6>
Physical and analytical<br>
<input type=radio Value=""  name=sim6>
Continuous and discrete<br>
<input type=radio Value=""  name=sim6>
Endogenous &amp; exogenous</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What are the two types of models?&nbsp;</b></legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=sim7>
Physical  and mathematical<br>
<input type=radio Value="1"  name=sim7>
Personal and dynamic<br>
<input type=radio Value=""  name=sim7>
Static and numerical<br>
<input type=radio Value=""  name=sim7>
Analytical and physical</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What are 2 types of activities?  &nbsp;</b></legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=sim8>
Stochastic and deterministic<br>
<input type=radio Value=""  name=sim8>
Physical and analytical<br>
<input type=radio Value=""  name=sim8>
Continuous and discrete<br>
<input type=radio Value=""  name=sim8>

Endogenous &amp; exogenous</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What are 2 types of systems?</b></legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value=""  name=sim9>
Endogenous and exogenous<br>
<input type=radio Value="1"  name=sim9>
Physical and mathematical<br>
<input type=radio Value=""  name=sim9>
Static and dynamic<br>
<input type=radio Value=""  name=sim9>
Analytical &amp; numerical</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>

<fieldset width="500">
<legend><b style="font-size:17;color:green">&nbsp;What are 2 types of oriented simulation?&nbsp;</b></legend>
<div style="font-size:8">&nbsp;</div>
<div style="padding-left:12">
<input type=radio Value="1"  name=sim10>
Event and interval<br>
<input type=radio Value=""  name=sim10>
Physical and mathematical<br>
<input type=radio Value=""  name=sim10>
Static and dynamic<br>
<input type=radio Value=""  name=sim10>
None of the above
</div>
<div>&nbsp;</div>
</fieldset>
<br>
<br>
<div align="center">
<input type="submit" class="" name="button" value="Submit" style="cursor:hand;border:1 black solid;background-color:white;width:150" onMouseOver="this.style.color='magenta'" onMouseOut="this.style.color='black'">
</div>
</form> 
<?php 
}
include 'sessionlive.php';?>

<P>&nbsp;</P>

</BODY>
</HTML>
