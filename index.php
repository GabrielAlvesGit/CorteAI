<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <h1><?php the_title(); ?></h1>
 <p><?php the_content(); ?>json</p>
<?php endwhile;
else: ?>

<p><?php _e('Crie uma página e configure-a com o modelo de página "Home page"!.'); ?></p>
<?php endif; ?>