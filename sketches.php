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
<TABLE WIDTH="990" HEIGHT="400" CELLPADDING="" CELLSPACING="" BORDER="0" BORDERCOLOR="#FFFFFF">
	<TR>
		<TD WIDTH="990" HEIGHT="20" ALIGN="left" VALIGN="middle" bgcolor="#FFFFFF">&nbsp;		
		<?php 
			if ($year=="")
			{
				echo "<span class='black'>SKETCHES>choose a year from the timeline</span>"; 
			}
			elseif($year!="")
			{
				echo "<span class='black'>SKETCHES/<span class='red'>" . $year . "</span>>click on thumbnail to enlarge</span>";
			}
		?>
	</TD>
	</TR>
	<TR>
		<TD WIDTH="990" HEIGHT="5" ALIGN="left" VALIGN="middle" bgcolor="#000000"></TD>
	</TR>
	<TR>
		<TD WIDTH="990" HEIGHT="375" ALIGN="center" VALIGN="top">
			<?php echo "<iframe id='sketches' name='sketches' src='./sketches_index.php?year=" . $year . "' width='990' height='375' frameborder='0' scrolling='auto'></iframe>"; ?>
		</TD>
	</TR>
</TABLE>
</center>
</body>
</html>
