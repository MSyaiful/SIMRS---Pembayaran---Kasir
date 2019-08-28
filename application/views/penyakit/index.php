<div class="pull-right">
	<a href="<?php echo site_url('penyakit/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Jns Penyakit</th>
		<th>Tindakan</th>
		<th>Hrg Tindakan</th>
		<th>Actions</th>
    </tr>
	<?php foreach($penyakit as $p){ ?>
    <tr>
		<td><?php echo $p['id']; ?></td>
		<td><?php echo $p['jns_penyakit']; ?></td>
		<td><?php echo $p['tindakan']; ?></td>
		<td><?php echo $p['hrg_tindakan']; ?></td>
		<td>
            <a href="<?php echo site_url('penyakit/edit/'.$p['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('penyakit/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
