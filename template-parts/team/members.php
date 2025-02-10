<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Query arguments for fetching Team members
$args = array(
    'post_type'      => 'member', // Custom post type
    'posts_per_page' => 6, // Get all team members
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
);

$team_query = new WP_Query($args);

if ($team_query->have_posts()):
?>
<section class="max-w-4xl mx-auto 2xl:max-w-5xl container py-20">
    <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4">
        <?php while ($team_query->have_posts()): $team_query->the_post(); ?>
        <div class="flex flex-col items-center sm:w-56 p-2">
            <div class=" h-40 w-40 rounded-full bg-purple-400">
                <?php if (has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="h-40 w-40 rounded-full object-cover">
                <?php endif; ?>
            </div>
            <div class="mt-3 text-center flex flex-col sm:items-start items-center w-full">
                <h2 class="text-lg font-bold">
                    <?php the_title(); ?>
                </h2>
                <div class="text-blue-800 mt-2 flex items-center font-bold text-xs">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-brand-linkedin">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M17 2a5 5 0 0 1 5 5v10a5 5 0 0 1 -5 5h-10a5 5 0 0 1 -5 -5v-10a5 5 0 0 1 5 -5zm-9 8a1 1 0 0 0 -1 1v5a1 1 0 0 0 2 0v-5a1 1 0 0 0 -1 -1m6 0a3 3 0 0 0 -1.168 .236l-.125 .057a1 1 0 0 0 -1.707 .707v5a1 1 0 0 0 2 0v-3a1 1 0 0 1 2 0v3a1 1 0 0 0 2 0v-3a3 3 0 0 0 -3 -3m-6 -3a1 1 0 0 0 -.993 .883l-.007 .127a1 1 0 0 0 1.993 .117l.007 -.127a1 1 0 0 0 -1 -1" />
                        </svg>
                    </span>
                    <p class="ml-2 text-left w-full">
                        <?php echo get_post_meta(get_the_ID(), 'designation', true); ?>
                    </p>
                </div>
                <p class="text-xs mt-2 leading-4 !text-left">
                    <?php the_excerpt(); ?>
                </p>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<?php
endif;
wp_reset_postdata();
?>
