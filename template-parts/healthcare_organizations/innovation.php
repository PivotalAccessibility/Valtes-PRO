<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}


$innovation = valtes_get_field('innovation', []);

?>


<section class="px-4 md:py-[7.5rem] py-[3.75rem] lg:px-0">
    <div class="container grid grid-cols-1 lg:grid-cols-2">
        <div class="flex items-center justify-center gap-10 md:gap-0">
            <div class="relative h-[12.10156rem] w-[10.90713rem] sm:h-[16.58788rem] sm:w-[18.40444rem]">
                <img src="<?php echo valtes_assets('images/innovation.svg') ?>" alt="" class="relative">
                <div class="absolute top-1 -left-16 sm:top-3 sm:-left-20">
                    <?php if (!empty($innovation['first_image']['url'])): ?>
                        <div class="size-[8.58906rem] sm:h-[13.0625rem] sm:w-[13.0625rem] rounded-full">
                            <img src="<?php echo $innovation['first_image']['url']; ?>" alt="<?php echo $hero['first_image']['alt']; ?>" class="object-cover rounded-full size-full">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="absolute -top-2 -right-16">'
                    <?php if (!empty($innovation['second_image']['url'])): ?>
                        <div class="h-[7.35619rem] w-[7.35619rem] sm:h-[11.1875rem] sm:w-[11.1875rem] rounded-full">
                            <img src="<?php echo $innovation['second_image']['url']; ?>" alt="<?php echo $hero['second_image']['url']; ?>" class="object-cover rounded-full size-full">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="absolute bottom-3.5 left-14 sm:-bottom-5 sm:left-24">
                    <?php if (!empty($innovation['third_image']['url'])): ?>
                        <div class="h-[5.30138rem] w-[5.30138rem] sm:h-[8.0625rem] sm:w-[8.0625rem] rounded-full">
                            <img src="<?php echo $innovation['third_image']['url']; ?>" alt="<?php echo $hero['third_image']['url']; ?>" class="object-cover rounded-full size-full">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="">
            <div class="flex flex-col items-start justify-center md:gap-10 gap-[1.88rem]">
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