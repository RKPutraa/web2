<?php 

require_once 'View.php';
include 'model/Berita.php';

class TampilanUI extends View
{
	
	public function tampilkanForm()
	{
		include_once 'model/.php';
		$brt= new Berita();
		$isi_berita = $brt->ambilBerita();
		include_once 'pages/tugas.php';
		$this->end();
	}
}



 ?>
