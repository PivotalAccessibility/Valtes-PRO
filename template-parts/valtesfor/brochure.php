<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$brochure = valtes_get_field('brochure', []);

?>

<section class="container md:py-20 px-4 sm:px-5 xl:px-0 py-10">
    <div class=" flex flex-wrap-reverse sm:flex-nowrap ">
        <div class=" sm:w-1/2 w-full flex flex-col items-start justify-center sm:mt-0 mt-10 md:pr-40">
            <?php if(!empty($brochure['title'])): ?>
            <h2 class=" section-sec-heading">
                <?php echo $brochure['title']; ?>
            </h2>
            <?php endif; ?>
            <?php if(!empty($brochure['description'])): ?>
            <div class=" mt-5 section-description">
                <?php echo $brochure['description']; ?>
            </div>
            <?php endif; ?>

            <?php if(!empty($brochure['brochure_shortcode'])): ?>
            <div class="mt-10 w-full">
                <?php echo do_shortcode($brochure['brochure_shortcode']); ?>
            </div>
            <?php endif; ?>

        </div>
        <div class="sm:w-1/2 w-full flex items-center justify-end">
            <?php if(!empty($brochure['image']['url'])): ?>
            <div class="relative w-full">
                <img src="<?php echo $brochure['image']['url']; ?> " alt=""
                    class=" sm:h-[21rem] h-52 w-full relative rounded-full object-cover">
                <div
                    class=" sm:h-18 sm:w-18 h-10 w-10 bg-[#bbbef4] rounded-full absolute sm:top-0 -top-1 sm:right-5 right-0 -z-50">
                </div>
                <div
                    class=" sm:h-28 sm:w-28 h-20 w-20 bg-primaryLight rounded-full absolute bottom-0 sm:left-0 -left-3 -z-50">
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>