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
		<form id="ebf" name="ebf" action="./code.php?type=16" method="post">
		<tr>
			<td width=125"" height="" align="right" valign="middle">&nbsp;<span class="comments">select blog date: </span></td>
			<td width="112" height="" align="left" valign="middle"><?php blog_dates_combo_box(); ?></td>
			<td width="142" height="" align="left" valign="middle"><input name="submit" id="submit" type="submit" style="width:108px" value="find"></td>
		</tr>
		</form>
		<tr>
			<td width=125"" height="" align="right" valign="middle">&nbsp;</td>
			<td width="112" height="" align="left" valign="middle"><?php if($_GET["err6"]==6) { echo "<span class='error'>choose date</span>"; }?></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<form name="ibf" id="ibf" action="./code.php?type=17" method="post">
		<tr>
			<td width="125" height="25" align="right" valign="middle">&nbsp;<span class="comments">headline: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="bheadline" name="bheadline" style="width:112px" maxlength="30" value="<?=$_SESSION["bheadline"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if($_GET["err2"]==2) { echo "<span class='error'>enter headline</span>"; }?></td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">image name: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><span class="goback"><? if ($_SESSION["iname"]!="") { echo $_SESSION["iname"]; } elseif($_SESSION["iname"]=="") { echo "&nbsp;"; } ?></span></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td width="122" height="" align="right" valign="middle">&nbsp;<span class="comments">blog notes: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="bnotes" name="bnotes" style="width:112px" maxlength="250" value="<?=$_SESSION["bnotes"]?>"></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;</td>
			<td width="112" height="" align="left" valign="middle"><input name="submit" id="submit" type="submit" style="width:112px" value="submit"></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td height="" align="right" valign="middle" colspan="3"><br><a href="./ublog.php" target="_self" class="secondary">back .:</a><a href="./code.php?type=4" target="_self" class="comments">:. exit</a></td>
		</tr>
		</form>
  </table>
	
	

</body>
</html>
