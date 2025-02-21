<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}


$challenge = valtes_get_field('challenge', [
    'heading' => 'De uitdaging',
    'challenges' => [
        [
            'counter' => '170.000',
            'description' => 'mensen tekort in de zorg in 2030'
        ],
        [
            'counter' => '2.600.000',
            'description' => '80-plussers in 2050'
        ],
        [
            'counter' => '620.000',
            'description' => 'mensen met dementie in 2050'
        ]
    ]
]);

?>

<section class="bg-[#f0f5ff] py-20">
    <div class="container flex flex-col items-center">
        <?php if (!empty($challenge['heading'])): ?>
            <h2 class="section-sec-heading text-center">
                <?php echo $challenge['heading'] ?>
            </h2>
        <?php endif; ?>
        <div class=" grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php foreach ($challenge['challenges'] as $index => $challenge): ?>
                <div class=" flex flex-col items-center">
                    <?php if (!empty($challenge['counter'])): ?>
                        <span class=" font-bold text-[4rem] text-primary">
                            <?php echo $challenge['counter'] ?>
                        </span>
                    <?php endif; ?>
                    <?php if (!empty($challenge['description'])): ?>
                        <p class="section-description text-center">
                            <?php echo $challenge['description'] ?>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>