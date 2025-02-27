<?php
/**
 * Template Name: Team Page
 *
 */

get_header();

$API = get_field('team_page_link', 'option');
$RESP = wp_safe_remote_get($API . '?apikey=0EYfDNRpIKDS1Ajr3fLD');
$All_DATA = json_decode($RESP['body'], true);

$members = $All_DATA['members'];
$allTopMembers = $All_DATA['allTopMembers'];
$team_members = $All_DATA['team_members'];

?>

<?php get_template_part('Cross-Site-Pages/team-parts/members', null, ['members' => $members, 'allTopMembers' => $allTopMembers, 'team_members' => $team_members]); ?>
<?php get_template_part('common-parts/global-bottom-articles', null, array('isDarkBg' => false)); ?>


<?php get_footer();