<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

$isDarkBg = $args['isDarkBg'] ?? false;

// Query to fetch latest 3 posts
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  'post_status' => 'publish',
);
$query = new WP_Query($args);

$cta = valtes_get_field('articles_cta', [], 'option');

?>

<section class="<?= $isDarkBg ? 'bg-primaryLight md:py-20 py-10' : 'md:pb-20 pb-10' ?> md:px-5 px-4">
    <div class="container flex flex-col items-center">
        <h2 class="text-center section-sec-heading">
            <?php esc_html_e( "Bekijk onze artikelen" , "valtes" ) ?>
        </h2>
        <div class="relative w-full">
            <div class="relative z-10 grid grid-cols-1 gap-6 mt-8 sm:grid-cols-2 lg:grid-cols-3 md:mt-10 mySlider">
                <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()):
            $query->the_post(); ?>
                <?php get_template_part('common-parts/article-card'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else: ?>
                <p><?php esc_html_e( "Geen artikelen gevonden." , "valtes" ) ?></p>
                <?php endif; ?>
            </div>
            <div class="absolute hidden rounded-full md:size-20 size-9 bg-jobborder top-1/24 -right-1/60 md:block">
            </div>
            <div class="bg-[#BBBEF4] md:size-40 size-20 rounded-full absolute md:-bottom-1/14 bottom-1/12 -left-1/22">
            </div>
        </div>
        <div class="flex flex-wrap items-center justify-center w-full gap-6 sm:flex-nowrap mt-10">
            <a href="<?php echo $cta['url']; ?>" class="flex items-center justify-center gap-2 btn btn-primary">
                <?php echo $cta['title']; ?>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l14 0" />
                        <path d="M15 16l4 -4" />
                        <path d="M15 8l4 4" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>