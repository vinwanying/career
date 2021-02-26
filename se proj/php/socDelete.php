<?php
if(isset($_GET['del'])){
  require_once("connDB.php");
  $sql = "DELETE FROM `soc` WHERE `soc`.`id` = ".$_GET['del'];
  $conn->query($sql);
  $conn->close();
}
?>
