<!-- Navbar -->
<nav class="navbar navbar-expand-lg text-center mx-auto">
    <div class="container-fluid flex-column mx-auto">

        <!-- Brand -->
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/AyakaLogo_nobg.png" class="img-fluid mx-auto" alt="Ayaka logo">
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M4 18q-.425 0-.713-.288T3 17q0-.425.288-.713T4 16h16q.425 0 .713.288T21 17q0 .425-.288.713T20 18H4Zm0-5q-.425 0-.713-.288T3 12q0-.425.288-.713T4 11h16q.425 0 .713.288T21 12q0 .425-.288.713T20 13H4Zm0-5q-.425 0-.713-.288T3 7q0-.425.288-.713T4 6h16q.425 0 .713.288T21 7q0 .425-.288.713T20 8H4Z" />
            </svg>
        </button>

        <!-- Links -->
        <?php
        wp_nav_menu(array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse justify-content-end',
            'container_id'      => 'navbarNavAltMarkup',
            'menu_class'        => 'nav navbar-nav my-2 mb-lg-0',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ));
        ?>

    </div>
</nav>
<!-- Navbar -->