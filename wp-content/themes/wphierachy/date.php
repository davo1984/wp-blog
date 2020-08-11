<?php get_header(); ?>

<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>

        <?php endwhile; else : ?>
<!-- put in date error messages (eg no posts for this day/month/year) -->
            <?php get_template_part( 'template-parts/content-none' ); ?>

        <?php endif; ?>

        <p>Template: DATE.php</p>

    </main>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>