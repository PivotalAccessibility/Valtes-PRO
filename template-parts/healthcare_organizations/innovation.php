<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}


$innovation = valtes_get_field('innovation', []);

?>


<section class="py-7 md:py-32 max-md:px-4">
    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-48">
        <div class="flex items-center justify-center gap-10 md:gap-0">
            <div class="relative">
                <img src="<?php echo valtes_assets('images/innovation.svg') ?>" alt="" class="relative h-44 w-48 sm:h-64 sm:w-72">
                <?php if (!empty($innovation['first_image']['url'])): ?>
                    <div class="absolute size-36 sm:size-52 rounded-full top-1/12 -left-1/3">
                        <img src="<?php echo $innovation['first_image']['url']; ?>" alt="<?php echo $hero['first_image']['alt']; ?>" class="object-cover rounded-full size-full">
                    </div>
                <?php endif; ?>
                <?php if (!empty($innovation['second_image']['url'])): ?>
                    <div class="absolute size-32 sm:size-44 rounded-full top-1/16 -right-1/4">
                        <img src="<?php echo $innovation['second_image']['url']; ?>" alt="<?php echo $hero['second_image']['url']; ?>" class="object-cover rounded-full size-full">
                    </div>
                <?php endif; ?>
                <?php if (!empty($innovation['third_image']['url'])): ?>
                    <div class="absolute size-20 sm:size-32 rounded-full -bottom-1/12 left-1/3">
                        <img src="<?php echo $innovation['third_image']['url']; ?>" alt="<?php echo $hero['third_image']['url']; ?>" class="object-cover rounded-full size-full">
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="md:pr-10">
            <div class="flex flex-col items-start justify-center md:gap-10 gap-7">
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