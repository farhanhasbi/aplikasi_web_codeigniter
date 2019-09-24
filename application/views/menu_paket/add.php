<?php echo form_open('menu_paket/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="menu" class="col-md-4 control-label"><span class="text-danger">*</span>Menu</label>
		<div class="col-md-8">
			<input type="text" name="menu" value="<?php echo $this->input->post('menu'); ?>" class="form-control" id="menu" />
			<span class="text-danger"><?php echo form_error('menu');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>