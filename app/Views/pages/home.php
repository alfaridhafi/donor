<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Background image -->

<div class="conatiner tentangkami">
  <div class="row">
    <div class="col text-center">
      <img src="/img/Logo2.png" alt="">
    </div>
  </div>
</div>

<!-- Background image -->
<!--  -->


<!-- Penjelasan Unsri Peduli -->
<section class="unsripeduli">
  <div class="container penawaran">
    <div class="row">
      <div class="col-md-12 ">
        <div class="row">
          <div class="col-md-5">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/img/testimoni.jpeg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Kegiatan Donor Unsri Peduli</h5>
                    <p>Orang pertama yang mendonorkan lewat unsri peduli</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="/img/testimoni1.jpeg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Kegiatan Donor Unsri Peduli</h5>
                    <p>Orang Kedua yang mendonorkan lewat unsri peduli</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-md-7">
            <h3>Bersama <span>Unsri Peduli</span> Jadikan <span>Hidup</span> Anda Lebih <span>Berarti</span></h3>
            <p>UNSRI PEDULI merupakan Gerakan mahasiswa UNSRI yang bergerak dalam bidang sosial kemanusiaan. Kami merasa berkewajiban dan sangat terpanggil untuk berkontribusi dalam meringkan beban upaya-upaya yang telah dan sedang dilakukan oleh berbagai pihak dalam permasalahan defisit stok darah yang tak kunjung terpecahkan.</p>
            <a class="btn btn-warning bg-gradient tombol dem" href="/pages/aboutMe" role="button">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Penejelasan Unsri Peduli -->
<div class="container form">
  <div class="row">
    <div class="col">
      <div class="card text-center">
        <div class="card-header bg-danger bg-gradient">
          Pendonor
        </div>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">Silahkan Cari Pendonor Terdekat Dari Lokasi Anda </p>
          <a href="/Pendonor" class="btn btn-warning bg-gradient pendonor tombol">Pendonor</a>
          <!-- <p class="bebas">Daftar Jika Anda Ingin Mendonor</p> -->
        </div>
        <div class="card-footer text-muted ">
          <form action="/Pendonor" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Masukkan Kecamatan Anda.." name="kecamatan">
              <button class="btn bg-primary bg-gradient" type="Submit" name="submit">Cari</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bagian bawah -->
<div class="container formulir">
  <div class="row">
    <div class="col-md-8 col-sm-12">
      <div class="card">
        <h5 class="card-header bg-danger bg-gradient ">Tentang Donor Darah</h5>
        <div class="card-body">
          <div class="input-group mb-3">
            <ul>
              <li><a href="/Pages/aboutDonor/#1">Bagaimana mendaftarkan diri sebagai calon pendonor darah?</a></li>
              <li><a href="/Pages/aboutDonor/#2">Syarat untuk menjadi pendonor darah</a></li>
              <li><a href="/Pages/aboutDonor/#3">Jangan mendonor darah jika?</a></li>
              <li><a href="/Pages/aboutDonor/#4">Beberapa panduan donor darah</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="card jarak">
        <div class="card-header bg-danger bg-gradient">
          <h5>Hubungi Kami</h5>
        </div>
        <div class="card-body text-center pendaftar">
          <p>Butuh Pendonor?</p>
          <a href="https://api.whatsapp.com/send?phone=6282289440998" target="_blank" class="btn btn-warning bg-gradient rounded-pill">Kontak Kami</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- bagian bawah -->

<?= $this->endSection(); ?>