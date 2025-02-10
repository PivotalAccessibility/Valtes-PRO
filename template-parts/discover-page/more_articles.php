<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$articles = valtes_get_field('articles', [
  'title' => 'Meer van dit soort artikelen?',
  'description' => 'Hier komen 1 à 2 zinnen te staan. Er zal niet veel informatie komen, maar wel net genoeg: download de app.',
  'image' => [
    'url' => valtes_assets('images/discoverMockups.png'),
    'alt' => 'Mockups image'
  ],
  'qr_image' => [
    'url' => valtes_assets('images/qr.png'),
    'alt' => 'QR image'
  ],
  'appstore_link' => '#',
  'appstore_image' => [
    'url' => valtes_assets('images/AppStore.png'),
    'alt' => 'AppStore image'
  ],
  'googleplay_link' => '#',
  'googleplay_image' => [
    'url' => valtes_assets('images/GooglePlay.png'),
    'alt' => 'GooglePlay image'
  ]
]);

?>

<section class="bg-[#f0f5ff]">
    <div class="max-w-4xl mx-auto 2xl:max-w-5xl container py-10 px-5 sm:px-0">
        <div class="flex flex-wrap justify-center">
            <h2 class="w-full mb-6 text-2xl font-bold text-[#1c233e] text-center">
                <?php echo $articles['title']; ?>
            </h2>
            <p class="text-center sm:w-[28rem] font-sm text-[#1c233e]">
                <?php echo $articles['description']; ?>
            </p>
        </div>
        <div class="flex justify-center w-96 md:w-[51rem] mx-auto py-10">
            <img src="<?php echo $articles['image']['url']; ?>" class="" alt="<?php echo $articles['image']['alt']; ?>">
        </div>
        <div class="flex items-center mx-auto justify-center space-x-7">
            <img src="<?php echo $articles['qr_image']['url']; ?>" class="w-8 md:w-24 hidden sm:block" alt="<?php echo $articles['qr_image']['alt']; ?>">
            <a href="<?php echo $articles['appstore_link']; ?>">
                <img src="<?php echo $articles['appstore_image']['url']; ?>" class="w-20 md:w-36"
                    alt="<?php echo $articles['appstore_image']['alt']; ?>">
            </a>
            <a href="">
                <img src="<?php echo $articles['googleplay_image']['url']; ?>" class="w-20 md:w-36"
                    alt="<?php echo $articles['googleplay_image']['alt']; ?>">
            </a>
        </div>
    </div>
    </div>
</section>