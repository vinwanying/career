<?php
require_once("connDB.php");
// https://www.w3schools.com/php/php_mysql_select.asp
$sql = "SELECT Name, Description, img FROM event";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo'
      <div style="display:none;" class="container-long-orange">
      <table><tr>
      <td><a href="http://www.yahoo.com.hk"><img src="sql/'.$row["img"].'"/></a></td>
      <td><div class="text-container"><a><div class="org_name">'.$row["Name"].'</div></a><br>'.$row["Description"].'
      </div></td></tr></table></div>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
