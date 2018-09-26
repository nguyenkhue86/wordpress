<?php 
    /** Template Name: Full Width */
?>
<?php get_header(); ?>
<div class="content">
    <div id="main-content" class="full-width">
        <?php if (have_posts()): ?>
            <?php while( have_posts() ):the_post(); ?>
                <?php comments_template(); ?>
            <?php endwhile ?>
        <?php else: ?>
                <?php get_template_part('content', 'none') ?>
        <?php endif; ?>
    </div><!--end #main-content-->
</div><!--end .content-->
<?php get_footer(); ?>