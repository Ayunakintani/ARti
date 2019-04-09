<h2>Mata Kuliah </h2>

<table class="table table-bordered">
	<thead>
			<tr>
				<th>No</th>
				<th>Nama Matkul</th>
				<th>Kode Matkul</th>
			</tr>
	</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$conn->query ("SELECT * FROM mata_kuliah"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['nama_matkul']; ?></td>
				<td><?php echo $pecah['kode_matkul']; ?></td>

			</tr>
			<?php $nomor++; ?>
			<?php } ?>


		</tbody>
	</tbody>
</table>