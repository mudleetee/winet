<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','123456','db_winet');
mysqli_set_charset($con,"utf8");

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"db_winet");
#$sql="SELECT * FROM user WHERE id = '".$q."'";
// ชุดแรก
$sql="SELECT DISTINCT location_id FROM wi_location ORDER BY location_id";
$result = mysqli_query($con,$sql);
$arr =array();
$num = mysqli_num_rows($result );
//echo $num . "</br>";
$i=0;
while($row = mysqli_fetch_array($result)) {
	 
	$arr[$i] = $row['location_id'];			//รับ Array ชุดแรก arr เก็บค่าจำนวน location ท่ี่มีทั้งหมด ซ้ำกันเลือกเอา 1
	$i++;
} // จบลูปนี้

// ชุดสอง
$arr2=array();
$arr3=array();
$i=0;
$sum1=0;
$sum2=0;
foreach($arr as $a)	{
	//echo $a . "</br>";								//debug
	//$sql="SELECT * FROM wi_service WHERE location_id = '$a' " ;
	$sql="SELECT * FROM wi_service WHERE location_id = '$a' and service_active = 'y'" ;  //เอา locationที่มี  เลขหมาย Active ทีละ location
	$rs = mysqli_query($con,$sql);
	$arr2[$i] = mysqli_num_rows($rs);			//รับ Array ชุดสอง  arr2 เก็บค่ารวม คือ จำนวนลูกค้า เแต่ละ location ไว้ )
	$k=0;
	$price=0;
	while($row = mysqli_fetch_array($rs)) {
			
		$price += $row['promotion_price'];			//เอา จำนวนลูกค้าในแต่ละ location มาหาจำนวนรายได้รวม โดยใช้ค่าในฟิลด์  promotion_price มาวน loop เก็บค่าสะสม ไว้ใน $price
		//echo $k ."  ".$price."</br>";				//debug
		$k++;
	}
	
	$arr3[$i] = $price;       // รับ Array ชุดสาม เก็บค่าจำนวนรายได้ แตละ location ไปตามตัวแปร i (i=0 คือ location แรก)
	$sum1  += $arr2[$i];   //จำนวนลูกค้า แตละ location มาบวกสะสมเพื่อทำ ลูกค้ารามทั้งสิ้น
	$sum2  += $arr3[$i];  //จำนวนรายได้ แตละ location มาบวกสะสมเพื่อทำ รายได้รามทั้งสิ้น
	
	$i++;
}

// แสดง ตาราง ทั้ง 3 Array
$lo[0]	= "3471LC000 (บ้านคลองกก)";
$lo[1]	= "3471LC001 (Remote TDMA วัดราษฎร์ธรรมมาราม)";
$lo[2]	= "3471LC002 (Remote TDMA คลองโคน)";
$lo[3]	= "3471LC003 (ชุมสายสมุทรสงคราม)";
$lo[4]	= "3471LC004 (วัดศรีศรัทธาธรรม)";
$lo[5]	= "3471LC005 (บ้านบางสะใภ้ ม.7 ลาดใหญ่)";
$lo[6]	= "3471LC006 (วัดป่ากิตติภาวนา ม.8 ลาดใหญ่)";
$lo[7]	= "3471LC007 (วัดธรรมาวุธาราม (วัดบังปืน)";
$lo[8]	= "3471LC009 (ชุมสายนางตะเคียน";
$lo[9]	= "3475LC000 (Remote TDMA วัดเพชรรัตน์)";
$lo[10]	= "3475LC001 (คลองขุดเล็ก)";
$lo[11]	= "3475LC002 (Remote TDMA ดอนมะโนรา)";
$lo[12]	= "3475LC003 (Remote TDMA คลองบางนางลี่)";
$lo[13]	= "3475LC004 (Remote TDMA วัดต้นลำแพน)";
$lo[14]	= "3475LC005 (Remote TDMA วัดสี่แยกราษฎร์บำรุง)";
$lo[15]	= "3475LC006 (Remote TDMA บ้านรั้ว ม.3 แพรกหนามแดง)";
$lo[16]	= "3475LC007 (วัดเขายี่สาร)";



echo "<table border='1'>
<tr>
<th>ที่</th>
<th>Location</th>
<th>จำนวนลูกค้า</th>
<th>รายได้/เดือน(บาท)</th>
</tr>";
$y=0;
for ($x=0; $x<$num; $x++){
  $y+=1;
  echo "<tr class='highlightrow'>";
  echo "<td class='c'>" . $y. "</td>";
  echo "<td>" . $lo[$x] . "</td>";
  echo "<td class='r'>" . number_format($arr2[$x],0,'.',','). "</td>";
  echo "<td class='r'>" . number_format($arr3[$x],0,'.',','). "</td>";
  echo "</tr>";
} // วนลูปใส่ค่า จำนวนลูกค้า เแต่ละ location(arr2) และ  จำนวนรายได้ แตละ location(arr3)
// ชุุด รวมทั้งหมด
echo "<tr class='highlightrow'>";
echo "<td>" . "". "</td>";
echo "<td class='c'>รวมทั้งสิ้น</td>";
echo "<td class='r'>" . number_format($sum1,0,'.',','). "</td>";
echo "<td class='r'>" . number_format($sum2,0,'.',','). "</td>";
echo "</tr>";
echo "</table>";


mysqli_close($con);
?> 