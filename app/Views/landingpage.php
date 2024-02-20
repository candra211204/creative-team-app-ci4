<?= $this->extend('templates/website/html') ?>

<?= $this->section('jumbotron') ?>
<?= $this->include('templates/website/parts/jumbotron.php') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?= $this->include('templates/website/parts/what_we_do.php') ?>
<?= $this->include('templates/website/parts/about.php') ?>
<?= $this->include('templates/website/parts/services.php') ?>
<?= $this->include('templates/website/parts/portfolio.php') ?>
<?= $this->include('templates/website/parts/testimonial.php') ?>
<?= $this->include('templates/website/parts/team.php') ?>
<?= $this->include('templates/website/parts/contact.php') ?>
<?= $this->endSection() ?>