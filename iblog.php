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
		<tr><td height="" align="center" valign="middle" colspan="3"><?php if ($_GET["err1"]==1){ echo "<span class='error'>an image with this url already exists</span>"; }?></td></tr>
		<form name="ilf" id="ilf" action="./code.php?type=9" method="post">
		<tr>
			<td width="125" height="25" align="right" valign="middle">&nbsp;<span class="comments">headline: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="bheadline" name="bheadline" style="width:120px" maxlength="30" value="<?=$_SESSION["bheadline"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err2"]==2){ echo "<span class='error'>enter headline</span>"; }?></td></tr>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">image name: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="iname" name="iname" style="width:120px" maxlength="30" value="<?=$_SESSION["iname"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err3"]==3){ echo "<span class='error'>enter name</span>"; }?></td></tr>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">image url: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="iurl" name="iurl" style="width:120px" maxlength="60" value="<?=$_SESSION["iurl"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err4"]==4){ echo "<span class='error'>enter url</span>"; }?></td></tr>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">image year: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><input type="text" id="iyear" name="iyear" style="width:120px" maxlength="4" onkeyup="number_check2();" value="<?=$_SESSION["iyear"]?>"></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err5"]==5){ echo "<span class='error'>enter year</span>"; }?></td></tr>
		</tr>
		<tr>
			<td width="122" height="" align="right" valign="middle">&nbsp;<span class="comments">image comments: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><textarea cols="18" rows="1" id="icomments" name="icomments" onKeyPress="maxlength_icomments(200)" wrap="hard" style="width:120px"></textarea></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;<span class="comments">image type: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><?php types_combo_box("image"); ?></td>
			<td width="142" height="" align="left" valign="middle"><?php if ($_GET["err6"]==6){ echo "<span class='error'>choose type</span>"; }?></td></tr>
		</tr>
		<tr>
			<td width="122" height="" align="right" valign="middle">&nbsp;<span class="comments">blog notes: </span></a></td>
			<td width="112" height="" align="left" valign="middle"><textarea cols="18" rows="1" id="bnotes" name="bnotes" onKeyPress="maxlength_bnotes(200)" wrap="hard" style="width:120px"></textarea></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td width="125" height="" align="right" valign="middle">&nbsp;</td>
			<td width="112" height="" align="left" valign="middle"><input name="submit" id="submit" type="submit" style="width:120px" value="submit"></td>
			<td width="142" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td height="" align="right" valign="middle" colspan="3"><br><a href="./ublog.php" target="_self" class="secondary">back .:</a><a href="./code.php?type=4" target="_self" class="secondary">:. exit</a></td>
		</tr>
		</form>
  </table>
	
	

</body>
</html>
