<div class="pull-right">
	<a href="<?php echo site_url('jadwal_menu/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Jadwal</th>
		<th>Jadwal</th>
		<th>Actions</th>
    </tr>
	<?php foreach($jadwal_menu as $j){ ?>
    <tr>
		<td><?php echo $j['id_jadwal']; ?></td>
		<td><?php echo $j['jadwal']; ?></td>
		<td>
            <a href="<?php echo site_url('jadwal_menu/edit/'.$j['id_jadwal']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('jadwal_menu/remove/'.$j['id_jadwal']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
