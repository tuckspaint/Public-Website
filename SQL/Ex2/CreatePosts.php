<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "t692m515", "Jai3ioku", "t692m515");
$userID = $_POST["userID"];
$content = $_POST["content"];
if ($mysqli->connect_errno) {
	echo "Connection failed: " . $mysqli->connect_error . "<br>";
	exit();
}

$query = "INSERT INTO Posts (author_id, content) VALUES ('" . $userID . "', '" . $content . "');";


if ($result = $mysqli->query($query)) {
	echo "Your post was successfully added to the database<br>";
}
else {
	echo "Your post could not be added to the database<br>";
}

?>
