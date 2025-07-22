<!-- Header Global -->

<?php $header = get_page_by_title('header');?>

<div class="header__top">
    <div class="container">
        <article class="header__logo">
            <figure class="header__logo__figure">
                <a class="header__logo__figure__link" href="#">
                    <img class="header__logo__figure__link__img" src="../../img/logo/wevever.PNG" alt="logo">
                </a>
            </figure>
        </article>

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