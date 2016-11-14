<?php 
    if ( $_FILES['file']['error'] ) { 
        die("upload error "); 
    } 
  
 //======Connect DB======================//   
    $m_host = "localhost"; 
    $m_user = "root"; 
    $m_pass = "123456"; 
    $m_name = "db_winet"; 

    mysql_connect($m_host,$m_user,$m_pass);  
    mysql_select_db($m_name); 
    mysql_query("SET NAMES UTF8"); 
 //======End Connect DB======================//   

 //======Get data from Excel======================//        
    $xmlDoc = DOMDocument::load( $_FILES['file']['tmp_name'] ); 
    $rows   =    $xmlDoc->getElementsByTagName( 'Row'); 
    $row    =    0; 
    /*foreach( $rows as $temp )  { 
        $col = 0; 
        if($row==0) { $row++; continue;} 
        $cells = $temp->getElementsByTagName('service_name');
        foreach( $cells as $cell ){ 
            $data[$col] = $cell->nodeValue; 
            $col++;
        }
    $row++;
    }
        foreach ($data as $aa) echo '<br>'.$aa.'</>';
	*/
	
    foreach ($rows as $temp) { 
	echo "<br>R:".$row."</>";		//check การวิ่ง ของ loop นอก
        $col = 0; 
        if($row==0) { 
            $row++; continue; // ทำให้ข้ามชื่อ ฟิลด์ไป(Row0) คือให้เริ่มเก็บข้อมูลแถว 1
        } 
        $cells    = $temp->getElementsByTagName('Cell'); 
		
        foreach( $cells as $cell )  { 
		echo "<br>".$col."</>";		//check การวิ่ง ของ loop ใน
             if($col==0) $data1 = $cell->nodeValue; 
             if($col==1) $data2 = $cell->nodeValue; 
             if($col==2) $data3 = $cell->nodeValue; 
			 if($col==3) $data4 = $cell->nodeValue; 
			 if($col==4) $data5 = $cell->nodeValue; 
			 if($col==5) $data6 = $cell->nodeValue; 
			 if($col==6) $data7 = $cell->nodeValue; 
			 if($col==7) $data8 = $cell->nodeValue; 
			 if($col==8) $data9 = $cell->nodeValue; 
			 if($col==9) $data10 = $cell->nodeValue; 
			 if($col==10) $data11 = $cell->nodeValue; 
			 if($col==11) $data12 = $cell->nodeValue; 
		
			 echo "<br>".$data12."</>"; //check ให้ แสดง $data4 ว่าถึงไหนและมีค่าไร จะมี Error ก่อน 3 ค่่า

		$col++; 
        } 
 //======End Get data from Excel======================//        

//==================Insert To DB ====================================//
	$sql = " INSERT INTO wi_3g (";		
	$sql .= " 3g_auto, ";		
	$sql .= " 3g_site_id, ";		
	$sql .= " 3g_site_code, ";	
	$sql .= " 3g_site_type, ";	
	$sql .= " 3g_site_name, ";		
	$sql .= " 3g_site_lat, ";		
	$sql .= " 3g_site_long, ";		
	$sql .= " 3g_site_tam, ";		
	$sql .= " 3g_site_district, ";	
	$sql .= " 3g_site_province, ";	
	$sql .= " 3g_property_id, ";	
	$sql .= " 3g_code10_id ";	
	
	
	$sql .= " ) VALUES ( ";		
	$sql .= " '$row', ";		
	$sql .= " '$data5', ";		
	$sql .= " '$data4', ";		
	$sql .= " '$data2', ";		
	$sql .= " '$data6', ";	
	$sql .= " '$data7', ";	
	$sql .= " '$data8', ";	
	$sql .= " '$data9', ";	
	$sql .= " '$data10', ";	
	$sql .= " '$data11', ";	
	$sql .= " '$data3',";	
	$sql .= " '$data1' ";	
	$sql .= " ) ";		
	mysql_query($sql) or die(mysql_error()); 
//==================End Insert To DB ====================================//
 $row++;  
  } 

mysql_close();
?>