<?php get_header(); ?>
<main>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <section style="min-height: 100vh; background-size: cover; background-position: center; text-align: center;">
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>
            </section>
        <?php endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</main>
<?php get_footer(); ?>
