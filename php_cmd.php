<?php
	echo "testing";
	echo "\n";
	
	echo $argc;
	echo "\n";
	
	print_r($argv);
	
	unset($argv[0]);
	print_r($argv);
	
	echo implode(' ',$argv), "\n";
	
	echo md5(implode(' ',$argv)), "\n";
		
?>
