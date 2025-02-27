<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pivotalaccessibility
 */

$args = array(
    'post_type' => 'jobs',
    'posts_per_page' => -1,
    'post_status' => 'publish',
);

$job_query = new WP_Query($args);

$post_id = get_the_ID();

$job_position = get_field('job_type', $post_id);
$job_location = get_field('location', $post_id);
$poc = get_field('poc', $post_id);
$email = get_field('email', $post_id);
$phone = get_field('contact_number', $post_id);
$category = get_field('vacancy_category', $post_id);
$vacancy_type = get_field('vacancy_type', $post_id);

$form = valtes_get_field('job_form', [], 'option');

get_header(); ?>
<section class="py-16">


    <div class="container max-w-4xl mx-auto px-5 sm:px-0">
        <div class="my-5"><?php custom_breadcrumbs(); ?></div>
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <div class="">
                    <div class="flex flex-wrap sm:flex-nowrap items-start">
                        <div class="md:w-[70%] w-full h-auto">
                            <h1 class="section-sec-heading">
                                <?php the_title(); ?>
                            </h1>
                            <div class=" flex text-base mt-5 text-[#A6A6A6] font-bold">
                                <div>
                                    <?php echo $job_position; ?>
                                </div>
                                <div class="mx-2">|</div>
                                <div>
                                    <?php echo $job_location; ?>
                                </div>
                            </div>
                            <div class="mt-5 prose text-base">
                                <?php the_content(); ?>
                            </div>

                            <div class="mt-5">
                                <h3 class=" text-black text-2xl font-bold">Contactinformatie</h3>
                                <?php if (!empty($poc)): ?>
                                    <div class="my-5 md:flex">
                                        <span>Neem contact op met <?php echo $poc; ?></span>
                                        <span class=" font-bold md:ml-1">Email: <?php echo $email; ?></span>
                                    </div>
                                <?php endif; ?>
                                <ul class="space-y-3 mt-5">
                                    <?php if (!empty($phone)): ?>
                                        <li class="flex items-center">
                                            <img src="<?php echo valtes_assets('images/DeviceMobile.svg') ?>" alt="" class="h-5 w-5 text-primary">
                                            <span class="font-medium text-primary text-base ml-2.5">Telefoon</span>
                                            <span class=" text-base font-normal text-black ml-5">
                                                <?php echo $phone; ?>
                                            </span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (!empty($category)): ?>
                                        <li class="flex items-center">
                                            <img src="<?php echo valtes_assets('images/FirstAid.svg') ?>" alt="" class="h-5 w-5 text-primary">
                                            <span class="font-medium text-primary text-base ml-2.5">Vacature categorie</span>
                                            <span class=" text-base font-normal text-black ml-5">
                                                <?php echo $category; ?>
                                            </span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (!empty($vacancy_type)): ?>
                                        <li class="flex items-center">
                                            <img src="<?php echo valtes_assets('images/Clock.svg') ?>" alt="" class="h-5 w-5 text-primary">
                                            <span class="font-medium text-primary text-base ml-2.5">Type vacature</span>
                                            <span class=" text-base font-normal text-black ml-5">
                                                <?php echo $vacancy_type; ?>
                                            </span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (!empty($job_location)): ?>
                                        <li class="flex items-center">
                                            <img src="<?php echo valtes_assets('images/GpsFix.svg') ?>" alt="" class="h-5 w-5 text-primary">
                                            <span class="font-medium text-primary text-base ml-2.5">Vacature locatie</span>
                                            <span class=" text-base font-normal text-black ml-5">
                                                <?php echo $job_location; ?>
                                            </span>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                        </div>
                        <div class="md:w-[30%] w-full h-auto sm:px-5 mt-10 sm:mt-0">
                            <h2 class="text-lg font-bold ">Reageer op deze functie</h2>
                            <div class="mt-8">
                                <?php echo do_shortcode($form); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
    </div>
</section>
<?php
get_footer();