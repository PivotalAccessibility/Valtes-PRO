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

$current_user_id = get_post_field('post_author', get_the_ID());
$user_company_logo = get_field('user_organization_logo', 'user_' . $current_user_id);
$user_image_acf = get_field('user_image', 'user_' . $current_user_id);

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
                                <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'test relative z-10 !w-full rounded-full md:h-96 h-40 bg-center object-cover' ) ); ?>
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
                        <div class="sm:w-[30%] w-full h-auto sm:px-5 mt-5 sm:mt-0">
                    <h2 class="text-2xl font-bold ">Auteur</h2>
                    <div class="flex mt-5 ">
                        <div>
                            <img src="<?php echo $user_image_acf['url'] ?>"
                            
                                alt="<?php echo $user_image_acf['alt'] ?>" class="rounded-full h-20 w-20 object-cover">
                        </div>
                        <div class="ml-3 ">
                            <span class="font-bold text-black text-xl">
                                <?php the_author(); ?>
                            </span>
                            <?php if (!empty($user_company_logo['url'])): ?>
                            <div class="mr-16 mt-2.5 md:mt-3">
                                <img class="w-auto h-7" src="<?php echo $user_company_logo['url'] ?>"
                                    alt="<?php echo $user_company_logo['alt'] ?>">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div>
                        <?php
                                // Get author information
                                $author_id = get_the_author_meta('ID');
                                $author_url = get_author_posts_url($author_id);
                                ?>
                        <a href="<?php echo esc_url($author_url); ?>"
                            class="flex items-center justify-center px-3 py-2 mt-5 sm:text-xs text-sm sm:font-normal font-bold text-blue-700 bg-white border-2 border-blue-700 rounded-full">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-5 h-5 mr-2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                    <path d="M11 13l9 -9" />
                                    <path d="M15 4h5v5" />
                                </svg>
                            </span>
                            Open profiel
                        </a>

                    </div>
                    <div class="mt-5 ">
                        <span class="text-lg font-bold ">
                            Daze pagina delen via
                        </span>
                        <div class="flex flex-col items-start mt-5 space-y-4 ">

                            <button class="flex items-center text-sm text-blue-700"
                                x-on:click="$clipboard('<?php echo get_the_permalink(); ?>'); $store.toast.add('Gekopiëerd!', '<?php echo get_the_permalink(); ?>', 'success', 5000);">
                                <span class="pr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 15l6 -6" />
                                        <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                                        <path
                                            d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                                    </svg>
                                </span>
                                Link kopiëren
                            </button>

                            <a href="whatsapp://send?text=Bekijk%20dit%20item:%20<?php echo get_the_permalink(); ?>"
                                class="flex items-center text-sm text-green-700 ">
                                <span class="pr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                        <path
                                            d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                    </svg>
                                </span>
                                Whatsaap
                            </a>
                            <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer"
                                class="flex items-center text-sm text-blue-700">
                                <span class="pr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                    </svg>
                                </span>
                                Facebook
                            </a>

                            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer"
                                class="flex items-center text-sm text-pink-700">
                                <span class="pr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                        <path d="M16.5 7.5v.01" />
                                    </svg>
                                </span>
                                Instagram
                            </a>

                            <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer"
                                class="flex items-center text-sm text-blue-700">
                                <span class="pr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="icon icon-tabler icons-tabler-filled icon-tabler-brand-linkedin">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M17 2a5 5 0 0 1 5 5v10a5 5 0 0 1 -5 5h-10a5 5 0 0 1 -5 -5v-10a5 5 0 0 1 5 -5zm-9 8a1 1 0 0 0 -1 1v5a1 1 0 0 0 2 0v-5a1 1 0 0 0 -1 -1m6 0a3 3 0 0 0 -1.168 .236l-.125 .057a1 1 0 0 0 -1.707 .707v5a1 1 0 0 0 2 0v-3a1 1 0 0 1 2 0v3a1 1 0 0 0 2 0v-3a3 3 0 0 0 -3 -3m-6 -3a1 1 0 0 0 -.993 .883l-.007 .127a1 1 0 0 0 1.993 .117l.007 -.127a1 1 0 0 0 -1 -1" />
                                    </svg>
                                </span>
                                LinkedIn
                            </a>

                        </div>
                    </div>
                </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>

    </div>
</section>

<?php get_footer(); ?>