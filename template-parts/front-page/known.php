<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$known = valtes_get_field('known', [
    'title' => 'Bekend van:',
    'images' => [
        [
            'image' => [
                'url' => valtes_assets('images/know_section_images/image1.svg'),
                'alt' => 'Dagblad van het Noorden',
            ]
        ],
        [
            'image' => [
                'url' => valtes_assets('images/know_section_images/image2.svg'),
                'alt' => 'De Stentor',
            ]
        ],
        [
            'image' => [
                'url' => valtes_assets('images/know_section_images/image3.svg'),
                'alt' => 'NPO Radio 1',
            ]
        ],
        [
            'image' => [
                'url' => valtes_assets('images/know_section_images/image4.svg'),
                'alt' => 'RTV Drenthe',
            ]
        ],
        [
            'image' => [
                'url' => valtes_assets('images/know_section_images/image5.svg'),
                'alt' => 'Reformatorisch Dagblad',
            ]
        ],
    ]
]);

?>

<section class="bg-[#f0f5ff]">
    <div class="flex flex-col items-center justify-center mt-8 container">
        <h2 class="text-3xl font-bold text-gray-800">
            <?php echo $known['title']; ?>
        </h2>
        <div class=" grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-1 gap-4 mt-10">
            <?php foreach($known['images'] as $index => $image): ?>
            <div class="w-auto flex items-center justify-center">
                <img src="<?php echo $image['image']['url']; ?>" alt="<?php echo $image['image']['alt']; ?>" class=" w-auto h-16">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>