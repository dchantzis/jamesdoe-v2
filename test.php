	<?php
	$dbobj = new JDDBase();

	$sql_query = "SELECT I.id, I.url, I.name, I.comments, I.p_date FROM images I, imagesToTypes IT, imageTypes T WHERE  I.id=IT.i_id AND IT.t_id=T.id AND T.name='" . $type_name . "' AND I.year='" . $image_year . "' ORDER BY I.p_date DESC;";
	$rs = mysql_query($sql_query);
	$num = mysql_num_rows($rs);//num

		//echo "<span class='red3'>" . "&nbsp;" . $image_year . ":</span>" . "<br>";
		if($num==0)
		{
			//no action
		}//if
		elseif($num!=0)
		{
			for($i=0; $i<$num; $i++)
			{
				$id=mysql_result($rs,$i,"id");
				$name=mysql_result($rs,$i,"name");
				$comments=mysql_result($rs,$i,"comments");

				echo "<a href='./show.php?id=" . $id . "' class='link'>";
				echo "&nbsp;" . $name . "</a>";
				//echo "<span class='red'>" . $comments . "</span>";

				if ($type_name=="Illustration")
					echo "<br>";
				elseif ($type_name=="Sketches")
					echo "<span class='tag'>, </span>";

			}//for
		}//elseif

	mysql_close();//closes the connection to the DB
	?>