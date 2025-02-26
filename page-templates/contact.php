<?php
/**
 * Template Name: Contact Us
 *
 */

get_header();

$explain = valtes_get_field('about_valtes', []);

?>

<?php get_template_part('template-parts/contactus/hero'); ?>
<?php get_template_part('template-parts/contactus/form'); ?>
<?php get_template_part('common-parts/over-valtes', null, $explain); ?>

<?php

get_footer();
