<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Fetch job vacancies from a custom post type
$args = array(
    'post_type'      => 'jobs', // Replace with your actual CPT slug
    'posts_per_page' => -1, // Fetch all job posts
    'post_status'    => 'publish',
);

$job_query = new WP_Query($args);
?>

<section class="bg-[#F0F5FF] lg:py-20 py-10 px-5 md:px-0">
    <div class="container space-y-8">
        <?php if ($job_query->have_posts()) : ?>
        <?php while ($job_query->have_posts()) : $job_query->the_post(); ?>
        <?php 
                $job_title   = get_the_title();
                $job_url     = get_permalink();
                $job_position = get_field('job_type');
                $job_location = get_field('location');
                ?>
        <a href="<?php echo esc_url($job_url); ?>"
            class="jobs">
            <span class=" text-black font-bold text-xl">
                <?php echo esc_html($job_title); ?>
            </span>
            <div class="flex item-center mt-6 md:mt-0">
                <span class="flex">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/position.svg'); ?>"
                        alt="">
                    <span class=" ml-3 jobactions">
                        <?php echo esc_html($job_position); ?>
                    </span>
                </span>
                <span class="flex ml-6">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/location.svg'); ?>"
                        alt="">
                    <span class="ml-3 jobactions">
                        <?php echo esc_html($job_location); ?>
                    </span>
                </span>
            </div>
        </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p>No job vacancies available at the moment.</p>
        <?php endif; ?>
    </div>
</section>