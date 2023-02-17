<?php
if (isset($_GET["Phone_Number"])) 
{
    $strPhoneNumber = $_GET["Phone_Number"];

    require "connect.php";
        $sql ="SELECT * FROM customer WHERE Phone_Number = ?";
        $params = array($strPhoneNumber);
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
    <table width="300" border="1">
  <tr>
    <th width="130">รหัสลูกค้าสมาขิก</th>
    <td><?php echo $result["Customer_ID"]; ?></td>
  </tr>
  <tr>
    <th width="325">ชื่อ</th>
    <td><?php echo $result["First_Name"]; ?></td>
  </tr>
  <th width="130">นามสกุล</th>
    <td><?php echo $result["Last_Name"]; ?></td>
  </tr>
  <tr>
    <th width="325">เบอร์โทร</th>
    <td><?php echo $result["Phone_Number"]; ?></td>
  </tr>
  
    </table>
<?php
$conn = null;
}
?>