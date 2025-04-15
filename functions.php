<?php

require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';

define('PIVOTAL_ACCESSIBILITY_VERSION', '1.1.39');

add_action("after_setup_theme", "valtes_after_setup_theme");
add_action("wp_enqueue_scripts", "valtes_enqueue_scripts");
add_action('wp_print_styles', "valtes_google_fonts");
add_action('wp_ajax_valtes_index_search', 'valtes_index_search');
add_action('wp_ajax_nopriv_valtes_index_search', 'valtes_index_search');
add_action('tgmpa_register', 'valtes_register_required_plugins');
add_action('init', 'valtes_post_type');

add_filter("script_loader_tag", "valtes_add_defer_to_alpine_script", 10, 3);
add_filter("acf/settings/save_json", "valtes_acf_json_save_point");
add_filter("acf/settings/load_json", "valtes_acf_json_load_point");


function valtes_dd()
{
    echo '<pre>';
    array_map(function ($x) {
        var_dump($x);
    }, func_get_args());
    echo '</pre>';
    die;
}

function custom_pagination_fix($query)
{
    if (!is_admin() && $query->is_main_query() && $query->is_home()) {
        $query->set('paged', (get_query_var('paged')) ? get_query_var('paged') : 1);
    }
}
add_action('pre_get_posts', 'custom_pagination_fix');


function valtes_truncate($string, $length = 100, $append = "&hellip;")
{
    $string = trim($string);

    if (strlen($string) > $length) {
        $string = wordwrap($string, $length);
        $string = explode("\n", $string, 2);
        $string = $string[0] . $append;
    }

    return $string;
}

//breadCrumbs start

function custom_breadcrumbs()
{
    // Only show breadcrumbs on single post or author pages
    if (is_single() || is_author()) {
        $page = get_page_by_path('onze-kennis');
        $discover_url = $page ? get_permalink($page->ID) : home_url();
        $breadcrumb = '<nav class="my-6 overflow-hidden text-xs text-gray-600 md:text-base breadcrumbs">';
        $breadcrumb .= '<a href="' . $discover_url . '" class="mr-1 hover:underline">Terug</a>';
        if (is_single()) {
            // For Single Post Page
            $breadcrumb .= ' > ';
            $categories = get_the_category();
            if ($categories) {
                $breadcrumb .= '<span class="mb-1">' . $categories[0]->name . '</span>';
            }
            $breadcrumb .= ' > <span class="font-bold tag hover:underline text-[#6997FF] mx-1">' . get_the_title() . '</span>';
        } elseif (is_author()) {
            // For Author Profile Page
            $breadcrumb .= ' > ';
            $breadcrumb .= '<span class="font-bold tag_2 text-[#6997FF] hover:underline ml-1">' . get_the_author() . '</span>';
        }
        $breadcrumb .= '</nav>';
        echo $breadcrumb;
    }
}

//breadCrumbs end

function valtes_assets($path)
{
    if (!$path) {
        return;
    }

    return get_template_directory_uri() . '/assets/' . $path;
}

function valtes_svg($filename, $class = "")
{
    if (!$filename) {
        return;
    }

    $file_location = get_template_directory() . '/assets/icons/' . $filename . '.svg';

    if (!file_exists($file_location)) {
        return;
    }

    $svg_content = file_get_contents($file_location);

    if (!empty($class)) {
        // Check if the SVG has an opening <svg> tag
        if (strpos($svg_content, '<svg') !== false) {
            // Add the class to the opening <svg> tag
            $svg_content = str_replace('<svg', '<svg class="' . esc_attr($class) . '"', $svg_content);
        } else {
            // If the <svg> tag is missing, wrap the content with it and add the class
            $svg_content = '<svg class="' . esc_attr($class) . '">' . $svg_content . '</svg>';
        }
    }

    return $svg_content;
}

function valtes_get_version()
{
    $version = PIVOTAL_ACCESSIBILITY_VERSION;

    if (!function_exists('wp_get_environment_type')) {
        return $version;
    }

    switch (wp_get_environment_type()) {
        case 'local':
        case 'development':
            $version = time();
            break;
    }

    return $version;
}

