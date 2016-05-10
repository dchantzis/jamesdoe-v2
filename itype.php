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
		<tr><td height="" align="center" valign="middle" colspan="3"><?php if ($_GET["err1"]==1) { echo "<span class='error'>a type with this id already exists</span>"; } ?></td></tr>
		<form name="itf" id="itf" action="./code.php?type=7" method="post">
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">type id: </span></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="tid" name="tid" style="width:111px" maxlength="2" onkeyup="number_check1();" value="<?=$_SESSION["tid"] ?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err2"]==2) { echo "<span class='error'>enter id</span>"; } ?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">type name: </span></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="tname" name="tname" style="width:111px" maxlength="30" value="<?=$_SESSION["tname"] ?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err3"]==3) { echo "<span class='error'>enter name</span>"; } ?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">type for: </span></td>
			<td width="112" height="" align="left" valign="middle"><input type="radio" name="kind" id="kind" STYLE="background-color: #000000;" value="images"><span class='comments'>images</span></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err4"]==4) { echo "<span class='error'>choice type</span>"; } ?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;</td>
			<td width="112" height="" align="left" valign="middle"><input type="radio" name="kind" id="kind" STYLE="background-color: #000000;" value="links"><span class='comments'>links</span></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;</td>
			<td width="112" height="" align="center" valign="middle"><input name="submit" id="submit" type="submit" style="width:111px" value="submit"></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td height="" align="right" valign="middle" colspan="3"><br><a href="./utypes.php" target="_self" class="secondary">back .:</a><a href="./code.php?type=4" target="_self" class="secondary">:. exit</a></td>
		</tr>
		</form>
	</table>
	
	

</body>
</html>
