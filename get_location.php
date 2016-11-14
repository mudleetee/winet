<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','123456','db_winet');
mysqli_set_charset($con,"utf8");

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"db_winet");
#$sql="SELECT * FROM user WHERE id = '".$q."'";
$sql="SELECT * FROM wi_location";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>ที่</th>
<th>Location</th>
<th>ชื่อ Location</th>
<th>สถานที่ตั้ง</th>
<th>ศูนย์บริการ ฯ</th>
<th>IP ของ Switch</th>
<th>Vlan</th>
<th>วงจร</th>
</tr>";
$y=1;
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr class='highlightrow'>";
  echo "<td class='c'>" . $y. "</td>";
  echo "<td>" . $row['location_id'] . "</td>";
  echo "<td>" . $row['location_name'] . "</td>";
  echo "<td>" . $row['location_address'] . "</td>";
  echo "<td>" . $row['center_name'] . "</td>";
  echo "<td>" . $row['circuit_sw_ip'] . "</td>";
  echo "<td class='c'>" . $row['circuit_vlan'] . "</td>";
  echo "<td>" . $row['circuit_id'] . "</td>";
  echo "</tr>";
  $y+=1;
}
echo "</table>";

mysqli_close($con);
?> 