<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}


$share = valtes_get_field('share', [
    'title' => 'Hoe kan Valtes de zorg met jou delen?',
    'description' => 'Klik op een doelgroep om meer te weten te komen.',
    'cards' => [
        [
            'link' => [
                'url' => '#',
                'title' => 'Gemeenten en welzijnsorganisaties'
            ],
            'image' => [
                'url' => valtes_assets('images/image-1.png'),
                'alt' => 'User Image',
            ],
            'para' => 'No para'
        ],
        [
            'link' => [
                'url' => '#',
                'title' => 'Zorgaanbieders'
            ],
            'image' => [
                'url' => valtes_assets('images/image-2.png'),
                'alt' => 'User Image',
            ],
            'para' => 'zoals ouderenzorg, beschermd wonen en zorgcoöperaties'
        ],
        [
            'link' => [
                'url' => '#',
                'title' => 'Contentpartners'
            ],
            'image' => [
                'url' => valtes_assets('images/image-3.png'),
                'alt' => 'User Image',
            ],
            'para' => 'zoals patiëntenverenigingen en ervaringsdeskundigen'
        ],
        [
            'link' => [
                'url' => '#',
                'title' => 'Communicatiepartners'
            ],
            'image' => [
                'url' => valtes_assets('images/image-4.png'),
                'alt' => 'User Image',
            ],
            'para' => 'zoals casemanagers, maatschappelijke organisaties en kappers'
        ],
    ]
]);

?>

<section class=" container py-20 flex flex-col items-center">
    <h2 class="text-3xl font-bold text-gray-800 ">
        <?php echo $share['title']; ?>
    </h2>
    <p class=" mt-font-normal mt-5 text-center text-sm">
        <?php echo $share['description']; ?>
    </p>
    <div class=" mt-10 grid lg:grid-cols-2 grid-cols-1 gap-4">
        <?php foreach($share['cards'] as $card): ?>
        <a href="<?php echo $card['link']['url']; ?>"
            class=" w-auto rounded-full border-2 border-[#6997ff] p-2 flex items-center hover:bg-[#f0f5ff] group">
            <img src="<?php echo $card['image']['url']; ?>" alt="<?php echo $card['image']['alt']; ?>"
                class=" h-40 w-48 rounded-full">
            <div class="px-5 w-96">
                <h3 class=" font-bold group-hover:underline group-hover:text-[#6997ff]">
                    <?php echo $card['link']['title']; ?>
                </h3>
                <p class=" font-normal mt-2 group-hover:text-[#6997ff]">
                    <?php echo $card['para']; ?>
                </p>
            </div>
            <span class=" pr-10">
                <img src="<?php echo valtes_assets('images/top-right-arrow.svg') ?>" alt="">
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</section>