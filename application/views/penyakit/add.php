<?php echo form_open('penyakit/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="jns_penyakit" class="col-md-4 control-label">Jns Penyakit</label>
		<div class="col-md-8">
			<input type="text" name="jns_penyakit" value="<?php echo $this->input->post('jns_penyakit'); ?>" class="form-control" id="jns_penyakit" />
		</div>
	</div>
	<div class="form-group">
		<label for="tindakan" class="col-md-4 control-label">Tindakan</label>
		<div class="col-md-8">
			<input type="text" name="tindakan" value="<?php echo $this->input->post('tindakan'); ?>" class="form-control" id="tindakan" />
		</div>
	</div>
	<div class="form-group">
		<label for="hrg_tindakan" class="col-md-4 control-label">Hrg Tindakan</label>
		<div class="col-md-8">
			<input type="text" name="hrg_tindakan" value="<?php echo $this->input->post('hrg_tindakan'); ?>" class="form-control" id="hrg_tindakan" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>