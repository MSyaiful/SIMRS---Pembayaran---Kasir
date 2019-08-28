<div class="pull-right">
	<a href="<?php echo site_url('kamar/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Jns Kamar</th>
		<th>Harga Kamar</th>
		<th>Actions</th>
    </tr>
	<?php foreach($kamar as $k){ ?>
    <tr>
		<td><?php echo $k['id']; ?></td>
		<td><?php echo $k['jns_kamar']; ?></td>
		<td><?php echo $k['harga_kamar']; ?></td>
		<td>
            <a href="<?php echo site_url('kamar/edit/'.$k['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('kamar/remove/'.$k['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
