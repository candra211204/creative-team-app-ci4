<?= $this->extend('templates/dashboard/html'); ?>

<?= $this->section('content-left-side'); ?>
<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body">
            <h5 class="card-title">Inputkan Data</h5>
            <form class="row g-3" method="post" action="<?= base_url('/admin/service/category/create/action'); ?>">
                <?= csrf_field() ?>
                <div class="col-md-6">
                    <input type="text" class="form-control <?= array_key_exists('name', $validation) ? 'is-invalid' : ''; ?>" placeholder="Nama" name="name" value="<?= old('name'); ?>" autofocus>
                    <div class="invalid-feedback">
                        <?= array_key_exists('name', $validation) ? $validation['name'] : ''; ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control <?= array_key_exists('logo', $validation) ? 'is-invalid' : ''; ?>" placeholder="Kelas logo" name="logo" value="<?= old('logo'); ?>">
                    <div class="invalid-feedback">
                        <?= array_key_exists('logo', $validation) ? $validation['logo'] : ''; ?>
                    </div>
                </div>
                <div class="col-12">
                    <input id="description" type="hidden" name="description" value="<?= old('description'); ?>">
                    <trix-editor input="description" id="trixEditorDesc" placeholder="Deskripsi"></trix-editor>
                    <span class="text-danger"><?= array_key_exists('description', $validation) ? $validation['description'] : ''; ?></span>
                </div>
                <div class="text-start">
                    <a href="<?= base_url('/admin/service/category'); ?>" class="btn btn-primary"><i class='bx bx-left-arrow-alt'></i></a>
                    <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i></button>
                </div>
            </form>
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
                <li>Pastikan nama tidak sama dengan jasa lainnya</li>
                <li>Kelas logo cari di website <a href="https://boxicons.com">https://boxicons.com</a>, copykan classnya saja, contoh <span class="text-decoration-underline">bx bx-pen</span></li>
            </ul>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>