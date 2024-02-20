<?php if (array_key_exists('success', $alert)) : ?>
    <div class="alert alert-success" role="alert" id="alert-success">
        <?= $alert['success']; ?>
    </div>
<?php endif; ?>
<?php if (array_key_exists('error', $alert)) : ?>
    <div class="alert alert-danger" role="alert" id="alert-error">
        <?= $alert['error']; ?>
    </div>
<?php endif; ?>