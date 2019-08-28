<?php echo form_open('kamar/edit/'.$kamar['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="jns_kamar" class="col-md-4 control-label">Jns Kamar</label>
		<div class="col-md-8">
			<input type="text" name="jns_kamar" value="<?php echo ($this->input->post('jns_kamar') ? $this->input->post('jns_kamar') : $kamar['jns_kamar']); ?>" class="form-control" id="jns_kamar" />
		</div>
	</div>
	<div class="form-group">
		<label for="harga_kamar" class="col-md-4 control-label">Harga Kamar</label>
		<div class="col-md-8">
			<input type="text" name="harga_kamar" value="<?php echo ($this->input->post('harga_kamar') ? $this->input->post('harga_kamar') : $kamar['harga_kamar']); ?>" class="form-control" id="harga_kamar" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>