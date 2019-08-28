<?php echo form_open('obat/edit/'.$obat['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nama_obat" class="col-md-4 control-label">Nama Obat</label>
		<div class="col-md-8">
			<input type="text" name="nama_obat" value="<?php echo ($this->input->post('nama_obat') ? $this->input->post('nama_obat') : $obat['nama_obat']); ?>" class="form-control" id="nama_obat" />
		</div>
	</div>
	<div class="form-group">
		<label for="hrg_obat" class="col-md-4 control-label">Hrg Obat</label>
		<div class="col-md-8">
			<input type="text" name="hrg_obat" value="<?php echo ($this->input->post('hrg_obat') ? $this->input->post('hrg_obat') : $obat['hrg_obat']); ?>" class="form-control" id="hrg_obat" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>