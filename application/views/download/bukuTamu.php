<?php
// Download file
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=bukuTamu.xls");
?>
<table border="1">
	<tr>
		<th>ID</th>
		<th>NAMA</th>
		<th>EMAIL</th>
		<th>MESSAGE</th>
		<th>DATE</th>
	</tr>
	<?php foreach ($data as $bukuTamu): ?>
	<tr>
			<td><?php echo $bukuTamu['ID'];?></td>
			<td><?php echo $bukuTamu['Name']; ?></td>
			<td><?php echo $bukuTamu['Email']; ?></td>
			<td><?php echo $bukuTamu['Message']; ?></td>
			<td><?php echo $bukuTamu['Date']; ?></td>
	</tr>
	<?php endforeach ?>
</table>