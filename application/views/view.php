<h1>Post Article</h1><hr>
<a href="<?php echo base_url("index.php/gambar/tambah"); ?>">Tambah Data</a><br><br>

<table border="1" cellpadding="8">
<tr>
    
    <th>Judul</th>
    <th>Tgl</th>
    <th>Author</th>
    <th>Konten</th>
    <th>Gambar</th>

</tr>

<?php
if( ! empty($gambar)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
    foreach($gambar as $data){ // Lakukan looping pada variabel gambar dari controller
        echo "<tr>";
        
        echo "<td>".$data->judul."</td>";
        echo "<td>".$data->tgl."</td>";
        echo "<td>".$data->author."</td>";
        echo "<td>".$data->konten."</td>";
        echo "<td><img src='".base_url("images/".$data->img)."' width='100' height='100'></td>";
        // echo "<td>".$data->img."</td>";

        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}
?>
</table>
