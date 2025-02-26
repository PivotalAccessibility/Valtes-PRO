<?php
/**
 * Template Name: Valtes For
 *
 */

get_header();
?>

<?php get_template_part('template-parts/valtesfor/hero'); ?>
<?php get_template_part('template-parts/valtesfor/challenge'); ?>
<?php get_template_part('template-parts/valtesfor/cards'); ?>
<?php get_template_part('template-parts/valtesfor/municipalities'); ?>
<?php get_template_part('template-parts/valtesfor/explaination'); ?>
<?php get_template_part('template-parts/valtesfor/services'); ?>
<?php get_template_part('template-parts/valtesfor/brochure'); ?>


<?php get_template_part('common-parts/global-form'); ?>
<?php get_template_part('common-parts/global-bottom-articles', null, array('isDarkBg' => true)); ?>
<?php get_template_part('common-parts/over-valtes'); ?>

<?php

get_footer();
