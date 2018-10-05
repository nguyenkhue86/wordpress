<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if (is_home() || is_archive() || is_search()): ?>
    <div class="entry-thumbnail">
        <?php happy_hour_thumbnail('thumbnail'); ?>
    </div>
<?php endif; ?>
    <div class="entry-content-box">
        <div class="entry-header"><?php happy_hour_entry_header(); ?></div>
        <div class="entry-content"><?php happy_hour_entry_meta(); ?></div>
        <div class="entry-content">
            <?php happy_hour_entry_content(); ?>
            <?php (is_single()? happy_hour_entry_tag() : '' )?>
            
        </div>
    </div>
</article>