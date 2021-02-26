<?php
$conn = new mysqli("localhost", "root", "csci3100","cusoc");
// Check connection
if ($conn->connect_error) {
   header("location: error.php");
}
?>
