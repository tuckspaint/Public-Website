<head>
	<title>Exercise 5: View Users</title>
</head>
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "t692m515", "Jai3ioku",
"t692m515");

if ($mysqli->connect_errno) {
	echo "Connect failed: " . $mysqli->connect_error . "<br>";
	exit();
}
$query = "SELECT * FROM Users";
if ($result = $mysqli->query($query)) {
	echo "<h3>Users</h3>";
	echo "<table>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["user_id"] . "</td></tr>";
	}
	$result->free();
	echo "</table>";
}

$mysqli->close();
?>
