<?php echo form_open('tambah_stok_bahan_makanan/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_bahan" class="col-md-4 control-label">Id Bahan</label>
		<div class="col-md-8">
			<input type="text" name="id_bahan" value="<?php echo $this->input->post('id_bahan'); ?>" class="form-control" id="id_bahan" />
		</div>
	</div>
	<div class="form-group">
		<label for="jumlah_bahan" class="col-md-4 control-label">Jumlah Bahan</label>
		<div class="col-md-8">
			<input type="text" name="jumlah_bahan" value="<?php echo $this->input->post('jumlah_bahan'); ?>" class="form-control" id="jumlah_bahan" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>