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
		<tr><td width="400" height="" align="center" valign="middle" colspan="3"><?php if ($_GET["err1"]==1) { echo "<span class='error'>an image with this url already exists</span>"; }?></td></tr>
		<form id="eif" name="eif" action="./code.php?type=14" method="post">
		<tr>
			<td width=125"" height="" align="right" valign="middle">&nbsp;<span class="comments">select image name: </span></td>
			<td width="112" height="" align="left" valign="middle"><?php images_names_combo_box(); ?></td>
			<td width="142" height="" align="left" valign="middle"><input name="submit" id="submit" type="submit" style="width:120px" value="find"></td>
		</tr>
		</form>
		<tr>
			<td width=125"" height="" align="right" valign="middle">&nbsp;</td>
			<td width="112" height="" align="left" valign="middle"><?php if ($_GET["err6"]==6) { echo "<span class='error'>choose name</span>"; }?></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<form name="ilf" id="ilf" action="./code.php?type=15" method="post">
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">image name: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="iname" name="iname" style="width:120px" maxlength="30" value="<?=$_SESSION["iname"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err2"]==2) { echo "<span class='error'>enter name</span>"; }?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">image url: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><span class="goback"><?php if ($_SESSION["iurl"]!="") { echo $_SESSION["iurl"]; } elseif($_SESSION["iurl"]=="") { echo "&nbsp;"; }?></span></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">image year: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="iyear" name="iyear" style="width:120px" maxlength="80" onkeyup="number_check2();" value="<?=$_SESSION["iyear"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err4"]==4) { echo "<span class='error'>enter year</span>"; }?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">image comments: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="icomments" name="icomments" style="width:120px" maxlength="" value="<?=$_SESSION["icomments"]?>"></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">image type: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><?php types_combo_box("image"); ?></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err5"]==5) { echo "<span class='error'>choose type</span>"; }?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;</td>
			<td width="108" height="" align="left" valign="middle"><input name="submit" id="submit" type="submit" style="width:120px" value="submit"></td>
			<td width="121" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td height="" align="right" valign="middle" colspan="3"><br><a href="./uimages.php" target="_self" class="secondary">back .:</a><a href="./code.php?type=4" target="_self" class="secondary">:. exit</a></td>
		</tr>
		</form>
  </table>
	
	

</body>
</html>
