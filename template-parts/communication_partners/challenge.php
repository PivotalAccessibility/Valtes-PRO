<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$challenge = valtes_get_field('challenge', [
    'image' => [
        'url' => valtes_assets('/images/deUitedaging.png'),
        'alt' => ''
    ],
    'title' => 'De uitdaging',
    'description' => 'De meeste mantelzorgers worden niet bereikt en blijven buiten bFeeld. Bijvoorbeeld omdat zowel de ondersteuning en communicatie veelal gericht is op ouderen van 65+. Daardoor ontvangen zij vaak niet de juiste informatie en ondersteuning. Bovendien noemen de meeste mantelzorgers zich geen mantelzorger. ',
]);

?>

<section class="mt-[6.81rem] bg-primaryLight" name="valtes-solution">

    <div class="container lg:py-20 py-[3.75rem]">

        <div class="flex flex-col px-4 lg:flex-row justify-evenly lg:px-0">
            <div class="flex flex-row w-full mb-8 lg:w-1/2 lg:mb-0">
                <?php if (!empty($challenge['image']['url'])): ?>
                    <div class="relative card-image">
                        <img src="<?php echo $challenge['image']['url']; ?>" alt="<?php echo $challenge['image']['alt']; ?>"
                            class="relative z-10 object-cover rounded-full size-full">
                        <div class="absolute size-16 md:size-[7.43425rem] rounded-full bg-[#6997ff] top-1 -right-1"></div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="flex flex-col justify-center w-full lg:w-1/2">
                <div class="flex flex-col justify-center">
                    <?php if (!empty($challenge['title'])): ?>
                        <h2 class="section-sec-heading">
                            <?php echo $challenge['title']; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if (!empty($challenge['description'])): ?>

                        <p class="mt-4 lg:mt-10 section-sec-description">
                            <?php echo $challenge['description']; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</section>