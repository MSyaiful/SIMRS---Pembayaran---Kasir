<div class="pull-right">
	<a href="<?php echo site_url('pembayaran/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Nama Pasien</th>
		<th>Jns Kamar</th>
		<th>Hrg Kamar</th>
		<th>Jns Penyakit</th>
		<th>Tindakan</th>
		<th>Hrg Tindakan</th>
		<th>Nama Obat</th>
		<th>Hrg Obat</th>
		<th>Jns Pembayaran</th>
		<th>Jns Card</th>
		<th>No Faktur</th>
		<th>Jns Kelamin</th>
		<th>Tgl Masuk</th>
		<th>Tgl Keluar</th>
		<th>Total Harga</th>
		<th>Nama Pembayar</th>
		<th>Jumlah Bayar</th>
		<th>Tgl Bayar</th>
		<th>No Bukti</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pembayaran as $p){ ?>
    <tr>
		<td><?php echo $p['id']; ?></td>
		<td><?php echo $p['nama_pasien']; ?></td>
		<td><?php echo $p['jns_kamar']; ?></td>
		<td><?php echo $p['hrg_kamar']; ?></td>
		<td><?php echo $p['jns_penyakit']; ?></td>
		<td><?php echo $p['tindakan']; ?></td>
		<td><?php echo $p['hrg_tindakan']; ?></td>
		<td><?php echo $p['nama_obat']; ?></td>
		<td><?php echo $p['hrg_obat']; ?></td>
		<td><?php echo $p['jns_pembayaran']; ?></td>
		<td><?php echo $p['jns_card']; ?></td>
		<td><?php echo $p['no_faktur']; ?></td>
		<td><?php echo $p['jns_kelamin']; ?></td>
		<td><?php echo $p['tgl_masuk']; ?></td>
		<td><?php echo $p['tgl_keluar']; ?></td>
		<td><?php echo $p['total_harga']; ?></td>
		<td><?php echo $p['nama_pembayar']; ?></td>
		<td><?php echo $p['jumlah_bayar']; ?></td>
		<td><?php echo $p['tgl_bayar']; ?></td>
		<td><?php echo $p['no_bukti']; ?></td>
		<td>
            <a href="<?php echo site_url('pembayaran/edit/'.$p['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pembayaran/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>