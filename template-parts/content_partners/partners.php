<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>

<section class="">
    <div class="container flex flex-col mb-[3.75rem]">
        <h2 class="mx-auto text-center section-sec-heading">
            Dit vinden andere contentpartners
        </h2>
        <div class="relative w-full">
            <div class="grid grid-cols-1 mt-5 md:mt-10 lg:grid-cols-3 mySlider gap-7">
                <?php
                $authors = get_users(['role__in' => ['author', 'administrator', 'editor', 'subscriber']]);
                foreach ($authors as $author): 
                    $user = get_field('user_image', 'user_' . $author->ID) ?: get_author_posts_url($author->ID);
                    $author_name = $author->display_name;
                    $company_logo = get_field('user_organization_logo', 'user_' . $author->ID);
                    $author_bio = get_field('user_bio', 'user_' . $author->ID) ?: get_the_author_meta('description', $author->ID);
                    $user_org = get_field('user_organization', 'user_' . $author->ID);
                ?>
                <div class="flex flex-col items-center justify-between">

                    <div class=" px-10 flex flex-col items-center justify-center">

                        <?php if(!empty($user['url'])): ?>
                        <div class="rounded-full h-44 w-44 bg-purple-400">
                            <img src="<?php echo $user['url'] ?>" alt="<?php echo $user['alt'] ?>"
                                class="rounded-full h-44 w-44 object-cover">
                        </div>
                        <?php endif; ?>

                        <?php if(!empty($author_name)): ?>
                        <h2 class="font-bold text-center section-description mt-6">
                            <?php echo esc_html($author_name); ?>
                        </h2>
                        <?php endif; ?>

                        <?php if(!empty($company_logo['url'])): ?>
                        <div class=" py-7">
                            <img src="<?php echo $company_logo['url'] ?>" alt="<?php echo $company_logo['alt'] ?>"
                                class=" h-10 w-auto">
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($author_bio)): ?>
                        <p class="section-sec-description text-center">
                            <?php echo wp_trim_words($author_bio, 10, '...'); ?>
                        </p>
                        <?php endif; ?>
                    </div>

                    <div class="mt-8">
                        <?php if(!empty($user_org['url'])): ?>
                        <a href="<?php echo $user_org['url'] ?>" class="btn btn-outline flex items-center">
                            <span class="mr-2">
                                <img src="<?php echo valtes_assets('images/up-right-from-squares.png')?>" alt="">
                            </span>
                            <?php echo $user_org['title'] ?>
                        </a>
                        <?php endif; ?>
                    </div>

                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>