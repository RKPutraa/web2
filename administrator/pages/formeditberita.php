<h1>Edit Berita</h1>

 <div class="row">
 <form action="aksi_ubah_berita.php?id=<?php echo $data_berita['id_berita']?>" method = "POST">
 	
 	<div class="col-md-12">
 	<label for="judul">Judul</label><br>
 	<input type="text" name="judul" value=<?php echo $data_berita['judul'] ?>>
 	<br>
 	</div>

 	<div class="col-md-12">
 	<label for="isi">Isi</label><br>
 	<textarea name="isi"><?php echo $data_berita ['isi'] ?></textarea><br>
 	</div>

 	<div class="col-md-12">
 	<label for="kategori">Kategori</label><br>
 	<select name="kategori">
 	<?php foreach ($data_kategori as $dt2): ?>
 		<option value="<?php echo $dt2['id_kategori'] ?>" 
 		<?php  
 		if ($dt2['id_kategori']==$data_berita['id_kategori']) {
 		echo "selected";
 		}
 		?>
 		><?php echo $dt2['nama_kategori']; ?></option>
 	<?php endforeach ?>
 	</select><br>
 	</div>
 	<div class="col-md-12">
 		<br><input type="submit" value="Submit">
 	</div>
 </form>
 </div>
