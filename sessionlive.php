<HTML>
<HEAD>
<STYLE LANGUAGE="text/css">
<!--
.style1 {font-family: Verdana, Arial, sans-serif}
.style1 {font-size:smaller}
.a{width:50;height:25;color:black;background-color:skyblue;font-size:15;font-family:arial}
-->
</STYLE>
</HEAD>
<BODY>
<DIV CLASS="style1">
<?php 
	echo "<B>Session Details :<BR>-----------------</B><BR>";
	echo "<B>Username :</B> ".$username."<BR>"."<B>Semester :</B> ".$semester."<BR>"."<B>Session Status :</B> Alive";

echo "<BR>";
echo "<B>Session Logout :</B>";
echo " <A HREF='sessiondestroy.php?username=$username&semester=$semester'>Logout</A>"; 
?>
</DIV>
</BODY>
</HTML>