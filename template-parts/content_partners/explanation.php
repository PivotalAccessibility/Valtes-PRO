<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if ($args) {
    extract($args);
}

$explain = valtes_get_field('explanation', [
    'title' => 'De Valtes app',
    'description' => 'De Valtes-app biedt mantelzorgers gepersonaliseerde ondersteuning en relevante informatie, afgestemd op hun unieke situatie. Met een gebruiksvriendelijke interface en op maat gemaakte tips helpt de app mantelzorgers om grip te krijgen op hun zorgtaken.',
    'image' => [
        'url' => 'https://media.istockphoto.com/id/1317323736/photo/a-view-up-into-the-trees-direction-sky.jpg?s=612x612&w=0&k=20&c=i4HYO7xhao7CkGy7Zc_8XSNX_iqG0vAwNsrH1ERmw2Q=',
        'alt' => '',
    ],
    'appstore_link' => '#',
    'googleplay_link' => '#',
    'scanner_link' => '#',
    'appstore_image' => [
        'url' => 'https://www.logo.wine/a/logo/App_Store_(iOS)/App_Store_(iOS)-Badge-Logo.wine.svg',
        'alt' => '',
    ],
    'googleplay_image' => [
        'url' => 'https://w7.pngwing.com/pngs/859/487/png-transparent-google-play-computer-icons-android-google-text-label-logo.png',
        'alt' => '',
    ],
    'scanner_image' => [
        'url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png',
        'alt' => '',
    ],
]);

?>

<section class="bg-primaryLight md:py-16 py-10">
    <div class="container flex flex-col items-center justify-center px-5 sm:px-5 xl:px-0">
        <?php if (!empty($explain['title'])): ?>
            <h2 class="section-sec-heading text-center">
                <?php echo $explain['title']; ?>
            </h2>
        <?php endif; ?>
        <?php if (!empty($explain['description'])): ?>
            <p class="mt-5 text-center sm:w-[80%] section-description">
                <?php echo $explain['description']; ?>
            </p>
        <?php endif; ?>
        <?php if (!empty($explain['image']['url'])): ?>
            <div class="mt-5 sm:mt-10">
                <img src="<?php echo $explain['image']['url']; ?>" alt="<?php echo $explain['image']['alt']; ?>" class=" md:h-96 h-auto md:w-auto w-full">
            </div>
        <?php endif; ?>
        <div class="w-full">
            <div class="flex mt-10 gap-6 md:justify-center items-center">
                <?php if (!empty($explain['scanner_link'])): ?>
                    <div>
                        <a href="<?php echo $explain['scanner_link']; ?>">
                            <img src="<?php echo $explain['scanner_image']['url']; ?>" alt="<?php echo $explain['scanner_image']['alt']; ?>" class="w-[120px]">
                        </a>
                    </div>
                <?php endif; ?>
                <?php if (!empty($explain['appstore_link'])): ?>
                    <div>
                        <a href="<?php echo $explain['appstore_link']; ?>">
                            <img src="<?php echo $explain['appstore_image']['url']; ?>" alt="<?php echo $explain['appstore_image']['alt']; ?>" class="w-[120px]">
                        </a>
                    </div>
                <?php endif; ?>
                <?php if (!empty($explain['googleplay_link'])): ?>
                    <div>
                        <a href="<?php echo $explain['googleplay_link']; ?>">
                            <img src="<?php echo $explain['googleplay_image']['url']; ?>" alt="<?php echo $explain['googleplay_image']['alt']; ?>" class="w-[120px]">
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>