<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}


$mission = valtes_get_field('mission', []);

?>


<section class=" container py-[3.75rem] md:py-[7.5rem] md:px-5 px-4">
    <div class="flex flex-wrap-reverse sm:flex-nowrap">
        <div class="flex flex-col items-start justify-center w-full mt-[1.88rem] sm:w-1/2 sm:mt-0">
            <div class="sm:pr-24">
                <?php if (!empty($mission['title'])): ?>
                    <h2 class="section-sec-heading">
                        <?php echo $mission['title']; ?>
                    </h2>
                <?php endif; ?>
                <?php if (!empty($mission['description'])): ?>
                    <p class="mt-5 md:mt-10 section-sec-description">
                        <?php echo $mission['description']; ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="flex items-center justify-end w-full sm:w-1/2">
            <?php if (!empty($mission['image']['url'])): ?>
                <div class="relative">
                    <img src="<?php echo $mission['image']['url']; ?> " alt="" class=" sm:h-[21rem] h-auto w-auto relative rounded-full object-cover">
                    <div class=" sm:h-28 sm:w-28 h-10 w-10 bg-jobborder rounded-full absolute sm:top-0 -top-1 sm:left-5 left-0 -z-50"></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>