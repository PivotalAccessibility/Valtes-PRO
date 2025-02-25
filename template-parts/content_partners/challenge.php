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
            'counter' => '75%',
            'description' => 'van de mantelzorgers ervaart dat  informatie niet genoeg, zonder details en onvoldoende is voor de mantelzorg'
        ],
        [
            'counter' => '72%',
            'description' => 'van de mantelzorgers heeft behoefte aan eigen, gepersonaliseerde informatie'
        ],
        [
            'counter' => '31%',
            'description' => 'van de mantelzorgers kent slechts de weg waar het gaat om informatie en ondersteuning'
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