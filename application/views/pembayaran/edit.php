<?php echo form_open('pembayaran/edit/'.$pembayaran['id'],array("class"=>"form-horizontal")); ?>

<div class="form-group">
	<label for="nama_pasien" class="col-md-4 control-label"><span class="text-danger">*</span>Pasien</label>
	<div class="col-md-8">
		<select name="nama_pasien" class="form-control">
			<option value="">select pasien</option>
			<?php 
				foreach($all_pasien as $pasien)
				{
					$selected = ($pasien['id'] == $pembayaran['nama_pasien']) ? ' selected="selected"' : "";

					echo '<option value="'.$pasien['id'].'" '.$selected.'>'.$pasien['nama_pasien'].'</option>';
				} 
				?>
		</select>
		<span class="text-danger"><?php echo form_error('nama_pasien');?></span>
	</div>
</div>
<div class="form-group">
	<label for="jns_kamar" class="col-md-4 control-label"><span class="text-danger">*</span>Kamar</label>
	<div class="col-md-8">
		<select name="jns_kamar" class="form-control">
			<option value="">select kamar</option>
			<?php 
				foreach($all_kamar as $kamar)
				{
					$selected = ($kamar['id'] == $pembayaran['jns_kamar']) ? ' selected="selected"' : "";

					echo '<option value="'.$kamar['id'].'" '.$selected.'>'.$kamar['kamar'].'</option>';
				} 
				?>
		</select>
		<span class="text-danger"><?php echo form_error('jns_kamar');?></span>
	</div>
</div>
<div class="form-group">
	<label for="hrg_kamar" class="col-md-4 control-label"><span class="text-danger">*</span>Kamar</label>
	<div class="col-md-8">
		<select name="hrg_kamar" class="form-control">
			<option value="">select kamar</option>
			<?php 
				foreach($all_kamar as $kamar)
				{
					$selected = ($kamar['id'] == $pembayaran['hrg_kamar']) ? ' selected="selected"' : "";

					echo '<option value="'.$kamar['id'].'" '.$selected.'>'.$kamar['harga_kamar'].'</option>';
				} 
				?>
		</select>
		<span class="text-danger"><?php echo form_error('hrg_kamar');?></span>
	</div>
</div>
<div class="form-group">
	<label for="jns_penyakit" class="col-md-4 control-label"><span class="text-danger">*</span>Penyakit</label>
	<div class="col-md-8">
		<select name="jns_penyakit" class="form-control">
			<option value="">select penyakit</option>
			<?php 
				foreach($all_penyakit as $penyakit)
				{
					$selected = ($penyakit['id'] == $pembayaran['jns_penyakit']) ? ' selected="selected"' : "";

					echo '<option value="'.$penyakit['id'].'" '.$selected.'>'.$penyakit['penyakit'].'</option>';
				} 
				?>
		</select>
		<span class="text-danger"><?php echo form_error('jns_penyakit');?></span>
	</div>
</div>
<div class="form-group">
	<label for="tindakan" class="col-md-4 control-label"><span class="text-danger">*</span>Penyakit</label>
	<div class="col-md-8">
		<select name="tindakan" class="form-control">
			<option value="">select penyakit</option>
			<?php 
				foreach($all_penyakit as $penyakit)
				{
					$selected = ($penyakit['id'] == $pembayaran['tindakan']) ? ' selected="selected"' : "";

					echo '<option value="'.$penyakit['id'].'" '.$selected.'>'.$penyakit['tindakan'].'</option>';
				} 
				?>
		</select>
		<span class="text-danger"><?php echo form_error('tindakan');?></span>
	</div>
</div>
<div class="form-group">
	<label for="hrg_tindakan" class="col-md-4 control-label"><span class="text-danger">*</span>Penyakit</label>
	<div class="col-md-8">
		<select name="hrg_tindakan" class="form-control">
			<option value="">select penyakit</option>
			<?php 
				foreach($all_penyakit as $penyakit)
				{
					$selected = ($penyakit['id'] == $pembayaran['hrg_tindakan']) ? ' selected="selected"' : "";

					echo '<option value="'.$penyakit['id'].'" '.$selected.'>'.$penyakit['hrg_tindakan'].'</option>';
				} 
				?>
		</select>
		<span class="text-danger"><?php echo form_error('hrg_tindakan');?></span>
	</div>
