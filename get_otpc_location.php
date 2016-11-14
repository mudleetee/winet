<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','123456','db_winet');
mysqli_set_charset($con,"utf8");

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"db_winet");
#$sql="SELECT * FROM user WHERE id = '".$q."'";
$sql="SELECT * FROM wi_otpc_lo";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>ที่</th>
<th>อำเภอ</th>
<th>พื้นที่ Location</th>
<th>PE(Management)</th>
<th>Vlan_Management</th>
<th>IP Swith Gatway</th>
</tr>";
$y=1;
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr class='highlightrow'>";
  echo "<td class='c'>" . $y. "</td>";
  echo "<td class='c'>" . $row['otpc_lo_district'] . "</td>";
  echo "<td>" . $row['otpc_lo_area'] . "</td>";
  echo "<td class='c'>" . $row['otpc_lo_pe'] . "</td>";
  echo "<td class='c'>" . $row['otpc_lo_vlanm'] . "</td>";
  echo "<td>" . $row['otpc_lo_ipgw'] . "</td>";
  echo "</tr>";
  $y+=1;
}
echo "</table>";

mysqli_close($con);
?> 