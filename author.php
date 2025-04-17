<?php


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (!empty($args) && $args) {
    extract($args);
}

$author_id = get_the_author_meta('ID');

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'author' => $author_id,
    'post__not_in' => array(get_the_ID()),
);

$query = new WP_Query($args);

get_header();

$author_id = get_the_author_meta('ID');
$author_name = get_the_author_meta('display_name');
$current_user_id = $author_id;
$user_bio_acf = get_field('user_bio', 'user_' . $current_user_id);
$user_image_acf = get_field('user_image', 'user_' . $current_user_id);
$user_social = get_field('user_social_profile', 'user_' . $current_user_id);
$user_company_logo = get_field('user_organization_logo', 'user_' . $current_user_id);
$user_organization = get_field('user_organization', 'user_' . $current_user_id);

?>

<section class="pt-20 pb-32">
    <div class="container px-5 sm:px-5 xl:px-0 mt-10"><?php custom_breadcrumbs(); ?></div>
    <div class="container flex md:flex-nowrap flex-wrap justify-between px-5 sm:px-5 xl:px-0 gap-32">
        <div class="w-full">

            <!-- Author Hero Section -->
            <div class="flex flex-col items-center mb-8 p-3 sm:rounded-full rounded-none lg:flex-row px-5 sm:px-0 bg-primaryLight">
                <img src="<?php echo $user_image_acf['url'] ?>" alt="<?php echo $user_image_acf['alt'] ?>" class=" h-32 w-32 rounded-full object-cover ml-3">
                <div class="flex items-center justify-between text-center lg:ml-6 lg:text-left w-full">
                    <div class="mt-5 sm:mt-0">
                        <h1 class="text-3xl font-bold text-gray-800"><?php echo esc_html($author_name); ?></h1>
                        <?php if (isset($user_social['url'])) {
                            ?>
                            <a href="<?php echo $user_social['url']; ?>" class="sm:mt-3 mt-5 font-medium text-primary flex items-center text-xs w-full sm:w-auto">
                                <span class="mr-2">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.8571 0H1.13929C0.510714 0 0 0.517857 0 1.15357V14.8464C0 15.4821 0.510714 16 1.13929 16H14.8571C15.4857 16 16 15.4821 16 14.8464V1.15357C16 0.517857 15.4857 0 14.8571 0ZM4.83571 13.7143H2.46429V6.07857H4.83929V13.7143H4.83571ZM3.65 5.03571C2.88929 5.03571 2.275 4.41786 2.275 3.66071C2.275 2.90357 2.88929 2.28571 3.65 2.28571C4.40714 2.28571 5.025 2.90357 5.025 3.66071C5.025 4.42143 4.41071 5.03571 3.65 5.03571ZM13.725 13.7143H11.3536V10C11.3536 9.11429 11.3357 7.975 10.1214 7.975C8.88571 7.975 8.69643 8.93929 8.69643 9.93571V13.7143H6.325V6.07857H8.6V7.12143H8.63214C8.95 6.52143 9.725 5.88929 10.8786 5.88929C13.2786 5.88929 13.725 7.47143 13.725 9.52857V13.7143Z" fill="#2B37DC" />
                                    </svg>
                                </span>
                                <span class="">
                                    <?php echo $user_social['title']; ?>
                                </span>
                            </a>
                            <?php
                        } ?>
                        <!-- <p class="mt-3 text-gray-600"><?php echo esc_html($author_bio); ?></p> -->
                    </div>
                    <?php if (!empty($user_company_logo['url'])): ?>
                        <div class="mr-16">
                            <img class="w-32 h-auto" src="<?php echo $user_company_logo['url'] ?>" alt="<?php echo $user_company_logo['alt'] ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Author's Posts Section -->

            <!-- Main Content -->
            <div clas="">
                <p class="text-[15px]/6 mb-9 text-[#1c233e]">
                    <?php echo !empty($user_bio_acf) ? $user_bio_acf : 'No bio available.'; ?>
                </p>

                <?php if (!empty($user_organization['title'])): ?>
                    <a href="<?php echo $user_organization['url'] ?>" class="flex items-center px-16 py-2 text-sm text-primary border-2 sm:font-semibold font-bold border-primary rounded-full sm:w-fit mt-5 justify-center w-full">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                <path d="M11 13l9 -9" />
                                <path d="M15 4h5v5" />
                            </svg>
                        </span>
                        <?php echo $user_organization['title'] ?>
                    </a>
                <?php endif; ?>

            </div>
        </div>

        <div class=" mt-10 xl:mt-0 sm:mt-10">
            <h2 class="text-lg font-bold text-[#1C233E] mb-6 text-center sm:text-left">Andere artikelen van deze auteur</h2>
            <aside class="flex justify-center">
                <div class="grid grid-row-3 gap-y-5">
                    <?php if ($query->have_posts()): ?>
                        <?php while ($query->have_posts()):
                            $query->the_post(); ?>
                            <div>
                                <?php get_template_part('common-parts/article-card'); ?>
                            </div>
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