<? 
	session_start();
	if ($_GET["id"]=='')
	{
		header("Location: ./index.php");
	}
	$image_id = $_GET["id"];
?>
<?php require("./code.php"); ?>
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7">
<script language="JavaScript" type="text/JavaScript" src="./scripts/js_00.js"></script>
<link rel="stylesheet" type="text/css" href="./style.css">

<html>
<head>
<title>.:James Doe:.</title>
</head>
<body bgcolor="#000000">
<table width="430" height="" cellpading="0" cellspacing="0" border="0" bordercolor="" bgcolor="">
<tr>
	<td height="" align="left" valign="middle"><img src="./images/layout/other/comments.gif" width="180" height="47" oncontextmenu='return false'>
</tr>
</table>
<br>
<br>
<?php General_commments($_GET["id"]); ?>
<hr color="#FFFFFF">
	<form id="form01" name="form01" action="./code.php?type=2" method="post">
		<table width="430" height="" cellpading="0" cellspacing="0" border="0" bordercolor="" bgcolor="">
			<tr><td colspan="3" height="" align="left" valign="middle"><span class="comments_headlines">post comment</span></td></tr>
			<tr><td colspan="3" height="" align="left" valign="middle"><?php if ($_GET["err5"]==5) { echo "<span class='red2'>ERROR</span>"; } else {echo "&nbsp;";}?></td></tr>
			<tr>
				<td width="76" height="20" align="left" valign="middle"><span class="comments_tags">headline: </span></td>
				<td width="17" height="20">&nbsp;</td>
				<td width="203" height="20" align="left" valign="middle"><input type="text" id="headline" name="headline" style="width:203px" maxlength="30" value="<?=$_SESSION["headline"];?>"></td>
				<td width="126" height="20" align="left" valign="middle"><?php if ($_GET["err1"]==1) { echo "<span class='error'>enter headline</span>"; }?></td>
			</tr>
			<tr>
				<td width="76" height="20" align="left" valign="middle"><span class="comments_tags">name: </span></td>
				<td width="17" height="20">&nbsp;</td>
				<td width="203" height="20" align="left" valign="middle"><input type="text" id="name" name="name" style="width:203px" maxlength="20" value="<?=$_SESSION["name"];?>"></td>
				<td width="288" height="20" align="left" valign="middle"><?php if ($_GET["err2"]==2) { echo "<span class='error'>enter name</span>"; }?></td>
			</tr>
			<tr>
				<td width="76" height="20" align="left" valign="middle"><span class="comments_tags">email: </span></td>
				<td width="17" height="20">&nbsp;</td>
				<td width="203" height="20" align="left" valign="middle"><input type="text" id="email" name="email" style="width:203px" maxlength="30" onBlur="email_check();" value="<?=$_SESSION["email"];?>"></td>
				<td width="288" height="20" align="left" valign="middle"><?php if ($_GET["err3"]==3) { echo "<span class='error'>enter e-mail</span>"; }?></td>
			</tr>
			<tr>
				<td width="76" height="20" align="left" valign="top"><span class="comments_tags">comment: </span></td>
				<td width="17" height="20">&nbsp;</td>
				<td width="203" height="20" align="left" valign="middle"><textarea cols="32" rows="5" id="comment" name="comment" onKeyPress="maxlength(200)" wrap="hard" style="width:203px"><?=$_SESSION["comment"];?></textarea></td>
				<td width="288" height="20" align="left" valign="top"><?php if ($_GET["err4"]==4) { echo "<span class='error'>enter comment</span>"; }?></td>
			</tr>
			<tr>
				<td width="76" height="20" align="left" valign="top">&nbsp;</td>
				<td width="17" height="20"><input type="hidden" name="i_id" id="i_id" value="<?=$image_id;?>"></td>
				<td width="203" height="20" align="left" valign="middle"><input type="submit" style="width:100px" value="post comment"></td>
				<td width="" height="">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="4" height="20" align="center" valign="middle">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="4" height="20" align="center" valign="middle"><a href="" class="secondary" onclick="closewindow();" style="cursor: hand;">close window</a>&nbsp;</td>
			</tr>
		</table>
	</form>
</body>
</html>