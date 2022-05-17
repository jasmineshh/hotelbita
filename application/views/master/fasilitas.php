<?php $this->load->view('master/navauth')?>
<div class="container">
	<!-- div ren -->
	<div class="row">
		<div class="col-md-12">
			<div class="card mb-3 text-center">
			  <img src="https://tchostel.org/wp-content/uploads/2020/11/Hotel-Klasik-Paling-Terkenal-di-Dunia-Yang-Bikin-Betah.jpg" class="card-img-top" alt="" style="max-height: 400px;object-fit: cover;">
			  <div class="card-body">
			    <h5 class="card-title">Hotel Hebat</h5>
			    <p class="card-text">Selamat Datang Di Hotel Hebat Kami Menyambutmu dengan Hangat</p>
			    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
			  </div>
			</div>
		</div>
	</div>
	<hr>
	<!-- div fasilitas -->
	<div class="row">
		<?php foreach ($fas as $key => $fasi):?>
		<div class="col-md-6">
			<div class="card">
			  <div class="card-body">
			    <h5 class="card-title"><?=$fasi->nama_fasilitas?></h5>
			    <p class="card-text"><?=$fasi->deks?>.</p>
			  </div>
			  <img src="<?=$fasi->img?>" class="card-img-bottom" alt="" style="max-height: 200px;object-fit: cover;">
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>