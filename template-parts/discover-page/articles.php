<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

// Query to fetch latest 3 posts
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 9, 
    'post_status'    => 'publish',
    'paged'          => $paged,
);
$query = new WP_Query($args);

?>

<section class="mt-10">
    <div class="container max-w-4xl pb-20 mx-auto 2xl:max-w-5xl px-5 sm:px-0">
        <div component="search"
            class="flex flex-row items-center justify-center p-1 border-2 border-gray-300 rounded-full">
            <input type="text" placeholder="Zoek in onze artikelen..." class="w-full ml-6 outline-none">
            <button
                class="flex flex-row justify-center items-center bg-[#2B37DC] border-2 text-xs border-[#2B37DC] sm:px-5 sm:py-2 text-white font-semibold rounded-full sm:w-52 p-3">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M21 21l-6 -6" />
                    </svg>
                </span>
                <span class=" hidden sm:block">Zoek</span>
            </button>
        </div>

        <div component="tabs" class="py-10">
            <div class="flex flex-row items-center justify-center gap-4">
                <button class="bg-[#c2d6fe] p-2.5 rounded-full font-bold text-xs">Alle artikelen</button>
                <button class="bg-[#f0f5ff] p-2.5 rounded-full text-xs">Informatie</button>
                <button class="bg-[#f0f5ff] p-2.5 rounded-full text-xs">Nieuws</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-x-6 gap-y-6">
            <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <a href="<?php echo get_permalink(get_the_ID()); ?>"
                class="block col-span-1 transition duration-300 shadow-lg rounded-2xl hover:shadow-xl">
                <div class="relative">
                    <div class="absolute z-20 p-2 text-blue-700 bg-white rounded-full top-2 left-2">
                        <h3 class="text-xs font-semibold">
                            Voor mantelzorgers
                        </h3>
                    </div>
                    <div class="relative">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                            alt="<?php the_title(); ?>" class="object-cover w-full h-52 rounded-t-2xl">
                            <div class="absolute bg-[#2b37dc] w-12 -bottom-5 left-5 h-12 flex justify-center items-center rounded-full">
                                <img src="<?php echo valtes_assets('images/newspaper-solid.svg') ?>" class="w-5" alt="">
                            </div>
                    </div>
                </div>
                <div class="flex flex-col items-start justify-between p-3 mt-4">
                    <div>
                        <h2 class="pr-16 mb-3 text-lg font-bold text-[#1C233E] leading-5 hover:underline">
                            <?php the_title(); ?>
                        </h2>
                        <p class="text-[13px] leading-5 font-normal text-[#1C233E]">
                            <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                        </p>
                    </div>
                    <div class="flex items-end justify-between w-full mt-2 h-7">
                        <div>
                            <h2 class="text-xs">
                                <span class="font-bold text-gray-500">Geschreven door :</span>
                                <span class="font-normal text-gray-400">
                                    <?php the_author(); ?>
                                </span>
                            </h2>
                        </div>
                        <div>
                            <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="Author Image"
                                class="w-auto h-5 rounded-full">
                        </div>
                    </div>
                </div>
            </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p>Geen artikelen gevonden.</p>
            <?php endif; ?>
        </div>

        <div component="pagination" class="flex items-center justify-center mt-20 space-x-2">
    <?php
    $pagination = paginate_links(array(
        'total'   => $query->max_num_pages,
        'current' => $paged,
        'prev_text' => '<svg width="40" height="40" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="49" y="49" width="48" height="48" rx="24" transform="rotate(-180 49 49)" fill="white"/>
<rect x="49" y="49" width="48" height="48" rx="24" transform="rotate(-180 49 49)" stroke="#2B37DC" stroke-width="2"/>
<path d="M15 25.0226L24.9774 15L25.9707 15.9932L17.6185 24.3454L35 24.3454L35 25.6998L17.6185 25.6998L25.9707 34.0519L24.9774 35L15 25.0226Z" fill="#2B37DC"/>
</svg>
',
        'next_text' => '<svg width="40" height="40" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="1" y="1" width="48" height="48" rx="24" fill="white"/>
<rect x="1" y="1" width="48" height="48" rx="24" stroke="#2B37DC" stroke-width="2"/>
<path d="M35 24.9774L25.0226 35L24.0293 34.0068L32.3815 25.6546H15V24.3002H32.3815L24.0293 15.9481L25.0226 15L35 24.9774Z" fill="#2B37DC"/>
</svg>',
        'mid_size' => 2,
        'type'     => 'list'
    ));

    if ($pagination) {
        echo '<div class="!flex space-x-2">' . $pagination . '</div>';
    }
    ?>
</div>


    </div>
</section>