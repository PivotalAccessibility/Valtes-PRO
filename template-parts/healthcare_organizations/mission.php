<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}


$mission = valtes_get_field('mission', []);

?>

<section class="container px-4 py-[3.75rem] md:pt-32 md:px-5">
    <div class="flex flex-wrap-reverse lg:flex-nowrap">
        <div class="flex flex-col items-start justify-center w-full mt-[1.88rem] md:mt-10 lg:w-1/2 sm:mt-0">
            <?php if (!empty($mission['title'])): ?>
                <h2 class="section-sec-heading">
                    <?php echo $mission['title']; ?>
                </h2>
            <?php endif; ?>
            <?php if (!empty($mission['description'])): ?>
                <div class="md:mt-[1.87rem] mt-5 section-sec-description w-full lg:w-3/4">
                    <?php echo $mission['description']; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="flex justify-end w-full lg:w-1/2">
            <?php if (!empty($mission['image']['url'])): ?>
                <div class="relative w-full">
                    <img src="<?php echo $mission['image']['url']; ?> " alt="" class="lg:h-[28.25rem] h-52 w-full relative rounded-full object-cover">
                    <div class="md:size-32 size-14 bg-jobborder rounded-full absolute sm:top-0 top-2 sm:left-5 left-3 -z-50"></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>