<?php
	include "header.php";

	echo "<table>";
	foreach ($data as $key => $value) {
		echo "
			<tr>
				<td>". $value["name"] ."</td>
				<td>". $value["genre"] ."</td>
				<td>". $value["years"] ."</td>
				<td>". $value["country"] ."</td>
				<td>". $value["type"] ."</td>
			</tr>
		";
	}
	echo "</table>";
	
	include "footer.php";
?>