<?php
if( ! is_active_sidebar( 'front-page' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementart">

    <?php dynamic_sidebar( 'front-page' ); ?>

</aside>