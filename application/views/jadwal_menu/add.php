<?php echo form_open('jadwal_menu/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="jadwal" class="col-md-4 control-label"><span class="text-danger">*</span>Jadwal</label>
		<div class="col-md-8">
			<input type="text" name="jadwal" value="<?php echo $this->input->post('jadwal'); ?>" class="form-control" id="jadwal" />
			<span class="text-danger"><?php echo form_error('jadwal');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>