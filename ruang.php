<h2>Data Ruang</h2>

<table class="table table-bordered">
	<thead>
			<tr>
				<th>No</th>
				<th>Nama Ruangan</th>
			</tr>
	</thead>
			<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$conn->query ("SELECT * FROM ruangan"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['nama_ruangan']; ?></td>
			</tr>
			<?php $nomor++; ?>
			<?php } ?>

		</tbody>
	</tbody>
</table>
