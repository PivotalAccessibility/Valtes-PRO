<?php
/**
 * Template Name: Vacancies
 *
 */

get_header();
?>

<?php get_template_part('template-parts/vacancies/intro'); ?>
<?php get_template_part('template-parts/vacancies/jobs'); ?>
<?php get_template_part('common-parts/global-form'); ?>
<?php get_template_part('common-parts/global-bottom-articles', null, array(
  'isDarkBg' => false
)); ?>

<?php

get_footer();