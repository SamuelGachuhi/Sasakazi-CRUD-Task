<!doctype html><html><head>
	<title>Sarah Chepwogen</title>
	<style>
		#Sarah { background:#000; border:#0f0 solid 1px; border-radius:5px; color:#ff0; font-size:21px; height:35px; padding:7px; width:500px; } 
		#Chepwogen { background:#0f0; border:#0f0 solid 1px; border-radius:5px; color:#fff; cursor:pointer; font-size:21px; height:50px; padding:7px; width:520px; } 
		#header { color:#ff0; font-weight:bold; } 
		#alt_row_clr { background:#000; color:#fff; cursor:pointer; } 
		#alt_row_clr tr:hover { color:#0f0; } 
		#alt_row_clr tr:nth-child(even) { background:#333; } 
		#jupiter { background:#0f0; border:#0f0 solid 1px; border-radius:5px; cursor:pointer; font-weight:bold; padding:7px; width:100px; } 
		#mercedes { background:#f00; border:#f00 solid 1px; border-radius:5px; color:#fff; cursor:pointer; font-weight:bold; padding:7px; width:100px; } 
	</style>
</head><body align="center" style="background:#000">
<p>&nbsp;</p>
<?php
	$operation_selected = $_POST['operation_selected'];
	echo '<h1 style="color:#0f0">You selected: ' . $operation_selected . '</h1>';
	echo '<p><a style="color:#ff0" href="./">Start over</a></p>';
	if ($operation_selected == "Create") {
		include 'create.php';
		
	} else if ($operation_selected == "Read") {
		include 'read.php';
		
	} else if ($operation_selected == "Update") {
		include 'update.php';
		
	} else {
		include 'delete.php';
	}
?>
</body></html>