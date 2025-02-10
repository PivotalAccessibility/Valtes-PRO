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
        <div class="flex items-center justify-start h-auto p-0 mt-20 xl:w-1/2 sm:w-full xl:mt-12 md:mt-20">
            <div class=" sm:pr-24" dir="ltr">
                <h1 class="mb-6 text-3xl font-bold">
                    <?php echo $hero['title']; ?>
                </h1>
                <div class=" space-y-3 text-sm">
                    <?php echo $hero['description']; ?>
                </div>
                <a href="" class="text-blue-700 underline font-bold flex items-center">
                    <span>
                    <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-mail pr-3 h-10 w-10"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" /><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" /></svg>
                    </span>
                    <?php echo $hero['link']['title']; ?>
                </a>
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
            </div>
        </div>
    </div>
    </div>
</section>