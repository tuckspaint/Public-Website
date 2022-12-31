<head>
	<title>Exercise 6: View User Posts</title>
</head>
<?php
$authorID = $_POST["authors"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "t692m515", "Jai3ioku",
"t692m515");

if ($mysqli->connect_errno) {
	echo "Connect failed: " . $mysqli->connect_error . "<br>";
	exit();
}
$query = "SELECT content FROM Posts WHERE author_id=" . $authorID . ";";
if ($result = $mysqli->query($query)) {
	echo "<h3>Posts by User " . $authorID . "</h3>";
	echo "<table>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["content"] . "</td></tr>";
	}
	$result->free();
	echo "</table>";
}
else {
	echo "This user has no posts<br>";
}

$mysqli->close();
?>

