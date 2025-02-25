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
    'title' => $hero['title'],
    'description' => $hero['description'],
    'cta' => $hero['cta'],
    'cta2' => !empty($hero['cta2']) ? $hero['cta2'] : array(),
    'image' => $hero['image'],
)); ?>