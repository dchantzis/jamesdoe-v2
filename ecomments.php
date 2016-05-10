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
		<form id="fr01" name="fr01" action="./code.php?type=12" method="post">
		<tr>
			<td width=125"" height="" align="right" valign="middle">&nbsp;<span class="comments">select name: </span></td>
			<td width="112" height="" align="left" valign="middle"><?php comment_names_combo_box() ?></td>
			<td width="142" height="" align="left" valign="middle"><input name="submit" id="submit" type="submit" style="width:108px" value="find"></td>
		</tr>
		</form>
		<tr>
			<td width=125"" height="" align="right" valign="middle">&nbsp;</td>
			<td width="112" height="" align="left" valign="middle"><?php if($_GET["err6"]==6) { echo "<span class='error'>choose name</span>"; } ?></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<form name="fr02" id="fr02" action="./code.php?type=13" method="post">
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">headline: </span></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="cheadline" name="cheadline" style="width:108px" maxlength="20" value="<?=$_SESSION["cheadline"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if($_GET["err2"]==2) { echo "<span class='error'>enter headline</span>"; } ?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">name: </span></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="cname" name="cname" style="width:108px" maxlength="80" value="<?=$_SESSION["cname"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if($_GET["err3"]==3) { echo "<span class='error'>enter url</span>"; } ?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">e-mail: </span></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="cemail" name="cemail" style="width:108px" maxlength="30" value="<?=$_SESSION["cemail"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if($_GET["err4"]==4) { echo "<span class='error'>enter email</span>"; } ?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">comment: </span></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="ccomments" name="ccomments" style="width:108px" maxlength="30" value="<?=$_SESSION["ccomments"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if($_GET["err5"]==5) { echo "<span class='error'>choose type</span>"; } ?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;</td>
			<td width="112" height="" align="left" valign="middle"><input name="submit" id="submit" type="submit" style="width:108px" value="delete"></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td height="" align="right" valign="middle" colspan="3"><br><a href="./ucomments.php" target="_self" class="secondary">back .:</a><a href="./code.php?type=4" target="_self" class="secondary">:. exit</a></td>
		</tr>
		</form>
	</table>
	
	

</body>
</html>
