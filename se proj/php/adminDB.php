<?php
require_once("connDB.php");
// https://www.w3schools.com/php/php_mysql_select.asp
$sql = "SELECT id, Name, Description, img FROM soc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo'
      <div class="container-long-orange" style="height:100px">
      <table>
        <tr>
          <td>
            <a href="org-details.php?soc='.$row["id"].'">
              <img style="width:100px;height:100px" src="sql/'.$row["img"].'"/>
            </a>
          </td>
          <td>
            <div class="text-container">
              <a>
                <div class="org_name">
                  '.$row["Name"].'
                </div>
              </a>
              <br>
              '.$row["Description"].'
            </div>
          </td>
          <td style="padding-right: 2%">
            <button type="submit" onclick="socDelete(this.id,this.name)" id="'.$row["id"].'" name="'.$row["Name"].'">Delete</button>
          </td>
        </tr></table></div>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