</div>
<div class="form-group">
	<label for="nama_obat" class="col-md-4 control-label"><span class="text-danger">*</span>Obat</label>
	<div class="col-md-8">
		<select name="nama_obat" class="form-control">
			<option value="">select obat</option>
			<?php 
				foreach($all_obat as $obat)
				{
					$selected = ($obat['id'] == $pembayaran['nama_obat']) ? ' selected="selected"' : "";

					echo '<option value="'.$obat['id'].'" '.$selected.'>'.$obat['nama_obat'].'</option>';
				} 
				?>
		</select>
		<span class="text-danger"><?php echo form_error('nama_obat');?></span>
	</div>
</div>
<div class="form-group">
	<label for="hrg_obat" class="col-md-4 control-label"><span class="text-danger">*</span>Obat</label>
	<div class="col-md-8">
		<select name="hrg_obat" class="form-control">
			<option value="">select obat</option>
			<?php 
				foreach($all_obat as $obat)
				{
					$selected = ($obat['id'] == $pembayaran['hrg_obat']) ? ' selected="selected"' : "";

					echo '<option value="'.$obat['id'].'" '.$selected.'>'.$obat['hrg_obat'].'</option>';
				} 
				?>
		</select>
		<span class="text-danger"><?php echo form_error('hrg_obat');?></span>
	</div>
</div>
<div class="form-group">
	<label for="jns_pembayaran" class="col-md-4 control-label"><span class="text-danger">*</span>Jns Pembayaran</label>
	<div class="col-md-8">
		<select name="jns_pembayaran" class="form-control">
			<option value="">select jns_pembayaran</option>
			<?php 
				foreach($all_jns_pembayaran as $jns_pembayaran)
				{
					$selected = ($jns_pembayaran['id'] == $pembayaran['jns_pembayaran']) ? ' selected="selected"' : "";

					echo '<option value="'.$jns_pembayaran['id'].'" '.$selected.'>'.$jns_pembayaran['jns_pembayaran'].'</option>';
				} 
				?>
		</select>
		<span class="text-danger"><?php echo form_error('jns_pembayaran');?></span>
	</div>
</div>
<div class="form-group">
	<label for="jns_card" class="col-md-4 control-label"><span class="text-danger">*</span>Card</label>
	<div class="col-md-8">
		<select name="jns_card" class="form-control">
			<option value="">select card</option>
			<?php 
				foreach($all_card as $card)
				{
					$selected = ($card['id'] == $pembayaran['jns_card']) ? ' selected="selected"' : "";

					echo '<option value="'.$card['id'].'" '.$selected.'>'.$card['jns_card'].'</option>';
				} 
				?>
		</select>
		<span class="text-danger"><?php echo form_error('jns_card');?></span>
	</div>
</div>
<div class="form-group">
	<label for="no_faktur" class="col-md-4 control-label"><span class="text-danger">*</span>No Faktur</label>
	<div class="col-md-8">
		<input type="text" name="no_faktur"
			value="<?php echo ($this->input->post('no_faktur') ? $this->input->post('no_faktur') : $pembayaran['no_faktur']); ?>"
			class="form-control" id="no_faktur" />
		<span class="text-danger"><?php echo form_error('no_faktur');?></span>
	</div>
</div>
<div class="form-group">
	<label for="jns_kelamin" class="col-md-4 control-label"><span class="text-danger">*</span>Jns Kelamin</label>
	<div class="col-md-8">
		<input type="text" name="jns_kelamin"
			value="<?php echo ($this->input->post('jns_kelamin') ? $this->input->post('jns_kelamin') : $pembayaran['jns_kelamin']); ?>"
			class="form-control" id="jns_kelamin" />
		<span class="text-danger"><?php echo form_error('jns_kelamin');?></span>
	</div>
