<?php
/**
 * Template Name: Content partners
 *
 */

get_header();
?>

<?php get_template_part('template-parts/content_partners/hero'); ?>
<?php get_template_part('template-parts/content_partners/challenge'); ?>

<?php get_template_part('template-parts/content_partners/cards'); ?>
<?php get_template_part('template-parts/content_partners/partners'); ?>
<?php get_template_part('template-parts/content_partners/explanation'); ?>
<?php get_template_part('template-parts/content_partners/clients'); ?>
<?php get_template_part('template-parts/content_partners/form'); ?>
<?php get_template_part('template-parts/content_partners/articles'); ?>
<?php get_template_part('template-parts/content_partners/over-valtes', null, $explain); ?>

<?php

get_footer();
