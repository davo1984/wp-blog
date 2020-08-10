<?php get_header( 'splashX' ); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            <h1><?php wp_title( '' ); ?></h1>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( 'template-parts/content-none' ); ?>

            <?php endif; ?>

            <?php echo paginate_links(); ?>

            <p>Template: HOME.php</p>

        </main>

    </div>

    <?php get_sidebar(); ?>

<?php get_footer( 'splashX' ); ?><?php get_header( 'splashX' ); ?>

<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

        <?php endwhile; else : ?>

            <?php get_template_part( 'template-parts/content-none' ); ?>

        <?php endif; ?>

        <p>Template: index.php</p>

    </main>

</div>

<?php get_sidebar(); ?>

<?php get_footer( 'splashX' ); ?>