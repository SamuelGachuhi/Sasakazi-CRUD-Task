<?php
	$DBH = new PDO('mysql:host=localhost;dbname=plip', "root", "");
	$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$actual_hour = date("h") + 3;
	$time_stamp = date("Y-m-d ".$actual_hour.":i:s");
?>