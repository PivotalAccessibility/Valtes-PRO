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
    <div
        class="container max-w-4xl 2xl:max-w-5xl mx-auto flex xl:flex-row flex-col-reverse sm:flex-wrap md:flex md:flex-wrap bg-[#f0f5ff] xl:flex px-5 sm:px-0">
        <div class="flex items-center justify-start h-auto p-0 sm:mt-20 mt-5 xl:w-1/2 sm:w-full xl:mt-12 md:mt-20">
            <div class=" sm:pr-24" dir="ltr">
                <h1 class="mb-6 text-3xl font-bold">
                    <?php echo $hero['title']; ?>
                </h1>
                <div class="text-xs mt-5 font-normal leading-5">
                    <?php echo $hero['description']; ?>
                </div>
                <div class="flex sm:flex-nowrap flex-wrap sm:space-x-6 mt-5">
                    <button
                        class="bg-[#2b37dc] border-2 text-xs border-[#2b37dc] px-3 py-3 text-white font-semibold rounded-full w-full sm:w-auto">
                        <?php echo $hero['cta']['title']; ?>
                    </button>
                    <button
                        class="border-[#2b37dc] border-2 text-xs px-5 py-3 text-[#2b37dc] bg-white font-medium rounded-full flex items-center mt-5 sm:mt-0 w-full sm:w-auto justify-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="h-4 w-4 mr-1">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                <path d="M11 13l9 -9" />
                                <path d="M15 4h5v5" />
                            </svg>
                        </span>
                        <?php echo $hero['cta2']['title']; ?>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex justify-center h-auto xl:w-1/2 sm:w-full xl:justify-start mt-32 sm:mt-0">
            <div class="relative 2xl:left-16 left-5 -top-7 lg:-top-16">
                <div
                    class="relative rounded-full 2xl:h-[37rem] 2xl:w-[37rem] overflow-hidden xl:h-[35rem] xl:w-[35rem] md:h-[25rem] md:w-[25rem] h-[15rem]  w-[15rem] lg:h-[30rem] lg:w-[30rem]">
                    <img src="<?php echo $hero['image']['url']; ?>" class="object-cover w-full h-full"
                        alt="<?php echo $hero['image']['alt']; ?>">
                </div>
                <div class="absolute md:-bottom-12 md:-left-8 -bottom-6 -left-4 xl:-left-11">
                    <img src="<?php echo valtes_assets('images/goals-images/Ellipse-2.svg') ?>" class="object-cover"
                        alt="">
                </div>
                <div class="absolute md:-bottom-10 md:-left-24 -bottom-8 -left-10">
                    <img src="<?php echo valtes_assets('images/goals-images/Ellipse-3.svg') ?>" class="object-cover"
                        alt="">
                </div>
                <div class="absolute bg-white px-10 sm:left-6 left-2 py-7 rounded-full border-5 border-[#f3f6ff] bottom-1">
                  <img src="<?php echo valtes_assets('images/Zorginnovatieprijs_2024_RGB.png') ?>" class="object-cover h-12" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
</section>