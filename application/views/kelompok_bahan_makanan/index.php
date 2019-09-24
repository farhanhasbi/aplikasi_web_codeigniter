<div class="pull-right">
	<a href="<?php echo site_url('kelompok_bahan_makanan/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Kelompok Bahan</th>
		<th>Actions</th>
    </tr>
	<?php foreach($kelompok_bahan_makanan as $k){ ?>
    <tr>
		<td><?php echo $k['id']; ?></td>
		<td><?php echo $k['Kelompok_bahan']; ?></td>
		<td>
            <a href="<?php echo site_url('kelompok_bahan_makanan/edit/'.$k['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('kelompok_bahan_makanan/remove/'.$k['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
