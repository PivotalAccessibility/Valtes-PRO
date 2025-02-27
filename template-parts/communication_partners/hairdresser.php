<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$dresser = valtes_get_field('cards', []);
?>

<section class="" name="valtes-solution">

    <div class="container lg:gap-[7.5rem] gap-[3.75rem] grid lg:py-[7.5rem] py-[3.75rem]">
        <?php foreach ($dresser['cards'] as $index => $dresser): ?>
            <?php if ($index % 2 == 0): ?>
                <div class="flex flex-col gap-8 px-4 lg:flex-row justify-evenly lg:px-0 md:gap-0">

                    <div class="flex flex-row justify-center w-full lg:w-1/2 lg:justify-start">
                        <?php if (!empty($dresser['image']['url'])): ?>
                            <div class="relative card-image">
                                <img src="<?php echo $dresser['image']['url']; ?>" alt="<?php echo $dresser['image']['alt']; ?>"
                                    class="relative z-10 object-cover rounded-full size-full">
                                <div class="absolute size-16 md:size-[7.43425rem] rounded-full bg-jobborder -top-2 left-2"></div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-col justify-center w-full lg:w-1/2">
                        <div class="flex flex-col justify-center gap-4 md:gap-10">
                            <?php if (!empty($dresser['title'])): ?>
                                <h2 class="section-sec-heading">
                                    <?php echo $dresser['title']; ?>
                                </h2>
                            <?php endif; ?>
                            <?php if (!empty($dresser['description'])): ?>

                                <p class="section-sec-description w-full lg:w-[29.6875rem]">
                                    <?php echo $dresser['description']; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php else: ?>



                <div class="flex flex-col gap-8 px-4 lg:flex-row-reverse justify-evenly lg:px-0 md:gap-0">
                    <div class="flex flex-row justify-center w-full lg:justify-end lg:w-1/2">
                        <?php if (!empty($dresser['image']['url'])): ?>
                            <div class="relative card-image">
                                <img src="<?php echo $dresser['image']['url'] ?>" alt="<?php echo $dresser['image']['alt'] ?>"
                                    class="relative z-10 object-cover rounded-full size-full">
                                <div class="absolute md:size-[9.25rem] size-16 rounded-full  bg-[#bbbef4] -bottom-2 right-0">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="flex flex-col items-start justify-center w-full lg:w-1/2">
                        <div class="flex flex-col justify-center gap-4 md:gap-10">
                            <?php if (!empty($dresser['title'])): ?>
                                <h2 class="section-sec-heading"><?php echo $dresser['title'] ?></h2>
                            <?php endif; ?>
                            <?php if (!empty($dresser['description'])): ?>
                                <p class="w-full section-sec-description lg:w-lg">
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