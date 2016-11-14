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
			

			
			echo "<br>wa_cen = ".$data1."</>"; //check 
			echo "<br>wa_req = ".$data2."</>"; //check
			echo "<br>wa_reg_date = ".$data3."</>"; //check 
			echo "<br>wa_cen_sentdate = ".$data4."</>"; //check
			echo "<br>wa_name = ".$data5."</>"; //check 
			echo "<br>wa_address = ".$data6."</>"; //check 
			echo "<br>wa_tambon = ".$data7."</>"; //check
			echo "<br>wa_amphoe = ".$data8."</>"; //check 
			echo "<br>wa_province = ".$data9."</>"; //check
			echo "<br>wa_postalcode = ".$data10."</>"; //check			
			echo "<br>wa_id_card = ".$data11."</>"; //check 
			echo "<br>wa_mobile = ".$data12."</>"; //check 
			echo "<br>wa_bb_contract = ".$data13."</>"; //check
			echo "<br>wa_pro_contract = ".$data14."</>"; //check
			echo "<br>wa_id_card_copy = ".$data15."</>"; //check
			echo "<br>wa_census_regi_copy = ".$data16."</>"; //check
			echo "<br>wa_result = ".$data17."</>"; //check
			echo "<br>wa_ect = ".$data18."</>"; //check
					
		$col++; 
        } 
 //======End Get data from Excel======================//        

//==================Insert To DB ====================================//
	$sql = " INSERT INTO wi_wait (";		
	$sql .= " wa_auto,";		
	$sql .= " wa_cen,";		
	$sql .= " wa_req,";		
	$sql .= " wa_reg_date,";			
	$sql .= " wa_cen_sentdate,";		
	$sql .= " wa_name,";		
	$sql .= " wa_address,";		
	$sql .= " wa_tambon,";		
	$sql .= " wa_amphoe,";	
	$sql .= " wa_province,";	
	$sql .= " wa_postalcode,";	
	$sql .= " wa_id_card,";
	$sql .= " wa_mobile,";
	$sql .= " wa_bb_contract,";
	$sql .= " wa_pro_contract,";
	$sql .= " wa_id_card_copy,";
	$sql .= " wa_census_regi_copy,";
	$sql .= " wa_result,";
	$sql .= " wa_ect ";		
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
	$sql .= " '$data18' ";	
	$sql .= " ) ";		
	mysql_query($sql) or die(mysql_error()); 
//==================End Insert To DB ====================================//
 $row++;  
  } 

mysql_close();
?>