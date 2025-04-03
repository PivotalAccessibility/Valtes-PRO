<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$partners = valtes_get_field('partners', [
    [
        "image" => [
            "url" => valtes_assets('images/new-client/rk.png'),
            "alt" => "User 1"
        ],
        "name" => "Rik Kraan",
        "company_logo" => [
            "url" => valtes_assets('images/new-client/mantelzorg.png'),
            "alt" => "Logo 1"
        ],
        "description" => "Sapien viverra tellus facilisi vitae ornare fringilla pharetra. Tellus condimentum viverra at nunc. Euismod ipsum et felis nibh hac.",
        "company_link" => [
            "url" => "#",
            "title" => "MantelzorgNL"
        ]
    ],
    [
        "image" => [
            "url" => valtes_assets('images/new-client/ju.png'),
            "alt" => "User 2"
        ],
        "name" => "Joao Uldrich",
        "company_logo" => [
            "url" => valtes_assets('images/new-client/netwerk.png'),
            "alt" => "Logo 2"
        ],
        "description" => "Massa maecenas consequat condimentum molestie malesuada. Consequat rhoncus in pretium pharetra ultrices nibh a dignissim convallis.",
        "company_link" => [
            "url" => "#",
            "title" => "Netwerk Dementie Drenthe"
        ]
    ],
    [
        "image" => [
            "url" => valtes_assets('images/new-client/lm.png'),
            "alt" => "User 3"
        ],
        "name" => "Loralee Matsuda",
        "company_logo" => [
            "url" => valtes_assets('images/new-client/stichtingervaringskenniscentrumschouders.png'),
            "alt" => "Logo 3"
        ],
        "description" => "Fames sit in mattis sed. Aliquet at fringilla cum turpis sem. Tincidunt donec tellus ac tortor pretium scelerisque risus. Quam non dui eu id odio a ultrices at.",
        "company_link" => [
            "url" => "#",
            "title" => "Schouders"
        ]
    ],
]);

?>

<section class="">
    <div class="container flex flex-col mb-[3.75rem]">
        <h2 class="mx-auto text-center section-sec-heading">
            Dit vinden andere contentpartners
        </h2>
        <div class="relative w-full">
            <div class="grid grid-cols-1 mt-5 md:mt-10 lg:grid-cols-3 mySlider gap-7">

                <?php foreach ($partners as $partner): ?>

                <div class="flex flex-col items-center justify-between">

                    <div class=" px-10 flex flex-col items-center justify-center">

                        <?php if(!empty($partner['image']['url'])): ?>
                        <div class="rounded-full h-44 w-44 bg-purple-400">
                            <img src="<?php echo $partner['image']['url'] ?>"
                                alt="<?php echo $partner['image']['alt'] ?>"
                                class="rounded-full h-44 w-44 object-cover">
                        </div>
                        <?php endif; ?>

                        <?php if(!empty($partner['name'])): ?>
                        <h2 class="font-bold text-center section-description mt-6">
                            <?php echo $partner['name']; ?>
                        </h2>
                        <?php endif; ?>

                        <?php if(!empty($partner["company_logo"]['url'])): ?>
                        <div class=" py-7">
                            <img src="<?php echo $partner["company_logo"]['url'] ?>"
                                alt="<?php echo $partner["company_logo"]['alt'] ?>" class=" h-10 w-auto">
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($partner['description'])): ?>
                        <p class="section-sec-description text-center">
                            <?php echo wp_trim_words($partner['description'], 10, '...'); ?>
                        </p>
                        <?php endif; ?>
                    </div>

                    <div class="mt-8">
                        <?php if(!empty($partner["company_link"]['url'])): ?>
                        <a href="<?php echo $partner["company_link"]['url'] ?>"
                            class="btn btn-outline flex items-center">
                            <span class="mr-2">
                                <img src="<?php echo valtes_assets('images/up-right-from-squares.png')?>" alt="">
                            </span>
                            <?php echo $partner["company_link"]['title'] ?>
                        </a>
                        <?php endif; ?>
                    </div>

                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>