<?php
	include "header.php";

	echo "<table>";
	foreach ($data as $key => $value) {
		echo "
			<tr>
				<td>". $value["name"] ."</td>
				<td>". $value["country"] ."</td>
				<td>". $value["date"] ."</td>
				<td>". $value["style"] ."</td>
			</tr>
		";
	}
	echo "</table>";
	
	include "footer.php";
?>