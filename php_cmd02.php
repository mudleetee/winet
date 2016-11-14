<?php
	while(true) {
		echo "Enter Something : ";
		$input = trim(fgets(STDIN,1024));	
		echo "\n".md5($input)," \n\n";
	}
	
?>