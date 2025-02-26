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

?>

<section class="<?= $isDarkBg ? 'bg-primaryLight' : '' ?> md:py-20 py-10 md:px-5 px-4">
  <div class="container flex flex-col items-center">
    <h2 class="section-sec-heading text-center">
      <?php echo 'Bekijk onze artikelen'; ?>
    </h2>
    <div class="relative">
      <div class="relative z-10 grid sm:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-6 md:mt-10 mt-8">
        <?php if ($query->have_posts()): ?>
          <?php while ($query->have_posts()):
            $query->the_post(); ?>
            <?php get_template_part('common-parts/article-card'); ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>Geen artikelen gevonden.</p>
        <?php endif; ?>
      </div>
      <div class="absolute md:block hidden h-32 w-32 bg-[#babdf3] rounded-full -bottom-7 -left-10"></div>
      <div class="absolute md:block hidden h-14 w-14 bg-jobborder rounded-full top-5 -right-6"></div>
    </div>
    <div class="flex sm:flex-nowrap flex-wrap items-center justify-center mt-10 gap-6 w-full">
      <a href="<?php echo '/' ?>" class="btn btn-primary flex justify-center items-center gap-2">
        <?php echo 'Ontdek onze kennis' ?>
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
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