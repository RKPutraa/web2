<?php $i=1;
	$nama= tatra;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Coba</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>no</td>
			<td>nama</td>
		</tr>
		<?php for ($i=0; $i<10 ; $i++) {
		 ?>
		<tr>
			<td><?php echo $i+1; ?></td>
			<td><?=$nama ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>