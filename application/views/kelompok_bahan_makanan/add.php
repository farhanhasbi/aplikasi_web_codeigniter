<?php echo form_open('kelompok_bahan_makanan/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Kelompok_bahan" class="col-md-4 control-label">Kelompok Bahan</label>
		<div class="col-md-8">
			<input type="text" name="Kelompok_bahan" value="<?php echo $this->input->post('Kelompok_bahan'); ?>" class="form-control" id="Kelompok_bahan" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>