<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$partners = valtes_get_field('partners', [
    'title' => 'Dit vinden andere contentpartners',
    'partners' => [
        [
            'image' => [
                'url' => 'https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=2574',
                'alt' => ''
            ],
            'name' => 'Interzorg',
            'bio' => 'Sapien viverra tellus facilisi vitae ornare fringilla pharetra.Tellus condimentu...',
            'cta' => [
                'text' => 'MantelzorgNL',
                'url' => 'https://www.mantelzorg.nl'
            ],
            'company_image' => [
                'url' => 'https://www.citypng.com/public/uploads/preview/amazon-official-logo-7017516947919651epoyhkqor.png',
                'alt' => ''
            ]
        ],
        [
            'image' => [
                'url' => 'https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=2574',
                'alt' => ''
            ],
            'name' => 'Interzorg',
            'bio' => 'Sapien viverra tellus facilisi vitae ornare fringilla pharetra.Tellus condimentu...',
            'cta' => [
                'text' => 'MantelzorgNL',
                'url' => 'https://www.mantelzorg.nl'
            ],
            'company_image' => [
                'url' => 'https://www.citypng.com/public/uploads/preview/amazon-official-logo-7017516947919651epoyhkqor.png',
                'alt' => ''
            ]
        ],
        [
            'image' => [
                'url' => 'https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=2574',
                'alt' => ''
            ],
            'name' => 'Interzorg',
            'bio' => 'Sapien viverra tellus facilisi vitae ornare fringilla pharetra.Tellus condimentu...',
            'cta' => [
                'text' => 'MantelzorgNL',
                'url' => 'https://www.mantelzorg.nl'
            ],
            'company_image' => [
                'url' => 'https://www.citypng.com/public/uploads/preview/amazon-official-logo-7017516947919651epoyhkqor.png',
                'alt' => ''
            ]
        ]
    ]
]);

?>


<section class="">
    <div class="container flex flex-col mb-[3.75rem]">
        <?php if (!empty($partners['title'])): ?>
            <h2 class="mx-auto text-center section-sec-heading">
                <?php echo $partners['title']; ?>
            </h2>
        <?php endif; ?>
        <div class="relative w-full">
        <div class="grid grid-cols-1 mt-5 md:mt-10 lg:grid-cols-3 mySlider partners">

            <?php foreach ($partners['partners'] as $index => $item): ?>
                <div class="flex flex-col items-center justify-center mx-auto gap-[1.88rem]">
            <div class="flex flex-col gap-6">    
                <div class="w-[180px] h-[180px] rounded-full mx-auto">
                        <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['url']; ?>" class="rounded-full">
                    </div>
                    <div class="flex flex-col gap-3">
                    <?php if (!empty($item['name'])): ?>
                        <h2 class="font-bold text-center section-description">
                            <?php echo $item['name']; ?>
                        </h2>
                    <?php endif; ?>
                    <img src="<?php echo $item['company_image']['url']; ?>" alt="<?php echo $item['company_image']['alt']; ?>" class="w-auto h-10 mx-auto">
                    <?php if (!empty($item['bio'])): ?>
                        <p class="section-sec-description text-center w-[18.9375rem] mx-auto">
                            <?php echo $item['bio']; ?>
                        </p>
                    <?php endif; ?>
                    </div>
                    </div>
                    <button
                        class="border-2 border-[#2B37DC] text-[#2B37DC] rounded-full px-3 py-2 flex items-center w-2xs justify-center mx-auto md:mt-0 mt-[1.88rem]">
                        <span class="mr-2">
                            <img src="<?php echo valtes_assets('images/up-right-from-squares.png')?>" alt="">
                        </span>MantelzorgNL
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
        </div>
    </div>
</section>
