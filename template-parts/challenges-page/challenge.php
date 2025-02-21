<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$challenge = valtes_get_field('challenge', [
    'image'=> [
        'url' => 'https://letsenhance.io/static/a31ab775f44858f1d1b80ee51738f4f3/11499/EnhanceAfter.jpg',
        'alt'=>''
    ],
    'title'=>'De uitdaging',
    'description'=> 'De meeste mantelzorgers worden niet bereikt en blijven buiten beeld. Bijvoorbeeld omdat zowel de ondersteuning en communicatie veelal gericht is op ouderen van 65+. Daardoor ontvangen zij vaak niet de juiste informatie en ondersteuning. Bovendien noemen de meeste mantelzorgers zich geen mantelzorger. ',
]);

?>

<section class="mt-16 bg-primaryLight" name="valtes-solution">

        <div class="container py-12">

            <div class="flex flex-col px-4 lg:flex-row justify-evenly lg:px-0">
                <div class="flex flex-row w-full mb-8 lg:w-1/2 lg:mb-0">
                <?php if(!empty($challenge['image']['url'])): ?>
                    <div class="relative">
                        <img src="<?php echo $challenge['image']['url']; ?>" alt="<?php echo $challenge['image']['alt']; ?>"
                            class="relative z-10 object-cover h-40 rounded-full lg:h-72 w-96">
                        <div class="absolute size-16 lg:size-24 rounded-full bg-[#6997ff] top-1 lg:right-1 right-0"></div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="flex flex-col justify-center w-full lg:w-1/2">
                    <div class="flex flex-col justify-center">
                <?php if(!empty($challenge['title'])): ?>
                    <h2 class="section-sec-heading">
                    <?php echo $challenge['title']; ?>
                    </h2>
                    <?php endif; ?>
                    <?php if(!empty($challenge['description'])): ?>

                    <p class="mt-4 section-sec-description">
                    <?php echo $challenge['description']; ?>
                    </p>
                    <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
