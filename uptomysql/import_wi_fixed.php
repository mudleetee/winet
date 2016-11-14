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
    $rows   =    $xmlDoc->getElementsByTagName('Row'); 
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
			 if($col==12) $data13 = $cell->nodeValue; 
			 if($col==13) $data14 = $cell->nodeValue; 
			 if($col==14) $data15 = $cell->nodeValue; 
			 if($col==15) $data16 = $cell->nodeValue; 
			 if($col==16) $data17 = $cell->nodeValue; 
			 if($col==17) $data18 = $cell->nodeValue; 
			 if($col==18) $data19 = $cell->nodeValue; 
			 if($col==19) $data20 = $cell->nodeValue; 
			 if($col==20) $data21 = $cell->nodeValue; 
			 if($col==21) $data22 = $cell->nodeValue; 
			 if($col==22) $data23 = $cell->nodeValue; 
			 if($col==23) $data24 = $cell->nodeValue; 
			 if($col==24) $data25 = $cell->nodeValue; 
			 if($col==25) $data26 = $cell->nodeValue; 
			 if($col==26) $data27 = $cell->nodeValue; 
			 if($col==27) $data28 = $cell->nodeValue; 
			 if($col==28) $data29 = $cell->nodeValue; 
			 if($col==29) $data30 = $cell->nodeValue; 
			 echo "<br>".$data12."</>"; //check ให้ แสดง $data4 ว่าถึงไหนและมีค่าไร จะมี Error ก่อน 3 ค่่า

		$col++; 
        } 
 //======End Get data from Excel======================//        

//==================Insert To DB ====================================//
	$sql = " INSERT INTO wi_fixed (";		
	$sql .= " fixed_auto, ";		
	$sql .= " fixed_id, ";		
	$sql .= " fixed_type, ";	
	$sql .= " fixed_active, ";	
	$sql .= " customer_name, ";		
	$sql .= " customer_addr, ";		
	$sql .= " fixed_account_type, ";		
	$sql .= " service_location_code, ";		
	$sql .= " service_location_name, ";	
	$sql .= " product_dest ";	
	
	$sql .= " ) VALUES ( ";		
	$sql .= " '$row', ";		
	$sql .= " '$data3', ";		
	$sql .= " '$data4', ";		
	$sql .= " '$data5', ";		
	$sql .= " '$data6', ";	
	$sql .= " '$data7', ";	
	$sql .= " '$data9', ";	
	$sql .= " '$data15', ";	
	$sql .= " '$data14',";	
	$sql .= " '$data30' ";	
	$sql .= " ) ";		
	mysql_query($sql) or die(mysql_error()); 
//==================End Insert To DB ====================================//
 $row++;  
  } 

mysql_close();
?>