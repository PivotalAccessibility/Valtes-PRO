<?php


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

// Query to fetch latest 3 posts
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post_status' => 'publish',
);
$query = new WP_Query($args);

get_header();
$author_id = get_the_author_meta('ID');
$author_name = get_the_author_meta('display_name');
$author_bio = get_the_author_meta('description');
$author_avatar = get_avatar($author_id, 128);

// Fetch the current user's ID
$current_user_id = get_current_user_id();

// Get the user's bio
$user_bio = get_user_meta($current_user_id, 'description', true);
?>

<section class="pt-20 pb-12">
    <div class="max-w-4xl mx-auto 2xl:max-w-5xl"><?php custom_breadcrumbs(); ?></div>
    <div class="container flex sm:flex-nowrap flex-wrap justify-between max-w-4xl mx-auto 2xl:max-w-5xl px-5 sm:px-0">

        <div class="sm:w-[60%] w-full">

            <!-- Author Hero Section -->
            <div class="flex flex-col items-center p-2 mb-8 sm:rounded-full rounded-none lg:flex-row bg-primaryLight px-5 sm:px-0">
                <div class="overflow-hidden rounded-full">
                    <?php echo $author_avatar; ?>
                </div>
                <div class="flex items-center justify-between w-full text-center lg:ml-6 lg:text-left">

                    <div class="mt-5 sm:mt-0">
                        <h1 class="text-3xl font-bold text-gray-800"><?php echo esc_html($author_name); ?></h1>
                        <a class="sm:mt-3 mt-5 font-medium text-[#2B37DC] flex items-center text-xs w-full sm:w-auto">
                            <span class="mr-2">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.8571 0H1.13929C0.510714 0 0 0.517857 0 1.15357V14.8464C0 15.4821 0.510714 16 1.13929 16H14.8571C15.4857 16 16 15.4821 16 14.8464V1.15357C16 0.517857 15.4857 0 14.8571 0ZM4.83571 13.7143H2.46429V6.07857H4.83929V13.7143H4.83571ZM3.65 5.03571C2.88929 5.03571 2.275 4.41786 2.275 3.66071C2.275 2.90357 2.88929 2.28571 3.65 2.28571C4.40714 2.28571 5.025 2.90357 5.025 3.66071C5.025 4.42143 4.41071 5.03571 3.65 5.03571ZM13.725 13.7143H11.3536V10C11.3536 9.11429 11.3357 7.975 10.1214 7.975C8.88571 7.975 8.69643 8.93929 8.69643 9.93571V13.7143H6.325V6.07857H8.6V7.12143H8.63214C8.95 6.52143 9.725 5.88929 10.8786 5.88929C13.2786 5.88929 13.725 7.47143 13.725 9.52857V13.7143Z" fill="#2B37DC" />
                                </svg>
                            </span>
                            <span class="">
                                Internal Response Facilitator
                            </span>
                        </a>
                        <!-- <p class="mt-3 text-gray-600"><?php echo esc_html($author_bio); ?></p> -->
                    </div>
                    <div class="pr-4">
                        <img src="<?php echo valtes_assets('images/author-page-vedio-image/logo 1.png') ?>" alt="">
                    </div>
                </div>
            </div>

            <!-- Author's Posts Section -->

            <!-- Main Content -->
            <div clas="bg-green-200">
                <p class="text-[15px]/6 mb-9 text-[#1c233e]">
                    <?php echo !empty($user_bio) ? esc_html($user_bio) : 'No bio available.'; ?>
                </p>
                <a href="" class="flex items-center px-16 py-2 text-sm text-[#2B37DC] border-2 font-semibold border-[#2B37DC] rounded-full w-fit ">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                            <path d="M11 13l9 -9" />
                            <path d="M15 4h5v5" />
                        </svg>
                    </span>
                    MantelzorgNL
                </a>
            </div>
        </div>

        <div class=" mt-5 sm:mt-0">
            <h2 class="text-lg font-bold text-[#1C233E] mb-6">Andere artikelen van deze auteur</h2>

            <aside class="flex justify-center">

                <div class="grid grid-row-3 gap-y-5">
                    <?php if ($query->have_posts()): ?>
                        <?php while ($query->have_posts()):
                            $query->the_post(); ?>
                            <a href="<?php echo get_permalink(get_the_ID()); ?>" class="sm:w-[18rem] w-full rounded-2xl h-auto bg-white block shadow-lg hover:shadow-xl transition duration-300">
                                <div class="relative">
                                    <div class="absolute p-2 text-blue-700 bg-white rounded-full top-2 left-2">
                                        <h3 class="text-xs font-semibold">
                                            Voor mantelzorgers
                                        </h3>
                                    </div>
                                    <div>
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" class="object-cover w-full h-48 rounded-t-2xl">
                                    </div>
                                </div>
                                <div class="flex flex-col items-start justify-between p-3">
                                    <div class="">
                                        <h2 class="pr-16 mt-2 text-sm font-bold leading-5">
                                            <?php the_title(); ?>
                                        </h2>
                                        <p class="mt-2 text-xs font-normal text-gray-600">
                                            <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                                        </p>
                                    </div>
                                    <div class="flex items-center justify-between w-full mt-6">
                                        <div>
                                            <h2 class="text-xs">
                                                <span class="font-bold text-gray-500">Geschreven door :</span>
                                                <span class="font-normal">
                                                    <?php the_author(); ?>
                                                </span>
                                            </h2>
                                        </div>
                                        <div>
                                            <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="Author Image" class="w-auto h-5">
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

            </aside>
        </div>
    </div>
</section>
<?php get_footer(); ?>