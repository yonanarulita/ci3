<div class="container">
	<br><br>
<div>
	<button class="btn button-default"><a href="<?php echo site_url('Blog/create')?>">New Post</a></button>
</div><br><br>
<?php
$this->load->helper('text');
foreach ($blog as $row)
		{
        	echo "<h1>$row->judul</h1>";
        	echo "<br>Tanggal : $row->tanggal<br>";
        	echo "Author : $row->author<br>";
        	echo "".character_limiter($row->konten, 100)."<br>"; 
        	echo "$row->image<br>";
        	echo "<button class='btn button-default'><a href='".site_url('Blog/tampil/'.$row->id.'/')."'>Baca Selengkapnya...</a></button><br><br>";		
        }
?>

</div>

