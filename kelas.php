<h2> Kelas </h2>

<table class="table table-bordered">
	<thead>
			<tr>
				<th>Dosen</th>
				<th>Matkul</th>
				<th>Ruangan</th>
			</tr>
	</thead>
			<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$conn->query ("SELECT * FROM kelas"); ?>
			<?php while($pecah = $ambil->fetch_assoc()) { ?>



			<tr>
				<td><?php echo $pecah['id_dosen']; ?></td>
				<td><?php echo $pecah['id_matkul']; ?></td>
				<td><?php echo $pecah['id_ruangan']; ?></td>
			</tr>
			<?php $nomor++; ?>
			<?php } ?>
	
	</tbody>
 </tbody>
</table>