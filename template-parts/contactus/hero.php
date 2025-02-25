<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$hero = valtes_get_field('hero', []);

?>

<?php get_template_part('common-parts/top-banner', null, array(
    'title' => $hero['heading'],
    'description' => $hero['description'],
    'image' => $hero['image'],
    'social' => array(
        'email' => $hero['email'],
        'phone_number' => $hero['phone_number'],
        'linkedin' => $hero['linkedin'],
    ),
)); ?>