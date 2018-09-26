<?php get_header(); ?>
<div class="content">
    <div id="main-content">
    <div class="search-info">
        <?php 
            $search_query = new WP_Query('s='.$s.'&sgowpost=-1');
            $search_keyword = wp_specialchars($s, 1);
            $search_count = $search_query->post_count;
            printf( __('We found %1$s articles for your search','happyhour'),$search_count );
        ?>
    </div>
        <?php if (have_posts()): ?>
            <?php while( have_posts() ):the_post(); ?>
                <?php get_template_part('content',get_post_format()); ?>
            <?php endwhile ?>
            <?php happy_hour_pagination(); ?>
        <?php else: ?>
                <?php get_template_part('content', 'none') ?>
        <?php endif; ?>
    </div><!--end #main-content-->
    <div id="sidebar">
        <?php get_sidebar(); ?>
    </div><!--end #sidebar-->
</div><!--end .content-->


<?php get_footer(); ?>