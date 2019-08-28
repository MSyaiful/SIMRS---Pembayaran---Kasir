<div class="pull-right">
	<a href="<?php echo site_url('obat/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Nama Obat</th>
		<th>Hrg Obat</th>
		<th>Actions</th>
    </tr>
	<?php foreach($obat as $o){ ?>
    <tr>
		<td><?php echo $o['id']; ?></td>
		<td><?php echo $o['nama_obat']; ?></td>
		<td><?php echo $o['hrg_obat']; ?></td>
		<td>
            <a href="<?php echo site_url('obat/edit/'.$o['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('obat/remove/'.$o['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
