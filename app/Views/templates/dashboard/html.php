<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>

    <!-- Favicons -->
    <link href="<?= base_url('assets/dashboard/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/dashboard/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/dashboard/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/dashboard/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/dashboard/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/dashboard/vendor/quill/quill.snow.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/dashboard/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/dashboard/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/dashboard/vendor/simple-datatables/style.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/dashboard/css/style.css') ?>" rel="stylesheet">

    <!-- Box Icons CDN -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Trix CDN -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <?php if ($title != 'Error') : ?>
        <?= $this->include('templates/dashboard/parts/header.php') ?>
        <?= $this->include('templates/dashboard/parts/sidebar.php') ?>
    <?php endif; ?>

    <main id="<?= $title != 'Error' ? 'main' : '' ?>" class="main">
        <?php if ($title != 'Error') : ?>
            <?= $this->include('templates/dashboard/parts/breadcrumb.php') ?>
        <?php endif; ?>

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-8">
                    <?= $this->renderSection('content-left-side') ?>
                </div>
                <div class="col-lg-4">
                    <?= $this->renderSection('content-right-side') ?>
                </div>
            </div>
        </section>

        <?php if ($title == 'Error') : ?>
            <?= $this->renderSection('error') ?>
        <?php endif; ?>
    </main>

    <?php if ($title != 'Error') : ?>
        <?= $this->include('templates/dashboard/parts/footer.php') ?>
    <?php endif; ?>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/dashboard/vendor/apexcharts/apexcharts.min.js') ?>"></script>
    <script src="<?= base_url('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/dashboard/vendor/chart.js/chart.umd.js') ?>"></script>
    <script src="<?= base_url('assets/dashboard/vendor/echarts/echarts.min.js') ?>"></script>
    <script src="<?= base_url('assets/dashboard/vendor/quill/quill.min.js') ?>"></script>
    <script src="<?= base_url('assets/dashboard/vendor/simple-datatables/simple-datatables.js') ?>"></script>
    <script src="<?= base_url('assets/dashboard/vendor/tinymce/tinymce.min.js') ?>"></script>
    <script src="<?= base_url('assets/dashboard/vendor/php-email-form/validate.js') ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/dashboard/js/main.js') ?>"></script>

    <!-- Trix CDN -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <script>
        const alertSuccess = $('#alert-success');

        const alertError = $('#alert-error');

        setTimeout(function(){ $(alertSuccess).toggleClass('d-none'); }, 2000);

        setTimeout(function(){ $(alertError).toggleClass('d-none'); }, 2000);
    </script>

    <?= $this->renderSection('javascript') ?>
</body>

</html>