<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if ($args) {
    extract($args);
}
$logo = valtes_get_field('logo', [
    'title' => 'Wij werken met:',
    'images' => [
        [
            'image' => [
                'url' => valtes_assets("/images/partners/biblionet drenthe.png"),
                'alt' => ''
            ],
        ],
        [
            'image' => [
                'url' => valtes_assets("/images/partners/dkn-logo-assen-bioscoop-400x169 1.png"),
                'alt' => ''
            ],
        ],
        [
            'image' => [
                'url' => valtes_assets("/images/partners/dokter drenthe.png"),
                'alt' => ''
            ],
        ],
        [
            'image' => [
                'url' => valtes_assets("/images/partners/IcareLogo 1.png"),
                'alt' => ''
            ],
        ],
        [
            'image' => [
                'url' => valtes_assets("/images/partners/interzorg-logo-landscape-removebg-preview 1.png"),
                'alt' => ''
            ],
        ],
        [
            'image' => [
                'url' => valtes_assets("/images/partners/JMZ+Pro_logo_bw-removebg-preview 1.png"),
                'alt' => ''
            ],
        ],
        [
            'image' => [
                'url' => valtes_assets("/images/partners/b.png"),
                'alt' => ''
            ],
        ],
        [
            'image' => [
                'url' => valtes_assets("/images/partners/stichtingervaringskenniscentrumschouders1-removebg-preview 1.png"),
                'alt' => ''
            ],
        ],
        [
            'image' => [
                'url' => valtes_assets("/images/partners/wza.png"),
                'alt' => ''
            ],
        ]
    ]
]);
?>

<section class="py-14">
    <div class="flex flex-col items-center justify-center">
        <?php if (!empty($logo['title'])): ?>
            <h2 class="text-center section-sec-heading">
                <?php echo $logo['title']; ?>
            </h2>
        <?php endif; ?>
        <div class="w-full px-5 mt-10 overflow-x-auto">
            <div class="flex grid-cols-1 gap-4 pb-5 space-x-5 sm:grid lg:grid-cols-9 md:grid-cols-5 sm:grid-cols-3 md:space-x-0 md:pb-0">
                <?php foreach ($logo['images'] as $index => $image): ?>
                    <?php if (!empty($image['image']['url'])): ?>
                        <div class="flex items-center justify-center flex-shrink-0 w-auto sm:flex-shrink">
                            <img src="<?php echo $image['image']['url']; ?>"
                                alt="<?php echo $image['image']['alt']; ?>"
                                class="w-auto h-16">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>