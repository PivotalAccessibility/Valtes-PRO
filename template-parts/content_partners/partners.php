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

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

<section class="my-10">
    <div class="container flex flex-col">
        <?php if (!empty($partners['title'])): ?>
            <h2 class="text-3xl font-bold text-[#1C233E] text-center mb-4">
                <?php echo $partners['title']; ?>
            </h2>
        <?php endif; ?>
        <div class="grid lg:grid-cols-3 grid-cols-1 mySlider">

            <?php foreach ($partners['partners'] as $index => $item): ?>
                <div class="flex flex-col justify-center items-center w-60 space-y-2 mx-auto">
                    <div class="w-[180px] h-[180px] bg-red-100 rounded-full my-4 mx-auto">
                        <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['url']; ?>" class="rounded-full">
                    </div>
                    <?php if (!empty($item['name'])): ?>
                        <h2 class="text-lg font-bold text-[#1C233E] text-center">
                            <?php echo $item['name']; ?>
                        </h2>
                    <?php endif; ?>
                    <img src="<?php echo $item['company_image']['url']; ?>" alt="<?php echo $item['company_image']['alt']; ?>" class="w-auto h-10 mb-4">
                    <?php if (!empty($item['bio'])): ?>
                        <p class="text-xs text-center mb-4">
                            <?php echo $item['bio']; ?>
                        </p>
                    <?php endif; ?>
                    <button
                        class="border-2 border-[#2B37DC] text-[#2B37DC] rounded-full px-3 py-2 flex items-center w-full justify-center">
                        <span class="mr-2">
                            <img src="" alt="">
                        </span>MantelzorgNL
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    mobileOnlySlider(".mySlider", true, false, 767);

    function mobileOnlySlider($slidername, $dots, $arrows, $breakpoint) {
        var slider = $($slidername);
        var settings = {
            mobileFirst: true,
            dots: $dots,
            arrows: $arrows,
            responsive: [{
                breakpoint: $breakpoint,
                settings: "unslick"
            }]
        };
        slider.slick(settings);
        $(window).on("resize", function() {
            if ($(window).width() > $breakpoint) {
                return;
            }
            if (!slider.hasClass("slick-initialized")) {
                return slider.slick(settings);
            }
        });
    }
</script>