<?php
	session_start();
	if ($_GET["id"]=='')
	{
		header("Location: ./index.php");
	}
	$image_id = $_GET["id"];
?>
<?php require("./code.php");?>	
<?php FI_NTU($image_id);?>
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
<TABLE WIDTH="" HEIGHT="" CELLPADDING="0" CELLSPACING="5" BORDER="0" BORDERCOLOR="#FFFFFF">
	<TR>
		<TD WIDTH="" HEIGHT="" ALIGN="left" VALIGN="top">
			<?php
				echo "<img src='./images/gallery/" . $_SESSION["imageurl"] . "' border='0' oncontextmenu='return false'>";
			?>
		</TD>
	</TR>
	<TR>
		<TD WIDTH="" HEIGHT="" ALIGN="CENTER" VALIGN="TOP"><a href="" class="secondary" onclick="closewindow();" style="cursor: hand;">close window</a></TD>
	</TR>
</TABLE>
</center>
</body>
</html>

