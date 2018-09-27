<?php get_header(); ?>
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">    
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/template/HoppyHourBanner.png" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/template/HoppyHourBanner.png" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/template/HoppyHourBanner.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="content">
        <div id="main-content">
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
</div>


<?php get_footer(); ?>