function valtes_add_defer_to_alpine_script($tag, $handle, $src)
{
    $defer_scripts = array('pivotalaccessibility-alpine', 'pivotalaccessibility-alpine-focus', 'pivotalaccessibility-alpine-collapse', 'pivotalaccessibility-alpine-intersect');

    if (in_array($handle, $defer_scripts)) {
        return str_replace(' src', ' defer src', $tag);
    }

    return $tag;
}


function valtes_enqueue_scripts()
{
    // Scripts
    wp_enqueue_style('slick-style-cdn', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), valtes_get_version(), 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('slick-js-cdn', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);

    wp_enqueue_script('only-mobile-slider', valtes_assets('js/OnlyMobileSlider.js'), array('jquery', 'slick-js-cdn'), valtes_get_version(), true);

    wp_enqueue_style('pivotalaccessibility-twind', valtes_assets('src/output.css'), array(), valtes_get_version(), 'all');
    wp_enqueue_script('pivotalaccessibility-main', valtes_assets('js/main.js'), array('jquery'), valtes_get_version(), true);

    wp_enqueue_style('pivotalaccessibility-style', valtes_assets('../valtes_theme/assets/src/output.css'), array(), valtes_get_version(), 'all');

    // Localize
    wp_localize_script('pivotalaccessibility-main', 'pivotalaccessibilityData', [
        '_wpnonce' => wp_create_nonce('valtes_ajax'),
        'homeURL' => esc_url(home_url()),
        'assetsURL' => esc_url(valtes_assets('/')),
        'ajaxURL' => esc_url(admin_url('admin-ajax.php')),
    ]);

    // Extra
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}


function valtes_after_setup_theme()
{
    /*
     * Default Theme Support options better have
     */
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    /**
     * Add woocommerce support and woocommerce override
     */

    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 300,
        'single_image_width' => 1024,
        'product_grid' => array(
            'default_rows' => 3,
            'min_rows' => 3,
            'max_rows' => 3,
            'default_columns' => 4,
            'min_columns' => 4,
            'max_columns' => 4,
        ),
    ));

    $GLOBALS['content_width'] = apply_filters('content_width', 1920);

    register_nav_menus(array(
        'primary' => esc_html__('Primary', 'valtes'),
        'footer' => esc_html__('Footer', 'valtes'),
        'legal' => esc_html__('Legal', 'valtes'),
    ));
}

function valtes_google_fonts()
{
    /**
     * Load fonts from google server when Kirki does not exist.
     */

    $fonts = [
        "primary" => "Inter",
        "heading" => "Playfair Display"
    ];

    $base = "//fonts.googleapis.com/css2?";

    $links = [
        "primary" => sprintf(
            '%sfamily=%s:wght@%s&display=swap',
            $base,
            $fonts['primary'],
            join(";", [400, 500, 600, 700])
        ),
        "heading" => sprintf(
            '%sfamily=%s:wght@%s&display=swap',
            $base,
            $fonts['heading'],
            join(";", [400, 500, 600, 700])
        ),
    ];

    wp_register_style($fonts['primary'], $links["primary"]);
    wp_register_style($fonts['heading'], $links["heading"]);

    wp_enqueue_style($fonts['primary']);
    wp_enqueue_style($fonts['heading']);
}

function valtes_index_search()
{
    $query = sanitize_text_field($_POST['query']); // Sanitize input
    $post_types = isset($_POST['post_types']) ? $_POST['post_types'] : array('post'); // Sanitize and get selected post types
    $results = valtes_search_query($query, $post_types); // Pass post types to search function

    // Prepare the response array
    $response = array();

    foreach ($results as $result_id) {
        $post = get_post($result_id);
        $response_item = array(
            'title' => $post->post_title,
            'post_type' => $post->post_type,
            'excerpt' => $post->post_excerpt,
            'permalink' => get_permalink($result_id),
        );
        $response[] = $response_item;
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);

    wp_die(); // Always include this to terminate the script
}

