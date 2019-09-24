<?php foreach($stok_bahan_makanan as $s){ ?>
    	<tr>
		<td class="text-center"><?php echo $s['id'];?></td>
		<td class="text-center"><?php echo $s['kelompok_bahan']; ?></td>
		<td><?php echo $s['nama_bahan']; ?></td>
		<td><?php echo $s['jumlah_bahan']; ?></td>
		<td>
            <a href="<?php echo site_url('stok_bahan_makanan/edit/'.$s['id']); ?>" class="btn btn-warning btn-xs"><i class="fas fa-cog"></i></a>
            <a href="<?php echo site_url('stok_bahan_makanan/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
        </td>
    </tr>
	<?php } ?>