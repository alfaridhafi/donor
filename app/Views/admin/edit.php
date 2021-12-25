<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin</title>

  <!-- General CSS Files -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">
</head>

<body>
  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">

            <form class="form" action="/Admin/update/<?= $pendonor['id']; ?>" method="POST" enctype="multipart/form-data">
              <div class="card-header">
                <h4>Ubah Data</h4>
              </div>
              <div class="card-body">
                <input type="hidden" name="slug" value="<?= $pendonor['slug']; ?>">
                <?= csrf_field(); ?>
                <div class="form-group row">
                  <label for="nama_pendonor" class="col-sm-4 col-form-label">Nama Pendonor</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control <?= ($validation->hasError('nama_pendonor')) ? 'is-invalid' : ''; ?>" id="nama_pendonor" name="nama_pendonor" autofocus value="<?= (old('nama_pendonor')) ? old('nama_pendonor') : $pendonor['nama_pendonor'] ?>">
                    <div class="invalid-feedback">
                      <?= $validation->getError('nama_pendonor'); ?>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="alamat" class="col-sm-4 col-form-label">alamat</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= (old('alamat')) ? old('alamat') : $pendonor['alamat'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="golongan_darah" class="col-sm-4 col-form-label">Golongan darah</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="golongan_darah" name="golongan_darah" value="<?= (old('golongan_darah')) ? old('golongan_darah') : $pendonor['golongan_darah'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="berat_badan" class="col-sm-4 col-form-label">Berat badan</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="berat_badan" name="berat_badan" value="<?= (old('berat_badan')) ? old('berat_badan') : $pendonor['berat_badan'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="usia" class="col-sm-4 col-form-label">usia</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="usia" name="usia" value="<?= (old('usia')) ? old('usia') : $pendonor['usia'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis kelamin</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= (old('jenis_kelamin')) ? old('jenis_kelamin') : $pendonor['jenis_kelamin'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="terakhir_donor" class="col-sm-4 col-form-label">Terakhirdonor</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="terakhir_donor" name="terakhir_donor" value="<?= (old('terakhir_donor')) ? old('terakhir_donor') : $pendonor['terakhir_donor'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nomor_telepon" class="col-sm-4 col-form-label">Nomor telepon</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?= (old('nomor_telepon')) ? old('nomor_telepon') : $pendonor['nomor_telepon'] ?>">
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-danger">Ubah</button>
                <a class="btn btn-primary" href="/Admin" role="button">Kembali</a>
                <a href="/Admin/delete/<?= $pendonor['id']; ?>" class="btn btn-warning">Hapus</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <div class="footer-left">
      Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
    </div>
    <div class="footer-right">
      2.3.0
    </div>
  </footer>
  </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
  <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
  <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>

</html>