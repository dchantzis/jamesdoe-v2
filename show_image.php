<?php
	session_start();
	if ($_GET["image_url"]=='')
	{
		header("Location: ./index.php");
	}
	
	$year = $_GET["year"];
	$image_id = $_GET["id"];
	$image_name = $_SESSION["iname"]; // the sessions are filled from page show.php where there is a call for function FI_NTU($image_id);
	$image_url = $_SESSION["imageurl"]; // the sessions are filled from page show.php where there is a call for function FI_NTU($image_id);
	$p_date = $_SESSION["p_date"]; // the sessions are filled from page show.php where there is a call for function FI_NTU($image_id);
	$image_type = strtolower($_SESSION["tname"]); // the sessions are filled from page show.php where there is a call for function FI_NTU($image_id);
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

<body bgcolor="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" ONLOAD="preloadImages();">
<center>
<?php echo "<img src='./images/gallery/" . $image_url . "' width='300' border='0' oncontextmenu='return false'>";?>
</center>
</body>
</html>
