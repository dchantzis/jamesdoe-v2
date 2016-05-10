<?php 
	if ($_GET["type"]=='')
	{
		header("Location: ./index.php");
	}
	$type = strtolower($_GET["type"]);//Illustration or Sketches
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

<body bgcolor="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
<TABLE WIDTH="73" HEIGHT="173" CELLPADDING="0" CELLSPACING="0" BORDER="0" BORDERCOLOR="#FFFFFF">
	<!--TIMELINE IMAGE--><TR><TD WIDTH="45" HEIGHT="173" ALIGN="center" VALIGN="top" rowspan="8"><img src="./images/layout/timeline/timeline.gif" width="45" height="173" border="0" oncontextmenu='return false'></TD></TR>
	<!--2006 IMAGE--><TR><TD WIDTH="" HEIGHT="10" ALIGN="center" VALIGN="middle"><a href="<?php echo "./" . $type . ".php?year=2006";?>" target="body" class='prime'>2006</a></TD></TR>
	<!--2005 IMAGE--><TR><TD WIDTH="" HEIGHT="10" ALIGN="center" VALIGN="middle"><a href="<?php echo "./" . $type . ".php?year=2005";?>" target="body" class='prime'>2005</a></TD></TR>
	<!--2004 IMAGE--><TR><TD WIDTH="" HEIGHT="10" ALIGN="center" VALIGN="middle"><a href="<?php echo "./" . $type . ".php?year=2004";?>" target="body" class='prime'>2004</a></TD></TR>
	<!--2003 IMAGE--><TR><TD WIDTH="" HEIGHT="10" ALIGN="center" VALIGN="middle"><a href="<?php echo "./" . $type . ".php?year=2003";?>" target="body" class='prime'>2003</a></TD></TR>
	<!--2002 IMAGE--><TR><TD WIDTH="" HEIGHT="10" ALIGN="center" VALIGN="middle"><a href="<?php echo "./" . $type . ".php?year=2002";?>" target="body" class='prime'>2002</a></TD></TR>
	<!--2001 IMAGE--><TR><TD WIDTH="" HEIGHT="10" ALIGN="center" VALIGN="middle"><a href="<?php echo "./" . $type . ".php?year=2001";?>" target="body" class='prime'>2001</a></TD></TR>
	<!--2001 IMAGE--><TR><TD WIDTH="" HEIGHT="113" ALIGN="center" VALIGN="middle"></TD></TR>
</TABLE>
</center>
</body>
</html>

