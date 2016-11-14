<?php
//$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','123456','db_winet');
mysqli_set_charset($con,"utf8");

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"db_winet");
#$sql="SELECT * FROM user WHERE id = '".$q."'";
#$sql="SELECT * FROM wi_service2 WHERE service_active = 'y' ORDER BY location_id DESC, bs_id DESC";
#$sql="SELECT * FROM wi_service2 WHERE service_active = 'y' ORDER BY promotion_price DESC, promotion_name DESC";
$sql="SELECT * FROM wi_service2 WHERE service_active = 'y' ORDER BY service_id ASC, service_name ";
#$sql="SELECT * FROM wi_service2 ORDER BY service_id ASC, service_name ";
#$sql="SELECT * FROM wi_service2 WHERE location_id = '3471LC000' and service_active = 'y' ORDER BY service_id ASC, service_name ";
#$sql="SELECT * FROM wi_service2";

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>ที่</th>
<th>Location</th>
<th>Base Station</th>
<th>เลขหมาย</th>
<th>CPE</th>
<th>ชื่อลูกค้า</th>
<th>โปรโมชั่น</th>
<th>รายเดือน (บาท)</th>
</tr>";
$y=1;
while($row = mysqli_fetch_assoc($result)) {
  echo "asd";
  echo "<tr class='highlightrow'>";
  echo "<td class='c'>" . $y. "</td>";
  echo "<td>" . $row['location_id'] . "</td>";
  echo "<td class='c'>" . $row['bs_id'] . "</td>";
  echo "<td>" . $row['service_id2'] . "</td>";
  #echo "<td>" . $row['cpe_type'] . "</td>";
  if ($row['cpe_type'] =='MiKroTik'){
      echo "<td class='lorange'>" . "MiKroTik" . "</td>";
   } elseif ($row['cpe_type'] =='MiKroTik 6.35.1'){
      echo "<td class='lred'>" . "MiKroTik 6.35.1" . "</td>";
   } elseif ($row['cpe_type'] =='MiKroTik 6.34.3'){
      echo "<td class='lred2'>" . "MiKroTik 6.34.3" . "</td>";
   } elseif ($row['cpe_type'] =='MiKroTik 6.19'){
      echo "<td class='lred3'>" . "MiKroTik 6.19" . "</td>";
   } elseif ($row['cpe_type'] =='NanoStation_NEW_5905'){
      echo "<td class='lblue2'>" . "NanoStation_NEW_5905" . "</td>";
   } elseif ($row['cpe_type'] =='AirGrid'){
      echo "<td class='lblue2'>" . "AirGrid" . "</td>";
   } elseif ($row['cpe_type'] =='Loco'){
      echo "<td class='lblue2'>" . "Loco M2" . "</td>";
   } else{
      echo "<td class='lblue'>" . "NanoStation" . "</td>";
  }




  echo "<td width='600'>" . $row['service_name'] . "</td>";
  echo "<td width='250'>" . $row['promotion_name'] . "</td>";
  echo "<td class='r'>". number_format($row['promotion_price'] ,0,'.',','). "</td>";
  //echo "<td>" . $row['service_lat'] . "</td>";  //<th>Latitute</th> อันหลังนี่ใส่ที่ชื่อหัวคอลัมน์
 //echo "<td>" . $row['service_long'] . "</td>"; // <th>Longtitude</th> อันหลังนี่ใส่ที่ชื่อหัวคอลัมน์
  echo "</tr>";
  $y+=1;
}
echo "</table>";
echo "AAA";

mysqli_close($con);
?> 