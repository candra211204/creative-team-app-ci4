<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <div class="logo me-auto">
            <h1>
                <a href="<?= $navbar['title_link'] ?>"><?= $navbar['title'] ?></a>
            </h1>
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <?php foreach ($navbar['menu'] as $menu) : ?>
                    <li>
                        <a class="nav-link scrollto" href="<?= $menu['link'] ?>"><?= $menu['name'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <div class="header-social-links d-flex align-items-center">
            <?php foreach ($navbar['social_media'] as $socialMedia) : ?>
                <a href="<?= $socialMedia['link'] ?>">
                    <i class="<?= $socialMedia['logo'] ?>"></i>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</header>