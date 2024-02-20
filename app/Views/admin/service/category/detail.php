<?= $this->extend('templates/dashboard/html'); ?>

<?= $this->section('content-left-side'); ?>
<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body">
            <h5 class="card-title">Detail Jasa <?= $service['name']; ?></h5>
            <div class="row g-3">
                <div class="col-md-6">
                    <span><b>Nama jasa : </b><?= $service['name']; ?></span>
                </div>
                <div class="col-md-6">
                    <span><b>Slug : </b><?= $service['slug']; ?></span>
                </div>
                <div class="col-12">
                    <span><b>Deskripsi : </b></span>
                    <p><?= $service['description']; ?></p>
                </div>
                <div class="col-md-6">
                    <span><b>Logo : </b><i class="<?= $service['logo']; ?>"></i></span>
                </div>
                <div class="col-md-6">
                    <span>
                        <b>Status : </b>
                        <?php if ($service['status'] == 'Ready') : ?>
                            <span class="badge bg-success"><?= $service['status']; ?></span>
                        <?php else : ?>
                            <span class="badge bg-danger"><?= $service['status']; ?></span>
                        <?php endif; ?>
                    </span>
                </div>
                <div class="col-md-6">
                    <span><b>Ditambahkan pada : </b><?= date('d-m-Y', strtotime($service['created_at'])); ?></span>
                </div>
                <div class="col-md-6">
                    <span><b>Terakhir diupdate : </b><?= date('d-m-Y', strtotime($service['updated_at'])); ?></span>
                </div>
                <div class="text-start">
                    <a href="<?= base_url('/admin/service/category'); ?>" class="btn btn-primary"><i class='bx bx-left-arrow-alt'></i></a>
                    <a href="<?= base_url('/admin/service/category/edit/' . $service['slug']); ?>" class="btn btn-warning"><i class='bx bxs-edit'></i></a>
                    <form action="<?= base_url('/admin/service/category/delete/' . $service['id']); ?>" method="post" class="d-inline">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau hapus ?')"><i class='bx bx-trash-alt'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>