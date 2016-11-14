<html>
<head>
<!-- <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ /> -->
<meta charset="UTF-8">
<?php 
include('includes/config.php');
$sql = "select * from wi_service";
$objQuery = mysql_query($sql,$conndb); 
$row = mysql_num_rows($objQuery);
if ($row <> 0){
	//$result = mysql_fetch_array($objQuery);
	//$namef = $result['post_title'];
	//echo "$namef";
	while ($result = mysql_fetch_array($objQuery)) {
		$lc_id = $result['location_id'];
		$bs_id = $result['bs_id'];
		$sv_id = $result['service_id'];
		$sv_name = $result['service_name'];
		
		
		echo "<br>";
		echo "$lc_id";
		echo "_";
		echo "$bs_id";
		echo "_";
		echo "$sv_id";
		echo "_";
		echo "$sv_name";
		echo "</>";
	}
}else{
	echo "ไม่พบข้อมูล";
}
?>

</body>
</html>