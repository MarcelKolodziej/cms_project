<?php
	$connection = mysqli_connect('localhost', 'root', '', 'cms');

	if(!$connection){
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		echo "Debbugin errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Debbugin error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}
?>