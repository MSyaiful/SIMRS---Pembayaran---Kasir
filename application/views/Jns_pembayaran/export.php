<table class="table table-striped table-bordered" id="myTable">
	<thead>
		<tr>
			<th width="100">ID</th>
			<th width="300">Jenis Pembayaran</th>
			<th width="300">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($jns_pembayaran as $j){ ?>
		<tr>
			<td><?php echo $j['id']; ?></td>
			<td><?php echo $j['jns_pembayaran']; ?></td>
			<td>
				<a href="<?php echo site_url('jns_pembayaran/edit/'.$j['id']); ?>" class="btn btn-info btn-xs"><i
						class="fas fa-cog"> Edit</i></a>
				<a href="<?php echo site_url('jns_pembayaran/remove/'.$j['id']); ?>" onclick="del()"
					class="btn btn-danger btn-xs ml-3"><i class="fas fa-trash-alt"> Delete</i></a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
