<? 
	if ($_GET["year"]=='')
	{
		header("Location: ./index.php");
	}
	$year = $_GET["year"]; 
?>
<?php require("./code.php"); ?>
<html>
<head>
<title>.::jAMES dOE::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7">
<meta http-equiv="imagetoolbar" content="no">
<script language="JavaScript" type="text/JavaScript" src="./scripts/js_00.js"></script>
<link rel="shortcut icon" href="./images/layout/other/JD.ico">
<link rel="stylesheet" type="text/css" href="./scripts/style.css">
</head>

<body bgcolor="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<center>
<TABLE WIDTH="990" HEIGHT="" CELLPADDING="0" CELLSPACING="0" BORDER="0" BORDERCOLOR="#FFFFFF">
	<TR>
		<!--TIMELINE IFRAME--><TD WIDTH="84" HEIGHT="270" ALIGN="center" VALIGN="top"><iframe id="timeline" name="timeline" src="./timeline.php?type=Illustration" width="84" height="270" frameborder="0" scrolling="no"></iframe></TD>
		<!--GALLERY--><TD WIDTH="800" HEIGHT="375" ALIGN="right" VALIGN="top" bgcolor="#000000"><?php echo "<iframe id='gallery' name='gallery' src='./gallery.php?year=" . $year . "&type=Illustration' width='900' height='370' frameborder='0' scrolling='auto'></iframe>"; ?></TD>
	</TR>
</TABLE>
</center>
</body>
</html>
