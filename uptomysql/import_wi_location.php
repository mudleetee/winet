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
		echo "<br><br>R:".$row."</>"; //check การวิ่ง ของ loop นอก
        $col = 0; 
        if($row==0) { 
            $row++; continue; // ทำให้ข้ามชื่อ ฟิลด์ไป(Row0) คือให้เริ่มเก็บข้อมูลแถว 1 สงสัยออกไป  foreach บนใหม่แน่ๆ
        } 
        $cells    = $temp->getElementsByTagName('Cell'); 
		
        foreach( $cells as $cell )  { 
			echo "<br><br>R: ".$row. ", C: ".$col."</>";  //check การวิ่ง ของ loop ใน
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
			echo "<br>center_name = ".$data1."</>"; //check 
			echo "<br>location_id = ".$data2."</>"; //check
			echo "<br>location_name = ".$data3."</>"; //check 
			echo "<br>location_address = ".$data4."</>"; //check
			echo "<br>location_datein = ".$data5."</>"; //check 
			echo "<br>circuit_id = ".$data6."</>"; //check 
			echo "<br>circuit_vlan = ".$data7."</>"; //check
			echo "<br>circuit_sw_ip = ".$data8."</>"; //check 
			echo "<br>circuit_gw = ".$data9."</>"; //check
			echo "<br>circuit_access_sw_port = ".$data10."</>"; //check 
			echo "<br>circuit_map = ".$data11."</>"; //check 
			echo "<circuit_ba = ".$data12."</>"; //check 
			
		$col++; 
        } 
 //======End Get data from Excel======================//        

//==================Insert To DB ====================================//
	$sql = " INSERT INTO wi_location (";		
	$sql .= " location_auto, ";		
	$sql .= " center_name, ";		
	$sql .= " location_id, ";		
	$sql .= " location_name, ";	
	$sql .= " location_address, ";	
	$sql .= " location_datein, ";	
	$sql .= " circuit_id, ";		
	$sql .= " circuit_vlan, ";			
	$sql .= " circuit_sw_ip, ";		
	$sql .= " circuit_gw, ";	
	$sql .= " circuit_access_sw_port, ";
	$sql .= " circuit_map, ";			
	$sql .= " circuit_ba ";		
	$sql .= " ) VALUES ( ";		
	$sql .= " '$row', ";		
	$sql .= " '$data1', ";		
	$sql .= " '$data2', ";		
	$sql .= " '$data3', ";		
	$sql .= " '$data4', ";	
	$sql .= " '$data5', ";	
	$sql .= " '$data6', ";	
	$sql .= " '$data7', ";	
	$sql .= " '$data8', ";
	$sql .= " '$data9', ";
	$sql .= " '$data10', ";
	$sql .= " '$data11', ";
	$sql .= " '$data12' ";	
	$sql .= " ) ";		
	mysql_query($sql) or die(mysql_error()); 
//==================End Insert To DB ====================================//
 $row++;  
  } 

mysql_close();
?>