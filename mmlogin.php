<?php require("./code.php"); ?>
<html>
<head>
<title>.:James Doe:.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7">
<script language="JavaScript" type="text/JavaScript" src="./scripts/js_00.js"></script>
<link rel="stylesheet" type="text/css" href="./scripts/style.css">
</head>


<body bgcolor="#000000">
	<table width="399" height="" cellpadding="1" cellspacing="3" border="0" bordercolor="#000000" bgcolor="">
		<tr>
			<td height="" align="center" valign="middle"><img src="./images/layout/other/master_mode.gif" width="350" height="75">
		</tr>
	</table>
	
	<table width="399" height="" cellpadding="1" cellspacing="3" border="0" bordercolor="#000000" bgcolor="">
		<tr>
			<td height="20" align="center" valign="middle" colspan="3">
			<?php 	if ($_GET["err"]==1) { echo "<span class='error'>wrong password</span>";}
					elseif ($_GET["err"]==2) { echo "<span class='error'>error</span>"; }
			?>
			</td>
		</tr>
		<form name="mml" id="mml" action="./code.php?type=3" method="post">
			<tr>
				<td width="125" height="" align="right" valign="middle"><span class="comments">username:</span></td>
				<td width="112" height="" align="center" valign="middle"><input type="text" id="username" name="username" style="width:108px" maxlength="30"></td>
				<td width="142" height="" align="center" valign="middle">&nbsp;</td>
			</tr>
			<tr>
				<td width="125" height="" align="right" valign="middle"><span class="comments">password:</span></td>
				<td width="112" height="" align="center" valign="middle">
					<input type="password" id="password01" name="password01" style="width:30px" maxlength="4">
					<input type="password" id="password02" name="password02" style="width:30px" maxlength="4">
					<input type="password" id="password02" name="password03" style="width:30px" maxlength="4">
				</td>
				<td width="142" height="" align="left" valign="middle">&nbsp;</td>
			</tr>
			<tr>
				<td width="125" height="" align="left" valign="middle">&nbsp;</td>
				<td width="112" height="" align="center" valign="middle"><input name="submit" id="submit" type="submit" style="width:100px" value="enter master"></td>
				<td width="142" height="" align="left" valign="middle">&nbsp;</td>
			</tr>
			<tr>
				<td height="" align="right" valign="top" colspan="3"><br><a href="./code.php?type=4" target="_self" class="secondary">exit</a></td>
			</tr>
		</form>
	</table>
	
	

</body>
</html>
