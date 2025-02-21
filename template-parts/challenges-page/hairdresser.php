<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$dresser = valtes_get_field('cards', [
   'cards' => [
        [
            'image' => [
                'url'=> 'https://letsenhance.io/static/a31ab775f44858f1d1b80ee51738f4f3/11499/EnhanceAfter.jpg', 
                'alt' => ''
            ],
            'heading' => 'De kapper',
            'description' => '“Hoe gaat het met je?” Veel mensen openen hun hart bij de kapper. Valtes voorziet kappers van stickers op hun spiegels, zodat mensen gelijk van een waardevolle informatie kunnen worden voorzien! '
        ],
        [
            'image' => [
                'url'=> 'https://letsenhance.io/static/a31ab775f44858f1d1b80ee51738f4f3/11499/EnhanceAfter.jpg',
                'alt' => ''
            ],
            'heading' => 'De huisarts',
            'description' => 'De huisarts speelt een belangrijke rol in het signaleren en ondersteunen van mantelzorgers. Door samen te werken met huisartsenpraktijken kunnen we mantelzorgers direct informeren over de Valtes-app, waardoor ze sneller toegang krijgen tot relevante zorg en ondersteuning. Dit helpt zowel de mantelzorger als de huisarts bij het verlichten van de zorglast.'
        ],
      
   ]
]);
?>

<section class="" name="valtes-solution">

        <div class="container py-20">
        <?php foreach ($dresser['cards'] as $index => $dresser): ?>
            <?php if ($index % 2 == 0): ?>
            <div class="flex flex-col px-4 mb-20 lg:flex-row justify-evenly lg:px-0">
           
                <div class="flex flex-row w-full mb-8 lg:w-1/2 lg:mb-0">
                <?php if(!empty($dresser['image']['url'])): ?>
                    <div class="relative">
                        <img src="<?php echo $dresser['image']['url']; ?>" alt="<?php echo $dresser['image']['alt']; ?>"
                            class="relative z-10 object-cover h-40 rounded-full lg:h-72 w-96 lg:w-96">
                        <div class="absolute size-16 lg:size-24  rounded-full bg-[#6997ff] top-1 lg:-left-2 -left-1"></div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="flex flex-col justify-center w-full lg:w-1/2">
                    <div class="flex flex-col justify-center">
                <?php if(!empty($dresser['heading'])): ?>
                    <h2 class="section-sec-heading">
                    <?php echo $dresser['heading']; ?>
                    </h2>
                    <?php endif; ?>
                    <?php if(!empty($dresser['description'])): ?>

                    <p class="mt-4 section-sec-description">
                    <?php echo $dresser['description']; ?>
                    </p>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php else: ?>
           


            <div class="flex flex-col lg:flex-row-reverse justify-evenly lg:px-0">
                <div class="flex flex-row w-full mb-8 lg:w-1/2 lg:mb-0">
                <?php if(!empty($dresser['image']['url'])): ?>
                    <div class="relative">
                        <img src="<?php echo $dresser['image']['url'] ?>" alt="<?php echo $dresser['image']['alt'] ?>"
                            class="relative z-10 object-cover h-40 rounded-full lg:h-72 w-96 lg:w-96">
                        <div class="absolute lg:size-24 size-16 rounded-full  bg-[#bbbef4] -bottom-2 lg:right-1 right-0">
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="flex flex-col items-end justify-center w-full lg:w-1/2">
                    <div class="flex flex-col justify-center">
                        <?php if(!empty($dresser['heading'])): ?>
                        <h2 class="section-sec-heading"><?php echo $dresser['heading'] ?></h2>
                        <?php endif; ?>
                        <?php if(!empty($dresser['description'])): ?>
                        <p class="mt-4 section-sec-description">
                            <?php echo $dresser['description'] ?>
                        </p>
                            <?php endif ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach ?>
        </div>
    </section>
