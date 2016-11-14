<!DOCTYPE html>

<html>
<head>
	<title>Basic PHP </title>
	<meta charset = "UTF-8">
</head>	

<body>
<?php
	echo "<p>Data Process</p>";
	date_default_timezone_set('UTC');
	echo date('H:i:s:u a,l F jS Y e');
	echo "<p></>";
	# 1.แสดงวันเดือนปีไทย
	date_default_timezone_set('Asia/Bangkok');
	echo date('H:i:s:u a,l F jS Y e');
	echo "<p></>";
	
	$userName ="สมชาย น้อยเอี่ยม";
	$streetAddress = "123 ถ.เอกชัย";
	$cityAddress = "สมุทรสงคราม";
	
	# 2.แสดงการต่อสตริง แบบ E0D อ่านว่า ''อีศูนย์ดี'' แบบไม่เคยเห็นมาก่อน 
	# ตัวจบต้องอยู่ชิดซ้ายสุด
	
	$str = <<<E0D
	The customer name is 
	$userName and they
	live at $streetAddress
	in $cityAddress</br>
E0D;
	echo $str;
	
	#3.การใช้ define กำหนดค่า
	define('PI',3.1415926);
	echo "The Value of PI is ".PI. "</br>";
	
	#4.การใช้ ++ตัวแปร
	$ranNum = 5;
	echo "++ranNum = " . ++$ranNum. "</br>";  //	บวกก่อนแล้วแสดงค่า
	echo "ranNum++ = " . $ranNum++. "</br>";	//		แสดงค่าแล้วค่อยบวก
	echo "ranNum = " . $ranNum. "</br>";	
	
	#5.การใช้ การอ้างถึงค่าอื่น เมืื่อค่าอื่นเปลี่ยนตัวเองก็จะเปลี่ยนตาม
	$refToNum =&$ranNum;
	$ranNum = 100;
	echo $refToNum."</br>";
	$ranNum = 200;
	echo $refToNum."</br>";
	$ranNum = 500;
	echo $refToNum."</br>";
	
	#6.ตัวแปร = (condition) ?  true : false ; ถ้าเงื่อนไขเป็นจริง ตัวแปรนั้นจะมีค่าเป็น ค่าแรกหรือtrue เช่น
	$biggestNum = (15>10) ? 15:10;
	echo $biggestNum ."</br>";
	$biggestNum = (15<10) ? 15:10;
	echo $biggestNum ."</br>";
	
	# 7.อาเรย์ที่มี key และ value
	$customer = array ('name'=>$userName,'Street'=>$streetAddress,
	'City'=>$cityAddress);
	# 7.1 อาเรย์ที่มี key และ value ถ้ากำหนดตัวแปรชั่วคราวแบบนี้ จะพิมพ์ค่าออกมาเลย
	foreach($customer as $key){
		echo $key ."</br>";
	}
	# 7.2 อาเรย์ที่มี key และ value ถ้ากำหนดตัวแปรชั่วคราวแบบมี=>นี้ แล้วพิมพ์ key อย่างเดียวก็ได้ key
	foreach($customer as $key=>$value){
		echo $key ."</br>";
	}
	# 7.3 อาเรย์ที่มี key และ value ถ้ากำหนดตัวแปรชั่วคราวแบบมี=>นี้ แล้วพิมพ์ key และ value ก็ได้ครบ
	foreach($customer as $key=>$value){
		echo $key . " : " . $value ."</br>";
	}
	
	# 8.multi อาเรย์
	$customers=array(array('สมชาย','123 เอกชัย','1522'),
								array('ดนัย','143 เพชรเกษม','1782'),
								array('อังเด','145 เตาปูน','1622'));
	for($row=0;$row<3;$row++){
	
		for($col=0;$col<3;$col++){
			echo $customers[$row][$col] ;
			//echo "r=:" . $row."c=:".$col."</br>";
			// ตัด , ตัวท้ายเล่นๆ  loop เดียวใช้ != ก็ได้ โดยเปลี่ยน break ลงไปล่าง
			if ($row == 2 && $col == 2){
				break;
			} else {
				echo ',';
			}
				
		}
		echo "</br></br>";
	}
	
	#9.String
	$randString ="                    Random String          ";

	echo "string+ช่องว่างทั้ง 2 ข้าง = ". strlen("$randString")."</br>";
	echo "string+ช่องว่างด้านขวา (เพราะตัดซ้าย) = ". strlen(ltrim("$randString"))."</br>";
	echo "string+ช่องว่างด้านซ้าย (เพราะตัดขวา) = ". strlen(rtrim("$randString"))."</br>";
	echo "รวมตัดออกแล้วทั้ง 2 ข้าง (string ล้วนๆ) =  ". strlen(trim("$randString"))."</br>";
	echo "$randString"."</br>";
	
	
	#10 echo ที่ ต้องการ ตัวแปร string จะต่อกันได้เลย โดยไม่ต้องเชื่อมโดยใช้ จุด
	echo " The echo is $randString </br>";
	
	#11 การใช้ printf ที่มีพวก % มาใช้
	printf ("The Printf is %s </br>", $randString);
	
	$decimalNum = 2.3456;
	$n=65;
	printf("decimal num = %f </br>", $decimalNum);
	printf("decimal num = %.2f </br>", $decimalNum);
	printf("ปกติ interger 65 คิดเป็น ฐาน 16 = %x </br>", $n);
	printf("ปกติ interger 65 คิดเป็น ฐาน 8 = %o </br>", $n);
	printf("ปกติ interger 65 คิดเป็น String = %s </br>", $n);
	printf("ปกติ interger 65 คิดเป็น Character = %c </br>", $n);
	printf("ปกติ interger 65 คิดเป็น decimal = %d </br>", $n);
	printf("ปกติ interger 65 คิดเป็น binary = %b </br></br>", $n);
	printf("ปกติ decimal(double) 2.3456 คิดเป็น Float = %f </br>", $decimalNum);
	printf("ปกติ decimal(double) 2.3456 คิดเป็น Float = %.2f </br></br>", $decimalNum);
	printf ("ปกติ String $randString คิดเป็น String =  %s </br>", $randString);
	

	#12 string ตัวให้เป็น upper ตัวเดียว, upper, lower ตามลำดับ 
	$b="black sabbat";
	echo ucfirst($b)."</br>";
	
	echo strtoupper($b)."</br>";
	
	$c="UBUNTU TOTO";
	echo strtolower($c)."</br>";
	
	
?>
</body>
</html>
