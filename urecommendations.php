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

		<tr>
			<td height="" align="left" valign="middle">&nbsp;<a href="./irecommendation.php" target="_self" class="secondary">insert recommendation</a></td>
		</tr>
		<tr>
			<td height="" align="left" valign="middle">&nbsp;<a href="./erecommendations.php" target="_self" class="secondary">edit recommendation</a></td>
		</tr>
		<tr>
			<td width="" height="" align="right" valign="middle" colspan="3"><br><a href="./mmode.php" target="_self" class="secondary">back .:</a><a href="./code.php?type=4" target="_self" class="secondary">:. exit</a></td>
		</tr>
	</table>
	
	

</body>
</html>
