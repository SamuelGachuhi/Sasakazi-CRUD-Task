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
	</style>
</head><body align="center" style="background:#000">
<p>&nbsp;</p>
<h3 style="color:#0f0">Update: This will permanently delete an entry from the database</h3>
<h2><a style="color:#ff0" href="./">Start over</a></h2>
<h3 style="color:#0f0">Delete the following entry:</h3>
<?php
	$entry_id = $_POST['entry_id'];
	include 'includes/access.php';
	$STH = $DBH->query("SELECT * FROM `sarah_chepwogen` WHERE `id` = '$entry_id'");
	//$STH = $DBH->query("SELECT * FROM `sarah_chepwogen` ORDER BY `id` DESC");
	$STH->setFetchMode(PDO::FETCH_OBJ);
	while($row = $STH->fetch()) {
		$priority_1 = $row->priority_1;
		$priority_2 = $row->priority_2;
		$priority_3 = $row->priority_3;
		$priority_4 = $row->priority_4;
		$priority_5 = $row->priority_5;
		echo '<form action="success_delete.php" method="post">
		<input type="hidden" name="entry_id" value="' . $entry_id . '" />
		<p><input id="Sarah" type="text" name="priority_1" placeholder="' . $priority_1 . '" value="' . $priority_1 . '" readonly /></p>
		<p><input id="Sarah" type="text" name="priority_2" placeholder="' . $priority_2 . '" value="' . $priority_2 . '" readonly /></p>
		<p><input id="Sarah" type="text" name="priority_3" placeholder="' . $priority_3 . '" value="' . $priority_3 . '" readonly /></p>
		<p><input id="Sarah" type="text" name="priority_4" placeholder="' . $priority_4 . '" value="' . $priority_4 . '" readonly /></p>
		<p><input id="Sarah" type="text" name="priority_5" placeholder="' . $priority_5 . '" value="' . $priority_5 . '" readonly /></p>
		<p><input id="Chepwogen" style="background:#f00; color:#fff" type="submit" value="Confirm delete" /></p>
	</form>';
	}
?>
</body></html>