</div>
<div class="form-group">
	<label for="tgl_masuk" class="col-md-4 control-label"><span class="text-danger">*</span>Tgl Masuk</label>
	<div class="col-md-8">
		<input type="text" name="tgl_masuk"
			value="<?php echo ($this->input->post('tgl_masuk') ? $this->input->post('tgl_masuk') : $pembayaran['tgl_masuk']); ?>"
			class="form-control" id="tgl_masuk" />
		<span class="text-danger"><?php echo form_error('tgl_masuk');?></span>
	</div>
</div>
<div class="form-group">
	<label for="tgl_keluar" class="col-md-4 control-label"><span class="text-danger">*</span>Tgl Keluar</label>
	<div class="col-md-8">
		<input type="text" name="tgl_keluar"
			value="<?php echo ($this->input->post('tgl_keluar') ? $this->input->post('tgl_keluar') : $pembayaran['tgl_keluar']); ?>"
			class="form-control" id="tgl_keluar" />
		<span class="text-danger"><?php echo form_error('tgl_keluar');?></span>
	</div>
</div>
<div class="form-group">
	<label for="total_harga" class="col-md-4 control-label"><span class="text-danger">*</span>Total Harga</label>
	<div class="col-md-8">
		<input type="text" name="total_harga"
			value="<?php echo ($this->input->post('total_harga') ? $this->input->post('total_harga') : $pembayaran['total_harga']); ?>"
			class="form-control" id="total_harga" />
		<span class="text-danger"><?php echo form_error('total_harga');?></span>
	</div>
</div>
<div class="form-group">
	<label for="nama_pembayar" class="col-md-4 control-label"><span class="text-danger">*</span>Nama Pembayar</label>
	<div class="col-md-8">
		<input type="text" name="nama_pembayar"
			value="<?php echo ($this->input->post('nama_pembayar') ? $this->input->post('nama_pembayar') : $pembayaran['nama_pembayar']); ?>"
			class="form-control" id="nama_pembayar" />
		<span class="text-danger"><?php echo form_error('nama_pembayar');?></span>
	</div>
</div>
<div class="form-group">
	<label for="jumlah_bayar" class="col-md-4 control-label"><span class="text-danger">*</span>Jumlah Bayar</label>
	<div class="col-md-8">
		<input type="text" name="jumlah_bayar"
			value="<?php echo ($this->input->post('jumlah_bayar') ? $this->input->post('jumlah_bayar') : $pembayaran['jumlah_bayar']); ?>"
			class="form-control" id="jumlah_bayar" />
		<span class="text-danger"><?php echo form_error('jumlah_bayar');?></span>
	</div>
</div>
<div class="form-group">
	<label for="tgl_bayar" class="col-md-4 control-label"><span class="text-danger">*</span>Tgl Bayar</label>
	<div class="col-md-8">
		<input type="text" name="tgl_bayar"
			value="<?php echo ($this->input->post('tgl_bayar') ? $this->input->post('tgl_bayar') : $pembayaran['tgl_bayar']); ?>"
			class="form-control" id="tgl_bayar" />
		<span class="text-danger"><?php echo form_error('tgl_bayar');?></span>
	</div>
</div>
<div class="form-group">
	<label for="no_bukti" class="col-md-4 control-label"><span class="text-danger">*</span>No Bukti</label>
	<div class="col-md-8">
		<input type="text" name="no_bukti"
			value="<?php echo ($this->input->post('no_bukti') ? $this->input->post('no_bukti') : $pembayaran['no_bukti']); ?>"
			class="form-control" id="no_bukti" />
		<span class="text-danger"><?php echo form_error('no_bukti');?></span>
	</div>
</div>

<div class="form-group">
	<div class="col-sm-offset-4 col-sm-8">
		<button type="submit" class="btn btn-success">Save</button>
	</div>
</div>

<?php echo form_close(); ?>