function valtes_search_query($query, $post_types)
{
    $args = array(
        's' => $query,
        'post_type' => json_decode($post_types),
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 5,
    );

    $search_query = new WP_Query($args);
    $results = array();

    if ($search_query->have_posts()) {
        while ($search_query->have_posts()) {
            $search_query->the_post();
            $results[] = get_the_ID(); // Store post IDs in the results array
        }
    }

    wp_reset_postdata();
    return $results;
}


function valtes_kses_ruleset()
{
    $kses_defaults = wp_kses_allowed_html('post');

    $svg_args = array(
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'stroke-width' => true,
            'stroke' => true,
            'stroke-linecap' => true,
            'stroke-linejoin' => true,
            'fill' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'g' => array('fill' => true),
        'title' => array('title' => true),
        'path' => array(
            'd' => true,
            'fill' => true,
            'stroke' => true,
        ),
        'line' => array(
            "x1" => true,
            "y1" => true,
            "x2" => true,
            "y2" => true
        ),
        'polyline' => array(
            'points' => true
        )
    );

    return array_merge($kses_defaults, $svg_args);
}


function valtes_acf_json_save_point($path)
{
    return get_template_directory() . '/acf-json';
}

function valtes_acf_json_load_point($paths)
{
    // Remove the original path (optional).
    unset($paths[0]);

    // Append the new path and return it.
    $paths[] = get_template_directory() . '/acf-json';

    return $paths;
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'valtes',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

function valtes_get_field($field_key, $default_value, $post_id = false)
{
    if (!function_exists('get_field')) {
        return $default_value;
    }

    $field_value = get_field($field_key, $post_id);

    if (!$field_value || empty($field_value)) {
        return $default_value;
    }

    if (is_array($field_value)) {
        return valtes_recursive_merge($default_value, $field_value);
    }

    return $field_value;
}

function valtes_get_image_field($field_value, $key)
{
    $default_value = [
        "url" => valtes_assets("images/pxhere-30748.jpg"),
        "alt" => ""
    ];

    if (!$field_value || !$field_value[$key]) {
        return $default_value[$key];
    }

    return $field_value[$key];
}

function valtes_recursive_merge(array $array1, array $array2): array
{
    foreach ($array2 as $key => $value) {
        if (is_array($value) && isset($array1[$key]) && is_array($array1[$key])) {
            $array1[$key] = valtes_recursive_merge($array1[$key], $value);
        } else {
            if ($value !== false && $value !== null && $value !== "") {
                $array1[$key] = $value;
            } elseif ($value === null && isset($array1[$key])) {
                // Replace with default value if new value is null
                $array1[$key] = $array1[$key];
            }
        }
    }
    return $array1;
}


function valtes_register_required_plugins()
{
    $plugins = array(
        array(
            'name' => 'Advanced Custom Fields (ACF) Pro',
            'slug' => 'advanced-custom-fields-pro',
            'required' => true,
        ),
        array(
            'name' => 'Classic Editor',
            'slug' => 'classic-editor',
            'required' => true,
        )
    );

    $config = array(
        'id' => 'valtes', // Unique ID for TGMPA
        'default_path' => '',
        'menu' => 'tgmpa-install-plugins', // Menu slug
        'parent_slug' => 'themes.php',
        'capability' => 'edit_theme_options',
        'has_notices' => true,
        'dismissable' => true,
        'dismiss_msg' => '', // Customize the dismissal message
        'is_automatic' => true,
        'message' => '', // Customize the notice message
    );

    tgmpa($plugins, $config);
}

function valtes_post_type()
{
    /**
     * Add the post types and their details
     */
    $custom_posts = [];

    foreach ($custom_posts as $custom_post) {
        $labels = array(
            'name' => $custom_post['plural'],
            'singular_name' => $custom_post['singular'],
            'menu_name' => $custom_post['plural'],
            'name_admin_bar' => $custom_post['singular'],
            'add_new' => sprintf(__('Add New %s', 'valtes'), $custom_post['singular']),
            'add_new_item' => sprintf(__('Add New %s', 'valtes'), $custom_post['singular']),
            'new_item' => sprintf(__('New %s', 'valtes'), $custom_post['singular']),
            'edit_item' => sprintf(__('Edit %s', 'valtes'), $custom_post['singular']),
            'view_item' => sprintf(__('View %s', 'valtes'), $custom_post['singular']),
            'view_items' => sprintf(__('View %s', 'valtes'), $custom_post['singular']),
            'all_items' => sprintf(__('All %s', 'valtes'), $custom_post['singular']),
            'search_items' => sprintf(__('Search %s', 'valtes'), $custom_post['singular']),
            'parent_item_colon' => sprintf(__('Parent %s', 'valtes'), $custom_post['singular']),
            'not_found' => sprintf(__('No %s', 'valtes'), $custom_post['plural']),
            'not_found_in_trash' => sprintf(__('No %s found in Trash', 'valtes'), $custom_post['plural']),
        );
        $args = array(
            'labels' => $labels,
            'description' => $custom_post['description'],
            'public' => $custom_post['public'],
            'publicly_queryable' => $custom_post['publicly_queryable'],
            'show_ui' => $custom_post['show_ui'],
            'show_in_menu' => $custom_post['show_in_menu'],
            'menu_icon' => $custom_post['menu_icon'],
            'query_var' => $custom_post['query_var'],
            'rewrite' => $custom_post['rewrite'] ?: array('slug' => $custom_post['slug']),
            'capability_type' => $custom_post['capability_type'],
            'has_archive' => $custom_post['has_archive'],
            'hierarchical' => $custom_post['hierarchical'],
            'menu_position' => $custom_post['menu_position'],
            'supports' => $custom_post['supports'],
            'show_in_rest' => $custom_post['show_in_rest'],
        );

        register_post_type($custom_post['slug'], $args);
    }
}

function valtes_calculate_reading_time($content)
{
    // Define the average reading speed in words per minute (adjust as needed).
    $wordsPerMinute = 200;

    // Count the number of words in the content.
    $wordCount = str_word_count(strip_tags($content));

    // Calculate the estimated reading time in minutes.
    $readingTimeMinutes = ceil($wordCount / $wordsPerMinute);

    // Translate and format the reading time string.
    if ($readingTimeMinutes == 1) {
        _e('1 minute', 'valtes');
    } else {
        printf(
            _n('%d minute', '%d minutes', $readingTimeMinutes, 'valtes'),
            $readingTimeMinutes
        );
    }
}

function valtes_get_post_category()
{
    $args = array(
        'category__not_in' => get_cat_ID('uncategorized'),
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 1
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $query->the_post();
        $categories = get_the_category();
        if (!empty($categories)) {
            $category_name = $categories[0]->name;
            wp_reset_postdata();
            return $categories[0];
        }
        wp_reset_postdata();
    }

    return ''; // Return an empty string if no valid category is found.
}


class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
    // Start Level (Dropdown Wrapper)
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "<ul class='sub-menu dropdown-menu'>";
    }

    // End Level (Dropdown Wrapper)
    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= '</ul>';
    }

    // Start Element (Menu Item)
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $class_names = join(' ', array_filter($classes));

        if (in_array('menu-item-has-children', $classes)) {
            $class_names .= ' dropdown';
        }

        $output .= '<li class="' . esc_attr($class_names) . '">' . $args->before;
        $output .= '<a href="' . esc_url($item->url) . '" class="nav-link">' . esc_html($item->title);
        $output .= '</a>' . $args->after;

        if (in_array('menu-item-has-children', $classes)) {
            $output .= ' <button aria-label="Toggle Submenu - ' . esc_html($item->title) . '" class="dropdown-toggle custom-menu" data-bs-toggle="dropdown">
            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
  <path d="M4.8303 5.10938L8.35764 1.59375C8.4592 1.5 8.50998 1.38281 8.50998 1.24219C8.50998 1.10156 8.4592 0.984375 8.35764 0.890625C8.25608 0.796875 8.13694 0.748047 8.00022 0.744141C7.8635 0.740234 7.74826 0.789062 7.65451 0.890625L4.50217 4.04297L1.34983 0.890625C1.24826 0.789062 1.12912 0.738281 0.992405 0.738281C0.855686 0.738281 0.740451 0.789062 0.646701 0.890625C0.552951 0.992188 0.504123 1.11133 0.500217 1.24805C0.496311 1.38477 0.545139 1.5 0.646701 1.59375L4.15061 5.10938C4.24436 5.21094 4.35959 5.26172 4.49631 5.26172C4.63303 5.26172 4.74436 5.21094 4.8303 5.10938Z" fill="#1C233E"/>
</svg>
            </button>';
        }
    }

    // End Element
    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= '</li>';
    }
}


