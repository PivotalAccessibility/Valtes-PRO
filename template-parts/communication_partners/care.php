<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$care = valtes_get_field('care', [
    'image' => [
        'url' => valtes_assets('/images/care.png'),
        'alt' => ''
    ],
    'title' => 'Wat kun jij betekenen voor mantelzorgers?',
    'description' => 'Als communicatiepartner van Valtes kun jij een belangrijke rol spelen in het bereiken van mantelzorgers in hun dagelijkse omgeving. Of het nu gaat om een huisartsenpraktijk, supermarkt, sportvereniging, kapper of regionaal ziekenhuis, jouw locatie biedt een unieke kans om mantelzorgers te informeren over de Valtes-app. Samen zorgen we ervoor dat zij op het juiste moment toegang krijgen tot relevante ondersteuning, door zichtbare en gerichte communicatie op plekken waar zij zich vaak bevinden.',
]);

?>

<section class="">
    <div class="container lg:py-[7.5rem]  py-[3.75rem] ">
        <div class="flex flex-col px-4 lg:px-0 lg:flex-row-reverse justify-evenly">
            <div class="flex flex-row items-center w-full mb-8 lg:justify-end lg:w-1/2 lg:mb-0">
                <?php if (!empty($care['image']['url'])): ?>
                    <div class="relative card-image">
                        <img src="<?php echo $care['image']['url'] ?>" alt="<?php echo $care['image']['alt'] ?>"
                            class="relative z-10 object-cover rounded-full size-full">
                        <div class="absolute md:size-[8.75rem] size-16 rounded-full bg-[#bbbef4] bottom-0 -right-2">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="flex flex-col items-end justify-center w-full lg:w-1/2">
                <div class="flex flex-col justify-center">
                    <?php if (!empty($care['title'])): ?>
                        <h2 class="section-sec-heading"><?php echo $care['title'] ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($care['description'])): ?>
                        <p class="mt-4 lg:mt-10 section-sec-description">
                            <?php echo $care['description'] ?>
                        </p>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>