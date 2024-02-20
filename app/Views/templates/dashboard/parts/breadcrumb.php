<div class="pagetitle">
    <h1><?= $title; ?></h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <?php
            $breadcrumbDataCount = count($breadcrumb_data);
            ?>
            <?php if ($breadcrumbDataCount > 1) : ?>
                <?php foreach ($breadcrumb_data as $data) : ?>
                    <li class="breadcrumb-item <?php if ($breadcrumb_data[$breadcrumbDataCount - 1] == $data) : ?> active <?php endif; ?>"><?= $data; ?></li>
                <?php endforeach; ?>
            <?php else : ?>
                <li class="breadcrumb-item active"><?= $breadcrumb_data[0]; ?></li>
            <?php endif; ?>
        </ol>
    </nav>
</div>