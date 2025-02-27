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
<?php get_template_part('common-parts/global-form'); ?>
<?php get_template_part('common-parts/global-bottom-articles', null, array('isDarkBg' => true)); ?>
<?php get_template_part('common-parts/over-valtes'); ?>

<?php

get_footer();
