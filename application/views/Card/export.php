<table class="table table-striped table-bordered" id="myTable">
	<thead>
		<tr>
			<th width="300">ID</th>
			<th width="300">Jenis Card</th>
			<th width="300">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($card as $c){ ?>
		<tr>
			<td><?php echo $c['id']; ?></td>
			<td><?php echo $c['jns_card']; ?></td>
			<td>
				<a href="<?php echo site_url('card/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><i
						class="fas fa-cog"></i> Edit</a>
				<a href="<?php echo site_url('card/remove/'.$c['id']); ?>" onclick="del()"
					class="btn btn-danger btn-xs ml-3"><i class="fas fa-trash-alt"> Delete</i></a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
