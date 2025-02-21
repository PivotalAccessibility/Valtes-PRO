<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}


$innovation = valtes_get_field('innovation', [
    'title' => 'Innovatietrajecten',
    'description' => 'Samen met onze opdrachtgevers en kennisinstellingen werken we samen aan de zorg van morgen. Want met een groot tekort aan zorgmedewerkers en een toename van het aantal chronische ziekten per persoon zal de uitdaging in de zorg alleen maar groter worden. We werken daarbij in co-creatie met zorgmedewerkers, mantelzorgers en zorgbehoevenden.',
    'first_image' => [
        'url' => 'https://img.freepik.com/free-photo/lifestyle-people-emotions-casual-concept-confident-nice-smiling-asian-woman-cross-arms-chest-confident-ready-help-listening-coworkers-taking-part-conversation_1258-59335.jpg',
        'alt' => '',
    ],
    'second_image' => [
        'url' => 'https://img.freepik.com/free-photo/lifestyle-people-emotions-casual-concept-confident-nice-smiling-asian-woman-cross-arms-chest-confident-ready-help-listening-coworkers-taking-part-conversation_1258-59335.jpg',
        'alt' => '',
    ],
    'third_image' => [
        'url' => 'https://img.freepik.com/free-photo/lifestyle-people-emotions-casual-concept-confident-nice-smiling-asian-woman-cross-arms-chest-confident-ready-help-listening-coworkers-taking-part-conversation_1258-59335.jpg',
        'alt' => '',
    ]
]);

?>


<section class="py-20 px-4 lg:px-0">
    <div class="container grid lg:grid-cols-2 grid-cols-1">
        <div class="flex justify-center items-center">
            <div class="relative h-64 w-64">
                <img src="<?php echo valtes_assets('images/innovation.svg') ?>" alt="" class="relative">
                <div class="absolute top-4 -left-15">
                    <?php if (!empty($innovation['first_image']['url'])): ?>
                        <img src="<?php echo $innovation['first_image']['url']; ?>" alt="<?php echo $hero['first_image']['alt']; ?>" class="h-40 w-40 rounded-full">
                    <?php endif; ?>
                </div>
                <div class="absolute top-3 -right-10">'
                    <?php if (!empty($innovation['second_image']['url'])): ?>
                        <img src="<?php echo $innovation['second_image']['url']; ?>" alt="<?php echo $hero['second_image']['url']; ?>" class="h-32 w-32 rounded-full">
                    <?php endif; ?>
                </div>
                <div class="absolute bottom-5 left-20">
                    <?php if (!empty($innovation['third_image']['url'])): ?>
                        <img src="<?php echo $innovation['third_image']['url']; ?>" alt="<?php echo $hero['third_image']['url']; ?>" class="h-28 w-28 rounded-full">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="">
            <div class="flex flex-col justify-center items-start gap-4">
                <?php if (!empty($innovation['title'])): ?>
                    <h2 class="section-sec-heading">
                        <?php echo $innovation['title']; ?>
                    </h2>
                <?php endif; ?>
                <?php if (!empty($innovation['description'])): ?>
                    <p class="section-sec-description">
                        <?php echo $innovation['description']; ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>