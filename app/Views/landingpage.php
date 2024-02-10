<?= $this->extend('templates/html') ?>

<?= $this->section('jumbotron') ?>
<?= $this->include('templates/parts/jumbotron.php') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?= $this->include('templates/parts/what_we_do.php') ?>
<?= $this->include('templates/parts/about.php') ?>
<?= $this->include('templates/parts/services.php') ?>
<?= $this->include('templates/parts/portfolio.php') ?>
<?= $this->include('templates/parts/testimonial.php') ?>
<?= $this->include('templates/parts/team.php') ?>
<?= $this->include('templates/parts/contact.php') ?>
<?= $this->endSection() ?>