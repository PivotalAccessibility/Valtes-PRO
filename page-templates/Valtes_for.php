<?php
/**
 * Template Name: Valtes For
 *
 */

 $explain = valtes_get_field('about_valtes', []);

// var_dump($explain);

get_header();
?>

<?php get_template_part('template-parts/valtesfor/hero'); ?>
<?php get_template_part('template-parts/valtesfor/challenge'); ?>
<?php get_template_part('template-parts/valtesfor/cards'); ?>
<?php get_template_part('template-parts/valtesfor/municipalities'); ?>
<?php get_template_part('template-parts/valtesfor/explaination'); ?>
<?php get_template_part('template-parts/valtesfor/services'); ?>
<?php get_template_part('template-parts/valtesfor/brochure'); ?>

<?php get_template_part('template-parts/valtesfor/form'); ?>
<?php get_template_part('template-parts/valtesfor/articles'); ?>
<?php get_template_part('template-parts/valtesfor/over-valtes', null, $explain); ?>

<?php

get_footer();
