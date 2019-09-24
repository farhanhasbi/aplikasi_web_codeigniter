<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <meta charset="utf-8">
  <link href="<?php echo base_url(); ?>assets/img/unsplash/auth.jpg">
  <title></title>
</head>
<body style="background:url(<?php echo base_url(); ?>assets/img/unsplash/welcome.jpg );background-size: cover;
background-repeat: no-repeat;
display: flex;
justify-content: center;
align-items: center;
background-attachment: fixed;
height: 100vh;">
<section>
  <div class="row">
  	<h1 style="color: black;
  	text-align: center;
  	font-size: 65px;">Selamat datang <?php echo $this->session->userdata('nama'); ?>
  </h1>
  <h4 style="color: black;
  text-align: center;
  font-size: 25px;" >Anda berhasil login ke dalam aplikasi. Halaman ini hanya bisa diakses setelah login.
</h4>
<a href="<?php echo site_url('stok_bahan_makanan/index') ?>" class="btn btn-danger tn-xs" >Stok Bahan Makanan</a> |
<a href="<?php echo site_url('paket/index') ?>" class="btn btn-danger btn-xs">Paket</a> |
<a href="<?php echo base_url('index.php/auth/logout') ?>" class="btn btn-danger btn-xs">Logout</a>
</div>
</section>
</body>
</html>