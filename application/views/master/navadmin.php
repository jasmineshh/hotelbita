<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url('/')?>">Hotel Hebat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?=base_url('/Admin/data?t=F_Hotel&v=allcounter')?>">Data Fasilitas Hotel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('Admin/data?t=Tipe_room&v=allcounter')?>">Data Tipe Kamar</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="<?=base_url('Admin/data?t=F_kamar&v=allcounter')?>">Data Fasilitas Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('Admin/data?t=F_kamar&v=allcounter')?>">Data Fasilitas Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('Admin/data?t=F_kamar&v=allcounter')?>">Data Pemesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('Admin/data?t=user&v=allcounter')?>">Data Pengguna</a>
        </li>

      </ul>
    </div>
  </div>
</nav>