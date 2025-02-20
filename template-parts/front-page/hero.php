<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$hero = valtes_get_field('hero', []);

?>

<section class="bg-white pb-5 lg:pb-0">
    <div
        class="container flex xl:flex-row flex-col-reverse sm:flex-wrap md:flex md:flex-wrap bg-white xl:flex px-5 sm:px-0">
        <div class="flex items-center justify-start h-auto p-0 sm:mt-20 mt-5 xl:w-1/2 sm:w-full xl:mt-12 md:mt-20">
            <div class=" sm:pr-24" dir="ltr">
                <?php if(!empty($hero['title'])): ?>
                <h1 class="mb-6 section-heading">
                    <?php echo $hero['title']; ?>
                </h1>
                <?php endif; ?>
                <?php if(!empty($hero['description'])): ?>
                <div class="mt-5 section-description">
                    <?php echo $hero['description']; ?>
                </div>
                <?php endif; ?>
                <?php if(!empty($hero['cta']['url'])): ?>
                <div class="flex sm:flex-nowrap flex-wrap sm:space-x-6 mt-5">
                    <a href="<?php echo $hero['cta']['url']; ?>" class="btn btn-primary">
                        <?php echo $hero['cta']['title']; ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if(!empty($hero['image']['url'])): ?>
        <div class="flex justify-center h-auto xl:w-1/2 sm:w-full xl:justify-start mt-32 sm:mt-0">
            <div class="relative 2xl:left-16 left-5 -top-7 lg:-top-16">
                <div
                    class="relative rounded-full 2xl:h-[37rem] 2xl:w-[37rem] overflow-hidden xl:h-[35rem] xl:w-[35rem] md:h-[25rem] md:w-[25rem] h-[15rem]  w-[15rem] lg:h-[30rem] lg:w-[30rem]">
                    <img src="<?php echo $hero['image']['url']; ?>" class="object-cover w-full h-full"
                        alt="<?php echo $hero['image']['alt']; ?>">
                </div>
                <div class="absolute md:-bottom-12 md:-left-8 -bottom-6 -left-4 xl:-left-11">
                    <img src="<?php echo valtes_assets('images/Ellipse 2.svg') ?>" class="object-cover"
                        alt="">
                </div>
                <div class="absolute md:-bottom-10 md:-left-24 -bottom-8 -left-10">
                    <img src="<?php echo valtes_assets('images/Ellipse 3.png') ?>" class="object-cover"
                        alt="">
                </div>
                <div class="absolute bg-white px-10 sm:left-6 left-2 py-7 rounded-full border-5 border-[#f3f6ff] bottom-1">
                  <img src="<?php echo $hero['floating_image']['url']; ?>" class="object-cover h-12" alt="">
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    </div>
</section>