<?php 
	if ($_GET["type"]==''||$_GET["year"]=='')
	{
		header("Location: ./index.php");
	}
	$year = $_GET["year"]; 
	$type = $_GET["type"];//Illustration or Sketches
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
	<TABLE WIDTH="800" CELLPADDING="0" CELLSPACING="0" BORDER="0" BORDERCOLOR="#000000" align="center">
			<?php Gallery2 ($type,$year); ?>
	</TABLE>
</body>
</html>