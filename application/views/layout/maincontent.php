<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Default Layout</h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
				<div class="breadcrumb-item"><a href="#">Layout</a></div>
				<div class="breadcrumb-item">Default Layout</div>
			</div>
		</div>

		<div class="section-body">
			<h2 class="section-title"><?php echo $title; ?></h2>
			<p class="section-lead">This page is just an example for you to create your own page.</p>
			<div class="card">
				<div class="card-header">
					<h4><?php echo $title; ?></h4>
				</div>
				<div class="card-body">
					<p>
						<?php
						if (isset($page)){
                            if ($page == 'pegawai') {
                                $data['pegawai'] = $pegawai;
                                $this->load->view('pegawai/viewpegawai', $data);
							}
							else if ($page == 'inputpegawai'){
								$this->load->view('pegawai/inputPegawai');
							}
                            else {
                                echo "<h1>Admin Dashboard</h1>";
							}
						}
                        ?>
                    </p>
				</div>
				<div class="card-footer bg-whitesmoke">
					This is card footer
				</div>
			</div>
		</div>
	</section>
</div>
