
<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$hero = valtes_get_field('hero', [
    'heading'=> 'Vacatures',
    'description'=> 'Hier komen 1 à 2 zinnen te staan, en dat ziet er dan ongeveer zo uit. Er zal niet veel informatie komen, maar wel genoeg.',

]);


?>



<section class="py-10">
        <div class="container px-6 mt-24 font-bold lg:px-0">
            <div class="flex flex-col justify-center items-center lg:w-[49%] w-full mx-auto">
            <?php if(!empty($hero['heading'])): ?>
                <h1 class="mb-6 text-center section-heading"><?php echo $hero['heading'] ?></h1>
            <?php endif ?>
            <?php if(!empty($hero['description'])): ?>
                <p class="text-center section-description"><?php echo $hero['description'] ?></p>
            <?php endif ?>
            </div>
             
               
        </div>
    </section>