<?php echo form_open('pembayaran/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nama_pasien" class="col-md-4 control-label">Pasien</label>
		<div class="col-md-8">
			<select name="nama_pasien" class="form-control">
				<option value="">select pasien</option>
				<?php 
				foreach($all_pasien as $pasien)
				{
					$selected = ($pasien['id'] == $this->input->post('nama_pasien')) ? ' selected="selected"' : "";

					echo '<option value="'.$pasien['id'].'" '.$selected.'>'.$pasien['nama_pasien'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="jns_kelamin" class="col-md-4 control-label">Pasien</label>
		<div class="col-md-8">
			<select name="jns_kelamin" class="form-control">
				<option value="">select pasien</option>
				<?php 
				foreach($all_pasien as $pasien)
				{
					$selected = ($pasien['id'] == $this->input->post('jns_kelamin')) ? ' selected="selected"' : "";

					echo '<option value="'.$pasien['id'].'" '.$selected.'>'.$pasien['jns_kelamin'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="jns_kamar" class="col-md-4 control-label">Kamar</label>
		<div class="col-md-8">
			<select name="jns_kamar" class="form-control">
				<option value="">select kamar</option>
				<?php 
				foreach($all_kamar as $kamar)
				{
					$selected = ($kamar['id'] == $this->input->post('jns_kamar')) ? ' selected="selected"' : "";

					echo '<option value="'.$kamar['id'].'" '.$selected.'>'.$kamar['jns_kamar'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="hrg_kamar" class="col-md-4 control-label">Kamar</label>
		<div class="col-md-8">
			<select name="hrg_kamar" class="form-control">
				<option value="">select kamar</option>
				<?php 
				foreach($all_kamar as $kamar)
				{
					$selected = ($kamar['id'] == $this->input->post('hrg_kamar')) ? ' selected="selected"' : "";

					echo '<option value="'.$kamar['id'].'" '.$selected.'>'.$kamar['harga_kamar'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="jns_penyakit" class="col-md-4 control-label">Penyakit</label>
		<div class="col-md-8">
			<select name="jns_penyakit" class="form-control">
				<option value="">select penyakit</option>
				<?php 
				foreach($all_penyakit as $penyakit)
				{
					$selected = ($penyakit['id'] == $this->input->post('jns_penyakit')) ? ' selected="selected"' : "";

					echo '<option value="'.$penyakit['id'].'" '.$selected.'>'.$penyakit['jns_penyakit'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="tindakan" class="col-md-4 control-label">Penyakit</label>
		<div class="col-md-8">
			<select name="tindakan" class="form-control">
				<option value="">select penyakit</option>
				<?php 
				foreach($all_penyakit as $penyakit)
				{
					$selected = ($penyakit['id'] == $this->input->post('tindakan')) ? ' selected="selected"' : "";

					echo '<option value="'.$penyakit['id'].'" '.$selected.'>'.$penyakit['tindakan'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="hrg_tindakan" class="col-md-4 control-label">Penyakit</label>
		<div class="col-md-8">
			<select name="hrg_tindakan" class="form-control">
				<option value="">select penyakit</option>
				<?php 
				foreach($all_penyakit as $penyakit)
				{
					$selected = ($penyakit['id'] == $this->input->post('hrg_tindakan')) ? ' selected="selected"' : "";

					echo '<option value="'.$penyakit['id'].'" '.$selected.'>'.$penyakit['hrg_tindakan'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="nama_obat" class="col-md-4 control-label">Obat</label>
		<div class="col-md-8">
			<select name="nama_obat" class="form-control">
				<option value="">select obat</option>
				<?php 
				foreach($all_obat as $obat)
				{
					$selected = ($obat['id'] == $this->input->post('nama_obat')) ? ' selected="selected"' : "";

					echo '<option value="'.$obat['id'].'" '.$selected.'>'.$obat['nama_obat'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="hrg_obat" class="col-md-4 control-label">Obat</label>
		<div class="col-md-8">
			<select name="hrg_obat" class="form-control">
				<option value="">select obat</option>
				<?php 
				foreach($all_obat as $obat)
				{
					$selected = ($obat['id'] == $this->input->post('hrg_obat')) ? ' selected="selected"' : "";

					echo '<option value="'.$obat['id'].'" '.$selected.'>'.$obat['hrg_obat'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="jns_pembayaran" class="col-md-4 control-label">Jns Pembayaran</label>
		<div class="col-md-8">
			<select name="jns_pembayaran" class="form-control">
				<option value="">select jns_pembayaran</option>
				<?php 
				foreach($all_jns_pembayaran as $jns_pembayaran)
				{
					$selected = ($jns_pembayaran['id'] == $this->input->post('jns_pembayaran')) ? ' selected="selected"' : "";

					echo '<option value="'.$jns_pembayaran['id'].'" '.$selected.'>'.$jns_pembayaran['jns_pembayaran'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="jns_card" class="col-md-4 control-label">Card</label>
		<div class="col-md-8">
			<select name="jns_card" class="form-control">
				<option value="">select card</option>
				<?php 
				foreach($all_card as $card)
				{
					$selected = ($card['id'] == $this->input->post('jns_card')) ? ' selected="selected"' : "";

					echo '<option value="'.$card['id'].'" '.$selected.'>'.$card['jns_card'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_masuk" class="col-md-4 control-label">Tgl Masuk</label>
		<div class="col-md-8">
			<input type="text" name="tgl_masuk" value="<?php echo $this->input->post('tgl_masuk'); ?>" class="form-control" id="tgl_masuk" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_keluar" class="col-md-4 control-label">Tgl Keluar</label>
		<div class="col-md-8">
			<input type="text" name="tgl_keluar" value="<?php echo $this->input->post('tgl_keluar'); ?>" class="form-control" id="tgl_keluar" />
		</div>
	</div>
	<div class="form-group">
		<label for="total_harga" class="col-md-4 control-label">Total Harga</label>
		<div class="col-md-8">
			<input type="text" name="total_harga" value="<?php echo $this->input->post('total_harga'); ?>" class="form-control" id="total_harga" />
		</div>
	</div>
	<div class="form-group">
		<label for="kembalian" class="col-md-4 control-label">Kembalian</label>
		<div class="col-md-8">
			<input type="text" name="kembalian" value="<?php echo $this->input->post('kembalian'); ?>" class="form-control" id="kembalian" />
		</div>
	</div>
	<div class="form-group">
		<label for="kekurangan" class="col-md-4 control-label">Kekurangan</label>
		<div class="col-md-8">
			<input type="text" name="kekurangan" value="<?php echo $this->input->post('kekurangan'); ?>" class="form-control" id="kekurangan" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>