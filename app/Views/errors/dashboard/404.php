<?= $this->extend('templates/dashboard/html'); ?>

<?= $this->section('error'); ?>
<div class="container">
    <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>Halaman yang anda cari tidak ada.</h2>
        <a class="btn" href="<?= base_url($link); ?>">Kembali</a>
        <img src="<?= base_url('assets/dashboard/img/not-found.svg'); ?>" class="img-fluid py-5" alt="Page Not Found">
    </section>
</div>
<?= $this->endSection(); ?>