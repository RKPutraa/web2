

<?php 
include_once "../config/database.php";

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$id_kategori = $_POST['kategori'];
$id_berita = $_GET['id'];

try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
    die("Connection error: " . $exception->getMessage());
}
//Mengambil data berita
try {
	$stmt = $db->prepare("UPDATE berita SET judul=:judul, isi=:isi, id_kategori=:kategori WHERE id_berita=:id_berita");
	$stmt->bindparam(":id_berita",$id_berita);
	$stmt->bindparam(":judul",$judul);
	$stmt->bindparam(":isi",$isi);
	$stmt->bindparam(":kategori",$id_kategori);
	$stmt->execute();
	echo "Berhasil Update Berita !";
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}
 ?>