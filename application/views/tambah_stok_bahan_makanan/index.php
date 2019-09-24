<div class="pull-right">
	<a href="<?php echo site_url('tambah_stok_bahan_makanan/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Id Bahan</th>
		<th>Jumlah Bahan</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tambah_stok_bahan_makanan as $t){ ?>
    <tr>
		<td><?php echo $t['id']; ?></td>
		<td><?php echo $t['id_bahan']; ?></td>
		<td><?php echo $t['jumlah_bahan']; ?></td>
		<td>
            <a href="<?php echo site_url('tambah_stok_bahan_makanan/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tambah_stok_bahan_makanan/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
