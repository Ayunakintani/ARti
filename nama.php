masuk<h2>Data Nama</h2>

<table class="table table-bordered">
	<thead>
			<tr>
				<th>No</th>
				<th>Nama Dosen</th>
				<th>Nip Dosen</th>
				<th>Aksi</th>
			</tr>
	</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$conn->query ("SELECT * FROM dosen"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['nama']; ?></td>
				<td><?php echo $pecah['nip']; ?></td>
				<td>
					<a href="" class="btn-danger btn">hapus</a>
					<a href="" class="btn btn-warning">ubah</a>
				</td>
			</tr>
			<?php $nomor++; ?>
			<?php } ?>

		</tbody>
	</tbody>
</table>


