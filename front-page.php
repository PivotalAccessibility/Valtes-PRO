<?php

get_header();

?>


<div x-data="{sectionInView: ''}">
    <?php get_template_part('template-parts/front-page/hero'); ?>
    <?php get_template_part('template-parts/front-page/navigation'); ?>
    <?php get_template_part('template-parts/front-page/about'); ?>
    <?php get_template_part('template-parts/front-page/how-we-work'); ?>
    <?php get_template_part('template-parts/front-page/services'); ?>
    <?php get_template_part('template-parts/front-page/call-to-action'); ?>
    <?php get_template_part('template-parts/front-page/testimonials'); ?>
    <?php get_template_part('template-parts/front-page/gallery'); ?>
</div>

<?php
 
get_footer();