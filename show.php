<?php
	session_start();
	if ($_GET["year"]==''||$_GET["id"]=='')
	{
		header("Location: ./index.php");
	}
	
	$year = $_GET["year"];
	$image_id = $_GET["id"];
?>
<?php require("./code.php"); ?>
<?php 
	FI_NTU($image_id); //returns image name, image url, image type, image post date
	$image_type = strtolower($_SESSION["tname"]);
?>
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
<TABLE WIDTH="790" HEIGHT="300" CELLPADDING="" CELLSPACING="" BORDER="0">
	<TR>
		<TD WIDTH="500" HEIGHT="20" ALIGN="left" VALIGN="middle" bgcolor="#FFFFFF">&nbsp;		
			<?php echo "<span class='black'>" . strtoupper($_SESSION["tname"]) . "/" . $year . "/<span class='red'>" . $_SESSION["iname"] . "</span>>leave a comment</span>"; ?>
		</TD>
		<TD WIDTH="290" HEIGHT="20" ALIGN="right" VALIGN="middle" bgcolor="#FFFFFF">
			<?php echo "<a href='" . $image_type . ".php?year=" . $year . "' class='forth' target='body'>previous page</span>";?>
		</TD>
	</TR>
	<TR>
		<TD WIDTH="790" HEIGHT="5" ALIGN="left" VALIGN="middle" bgcolor="#000000" colspan="2"></TD>
	</TR>
	<TR>
		<TD WIDTH="790" HEIGHT="275" ALIGN="center" VALIGN="top" colspan="2">
			<?php echo "<iframe id='show' name='show' src='./show_more.php?id=" . $image_id . "&year=" . $year . "' width='790' height='275' frameborder='0' scrolling='auto'></iframe>"; ?>
		</TD>
	</TR>
</TABLE>
</center>
</body>
</html>
