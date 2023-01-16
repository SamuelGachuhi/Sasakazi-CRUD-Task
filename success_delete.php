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
	include 'includes/access.php';
	$ds = "DELETE FROM `sarah_chepwogen` WHERE id = ?";
	$STH = $DBH->prepare($ds);
	$STH->execute([$entry_id]);
?>
<h1 style="color:#0f0">You have successfully executed the delete operation! :)</h1>
<p>&nbsp;</p>
<a style="color:#ff0" href="./"><h3>Try out another operation...</h3></a>
</body></html>