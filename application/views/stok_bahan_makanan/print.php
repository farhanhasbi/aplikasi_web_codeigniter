
<?php echo "Tanggal : ".date('d-m-Y'); ?>

<table class="table table-striped table-bordered mt-3" border="1" cellpadding="8" id="myTable">
  <thead> 
    <tr>
    <th >ID</th>
    <th >Kelompok Bahan</th>
    <th >Nama Bahan</th>
    <th >Jumlah Bahan</th>
    </tr>
    </thead>
    <tbody> 
  <?php foreach($stok_bahan_makanan as $s){ ?>
    <tr>
    <td ><?php echo $s['id']; ?></td>
    <td ><?php echo $s['kelompok_bahan']; ?></td>
    <td><?php echo $s['nama_bahan']; ?></td>
    <td><?php echo $s['jumlah_bahan']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>