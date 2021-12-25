<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container formulir">
    <div class="row">
        <div class="col">
            <h1 class="my-3">FORMULIR PENDAFTARAN</h1>
            <form>
                <div class="mb-3">
                    <label for="exampleInputNama1" class="form-label">Nama Pendonor</label>
                    <input type="Nama" class="form-control" id="exampleInputNama1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputGolongan1" class="form-label">Golongan Darah</label>
                    <input type="Golongan" class="form-control" id="exampleInputGolongan1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsia1" class="form-label">Usia</label>
                    <input type="Usia" class="form-control" id="exampleInputUsia1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputBerat1" class="form-label">Berat Badan</label>
                    <input type="Berat" class="form-control" id="exampleInputBerat1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputKelamin1" class="form-label">Jenis Kelamin</label>
                    <input type="Kelamin" class="form-control" id="exampleInputKelamin1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDonor1" class="form-label">Terakhir Donor</label>
                    <input type="Donor" class="form-control" id="exampleInputDonor1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputAlamat1" class="form-label">Alamat</label>
                    <input type="Alamat" class="form-control" id="exampleInputAlamat1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputNomor1" class="form-label">Nomor Whatsapp</label>
                    <input type="Nomor1" class="form-control" id="exampleInputNomor1" aria-describedby="nomorHelp">
                    <div id="nomorHelp" class="form-text">Privasi anda akan kami jaga.</div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">ingatkan saya</label>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>

        </div>
    </div>
</div>
</section>
<?= $this->endSection(); ?>