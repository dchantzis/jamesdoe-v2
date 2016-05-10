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
		<form id="erf" name="erf" action="./code.php?type=22" method="post">
		<tr>
			<td width=169 height="" align="right" valign="middle">&nbsp;<span class="comments">select update headline: </span></td>
			<td width="116" height="" align="left" valign="middle"><?php recommendations_titles_combo_box(); ?></td>
			<td width="108" height="" align="left" valign="middle"><input name="submit" id="submit" type="submit" style="width:108px" value="find"></td>
		</tr>
		</form>
		<tr>
			<td width=169 height="" align="right" valign="middle">&nbsp;</td>
			<td width="116" height="" align="left" valign="middle"><?php if ($_GET["err6"]==6) { echo "<span class='error'>choose title</span>"; }?></td>
			<td width="108" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<form name="urf" id="urf" action="./code.php?type=23" method="post">
		<tr>
			<td width="169" height="" align="right" valign="middle">&nbsp;<span class="comments">recommendation title: </span></a></td>
			<td width="116" height="" align="left" valign="middle"><input type="text" id="rtitle" name="rtitle" style="width:116px" maxlength="20" value="<?=$_SESSION["rtitle"]?>"></td>
			<td width="108" height="" align="left" valign="middle"><?php if ($_GET["err1"]==1) { echo "<span class='error'>enter title</span>"; }?></td>
		</tr>
		<tr>
			<td width="169" height="" align="right" valign="middle">&nbsp;<span class="comments">image url: </span></a></td>
			<td width="116" height="" align="left" valign="middle"><input type="text" id="rurl" name="rurl" style="width:116px" maxlength="80" value="<?=$_SESSION["rurl"]?>"></td>
			<td width="108" height="" align="left" valign="middle"><?php if ($_GET["err2"]==2) { echo "<span class='error'>enter url</span>"; }?></td>
		</tr>
		<tr>
			<td width="169" height="" align="right" valign="middle">&nbsp;<span class="comments">recommendation notes: </span></a></td>
			<td width="116" height="" align="left" valign="middle"><input type="text" id="rnotes" name="rnotes" style="width:116px" maxlength="250" value="<?=$_SESSION["rnotes"]?>"></td>
			<td width="108" height="" align="left" valign="middle"><?php if ($_GET["err3"]==3) { echo "<span class='error'>enter notes</span>"; }?></td>
		</tr>
		<tr>
			<td width="169" height="" align="right" valign="middle">&nbsp;<span class="comments">recommendation source: </span></a></td>
			<td width="116" height="" align="left" valign="middle"><input type="text" id="rsource" name="rsource" style="width:116px" maxlength="80" value="<?=$_SESSION["rsource"]?>"></td>
			<td width="108" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td width="169" height="" align="right" valign="middle">&nbsp;<input name="rdate" id="rdate" type="hidden" value="<?=$_SESSION["rdate"]?>"></td>
			<td width="116" height="" align="left" valign="middle"><input name="submit" id="submit" type="submit" style="width:116px" value="submit"></td>
			<td width="108" height="" align="left" valign="middle">&nbsp;</td>
		</tr>
		<tr>
			<td height="" align="right" valign="middle" colspan="3"><br><a href="./urecommendations.php" target="_self" class="secondary">back .:</a><a href="./code.php?type=4" target="_self" class="secondary">:. exit</a></td>
		</tr>
		</form>
</table>
	
	

</body>
</html>
