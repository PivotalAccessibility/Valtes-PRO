<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$selected_category = isset($_GET['c']) ? sanitize_text_field($_GET['c']) : '';
$search_query = isset($_GET['q']) ? sanitize_text_field($_GET['q']) : '';

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 9,
    'post_status' => 'publish',
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
    's' => $search_query, // Include search term
);

if (!empty($selected_category)) {
    $args['category_name'] = $selected_category;
}

$query = new WP_Query($args);
$categories = get_categories();
?>

<section class="mt-10">
    <div class="container md:px-5 px-4 md:pb-20 pb-10">
        <form method="GET" action="<?php the_permalink(); ?>">
            <div component="search" class="flex flex-row items-center justify-center p-1 border-2 border-gray-300 rounded-full">
                <input type="text" name="q" placeholder="Zoek in onze artikelen..." class="w-full ml-6 outline-none">
                <input type="hidden" name="c" value="<?= $selected_category ?>">
                <button class="btn btn-primary md:w-48 max-md:w-auto max-md:p-3 flex justify-center items-center gap-4">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                            <path d="M21 21l-6 -6" />
                        </svg>
                    </span>
                    <span class="hidden md:block">Zoek</span>
                </button>
            </div>

            <?php
            $catagories = get_categories();
            ?>
            <div component="tabs" class="py-10 overflow-x-auto">
                <div class="flex flex-row items-center md:justify-center justify-start gap-4 flex-nowrap min-w-min px-4">
                    <?php if ($search_query !== '' || $selected_category !== ''): ?>
                        <a href="<?= the_permalink(); ?>" class="bg-[#C3D7FF] shrink-0 h-14 w-14 flex justify-center items-center rounded-full text-base whitespace-nowrap">
                            X
                        </a>
                    <?php endif; ?>
                    <?php foreach ($catagories as $category):
                        if ($category->name !== 'Uncategorized'): ?>
                            <a href="?c=<?php echo $category->slug; ?>" class="<?= $selected_category === $category->slug ? 'bg-[#C3D7FF] font-bold' : 'bg-[#F0F5FF] font-medium'; ?> shrink-0 md:w-auto p-4 rounded-full text-base whitespace-nowrap"><?php echo $category->name; ?></a>
                        <?php endif;
                    endforeach; ?>
                </div>
            </div>
        </form>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-x-6 gap-y-6">
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()):
                    $query->the_post(); ?>
                    <?php get_template_part('common-parts/article-card'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>Geen artikelen gevonden.</p>
            <?php endif; ?>
        </div>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $pagination = paginate_links(array(
            'total' => $query->max_num_pages,
            'current' => $paged,
            'prev_text' => '<svg width="40" height="40" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="49" y="49" width="48" height="48" rx="24" transform="rotate(-180 49 49)" fill="white"/>
            <rect x="49" y="49" width="48" height="48" rx="24" transform="rotate(-180 49 49)" stroke="#2B37DC" stroke-width="2"/>
            <path d="M15 25.0226L24.9774 15L25.9707 15.9932L17.6185 24.3454L35 24.3454L35 25.6998L17.6185 25.6998L25.9707 34.0519L24.9774 35L15 25.0226Z" fill="#2B37DC"/>
        </svg>',
            'next_text' => '<svg width="40" height="40" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="1" y="1" width="48" height="48" rx="24" fill="white"/>
            <rect x="1" y="1" width="48" height="48" rx="24" stroke="#2B37DC" stroke-width="2"/>
            <path d="M35 24.9774L25.0226 35L24.0293 34.0068L32.3815 25.6546H15V24.3002H32.3815L24.0293 15.9481L25.0226 15L35 24.9774Z" fill="#2B37DC"/>
        </svg>',
            'mid_size' => 1,
            'type' => 'list' // You can switch to 'plain' if needed
        ));
        if ($pagination) {
            echo '<div component="pagination" class="flex items-center justify-center sm:mt-20 mt-10 space-x-2"> <div class="flex space-x-2">' . $pagination . '</div> </div>';
        }
        ?>
    </div>
</section>