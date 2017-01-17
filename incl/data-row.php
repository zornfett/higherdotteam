<?php
while ($row = mysql_fetch_assoc($data)) {
	echo
	"<tr>
		<td>{$row['id_number']}</td>
		<td>{$row['first_name']}</td>
		<td>{$row['last_name']}</td>
		<td>{$row['sex']}</td>
		<td>{$row['born_date']}</td>
		<td>{$row['start_date']}</td>
	</tr>";
}
?>