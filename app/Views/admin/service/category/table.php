<?= $this->extend('templates/dashboard/html'); ?>

<?= $this->section('content-left-side'); ?>
<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Hari ini</a></li>
                <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                <li><a class="dropdown-item" href="#">Tahun ini</a></li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Data Berdasarkan <span>| Tahun Ini</span></h5>
            <?= $this->include('templates/dashboard/parts/alert.php') ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $number = 1; ?>
                    <?php foreach ($services as $service) : ?>
                        <tr>
                            <th scope="row"><?= $number++; ?></th>
                            <td><?= $service['name']; ?></td>
                            <td>
                                <i class="<?= $service['logo']; ?>"></i>
                            </td>
                            <td>
                                <?php if ($service['status'] == 'Ready') : ?>
                                    <span class="badge bg-success"><?= $service['status']; ?></span>
                                <?php else : ?>
                                    <span class="badge bg-danger"><?= $service['status']; ?></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('/admin/service/category/detail/' . $service['slug']); ?>">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= base_url('/admin/service/category/create') ?>" class="text-text-decoration-none">Tambah</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('content-right-side'); ?>
<div class="card info-card">
    <div class="card-body">
        <h5 class="card-title">Informasi</h5>
        <div class="d-flex align-items-center">
            <ul>
                <li>Logo akan ditampilkan di card jasa</li>
                <li>Status dilihat berdasarkan deskripsi, jika jasa tidak memiliki deskripsi maka status <span class="badge bg-danger">Not Ready</span>, jika ada maka status <span class="badge bg-success">Ready</span></li>
            </ul>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>