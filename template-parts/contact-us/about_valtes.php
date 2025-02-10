<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$explain = valtes_get_field('about_valtes', []);

?>

<section class=" container py-20 max-w-4xl mx-auto 2xl:max-w-5xl px-5 sm:px-0">
    <div class=" flex flex-wrap-reverse sm:flex-nowrap ">
        <div class=" sm:w-1/2 w-full flex flex-col items-start justify-center sm:mt-0 mt-10">
            <h2 class=" font-semibold text-3xl">
                <?php echo $explain['title']; ?>
            </h2>
            <div class=" font-normal mt-5 text-xs space-y-3 sm:pr-28 leading-5">
                <?php echo $explain['description']; ?>
            </div>
            <div class=" sm:flex block mt-5">
                <a href="<?php echo $explain['cta']['url']; ?>"
                    class="flex items-center text-white py-2 px-5 rounded-full bg-[#2b37dc] text-xs font-bold w-full sm:w-auto">
                    <?php echo $explain['cta']['title']; ?>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 ml-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M15 16l4 -4" />
                            <path d="M15 8l4 4" />
                        </svg>
                    </span>
                </a>
                <a href="<?php echo $explain['cta_2']['url']; ?>"
                    class="flex items-center text-white py-2 px-5 rounded-full bg-[#2b37dc] text-xs font-bold sm:ml-3 mt-5 sm:mt-0">
                    <?php echo $explain['cta_2']['title']; ?>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 ml-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M15 16l4 -4" />
                            <path d="M15 8l4 4" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class=" sm:w-1/2 w-full">
            <div class=" sm:ml-5 relative">
                <img src="<?php echo $explain['image']['url']; ?> " alt="" class=" sm:h-[21rem] h-auto w-auto relative rounded-full">
                <div class=" h-18 w-18 bg-[#bbbef4] rounded-full absolute top-0 right-0 -z-50"></div>
                <div class=" h-28 w-28 bg-[#f0f5ff] rounded-full absolute bottom-0 left-0 -z-50"></div>
            </div>
        </div>
    </div>
</section>