<table class="table table-striped table-bordered" border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama Pasien</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Masuk</th>
			<th>Tanggal Keluar</th>
			<th>Kamar</th>
			<th>Penyakit</th>
			<th>Alamat</th>
			<th>No. Telpon</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($pasien as $p){ ?>
		<tr>
			<td><?php echo $p['id']; ?></td>
			<td><?php echo $p['nama_pasien']; ?></td>
			<td><?php echo $p['jns_kelamin']; ?></td>
			<td><?php echo $p['tgl_masuk']; ?></td>
			<td><?php echo $p['tgl_keluar']; ?></td>
			<td><?php echo $p['jns_kamar']; ?></td>
			<td><?php echo $p['jns_penyakit']; ?></td>
			<td><?php echo $p['alamat']; ?></td>
			<td><?php echo $p['no_tlp']; ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
