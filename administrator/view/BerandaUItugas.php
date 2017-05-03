<?php 

require_once 'View.php';
/**
* 
*/
class CobaBeranda extends View
{
	
	public function tampilKan()
	{
		include_once 'pages/konfigurasi.php';
		$this->end();
	}
}



 ?>