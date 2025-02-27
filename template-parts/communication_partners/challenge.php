<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$challenge = valtes_get_field('challenge', []);

?>

<section class="bg-primaryLight" name="valtes-solution">

    <div class="container lg:py-20 py-[3.75rem]">

        <div class="flex flex-col gap-8 px-4 lg:flex-row justify-evenly lg:px-0 lg:gap-0">
            <div class="flex flex-row justify-center w-full lg:w-1/2 lg:justify-start">
                <?php if (!empty($challenge['image']['url'])): ?>
                    <div class="relative card-image">
                        <img src="<?php echo $challenge['image']['url']; ?>" alt="<?php echo $challenge['image']['alt']; ?>"
                            class="relative z-10 object-cover rounded-full size-full">
                        <div class="absolute size-16 md:size-[7.43425rem] rounded-full bg-jobborder top-1 -right-1"></div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="flex flex-col justify-center w-full lg:w-1/2">
                <div class="flex flex-col justify-center gap-4 md:gap-10">
                    <?php if (!empty($challenge['title'])): ?>
                        <h2 class="section-sec-heading">
                            <?php echo $challenge['title']; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if (!empty($challenge['description'])): ?>

                        <p class="w-full section-sec-description lg:w-md">
                            <?php echo $challenge['description']; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</section>