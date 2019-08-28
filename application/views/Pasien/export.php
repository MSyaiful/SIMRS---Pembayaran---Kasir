<table class="table table-striped table-bordered" id="myTable">
	<thead>
		<tr>
			<th>ID</th>
			<th width="350">Nama Pasien</th>
			<th width="200">Jenis Kelamin</th>
			<th width="150">Tanggal Masuk</th>
			<th width="150">Tanggal Keluar</th>
			<th>Kamar</th>
			<th>Penyakit</th>
			<th width="300">Alamat</th>
			<th width="150">No. Telpon</th>
			<th>Actions</th>
			<th></th>
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
			<td>
				<a href="<?php echo site_url('pasien/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><i
						class="fas fa-cog"> Edit</i></a>
			</td>
			<td>
				<a href="<?php echo site_url('pasien/remove/'.$p['id']); ?>" onclick="del()"
					class="btn btn-danger btn-xs ml-3"><i class="fas fa-trash-alt"> Delete</i></a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
