<?php 

require_once 'View.php';

class TampilanUI extends View
{
	
	public function tampilkanForm()
	{
		include_once 'pages/tugas.php';
		$this->end();
	}
}



 ?>