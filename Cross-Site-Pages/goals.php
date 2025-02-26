<?php
/**
 * Template Name: Goals Page
 *
 */
get_header();

$API = get_field('goal_page_link', 'option');

$RESP = wp_safe_remote_get($API . '?apikey=0EYfDNRpIKDS1Ajr3fLD');

$All_DATA = json_decode($RESP['body'], true);

$hero = $All_DATA['hero'];
$goals = $All_DATA['goals'];
$milestones = $All_DATA['milestones'];


?>

<?php get_template_part('common-parts/top-banner', null, $hero); ?>
<?php get_template_part('Cross-Site-Pages/goals-parts/our_goals', null, ['goals' => $goals]); ?>
<?php get_template_part('Cross-Site-Pages/goals-parts/milestone', null, ['milestones' => $milestones]); ?>
<?php get_template_part('common-parts/global-form'); ?>
<?php get_template_part('common-parts/global-bottom-articles'); ?>

<?php

get_footer();

