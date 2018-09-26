<?php
/*
 Template Name: Contact
*/
?>
<?php get_header(); ?>
<div class="content">
    <div id="main-content">
        <div class="contact-info">
            <h4>Address</h4>
            <p>TMA Solution, Quang Trung, TP HCM</p>
            <p>028.357.7584</p>
        </div>
        <div class="contact-info">
            <?php echo do_shortcode('[contact-form-7 id="74" title="Contact form 1"]'); ?>
        </div>
    </div><!--end #main-content-->
    <div id="sidebar">
        <?php get_sidebar(); ?>
    </div><!--end #sidebar-->
</div><!--end .content-->
<?php get_footer(); ?>