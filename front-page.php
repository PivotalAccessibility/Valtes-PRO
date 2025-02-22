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
<?php get_template_part('template-parts/front-page/form'); ?>
<?php get_template_part('template-parts/front-page/articles'); ?>
<?php get_template_part('template-parts/valtesfor/over-valtes', null, $explain); ?>

<?php
 
get_footer();