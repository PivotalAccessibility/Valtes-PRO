<?php

/**
 * Template Name: Healthcare organizations
 *
 */

$explain = valtes_get_field('about_valtes', []);

get_header();
?>

<?php get_template_part('template-parts/healthcare_organizations/hero'); ?>

<?php get_template_part('template-parts/healthcare_organizations/challenge'); ?>
<?php get_template_part('template-parts/healthcare_organizations/innovation'); ?>
<?php get_template_part('template-parts/healthcare_organizations/clients'); ?>
<?php get_template_part('template-parts/healthcare_organizations/solution'); ?>
<?php get_template_part('template-parts/healthcare_organizations/mission'); ?>

<?php get_template_part('common-parts/global-form'); ?>
<?php get_template_part('common-parts/global-bottom-articles', null, array(
  'isDarkBg' => true
)); ?>
<?php get_template_part('common-parts/over-valtes', null, $explain); ?>

<?php

get_footer();
