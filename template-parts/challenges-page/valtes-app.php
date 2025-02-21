<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$articles = valtes_get_field('articles', [
    'title'=>'De Valtes app',
    'description'=>'De Valtes-app biedt mantelzorgers gepersonaliseerde ondersteuning en relevante informatie, afgestemd op hun unieke situatie. Met een gebruiksvriendelijke interface en op maat gemaakte tips helpt de app mantelzorgers om grip te krijgen op hun zorgtaken.',
    'image'=>['url'=>'',
    'alt'=>''],
    'qr_image'=>['url'=>'',
    'alt'=>''],
    'appstore_image'=>['url'=>'',
    'alt'=>''],
    'googleplay_image'=>['url'=>'',
    'alt'=>''],
]);

?>

<section class="bg-primaryLight">
    <div class="container py-16 px-5 sm:px-5 xl:px-0">
        <div class="flex flex-wrap justify-center">
            <?php if(!empty($articles['title'])): ?>
            <h2 class="w-full mb-6 section-sec-heading text-center">
                <?php echo $articles['title']; ?>
            </h2>
            <?php endif; ?>
            <?php if(!empty($articles['description'])): ?>
            <p class="text-center sm:w-1/2 section-description text-[#1c233e]">
                <?php echo $articles['description']; ?>
            </p>
            <?php endif; ?>
        </div>
        <?php if(!empty($articles['image']['url'])): ?>
        <div class="flex justify-center w-auto lg:w-[51rem] mx-auto py-5">
            <img src="<?php echo $articles['image']['url']; ?>" class="" alt="<?php echo $articles['image']['alt']; ?>">
        </div>
        <?php endif; ?>
        <div class="flex items-center mx-auto justify-center space-x-7">
            <?php if(!empty($articles['qr_image']['url'])): ?>
            <img src="<?php echo $articles['qr_image']['url']; ?>" class="w-8 md:w-24 hidden sm:block"
                alt="<?php echo $articles['qr_image']['alt']; ?>">
            <?php endif; ?>
            <?php if(!empty($articles['appstore_link'])): ?>
            <a href="<?php echo $articles['appstore_link']; ?>">
                <img src="<?php echo $articles['appstore_image']['url']; ?>" class="w-28 md:w-36"
                    alt="<?php echo $articles['appstore_image']['alt']; ?>">
            </a>
            <?php endif; ?>
            <?php if(!empty($articles['googleplay_link'])): ?>
            <a href="<?php echo $articles['googleplay_link']; ?>">
                <img src="<?php echo $articles['googleplay_image']['url']; ?>" class="w-28 md:w-36"
                    alt="<?php echo $articles['googleplay_image']['alt']; ?>">
            </a>
            <?php endif; ?>
        </div>
    </div>
    </div>
</section>