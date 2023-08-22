<?php
	$a = 120;
	function soma(){
		global $a;
		$x = $a + 40;
		return $x;
	}

	echo soma();
?>