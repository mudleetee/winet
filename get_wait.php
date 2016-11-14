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
$sql="SELECT * FROM wi_wait";
#$sql="SELECT * FROM wi_bs WHERE bs_active = 'y' ORDER BY location_id ASC, bs_id ASC";
#$sql="SELECT * FROM wi_bs WHERE bs_active = 'y' ORDER BY promotion_price DESC, promotion_name DESC";
//$sql="SELECT * FROM wi_service WHERE service_active = 'y' ORDER BY service_id ASC, service_name ";
#$sql="SELECT * FROM wi_service ORDER BY service_id ASC, service_name ";
//$sql="SELECT * FROM wi_service WHERE location_id = '3471LC000' and service_active = 'y' ORDER BY service_id ASC, service_name ";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>ที่</th>
<th>ศูนย์บริการ</th>
<th>เลขรับ</th>
<th>วันที่รับ</th>
<th>ศูนย์ฯ ส่ง</th>
<th>ชื่อลูกค้า</th>
<th>ที่อยู่</th>
<th>ตำบล</th>
<th>อำเภอ</th>
<th>มือถือ</th>
<th>ผล</th>

</tr>";
$y=1;
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr class='highlightrow'>";
  echo "<td class='c'>" . $y. "</td>";
  echo "<td>" . $row['wa_cen'] . "</td>";
  echo "<td width='200'class='c'>" . $row['wa_req'] . "</td>";
  echo "<td>" . $row['wa_reg_date'] . "</td>";
  echo "<td>" . $row['wa_cen_sentdate'] . "</td>";
  echo "<td width='200'>" . $row['wa_name'] . "</td>";
  echo "<td>" . $row['wa_address'] . "</td>";
  echo "<td>" . $row['wa_tambon'] . "</td>";
  echo "<td class='r' width='60'>" . $row['wa_amphoe'] . "</td>";
  echo "<td class='r'>" . $row['wa_mobile'] . "</td>";
  
  if ($row['wa_result'] == 'คืนติดไม่ได้'){  
	    echo "<td class='rred'>" . $row['wa_result'] . "</td>";
  } else if ($row['wa_result'] == 'รอชำระเงิน'){
	    echo "<td class='rblue'>" . $row['wa_result']. "</td>";
  } else if ($row['wa_result'] == 'สัญญาณดี-ไม่ต้องตัดถ่าย'){
	    echo "<td class='rorangered'>" . $row['wa_result']. "</td>";
  }else{
	    echo "<td class='r'>" . $row['wa_result']. "</td>";
  }
  //echo "<td class='r'>" . $row['wa_result'] . "</td>";
  echo "</tr>";
  $y+=1;
}
echo "</table>";

mysqli_close($con);
?> 