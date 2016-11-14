<?php
//$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','123456','db_winet');
mysqli_set_charset($con,"utf8");

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"db_winet");
#$sql="SELECT * FROM user WHERE id = '".$q."'";
$sql="SELECT * FROM wi_fixed WHERE fixed_type = '470 MHz (7 หลัก)' " ;//ORDER BY promotion_price DESC, promotion_name DESC";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>ที่</th>
<th>เลขหมาย</th>
<th>ชื่อลูกค้า</th>
<th>ที่อยู่</th>
<th>ประเภทลูกค้า</th>
<th>Product</th>

</tr>";
$y=1;
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr class='highlightrow'>";
  echo "<td class='c'>" . $y. "</td>";
  echo "<td>" . $row['fixed_id'] . "</td>";
  echo "<td>" . $row['customer_name'] . "</td>";
  echo "<td>" . $row['customer_addr'] . "</td>";
  echo "<td>" . $row['fixed_account_type'] . "</td>";
  echo "<td>" . $row['fixed_type'] . "</td>";
 
  echo "</tr>";
  $y+=1;
}
echo "</table>";

mysqli_close($con);
?> 