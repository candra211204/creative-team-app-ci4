<section id="services" class="services section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Jasa</h2>
            <p>Silahkan pilih bidang jasa yang anda butuhkan</p>
        </div>
        <div class="row">
            <?php foreach ($services as $service) : ?>
                <div class="col-md-6 mt-4">
                    <div class="icon-box">
                        <i class="bi <?= $service['logo']; ?>"></i>
                        <h4><a href="#"><?= $service['name']; ?></a></h4>
                        <p>Deskripsi</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>