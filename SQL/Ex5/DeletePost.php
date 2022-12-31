<head>
	<title>Exercise 7: Delete Posts</title>
</head>
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "t692m515", "Jai3ioku",
"t692m515");

if ($mysqli->connect_errno) {
	echo "Connect failed: " . $mysqli->connect_error . "<br>";
	exit();
}
$query = "SELECT post_id FROM Posts";
if ($result = $mysqli->query($query)) {
	echo "Here are the IDs of the posts you deleted:<br>";
	while ($row = $result->fetch_assoc()) {

		if (isset($_POST[$row["post_id"]])) {
			echo $row["post_id"] . "<br>";
			$delQuery = "DELETE FROM Posts WHERE post_id='" . $row["post_id"] . "';";
			$mysqli->query($delQuery);
		}
	}
	$result->free();
	echo "</table>";
}

$mysqli->close();
?>

