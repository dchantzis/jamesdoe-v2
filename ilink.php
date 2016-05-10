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
		<tr><td height="" align="center" valign="middle" colspan="3"><?php if ($_GET["err1"]==1) { echo "<span class='error'>a link with this url already exists</span>"; }?></td></tr>
		<form name="ilf" id="ilf" action="./code.php?type=5" method="post">
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">link name: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="lname" name="lname" style="width:120px" maxlength="50" value="<?=$_SESSION["lname"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err2"]==2) { echo "<span class='error'>enter name</span>"; }?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">link url: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="lurl" name="lurl" style="width:120px" maxlength="100" value="<?=$_SESSION["lurl"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err3"]==3) { echo "<span class='error'>enter url</span>"; }?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">link comments: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="lcomments" name="lcomments" style="width:120px" maxlength="30" value="<?=$_SESSION["lcomments"]?>"></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">link type: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><?php types_combo_box("link"); ?></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err5"]==5) { echo "<span class='error'>choose type</span>"; }?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;</td>
			<td width="112" height="" align="left" valign="middle"><input name="submit" id="submit" type="submit" style="width:120px" value="submit"></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td height="" align="right" valign="middle" colspan="3"><br><a href="./ulinks.php" target="_self" class="secondary">back .:</a><a href="./code.php?type=4" target="_self" class="secondary">:. exit</a></td>
		</tr>
		</form>
	</table>
	
	

</body>
</html>
