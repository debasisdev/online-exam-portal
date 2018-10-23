<html>
<head>
<title>Login!!!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px;} 
.style1 {font-size: 12px}
.style2 {font-size: 8px}
.style2 {color: #FF0000}
-->
</style>
</head>
<body bgcolor="#ebeaea" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table id="Table_01" width="1025" height="769" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="2">
			<img src="images_login/login_01.gif" width="114" height="120" alt=""></td>
		<td colspan="2">
			<img src="images_login/login_02.gif" width="157" height="120" alt=""></td>
		<td colspan="2">
			<img src="images_login/login_03.gif" width="159" height="120" alt=""></td>
		<td colspan="3">
			<img src="images_login/login_04.gif" width="149" height="120" alt=""></td>
		<td colspan="2">
			<img src="images_login/login_05.gif" width="147" height="120" alt=""></td>
		<td colspan="2">
			<img src="images_login/login_06.gif" width="130" height="120" alt=""></td>
		<td colspan="2">
			<img src="images_login/login_07.gif" width="168" height="120" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="120" alt=""></td>
	</tr>
	<tr>
		<td colspan="15">
			<img src="images_login/login_08.gif" width="1024" height="16" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="welcome.html"><img src="images_login/login_09.gif" name="btn1" width="114" height="107" border="0" id="btn1" onMouseOver="btn1.src='images_login/login1_09.gif'" onMouseOut="btn1.src='images_login/login_09.gif'"></a></td>
		<td colspan="12" rowspan="3">
			<img src="images_login/login_10.gif" width="786" height="224" alt=""></td>
		<td rowspan="15">
			<img src="images_login/login_11.gif" width="124" height="632" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="107" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images_login/login1_12.gif" width="114" height="98" border="0" class="style1"></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="98" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">
			<a href="exam.php"><img src="images_login/login_13.gif" name="btn3" width="114" height="103" border="0" id="btn3" onMouseOver="btn3.src='images_login/login1_13.gif'" onMouseOut="btn3.src='images_login/login_13.gif'"></a></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="19" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="4">
			<img src="images_login/login_14.gif" width="261" height="179" alt=""></td>
	  <td colspan="6" rowspan="3">
	  <form action="loginprocess.php" method="post" enctype="multipart/form-data" name="frm_login">
	<table width="339" border="0" align="left">
  <tr>
    <td width="137"><div align="right"><span class="style1">Username</span></div></td>
    <td width="192"><input name="username" type="text" id="username"></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style1">Password</span></div></td>
    <td><input name="password" type="password" id="password"></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style1">Semester</span></div></td>
    <td><select name="semester">
      <option selected>1st Semester</option>
      <option>2nd Semester</option>
      <option>3rd Semester</option>
      <option>4th Semester</option>
      <option>5th Semester</option>
      <option>6th Semester</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div class="style2"><b>
      <?php $erruseriddecode=base64_decode($erruserid); echo $erruseriddecode;?>
    </b></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><img src="images_login/login_21.gif" name="btn6" width="55" height="25" id="btn6" onClick="document.frm_login.submit();return false;" onMouseOver="btn6.src='images_login/login1_21.gif'" onMouseOut="btn6.src='images_login/login_21.gif'"></td>
  </tr>
</table></form></td>
		<td colspan="3" rowspan="7">
			<img src="images_login/login_16.gif" width="174" height="268" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="84" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images_login/login_17.gif" width="113" height="4" alt=""></td>
		<td>
			<img src="images_login/login_18.gif" width="1" height="4" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="4" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="4">
			<a href="contact.html"><img src="images_login/login_19.gif" name="btn4" width="114" height="100" border="0" id="btn4" onMouseOver="btn4.src='images_login/login1_19.gif'" onMouseOut="btn4.src='images_login/login_19.gif'"></a></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="74" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="8">
			<img src="images_login/login_20.gif" width="109" height="160" alt=""></td>
		<td rowspan="2" width="">&nbsp;</td>
		<td colspan="3" rowspan="4">
			<img src="images_login/login_22.gif" width="187" height="106" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="17" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images_login/login_23.gif" width="1" height="96" alt=""></td>
		<td colspan="2" rowspan="7">
			<img src="images_login/login_24.gif" width="260" height="143" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="8" alt=""></td>
	</tr>
	<tr>
		<td rowspan="6">
			<img src="images_login/login_25.gif" width="55" height="135" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<a href="aboutus.html"><img src="images_login/login_26.gif" name="btn5" width="113" height="96" border="0" id="btn5" onMouseOver="btn5.src=&quot;images_login/login1_22.gif&quot;" onMouseOut="btn5.src=&quot;images_login/login_26.gif&quot;"></a></td>
		<td rowspan="2">
			<img src="images_login/login_27.gif" width="1" height="87" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="80" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="4">
			<img src="images_login/login_28.gif" width="117" height="54" alt=""></td>
		<td colspan="2" rowspan="3">
			<a href="register.php"><img src="images_login/login_29.gif" name="btn7" width="98" height="26" border="0" id="btn7" onMouseOver="btn7.src=&quot;images_login/login1_29.gif&quot;" onMouseOut="btn7.src=&quot;images_login/login_29.gif&quot;"></a></td>
		<td colspan="2" rowspan="4">
			<img src="images_login/login_30.gif" width="146" height="54" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="7" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images_login/login_31.gif" width="2" height="9" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="9" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="3">
			<img src="images_login/login_32.gif" width="115" height="124" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="10" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images_login/login_33.gif" width="98" height="28" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="28" alt=""></td>
	</tr>
	<tr>
		<td colspan="11">
			<img src="images_login/login_34.gif" width="785" height="86" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="86" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images_login/spacer.gif" width="113" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="156" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="104" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="55" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="54" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="55" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="40" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="77" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="70" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="28" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="102" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="44" height="1" alt=""></td>
		<td>
			<img src="images_login/spacer.gif" width="124" height="1" alt=""></td>
		<td></td>
	</tr>
</table>
</body>
</html>

