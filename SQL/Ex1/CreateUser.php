<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "t692m515", "Jai3ioku", "t692m515");
$userID = $_POST["userID"];
if ($mysqli->connect_errno) {
	echo "Connection failed: " . $mysqli->connect_error . "<br>";
	exit();
}

$query = "INSERT INTO Users (user_id) VALUES ('" . $userID . "');";


if ($result = $mysqli->query($query)) {
	echo $userID . " was successfully added to the database<br>";
}
else {
	echo $userID . " could not be added to the database<br>";
}

?>
