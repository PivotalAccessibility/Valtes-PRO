<?php

/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="<?php echo esc_attr($post_title); ?>" />
    <meta property="og:description" content="<?php echo esc_attr(wp_trim_words($post_content, 30)); ?>" />
    <meta property="og:url" content="<?php echo esc_url($post_link); ?>" />
    <meta property="og:type" content="article" />

    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Outline&display=swap" rel="stylesheet">

</head>

<body <?php body_class("bg-white bg-contain bg-center !block"); ?>
    style="background-image: url('<?php echo valtes_assets('images/background_pattern.png') ?>'); display: none;">

    <?php wp_body_open(); ?>

    <div id="page" class="site" x-clock>

        <?php $header_type = 'default'; ?>

        <?php get_template_part('template-parts/header', $header_type); ?>

        <main id="content" class="site-content" role="main">