function my_custom_menu()
{
    register_nav_menus(
        array(
            'my-custom-menu' => _('My Custom Menu'),
            'my-custom-menu-2' => _('My Second Custom Menu')
        )
    );
}
add_action('init', 'my_custom_menu');

// Kirki

if (class_exists('Kirki')) {
    // Appearance
    new \Kirki\Panel(
        'appearance',
        [
            'priority' => 20,
            'title' => esc_html__('Appearance', 'valtes'),
            'description' => esc_html__('Change the appearance of the theme.', 'valtes'),
        ]
    );

    new \Kirki\Section(
        'colors',
        [
            'title' => esc_html__('Colors', 'valtes'),
            'description' => esc_html__('Customize the colors of the theme.', 'valtes'),
            'panel' => 'appearance',
            'priority' => 160,
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings' => 'color_primary',
            'label' => __('Primary Color', 'valtes'),
            'description' => esc_html__('Primary color of the theme.', 'valtes'),
            'section' => 'colors',
            'default' => '#1d0370',
        ]
    );

    // Header
    new \Kirki\Section(
        'header',
        [
            'priority' => 40,
            'title' => esc_html__('Header', 'valtes'),
            'description' => esc_html__('Customize the header.', 'valtes'),
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'form_shortcode',
            'label' => esc_html__('Form Shortcode', 'valtes'),
            'section' => 'header',
        ]
    );

    // Global
    new \Kirki\Section(
        'global',
        [
            'priority' => 40,
            'title' => esc_html__('Global', 'valtes'),
            'description' => esc_html__('Customize the global settings.', 'valtes'),
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings' => 'client_logos',
            'label' => esc_html__('Client Logos', 'valtes'),
            'section' => 'global',
            'button_label' => esc_html__('Add New Logo', 'valtes'),
            'fields' => [
                'image' => [
                    'type' => 'image',
                    'label' => esc_html__('Logo', 'valtes'),
                    'default' => '',
                    'choices' => [
                        'save_as' => 'array',
                    ],
                ]
            ],
        ]
    );

    // Contact Info
    new \Kirki\Section(
        'contact_info',
        [
            'priority' => 45,
            'title' => esc_html__('Contact Info', 'valtes'),
            'description' => esc_html__('Customize the contact info.', 'valtes'),
        ]
    );

    new \Kirki\Field\Editor(
        [
            'settings' => 'branch_address',
            'label' => esc_html__('Branch Address', 'valtes'),
            'section' => 'contact_info',
        ]
    );

    new \Kirki\Field\Editor(
        [
            'settings' => 'registered_address',
            'label' => esc_html__('Registered Address', 'valtes'),
            'section' => 'contact_info',
        ]
    );

    new \Kirki\Field\Editor(
        [
            'settings' => 'us_address',
            'label' => esc_html__('US Address', 'valtes'),
            'section' => 'contact_info',
        ]
    );

    new \Kirki\Field\Editor(
        [
            'settings' => 'phone_number_india',
            'label' => esc_html__('Phone Number (India)', 'valtes'),
            'section' => 'contact_info',
        ]
    );

    new \Kirki\Field\Editor(
        [
            'settings' => 'phone_number_us',
            'label' => esc_html__('Phone Number (US)', 'valtes'),
            'section' => 'contact_info',
        ]
    );

    new \Kirki\Field\Editor(
        [
            'settings' => 'email_address',
            'label' => esc_html__('Email Address', 'valtes'),
            'section' => 'contact_info',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'main_address_url',
            'label' => esc_html__('Main Address URL', 'valtes'),
            'section' => 'contact_info',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'main_address_image',
            'label' => esc_html__('Main Address Image', 'valtes'),
            'section' => 'contact_info',
        ]
    );

    // Footer
    new \Kirki\Panel(
        'footer',
        [
            'priority' => 50,
            'title' => esc_html__('Footer', 'valtes'),
            'description' => esc_html__('Customize the footer.', 'valtes'),
        ]
    );

    new \Kirki\Section(
        'footer_content',
        [
            'title' => esc_html__('Content', 'valtes'),
            'description' => esc_html__('Change the content of the footer.', 'valtes'),
            'panel' => 'footer',
            'priority' => 160,
        ]
    );

    new \Kirki\Field\Editor(
        [
            'settings' => 'footer_description',
            'label' => esc_html__('Footer Description', 'valtes'),
            'section' => 'footer_content',
            'default' => 'Established in 2021, valtes was formed with the sole purpose of making the Digital World more inclusive.',
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings' => 'footer_logos',
            'label' => esc_html__('Logos', 'valtes'),
            'section' => 'footer_content',
            'button_label' => esc_html__('Add New Logo', 'valtes'),
            'fields' => [
                'image' => [
                    'type' => 'image',
                    'label' => esc_html__('Logo', 'valtes'),
                    'default' => '',
                    'choices' => [
                        'save_as' => 'array',
                    ],
                ],
                'url' => [
                    'type' => 'url',
                    'label' => esc_html__('Logo Link', 'valtes'),
                ],
            ],
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings' => 'social_icons',
            'label' => esc_html__('Social Icons', 'valtes'),
            'section' => 'footer_content',
            'button_label' => esc_html__('Add New Icon', 'valtes'),
            'row_label' => [
                'type' => 'field',
                'field' => 'label',
            ],
            'fields' => [
                'name' => [
                    'type' => 'text',
                    'default' => 'brand-facebook',
                    'label' => esc_html__('Icon Name (Tabler Icons)', 'valtes'),
                ],
                'label' => [
                    'type' => 'text',
                    'label' => esc_html__('Icon Label', 'valtes'),
                    'default' => esc_html__('Facebook', 'valtes')
                ],
                'url' => [
                    'type' => 'url',
                    'label' => esc_html__('Icon Link', 'valtes'),
                    'default' => 'https://example.com/',
                ],
            ],
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings' => 'footer_features',
            'label' => esc_html__('Footer Features', 'valtes'),
            'section' => 'footer_content',
            'button_label' => esc_html__('Add New', 'valtes'),
            'row_label' => [
                'type' => 'field',
                'field' => 'label',
            ],
            'fields' => [
                'icon' => [
                    'type' => 'text',
                    'default' => 'mail-fast',
                    'label' => esc_html__('Icon Name (Tabler Icons)', 'valtes'),
                ],
                'label' => [
                    'type' => 'text',
                    'label' => esc_html__('Label', 'valtes'),
                    'default' => esc_html__('Fast', 'valtes')
                ],
                'description' => [
                    'type' => 'textarea',
                    'label' => esc_html__('Description', 'valtes'),
                    'default' => esc_html__('We deliver fast and efficient service', 'valtes'),
                ],
            ],
        ]
    );

    new \Kirki\Field\Editor(
        [
            'settings' => 'copyright_notice',
            'label' => esc_html__('Copyright Notice', 'valtes'),
            'section' => 'footer_content',
        ]
    );
}