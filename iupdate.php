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

		<form name="iuf" id="iuf" action="./code.php?type=18" method="post">
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">update headline: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="uheadline" name="uheadline" style="width:108px" maxlength="500" value="<?=$_SESSION["uheadline"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err1"]==1) { echo "<span class='error'>enter headline</span>"; }?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">update notes: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="unotes" name="unotes" style="width:108px" maxlength="900" value="<?=$_SESSION["unotes"];?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err2"]==2) { echo "<span class='error'>enter notes</span>"; }?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;</td>
			<td width="112" height="" align="left" valign="middle"><input name="submit" id="submit" type="submit" style="width:108px" value="submit"></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td height="" align="right" valign="middle" colspan="3"><br><a href="./uupdates.php" target="_self" class="secondary">back .:</a><a href="./code.php?type=4" target="_self" class="secondary">:. exit</a></td>
		</tr>
		</form>
	</table>
	
	

</body>
</html>
