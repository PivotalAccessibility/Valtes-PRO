<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pivotalaccessibility
 */

$articles = valtes_get_field('articles', []);

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post_status' => 'publish',
);
$query = new WP_Query($args);

$permalink = get_the_permalink();

get_header(); ?>

<section class="pt-28 pb-10">
    <div class="container px-5 sm:px-5 xl:px-0">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <div class="">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="relative">
                            <div class="w-full mb-6">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" class="test relative z-10 object-cover w-full rounded-full md:h-96 h-40">
                            </div>
                            <div class="md:h-20 md:w-20 h-9 w-9 rounded-full bg-[#2b37db] absolute top-2 -right-2"></div>
                            <div class="md:h-32 md:w-32 h-20 w-20 rounded-full bg-[#e1eaff] absolute bottom-0 left-0"></div>
                        </div>
                    <?php endif; ?>
                    <div class="flex flex-wrap md:flex-nowrap items-start sm:mt-20 mt-5 md:gap-32 gap-16">
                        <div class="sm:w-[70%] w-full h-auto">
                            <p class="inline-block mb-4 text-base font-semibold text-primary">
                                <?php $category = get_the_category(); ?>
                                <?php echo $category ? esc_html($category[0]->name) : ''; ?>
                            </p>

                            <h1 class="mb-4 md:section-sec-heading section-heading">
                                <?php the_title(); ?>
                            </h1>

                            <div class="text-base text-black prose">
                                <?php the_content(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endwhile; endif; ?>

    </div>
</section>

<?php get_footer(); ?>