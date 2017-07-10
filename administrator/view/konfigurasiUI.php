<?php 
require_once 'View.php';

/**
* 
*/
class konfigurasiUI extends View
{
	
	public function tampilForm()
	{
		include 'pages/konfigurasi.php';
		$this->end();
	}
}
 ?>