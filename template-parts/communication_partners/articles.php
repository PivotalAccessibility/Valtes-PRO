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

 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


<section class="px-4 py-10 bg-primaryLight md:py-20 md:px-5">
    <div class="container flex flex-col items-center">
        <h2 class="text-center section-sec-heading md:text-left">
            <?php echo esc_html($articles['heading']); ?>
        </h2>
        <div class="relative w-full">
            <div class="relative z-10 grid flex-col grid-cols-1 gap-6 mt-8 sm:grid-cols-2 lg:grid-cols-3 md:mt-10 mySlider">
                <?php if ($query->have_posts()): ?>
                    <?php while ($query->have_posts()):
                        $query->the_post(); ?>
                        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="flex flex-col h-auto transition duration-300 bg-white shadow-lg rounded-2xl hover:shadow-xl">
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
                                        <div class="absolute p-3 rounded-full bg-primary -bottom-5 left-4">
                                            <img src="<?php echo esc_url($category_icon['url']); ?>" class="w-5" alt="<?php echo esc_attr($category->name); ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between gap-4 p-4 mt-4 grow">
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
        <div class="flex flex-wrap items-center justify-center gap-6 mt-10 sm:flex-nowrap">
            <a href="<?php echo $articles['cta1']['url']; ?>" class="flex items-center justify-center gap-2 btn btn-primary">
                <?php echo $articles['cta1']['title']; ?>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l14 0" />
                        <path d="M15 16l4 -4" />
                        <path d="M15 8l4 4" />
                    </svg>
                </span>
            </a>
            <a href="<?php echo $articles['cta2']['url']; ?>" class="flex items-center justify-center gap-2 btn btn-outline">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                        <path d="M11 13l9 -9" />
                        <path d="M15 4h5v5" />
                    </svg>
                </span>
                <?php echo $articles['cta2']['title']; ?>
            </a>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
     $(document).ready(function () {
    function checkSlider() {
        if ($(window).width() <= 767) {
            if (!$(".mySlider").hasClass("slick-initialized")) {
                $(".mySlider").slick({
                    dots: true,
                    arrows: false,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    mobileFirst: true
                });
            }
        } else {
            if ($(".mySlider").hasClass("slick-initialized")) {
                $(".mySlider").slick("unslick");
            }
        }
    }

    checkSlider();
    $(window).on("resize", checkSlider);
});



    </script>