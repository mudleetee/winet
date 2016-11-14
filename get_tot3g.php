<?php
//$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','123456','db_winet');
mysqli_set_charset($con,"utf8");

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"db_winet");
#$sql="SELECT * FROM user WHERE id = '".$q."'";
$sql="SELECT * FROM wi_3g ORDER BY 3g_site_id ASC "; //ORDER BY promotion_price DESC, promotion_name DESC";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>ที่</th>
<th>site_name</th>
<th>site_id</th>
<th>site_code</th>
<th>property_id </th>
<th>ตำบล</th>
<th>อำเภอ</th>

</tr>";
$y=1;
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr class='highlightrow'>";
  echo "<td class='c'>" . $y. "</td>";
  echo "<td>" . $row['3g_site_name'] . "</td>";
  echo "<td>" . $row['3g_site_id'] . "</td>";
  echo "<td>" . $row['3g_site_code'] . "</td>";
  echo "<td class='c'>" . $row['3g_property_id'] . "</td>";
  echo "<td>" . $row['3g_site_tam'] . "</td>";
  echo "<td>" . $row['3g_site_district'] . "</td>";
  
  echo "</tr>";
  $y+=1;
}
echo "</table>";

mysqli_close($con);
?> 