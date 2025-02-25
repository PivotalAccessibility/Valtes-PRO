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
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post_status' => 'publish',
);
$query = new WP_Query($args);

?>

<section class="bg-primaryLight md:py-20 py-10 md:px-5 px-4">
    <div class="container flex flex-col items-center">
        <h2 class="section-sec-heading text-center">
            <?php echo esc_html($articles['heading']); ?>
        </h2>
        <div class="relative">
            <div class="relative z-10 grid sm:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-6 md:mt-10 mt-8">
                <?php if ($query->have_posts()): ?>
                    <?php while ($query->have_posts()):
                        $query->the_post(); ?>
                        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="flex flex-col transition duration-300 bg-white shadow-lg rounded-2xl h-auto hover:shadow-xl">
                            <div class="relative">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)):
                                    $category = $categories[0]; // Get first category
                                    $category_icon = get_field('icon', 'category_' . $category->term_id);
                                ?>
                                    <div class="absolute px-2.5 p-1.5 text-blue-700 bg-white z-10 rounded-full top-4 left-4">
                                        <h3 class="text-xs font-semibold">
                                            <?php echo esc_html($category->name); ?>
                                        </h3>
                                    </div>
                                <?php endif; ?>

                                <div class="relative">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" class="object-cover w-full h-52 rounded-t-2xl">

                                    <?php if ($category_icon): ?>
                                        <div class="absolute bg-primary rounded-full p-3 -bottom-5 left-4">
                                            <img src="<?php echo esc_url($category_icon['url']); ?>" class="w-5" alt="<?php echo esc_attr($category->name); ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between p-4 mt-4 grow gap-4">
                                <div>
                                    <h2 class="mb-3 text-xl font-bold">
                                        <?php
                                        $title = get_the_title();
                                        echo $title;
                                        ?>
                                    </h2>

                                    <p class="article-description">
                                        <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                                    </p>
                                </div>
                                <div class="flex items-end justify-between w-full">
                                    <div>
                                        <h2 class="text-base">
                                            <span class="font-bold text-gray-500">Geschreven door :</span>
                                            <span class="font-normal">
                                                <?php the_author(); ?>
                                            </span>
                                        </h2>
                                    </div>
                                    <div>
                                        <?php
                                        $user_id = get_the_author_meta('ID');
                                        $user_image = get_field('user_image', 'user_' . $user_id);

                                        if ($user_image['url']) {
                                            echo '<img src="' . esc_url($user_image['url']) . '" alt="Author Image" class="w-auto h-5 rounded-full">';
                                        } else {
                                            echo '<img src="' . esc_url(get_avatar_url($user_id)) . '" alt="Author Image" class="w-auto h-5 rounded-full">';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </a>
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
            <a href="<?php echo $articles['cta']['url']; ?>" class="btn btn-primary flex justify-center items-center gap-2">
                <?php echo $articles['cta']['title']; ?>
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