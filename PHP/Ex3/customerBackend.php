<head>
	<link href="stylestore.css" rel="stylesheet" type="text/css"/>
	<title>Exercise 3: Web Store</title>
</head>
<?php
$username = $_POST["username"];
$password = $_POST["password"];
$shipping = $_POST["shipping"];
$shippingCost = 0.00;
if ($shipping == "Overnight") {
	$shippingCost = 50.00;
}
else if ($shipping == "3 Day") {
	$shippingCost = 5.00;
}
$cCrab = 159.99;
$cCentipede = 12.99;
$cShark = 69.99;
$qCrab = $_POST["crab"];
$qCentipede = $_POST["centipede"];
$qShark = $_POST["shark"];
$total = $qCrab*$cCrab + $qCentipede*$cCentipede + $qShark*$cShark + $shippingCost;
echo "Welcome, " . $username . "!<br>";
echo "Your password is: " . $password . "<br>";
echo "Here is your receipt:<br>";
echo "<table>";
echo "<tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Subtotal</th></tr>";
echo "<tr><th>Macrocheira kaempferi</th><td>" . $qCrab . "</td><td>$" . $cCrab . "</td><td>$" . $qCrab*$cCrab . "</td></tr>";
echo "<tr><th>Scutigera coleoptrata</th><td>" . $qCentipede . "</td><td>$" . $cCentipede . "</td><td>$" . $qCentipede*$cCentipede . "</td></tr>";
echo "<tr><th>Mitsukurina owstoni</th><td>" . $qShark . "</td><td>$" . $cShark . "</td><td>$" . $qShark*$cShark . "</td></tr>";
echo "<tr><th>Shipping</th><td colspan='2'>" . $shipping . "</td><td>$" . $shippingCost . "</td></tr>";
echo "<tr><th colspan='3'>Total Cost</th><td>$" . $total . "</td></tr>";
echo "</table>";
?>
