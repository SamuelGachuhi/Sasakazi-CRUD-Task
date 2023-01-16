<!doctype html><html><head>
	<title>Sarah Chepwogen</title>
	<style>
		#Sarah { background:#000; border:#0f0 solid 1px; border-radius:5px; color:#ff0; font-size:21px; height:35px; padding:7px; width:500px; } 
		#Chepwogen { background:#0f0; border:#0f0 solid 1px; border-radius:5px; color:#fff; cursor:pointer; font-size:21px; height:50px; padding:7px; width:520px; } 
	</style>
</head><body align="center" style="background:#000">
<p>&nbsp;</p>
<?php
	$entry_id = $_POST['entry_id'];
	$priority_1 = $_POST['priority_1'];
	$priority_2 = $_POST['priority_2'];
	$priority_3 = $_POST['priority_3'];
	$priority_4 = $_POST['priority_4'];
	$priority_5 = $_POST['priority_5'];

	include 'includes/access.php';
	$us = "UPDATE `sarah_chepwogen` SET 
		`priority_1` = ?,
		`priority_2` = ?,
		`priority_3` = ?,
		`priority_4` = ?,
		`priority_5` = ?
		WHERE `id` = ?";
	$stmt= $DBH->prepare($us);
	$stmt->execute([$priority_1, $priority_2, $priority_3, $priority_4, $priority_5, $entry_id]);
?>
<h1 style="color:#0f0">You have successfully executed the update operation! :)</h1>
<p>&nbsp;</p>
<a style="color:#ff0" href="./"><h3>Try out another operation...</h3></a>
</body></html>