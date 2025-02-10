<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pivotalaccessibility
 */


get_header(); ?>
<section class="py-16">


    <div class="container max-w-4xl mx-auto px-5 sm:px-0">
    <div class="my-5"><?php custom_breadcrumbs(); ?></div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="">
            <?php if (has_post_thumbnail()) : ?>
            <div class="relative">
                <div class="w-full mb-6">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
                        alt="<?php the_title(); ?>" class="relative z-10 object-cover w-full rounded-full h-60">
                </div>
                <div class=" h-14 w-14 rounded-full bg-[#2b37db] absolute top-2 -right-2"></div>
                <div class=" h-20 w-20 rounded-full bg-[#e1eaff] absolute bottom-0 left-0"></div>
            </div>
            <?php endif; ?>
            <div class="flex flex-wrap sm:flex-nowrap items-start mt-20">
                <div class="sm:w-[70%] w-full h-auto">
                    <div
                        class="inline-block px-3 py-1 mb-4 text-xs font-semibold text-blue-700 bg-gray-100 rounded-full">
                        <?php $category = get_the_category(); ?>
                        <?php echo $category ? esc_html($category[0]->name) : ''; ?>
                    </div>
                    <h1 class="mb-4 text-2xl font-bold">
                        <?php the_title(); ?>
                    </h1>
                    <div class="text-xs leading-relaxed text-gray-700">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="sm:w-[30%] w-full h-auto sm:p-5 mt-5 sm:mt-0">
                    <h2 class="text-lg font-bold ">Auteur</h2>
                    <div class="flex mt-5 ">
                        <div>
                            <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"
                                alt="<?php the_author(); ?>" class="rounded-full h-14 w-14">
                        </div>
                        <div class="ml-3 ">
                            <span class="font-bold ">
                                <?php the_author(); ?>
                            </span>
                        </div>
                    </div>
                    <div>
                        <?php
                        // Get author information
                        $author_id = get_the_author_meta('ID');
                        $author_url = get_author_posts_url($author_id);
                        ?>
                        <a href="<?php echo esc_url($author_url); ?>"
                            class="flex items-center justify-center px-3 py-2 mt-5 text-xs font-normal text-blue-700 bg-white border-2 border-blue-700 rounded-full">
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
                            Open profile
                        </a>

                    </div>
                    <div class="mt-5 ">
                        <span class="text-lg font-bold ">
                            Daze pagina delen via
                        </span>
                        <div class="flex flex-col items-start mt-5 space-y-4 ">
                            <button class="flex items-center text-sm text-blue-700 ">
                                <span class="pr-3">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-link"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 15l6 -6" /><path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" /><path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" /></svg>
                                </span>
                                Link kopiëren
                            </button>
                            <button class="flex items-center text-sm text-green-700 ">
                                <span class="pr-3">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /><path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" /></svg>
                                </span>
                                Whatsaap
                            </button>
                            <button class="flex items-center text-sm text-blue-700 ">
                                <span class="pr-3">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                                </span>
                                Facebook
                            </button>
                            <button class="flex items-center text-sm text-pink-700 ">
                                <span class="pr-3">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M16.5 7.5v.01" /></svg>
                                </span>
                                Instagram
                            </button>
                            <button class="flex items-center text-sm text-blue-700 ">
                                <span class="pr-3">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-brand-linkedin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 2a5 5 0 0 1 5 5v10a5 5 0 0 1 -5 5h-10a5 5 0 0 1 -5 -5v-10a5 5 0 0 1 5 -5zm-9 8a1 1 0 0 0 -1 1v5a1 1 0 0 0 2 0v-5a1 1 0 0 0 -1 -1m6 0a3 3 0 0 0 -1.168 .236l-.125 .057a1 1 0 0 0 -1.707 .707v5a1 1 0 0 0 2 0v-3a1 1 0 0 1 2 0v3a1 1 0 0 0 2 0v-3a3 3 0 0 0 -3 -3m-6 -3a1 1 0 0 0 -.993 .883l-.007 .127a1 1 0 0 0 1.993 .117l.007 -.127a1 1 0 0 0 -1 -1" /></svg>
                                </span>
                                LinkedIn
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation (Next & Previous Post) -->
            <div class="flex justify-between mt-10">
                <?php if (get_previous_post()) : ?>
                <div>
                    <a href="<?php echo get_permalink(get_previous_post()->ID); ?>"
                        class="flex items-center text-blue-700 hover:underline">
                        ← Vorig bericht
                    </a>
                </div>
                <?php endif; ?>
                <?php if (get_next_post()) : ?>
                <div>
                    <a href="<?php echo get_permalink(get_next_post()->ID); ?>"
                        class="flex items-center text-blue-700 hover:underline">
                        Volgend bericht →
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
 

</section>
<?php
get_footer();