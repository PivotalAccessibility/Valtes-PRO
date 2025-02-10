<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$hero = valtes_get_field('hero', []);

?>


<section class="bg-[#f0f5ff]">
    <div class="container max-w-4xl 2xl:max-w-5xl mx-auto flex xl:flex-row flex-col-reverse px-3 sm:flex-wrap md:flex md:flex-wrap bg-[#f0f5ff] xl:flex justify-between">
      <div class="flex items-center justify-center h-auto p-0 mt-20 xl:justify-start xl:w-1/2 sm:w-full xl:mt-12 md:mt-20">
        <div class="">
          <h1 class="mb-6 text-3xl font-bold md:text-4xl ">
            <?php echo $hero['title']; ?>
          </h1>
          <div class="text-sm w-86 space-y-3">
            <?php echo $hero['description']; ?>
          </div>
        </div>
      </div>
      <div class="flex justify-center h-auto xl:w-1/2 sm:w-full xl:justify-start">
        <div class="relative 2xl:left-16 lg:-top-16">
          <div
            class="relative rounded-full 2xl:h-[37rem] 2xl:w-[37rem] overflow-hidden xl:h-[35rem] xl:w-[35rem] md:h-[25rem] md:w-[25rem] h-[20rem]  w-[20rem] lg:h-[30rem] lg:w-[30rem]">
            <img src="<?php echo $hero['image']['url']; ?>" class="object-cover w-full h-full" alt="">
          </div>
          <div class="absolute md:-bottom-12 md:-left-8 -bottom-6 -left-4 xl:-left-11">
            <img src="<?php echo valtes_assets('images/goals-images/Ellipse-2.svg') ?>" class="object-cover" alt="">
          </div>
          <div class="absolute md:-bottom-10 md:-left-24 -bottom-8 -left-10">
            <img src="<?php echo valtes_assets('images/goals-images/Ellipse-3.svg') ?>" class="object-cover" alt="">
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
