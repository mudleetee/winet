<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','123456','db_winet');
mysqli_set_charset($con,"utf8");

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"db_winet");
#$sql="SELECT * FROM user WHERE id = '".$q."'";
$sql="SELECT * FROM wi_otpc_bc ORDER BY otpc_district DESC, otpc_area ASC";
//$sql="SELECT * FROM wi_service WHERE service_active = 'y' ORDER BY promotion_price DESC, promotion_name DESC";
//$sql="SELECT * FROM wi_service WHERE service_active = 'y' ORDER BY service_id ASC, service_name ";
#$sql="SELECT * FROM wi_service ORDER BY service_id ASC, service_name ";
//$sql="SELECT * FROM wi_service WHERE location_id = '3471LC000' and service_active = 'y' ORDER BY service_id ASC, service_name ";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>ที่</th>
<th>โรงเรียน</th>
<th>อำเภอ</th>
<th>พื้นที่ให้บริการ</th>
<th>IP_Gateway</th>
<th>IP_BASE</th>
<th>IP_CPE</th>
<th>Vlan_M</th>
<th>Vlan_S</th>
<th>วงจร</th>
</tr>";
$y=1;
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr class='highlightrow'>";
  echo "<td class='c'>" . $y. "</td>";
  echo "<td>" . $row['otpc_school'] . "</td>";
  echo "<td class='c'>" . $row['otpc_district'] . "</td>";
  echo "<td>" . $row['otpc_area'] . "</td>";
  echo "<td>" . $row['otpc_ip_gw'] . "</td>";
  echo "<td>" . $row['otpc_ip_bs'] . "</td>";
  echo "<td>" . $row['otpc_ip_cpe'] . "</td>";
  echo "<td class='c'>" . $row['otpc_vlan_m'] . "</td>";
  echo "<td class='c'>" . $row['otpc_vlan_s'] . "</td>";
  echo "<td class='r'>" . $row['otpc_circuit_id'] . "</td>";
  echo "</tr>";
  $y+=1;
}
echo "</table>";

mysqli_close($con);
?> 