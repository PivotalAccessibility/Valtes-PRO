<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$clents = valtes_get_field('clents', [
    'title' => 'Wij werken met:',
    'images' => [
        [
            'image' => [
                'url' => valtes_assets('images/clients/client 1.png'),
                'alt' => 'Client 1',
            ]
        ],
        [
            'image' => [
                'url' => valtes_assets('images/clients/client 2.png'),
                'alt' => 'Client 2',
            ]
        ],
        [
            'image' => [
                'url' => valtes_assets('images/clients/client 3.png'),
                'alt' => 'Client 3',
            ]
        ],
        [
            'image' => [
                'url' => valtes_assets('images/clients/client 4.png'),
                'alt' => 'Client 4',
            ]
        ],
        [
            'image' => [
                'url' => valtes_assets('images/clients/client 5.png'),
                'alt' => 'Client 5',
            ]
        ],
        [
            'image' => [
                'url' => valtes_assets('images/clients/client 6.png'),
                'alt' => 'Client 6',
            ]
        ],
        [
            'image' => [
                'url' => valtes_assets('images/clients/client 7.png'),
                'alt' => 'Client 7',
            ]
        ],
    ]
]);


?>

<section class="bg-[#f0f5ff] py-10">
    <div class="flex flex-col items-center justify-center mt-8">
        <h2 class="text-3xl font-bold text-gray-800">
            <?php echo $clents['title']; ?>
        </h2>
        <div class=" grid lg:grid-cols-7 md:grid-cols-5 sm:grid-cols-3 grid-cols-1 gap-8 mt-10 px-5">
            <?php foreach($clents['images'] as $index => $clent): ?>
            <div class="w-auto flex items-center justify-center">
                <img src="<?php echo $clent['image']['url']; ?>" alt="<?php echo $clent['image']['alt']; ?>" class=" w-auto h-16">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>