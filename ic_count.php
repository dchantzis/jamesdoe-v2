<?php require("./code.php"); ?>
<html>
<head>
<title>.:James Doe:.</title>
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7">
<script language="JavaScript" type="text/JavaScript" src="./scripts/js_00.js"></script>
<link rel="stylesheet" type="text/css" href="./scripts/style.css">
</head>

<center>

<body bgcolor="#ffffff">
<?php
	$dbobj = new JDDBase();

	$sql_query = "SELECT T.name AS tname, I.name AS iname,I.id, I.url, Count(c_id) AS Ccounter
				FROM images I, imagesToTypes IT, imageTypes T, imagesToComments IC
				WHERE I.id=IT.i_id AND IT.t_id=T.id AND I.id=IC.i_id
				GROUP BY(c_id)";

	$rs = mysql_query($sql_query);
	$num = mysql_num_rows($rs);

	for($i=0; $i<$num; $i++)
	{
		$tname = mysql_result($rs,$i,"tname");
		$iname = mysql_result($rs,$i,"iname");
		$iurl = mysql_result($rs,$i,"url");
		$iid = mysql_result($rs, $i, "id");
		$comment_counter = mysql_result($rs, $i, "Ccounter");

		echo "<span class='tag'>";
		echo "<a href='./show.php?id=" . $iid . "' class='link'>";
		echo "&nbsp;" . $iname . "</a>";
		echo " (" . $comment_counter .")";
		echo "</span>";
		echo "<br>";
	}//for

	mysql_close();//closes the connection to the DB

?>
</body>
</html>
