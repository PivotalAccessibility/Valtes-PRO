<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$articles = valtes_get_field('articles', []);

// Query to fetch latest 3 posts
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3, 
    'post_status'    => 'publish',
);
$query = new WP_Query($args);

?>

<section class="bg-[#f0f5ff] py-16">
    <div class="container flex flex-col items-center max-w-4xl mx-auto 2xl:max-w-5xl px-5 sm:px-0">
        <h2 class="text-3xl font-bold">
            <?php echo esc_html($articles['heading']); ?>
        </h2>
        <div class="relative">
            <div class="relative z-10 grid sm:grid-cols-3 grid-cols-1 gap-5 mt-10">
                <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                <a href="<?php echo get_permalink(get_the_ID()); ?>"
                    class="block transition duration-300 bg-white shadow-lg w-72 rounded-2xl h-auto hover:shadow-xl">
                    <div class="relative">
                        <div class="absolute p-2 text-blue-700 bg-white z-10 rounded-full top-2 left-2">
                            <h3 class="text-xs font-semibold">
                                Voor mantelzorgers
                            </h3>
                        </div>
                        <div class="relative">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                alt="<?php the_title(); ?>" class="object-cover w-full h-52 rounded-t-2xl">
                            <div
                                class="absolute bg-[#2b37dc] w-12 -bottom-5 left-3 h-12 flex justify-center items-center rounded-full">
                                <img src="<?php echo valtes_assets('images/newspaper-solid.svg') ?>" class="w-5" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-start justify-between p-3 mt-4">
                        <div>
                            <h2 class="mb-3 text-lg font-bold text-[#1C233E] leading-5 hover:underline">
                                <?php 
                                $title = get_the_title(); 
                                echo wp_trim_words($title, 8, '...');
                                ?>
                            </h2>

                            <p class="text-[13px] leading-5 font-normal text-[#1C233E]">
                                <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                            </p>
                        </div>
                        <div class="flex items-end justify-between w-full">
                            <div>
                                <h2 class="text-xs">
                                    <span class="font-bold text-gray-500">Geschreven door :</span>
                                    <span class="font-normal">
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
            <div class="absolute h-32 w-32 bg-[#babdf3] rounded-full -bottom-7 -left-10"></div>
            <div class="absolute h-14 w-14 bg-[#6997ff] rounded-full top-5 -right-6"></div>
        </div>
        <div class="flex sm:flex-nowrap flex-wrap items-center justify-center mt-10">
            <a href="#" class="flex items-center justify-center text-white py-2 px-4 rounded-full bg-[#2b37dc] text-xs font-bold w-full sm:w-auto">
                Ontdek onze kennis
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 ml-2">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l14 0" />
                        <path d="M15 16l4 -4" />
                        <path d="M15 8l4 4" />
                    </svg>
                </span>
            </a>

            <a href="#"
                class="flex items-center bg-white rounded-full py-2 px-4 text-xs font-bold border border-blue-700 text-blue-700 sm:ml-5  w-full sm:w-auto mt-5 sm:mt-0 justify-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                        <path d="M11 13l9 -9" />
                        <path d="M15 4h5v5" />
                    </svg>
                </span>
                Meer lezen?
            </a>
        </div>
    </div>
</section>