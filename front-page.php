<?php
/**
 * Template Name: Homepage
 *
 */

get_header();
$explain = valtes_get_field('about_valtes', []);

?>
<?php get_template_part('template-parts/front-page/hero'); ?>
<?php get_template_part('template-parts/front-page/known'); ?>
<?php get_template_part('template-parts/front-page/share'); ?>
<?php get_template_part('template-parts/front-page/client'); ?>

<?php get_template_part('common-parts/global-form'); ?>
<?php get_template_part('common-parts/global-bottom-articles', null, array(
  'isDarkBg' => true
)); ?>
<?php get_template_part('common-parts/over-valtes', null, $explain); ?>

<?php

get_footer();