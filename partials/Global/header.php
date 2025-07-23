<!-- Header Global -->

<?php $header = get_page_by_title('header');?>

<header class="header">
    <div class="header__top">
        <div class="container">
            <article class="header__top__logo">
                <figure class="header__top__logo__figure">
                    <a class="header__top__logo__figure__link" href="#">
                        <img class="header__top__logo__figure__link__img" src="<?php echo get_template_directory_uri();?>/img/logo/wevever.PNG" alt="logo">
                    </a>
                </figure>
            </article>

            <div class="header__top__navigation">
            <?php
                $args = array(
                'menu' => 'primary',
                'theme_location' => 'menu-primary',
                'container' => 'nav',
                'container_class' => 'menu-primary',
                );

                wp_nav_menu($args);
                ?>
            </div>
        </div>
    </div>
</header>