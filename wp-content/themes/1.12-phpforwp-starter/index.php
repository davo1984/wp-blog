<?php get_header(); ?>

    <div id="content">

      <!-- Static Front Page -->
      <?php if ( is_front_page() 
        && !is_home() ) : ?>

        <h1>Static Front Page</h1>

      <?php endif; ?>

      <!-- Blog Home -->
        <?php if ( is_home() ) : ?>
            <h2>Blog</h2>
        <?php endif; ?>

      <!-- Page (Not Front Page) -->
      <?php if ( is_page() && !is_front_page() ): ?>
        <h3>Page - not front page</h3>
      <?php endif; ?>

      <!-- Single Post -->
        <?php if ( is_single() ): ?>
            <h2>Single Post</h2>
        <?php endif; ?>

      <!-- Single Attachment (Media) -->
        <?php if ( is_attachment() ): ?>
            <h2>Attachment</h2>
        <?php endif; ?>

      <!-- Category Archive -->
        <?php if ( is_category_archive() ): ?>
            <h2>Category Archive</h2>
        <?php endif; ?>

      <!-- Tag Archive -->

      <!-- Author Archive -->

      <!-- Date Archive -->

      <!-- 404 Page -->

    </div>

<?php get_footer(); ?>