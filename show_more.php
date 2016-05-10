<?php
	session_start();
	if ($_GET["id"]==''||$_GET["year"]=='')
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

<body bgcolor="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
<TABLE WIDTH="" HEIGHT="" CELLPADDING="0" CELLSPACING="5" BORDER="0" BORDERCOLOR="#000000">
	<TR>
		<TD WIDTH="280" HEIGHT="" ALIGN="center" VALIGN="top">
			<table width="300" height="" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td width="35" height="" align="center" valign="top"><img src="./images/layout/other/notes.gif" width="35" height="103" border="0"oncontextmenu='return false' ></td>
					<td width="250" height="" align="left" valign="top"><?php My_comments($image_id); ?></td>
				</tr>
				<tr>
					<td width="" height="" align="center" valign="top" colspan="2">
					<?php
						echo Count_image_comments($image_id);
						echo "<input type='button' onclick='load_comments(this);' class='blog_tag' value='leave a comment' name='./comments.php?id=" . $image_id . "' onmouseover='' onmouseout='' style='CURSOR: hand' >" . $tag13;
					?>
					</td>
				</tr>
			</table>
		</TD>
		<TD WIDTH="100" HEIGHT="" ALIGN="center" VALIGN="top">
		<table width="100" height="" cellpadding="0" cellspacing="0" border="0">
				<tr><td width="100" height="" align="center" valign="top"><?php echo "<img src='./images/thumbs/more/" . $image_url . "' width='100' height='100' border='0' oncontextmenu='return false' onerror='HandleError(this)'>"; ?></td></tr>
				<tr><td width="100" height="5" align="center" valign="top"></td></tr>				
				<tr><td width="100" height="" align="center" valign="top"><?php echo "<input type='button' onclick='load_image_fullsize(this);' class='blog_tag' value='view fullsize' name='./fullsize.php?id=" . $image_id . "' onmouseover='' onmouseout='' style='CURSOR: hand' style='width:100px'>";?></td></tr>
				<tr><td width="100" height="5" align="center" valign="top"></td></tr>
		</table>
		</TD>
		<TD WIDTH="355" HEIGHT="" ALIGN="center" VALIGN="top">
			<table width="335" height="" cellpadding="0" cellspacing="0" border="0">
				<td width="35" height="" align="center" valign="top"><img src="./images/layout/other/image.gif" width="35" height="108" border="0" oncontextmenu='return false'></td>
				<td width="320" height="" align="center" valign="top"><?php echo "<iframe id='show_image' name='show_image' src='./show_image.php?image_url=" . $image_url . "' width='320' height='260' frameborder='0' scrolling='auto'></iframe>"; ?></td>
			</table>
		</TD>
	</TR>
</TABLE>
</center>
</body>
</html>

