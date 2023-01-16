<h3 style="color:#0f0">Update: This will edit the entries in the database</h3>
<h3 style="color:#0f0">Select an entry to edit/ update:</h3>
  <table id="alt_row_clr" align="center" border="0px" cellpadding="5" cellspacing="0" width="100%">
	<tr id="header">
		<td>Cycle</td>
		<td>Priority 1</td>
		<td>Priority 2</td>
		<td>Priority 3</td>
		<td>Priority 4</td>
		<td>Priority 5</td>
		<td>&nbsp;</td>
	</tr>
	<?php
		include 'includes/access.php';
		$STH = $DBH->query("SELECT * FROM `sarah_chepwogen`");
		//$STH = $DBH->query("SELECT * FROM `sarah_chepwogen` ORDER BY `id` DESC");
		$STH->setFetchMode(PDO::FETCH_OBJ);
		while($row = $STH->fetch()) {
			$id = $row->id;
			$priority_1 = $row->priority_1;
			$priority_2 = $row->priority_2;
			$priority_3 = $row->priority_3;
			$priority_4 = $row->priority_4;
			$priority_5 = $row->priority_5;
			$time_stamp = $row->time_stamp;
			
			echo '<tr>
				<td>' . $id . '</td>
				<td>' . $priority_1 . '</td>
				<td>' . $priority_2 . '</td>
				<td>' . $priority_3 . '</td>
				<td>' . $priority_4 . '</td>
				<td>' . $priority_5 . '</td>
				<td>
					<form action="update_2.php" method="post">
						<input type="hidden" name="entry_id" value="' . $id . '" />
						<input type="submit" id="jupiter" value="Update" />
					</form>
				</td>
			</tr>';
		}
	?>
  </table>