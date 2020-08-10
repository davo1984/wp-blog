<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

  <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>
  <p><?php esc_html_e( 'Enjoy this gallery post!!!', 'wphierarchy' ); ?>

        <?php the_title( '<h1>', '</h1>' ); ?>

    </header>

    <div class="entry-content">

        <?php the_content(); ?>

    </div>

    <?php if( comments_open() ) : ?>

        <?php comments_template(); ?>

    <?php endif; ?>

</article>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

  <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>
  <p><?php esc_html_e( 'Enjoy the IMAGE in this post!!!', 'wphierarchy' ); ?>

        <?php the_title( '<h1>', '</h1>' ); ?>

        <div class="byline">
            <?php esc_html_e( 'Author:' ); ?> <?php the_author_posts_link(); ?>
        </div>

    </header>

    <div class="entry-content">

        <?php the_content(); ?>

    </div>

    <?php if( comments_open() ) : ?>

        <?php comments_template(); ?>

    <?php endif; ?>

</article>
