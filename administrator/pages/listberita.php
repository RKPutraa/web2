<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>Judul</th>
			<th>Isi</th>
		</tr>
	</thead>
	<tbody>
 <?php
 $i=1; 
 foreach ($isi_berita as $ib) { ?>
		<tr>
			<td><?php $i ?></td>
			<td><?= $ib['judul'] ?></td>
			<td><?= $ib['isi'] ?></td>
		</tr>
		<?php 
		$i++;
		} ?>
	</tbody>
</table>
