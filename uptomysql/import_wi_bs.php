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
            $row++; continue; // ทำให้ข้ามชื่อ ฟิลด์ไป(Row0) คือให้เริ่มเก็บข้อมูลแถว 1
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
			 if($col==12) $data13 = $cell->nodeValue;
			 if($col==13) $data14 = $cell->nodeValue;
			 if($col==14) $data15 = $cell->nodeValue;
			 if($col==15) $data16 = $cell->nodeValue;
			 if($col==16) $data17 = $cell->nodeValue;
			 if($col==17) $data18 = $cell->nodeValue;
			 if($col==18) $data19 = $cell->nodeValue;

			
			echo "<br>location_id = ".$data1."</>"; //check 
			echo "<br>bs_id = ".$data2."</>"; //check
			echo "<br>bs_coverage = ".$data3."</>"; //check 
			echo "<br>bs_ip = ".$data4."</>"; //check
			echo "<br>bs_service = ".$data5."</>"; //check 
			echo "<br>bs_circuit_id = ".$data6."</>"; //check 
			echo "<br>bs_vlan = ".$data7."</>"; //check
			echo "<br>request_id = ".$data8."</>"; //check 
			echo "<br>bs_cus = ".$data9."</>"; //check
			echo "<br>bs_avai = ".$data10."</>"; //check			
			echo "<br>bs_lat = ".$data11."</>"; //check 
			echo "<br>bs_long = ".$data12."</>"; //check 
			echo "<br>bs_angle = ".$data13."</>"; //check
			echo "<br>bs_height = ".$data14."</>"; //check
			echo "<br>bs_freq = ".$data15."</>"; //check
			echo "<br>bs_install_date = ".$data16."</>"; //check
			echo "<br>bs_active = ".$data17."</>"; //check
			echo "<br>bs_support_mt = ".$data18."</>"; //check
			echo "<br>bs_ect = ".$data19."</>"; //check
					
		$col++; 
        } 
 //======End Get data from Excel======================//        

//==================Insert To DB ====================================//
	$sql = " INSERT INTO wi_bs (";		
	$sql .= " bs_auto,";		
	$sql .= " location_id,";		
	$sql .= " bs_id,";		
	$sql .= " bs_coverage,";			
	$sql .= " bs_ip,";		
	$sql .= " bs_service,";		
	$sql .= " bs_circuit_id,";		
	$sql .= " bs_vlan,";		
	$sql .= " request_id,";	
	$sql .= " bs_cus,";	
	$sql .= " bs_avai,";	
	$sql .= " bs_lat,";
	$sql .= " bs_long,";
	$sql .= " bs_angle,";
	$sql .= " bs_height,";
	$sql .= " bs_freq,";
	$sql .= " bs_install_date,";
	$sql .= " bs_active,";
	$sql .= " bs_support_mt,";
	$sql .= " bs_ect ";		
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
	$sql .= " '$data12', ";	
	$sql .= " '$data13', ";	
	$sql .= " '$data14', ";	
	$sql .= " '$data15', ";	
	$sql .= " '$data16', ";	
	$sql .= " '$data17', ";	
	$sql .= " '$data18', ";	
	$sql .= " '$data19' ";	
	$sql .= " ) ";		
	mysql_query($sql) or die(mysql_error()); 
//==================End Insert To DB ====================================//
 $row++;  
  } 

mysql_close();
?>