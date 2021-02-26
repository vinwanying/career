<?php
require_once("php/connDB.php");
$result = $conn->query("SELECT * FROM `soc` WHERE `id` = ".$_GET['soc']);
$row = $result->fetch_assoc();
$conn->close();
?>
