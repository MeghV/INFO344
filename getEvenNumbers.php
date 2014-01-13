<?php
	$n = $_REQUEST['n'];
	
	for($i = 2; $i <= $n; $i++) {
		if(!($i % 2)) {
			echo $i . '<br>';
		}
	}
?>