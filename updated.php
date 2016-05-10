<?php
	session_start();
	if (!isset($_SESSION["password"]) || $_SESSION["password"] == "") 
	{
		header('Location: ./mmlogin.php');
		exit;
	}
?>
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

		<? if ($_GET["id"]==1) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>new blog entry inserted</span></td></tr>"; }?>
		<? if ($_GET["id"]==2) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>blog entry deleted</span></td></tr>"; }?>
		<? if ($_GET["id"]==3) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>new image inserted</span></td></tr>"; }?>
		<? if ($_GET["id"]==4) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>image deleted</span></td></tr>"; }?>
		<? if ($_GET["id"]==5) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>new link inserted</span></td></tr>"; }?>
		<? if ($_GET["id"]==6) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>link deleted</span></td></tr>"; }?>
		<? if ($_GET["id"]==7) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>new type inserted</span></td></tr>"; }?>
		<? if ($_GET["id"]==8) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>type deleted</span></td></tr>"; }?>
		<? if ($_GET["id"]==11) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>link updated</span></td></tr>"; }?>
		<? if ($_GET["id"]==12) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>comment deleted</span></td></tr>"; }?>
		<? if ($_GET["id"]==13) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>image updated</span></td></tr>"; }?>		
		<? if ($_GET["id"]==14) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>blog entry updated</span></td></tr>"; }?>		
		<? if ($_GET["id"]==15) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>update entry inserted</span></td></tr>"; }?>	
		<? if ($_GET["id"]==16) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>update entry updated</span></td></tr>"; }?>			
		<? if ($_GET["id"]==17) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>recommendation entry inserted</span></td></tr>"; }?>
		<? if ($_GET["id"]==18) { echo "<tr><td width='270' height='20' align='center' valign='middle' colspan='3'><span class='comments'>recommendation entry updated</span></td></tr>"; }?>
		<tr>
			<td width="" height="" align="right" valign="middle" colspan="3"><br><a href="./mmode.php" target="_self" class="secondary">back .:</a><a href="./code.php?type=4" target="_self" class="secondary">:. exit</a></td>
		</tr>
	</table>
	
	

</body>
</html>
