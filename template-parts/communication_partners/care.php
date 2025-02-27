<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$care = valtes_get_field('care', []);

?>

<section class="">
    <div class="container lg:py-[7.5rem]  py-[3.75rem] ">
        <div class="flex flex-col gap-8 px-4 lg:px-0 lg:flex-row-reverse justify-evenly md:gap-0">
            <div class="flex flex-row items-center justify-center w-full lg:justify-end lg:w-1/2">
                <?php if (!empty($care['image']['url'])): ?>
                    <div class="relative card-image">
                        <img src="<?php echo $care['image']['url'] ?>" alt="<?php echo $care['image']['alt'] ?>"
                            class="relative z-10 object-cover rounded-full size-full">
                        <div class="absolute md:size-[8.75rem] size-16 rounded-full bg-[#bbbef4] bottom-0 right-0">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="flex flex-col items-end justify-center w-full lg:w-1/2">
                <div class="flex flex-col justify-center gap-4 md:gap-10">
                    <?php if (!empty($care['title'])): ?>
                        <h2 class="section-sec-heading"><?php echo $care['title'] ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($care['description'])): ?>
                        <p class="section-sec-description lg:w-[34.6875rem] w-full">
                            <?php echo $care['description'] ?>
                        </p>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>