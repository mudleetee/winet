<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','123456','db_winet');
mysqli_set_charset($con,"utf8");

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"db_winet");
#$sql="SELECT * FROM user WHERE id = '".$q."'";
#$sql="SELECT * FROM wi_bs ORDER BY location_id ASC, bs_id ASC";
$sql="SELECT * FROM wi_bs WHERE bs_active = 'y' ORDER BY location_id ASC, bs_id ASC";
#$sql="SELECT * FROM wi_bs WHERE bs_active = 'y' ORDER BY promotion_price DESC, promotion_name DESC";
//$sql="SELECT * FROM wi_service WHERE service_active = 'y' ORDER BY service_id ASC, service_name ";
#$sql="SELECT * FROM wi_service ORDER BY service_id ASC, service_name ";
//$sql="SELECT * FROM wi_service WHERE location_id = '3471LC000' and service_active = 'y' ORDER BY service_id ASC, service_name ";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>ที่</th>
<th>Location</th>
<th>Base Station</th>
<th>พื้นที่ให้บริการ</th>
<th>IP</th>
<th>Request_id</th>
<th>เลขวงจร</th>
<th>Support_MT</th>
<th>มุม</th>
<th>สูง</th>
<th>หมายเหตุ</th>


</tr>";
$y=1;
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr class='highlightrow'>";
  echo "<td class='c'>" . $y. "</td>";
  echo "<td>" . $row['location_id'] . "</td>";
  echo "<td class='c'>" . $row['bs_id'] . "</td>";
  echo "<td>" . $row['bs_coverage'] . "</td>";
  echo "<td>" . $row['bs_ip'] . "</td>";
  #echo "<td>" . $row['bs_vlan'] . "</td>";
  echo "<td>" . $row['request_id'] . "</td>";
  echo "<td>" . $row['bs_circuit_id'] . "</td>";
  #echo "<td class='r'>" . $row['bs_cus'] . "</td>";
  #echo "<td class='r'>" . $row['bs_avai'] . "</td>";
  if ($row['bs_support_mt'] =='n'){
	    echo "<td class='c'>" . "" . "</td>";
  } else{
	    echo "<td class='rblue'>" . "Support_MT" . "</td>";
  }
  echo "<td class='r'>" . $row['bs_angle'] . "</td>";
  echo "<td class='r'>" . $row['bs_height'] . "</td>";
  #echo "<td class='l'>" . $row['bs_ect'] . "</td>";
  if ($row['bs_ect'] =='BaseBox 5'){
	    echo "<td class='rlime'>" . $row['bs_ect'] . "</td>";
  } else{
	    echo "<td class='l'>" . "" . "</td>";
  }
  echo "</tr>";
  $y+=1;
}
echo "</table>";

mysqli_close($con);
?> 