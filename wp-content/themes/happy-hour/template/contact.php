<?php
/*
 Template Name: Contact
*/
?>
<?php get_header(); ?>
<div class="container"id="container">
    <div class="content">
        <div id="main-content">
            <div class="contact-info">
            <iframe style="margin: 0 auto;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4151452080114!2d106.62886001530153!3d10.855995592267526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175298af1491bff%3A0xcf2251bacb86b0f2!2sTMA+Solutions+Lab+6!5e0!3m2!1svi!2s!4v1538711121003" frameborder="0" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span>﻿</span></iframe>
            </div>
            <div class="contact-info">
                <?php echo do_shortcode('[contact-form-7 id="74" title="Contact form 1"]'); ?>
            </div>
        </div><!--end #main-content-->
        <div id="sidebar">
            <?php get_sidebar(); ?>
        </div><!--end #sidebar-->
    </div><!--end .content-->
</div>
<?php get_footer(); ?>