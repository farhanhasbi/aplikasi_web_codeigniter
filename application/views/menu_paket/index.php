<div class="pull-right">
	<a href="<?php echo site_url('menu_paket/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Menu</th>
		<th>Menu</th>
		<th>Actions</th>
    </tr>
	<?php foreach($menu_paket as $m){ ?>
    <tr>
		<td><?php echo $m['id_menu']; ?></td>
		<td><?php echo $m['menu']; ?></td>
		<td>
            <a href="<?php echo site_url('menu_paket/edit/'.$m['id_menu']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('menu_paket/remove/'.$m['id_menu']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
