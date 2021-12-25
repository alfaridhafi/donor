<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="pendonor">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <h5 class="card-header bg-danger bg-gradient">Calon Pendonor</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless ">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kecamatan</th>
                                        <th scope="col">Golongan Darah</th>
                                        <th scope="col">Terakhir Donor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                                    <?php foreach ($pendonor as $p) : ?>
                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td><?= $p['alamat']; ?></td>
                                            <td><?= $p['golongan_darah']; ?></td>
                                            <td><?= $p['terakhir_donor']; ?></td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?= $pager->links('calonpendonor', 'pendonor_pagination') ?>
        </div>
</section>

<?= $this->endSection(); ?>