<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php happy_hour_thumbnail('large'); ?>
    </div>
    <div class="entry-header"><?php happy_hour_entry_header(); ?></div>
    <?php
        $attachment = get_children(array('post-parent' => $post->ID));
        $attachment_number = count( $attachment );
        printf( __('This image post contains %1$s photos.','happyhour'), $attachment_number);
    ?>
    <div class="entry-content">
        <?php happy_hour_entry_content(); ?>
        <?php (is_single()? happy_hour_entry_tag() : '' )?>
    </div>
</article>