<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container formulir">
    <div class="row">
        <div class="col">
            <h1 class="my-3">FORMULIR PENDAFTARAN</h1>
            <form action="/Pendonor/save" method="POST">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_pendonor" class="form-label">Nama Pendonor</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_pendonor')) ? 'is-invalid' : ''; ?>" id="nama_pendonor" name="nama_pendonor" value="<?= old('nama_pendonor'); ?>" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_pendonor'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="golongan_darah" class="form-label">Golongan Darah</label>
                    <input type="text" class="form-control <?= ($validation->hasError('golongan_darah')) ? 'is-invalid' : ''; ?>" id="golongan_darah" name="golongan_darah" value="<?= old('golongan_darah'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('golongan_darah'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="usia" class="form-label">Usia</label>
                    <input type="text" class="form-control <?= ($validation->hasError('usia')) ? 'is-invalid' : ''; ?>" id="usia" name="usia" value="<?= old('usia'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('usia'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="berat_badan" class="form-label">Berat Badan</label>
                    <input type="text" class="form-control <?= ($validation->hasError('berat_badan')) ? 'is-invalid' : ''; ?>" id="berat_badan" name="berat_badan" value="<?= old('berat_badan'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('berat_badan'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" id="jenis_kelamin" name="jenis_kelamin" value="<?= old('jenis_kelamin'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('jenis_kelamin'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="terakhir_donor" class="form-label">Terakhir Donor</label>
                    <input type="text" class="form-control <?= ($validation->hasError('terakhir_donor')) ? 'is-invalid' : ''; ?>" id="terakhir_donor" name="terakhir_donor" value="<?= old('terakhir_donor'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('terakhir_donor'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>

                    <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('alamat'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Whatsapp</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nomor_telepon')) ? 'is-invalid' : ''; ?>" id="nomor_telepon" name="nomor_telepon" value="<?= old('nomor_telepon'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nomor_telepon'); ?>
                    </div>
                    <div id="nomorHelp" class="form-text">Privasi anda akan kami jaga.</div>
                </div>

                <!-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">ingatkan saya</label>
                </div> -->
                <button type="submit" class="btn btn-primary">Send</button>
                <a href="/Pages" class="d-inline btn btn-warning mx-3">KEMBALI</a>
            </form>

        </div>
    </div>
</div>
</section>
<?= $this->endSection(); ?>