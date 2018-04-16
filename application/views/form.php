<h1>Tambah Data</h1><hr>

<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>

<?php echo form_open("gambar/tambah", array('enctype'=>'multipart/form-data')); ?>
	<table cellpadding="8">
		<tr>
			<td>Judul</td>
			<td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
		</tr>

		<tr>
			<td>Tanggal</td>
			<td><input type="text" name="input_tgl" value="<?php echo set_value('input_tgl'); ?>"></td>
		</tr>

		<tr>
			<td>Author</td>
			<td><input type="text" name="input_author" value="<?php echo set_value('input_author'); ?>"></td>
		</tr>

		<tr>
			<td>Konten</td>
			<td><input type="text" name="input_konten" value="<?php echo set_value('input_konten'); ?>"></td>
		</tr>

		<tr>
			<td>Gambar</td>
			<td><input type="file" name="input_gambar"></td>
		</tr>
	</table>
		
	<hr>
	<input type="submit" name="submit" value="Simpan">
	<a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
<?php echo form_close(); ?>
