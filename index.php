<?php 
include 'view/TampilanBeranda.php';

$tgs = new TampilanUI();

$tgs->tampilkanForm();

$sid = new TampilanSidebar();
$sid->tampilkanSidebar();


 ?>