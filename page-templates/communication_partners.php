<?php
/**
 * Template Name: Communication partners
 *
 */

get_header();

?>
<?php get_template_part('template-parts/communication_partners/hero'); ?>
<?php get_template_part('template-parts/communication_partners/challenge'); ?>
<?php get_template_part('template-parts/communication_partners/care'); ?>
<?php get_template_part('template-parts/communication_partners/partners'); ?>
<?php get_template_part('template-parts/communication_partners/hairdresser'); ?>
<?php get_template_part('template-parts/communication_partners/valtes-app'); ?>
<?php get_template_part('common-parts/global-form'); ?>
<?php get_template_part('common-parts/global-bottom-articles', null, array('isDarkBg' => true)); ?>
<?php get_template_part('common-parts/over-valtes'); ?>


<?php

get_footer();
