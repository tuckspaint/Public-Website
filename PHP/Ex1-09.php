<?php
	echo "<table>";
	echo "<tr><th></th>";
	for ($k = 1; $k <=100; $k++) {
		echo "<th>" . $k . "&nbsp&nbsp&nbsp</th>";
	}
	echo "</tr>";
	for ($i = 1; $i <= 100; $i++) {
		echo "<tr>";
		echo "<th>" . $i . "</th>";
		for ($j = 1; $j <= 100; $j++) {
			echo "<td>" . $i*$j . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>
