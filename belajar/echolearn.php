<?php 
$nama = "Rachmat Kurniawan";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Judul Halaman</title>
 </head>
 <body>
  
  <?php 
  	for ($i=0; $i<5 ; $i++) { ?>
  		<h1><?php echo $nama; ?></h1>
  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  	
   <?php } ?>
  
 </body>
 </html>