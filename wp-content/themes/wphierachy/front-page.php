<?php get_header(); ?>

    <div id="primary" class="content-area extended">

        <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php endwhile; endif; ?>

            <p>Template: FRONT-PAGE.php</p>

        </main>

        <?php get_sidebar( 'page' ); ?>

    </div>

    <?php get_sidebar( 'front-page' ); ?>

<?php get_footer(); ?>