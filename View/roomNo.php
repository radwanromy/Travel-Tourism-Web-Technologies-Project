<?php
$mysqli = new mysqli("localhost", "root", "", "project");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT price,bed, roomType, location,quality FROM room WHERE roomNo = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($price,$bed,$roomType, $location,$quality);
$stmt->fetch();
$stmt->close();
echo "The hotel is located in ".$location." .<br>";
echo "This is a ".$quality." Hotel Room.<br>";
echo "The room type is  ".$roomType."  Room.<br>";
echo "The bed type is  ".$bed." .<br>";
echo  $price;
?>
