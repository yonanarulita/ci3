
<table border="1">
	<tr>
		<th>Id</th>
		<th>Nama</th>
		<th>Nim</th>
		<th>Alamat</th>
	</tr>

<?php
	foreach($biodata as $b){
		echo "<tr>
				<td>$b->id</td>
				<td>$b->nama</td>
				<td>$b->nim</td>
				<td>$b->alamat</td>
				</tr>";
	}
?>
</table>