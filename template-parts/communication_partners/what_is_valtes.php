<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$About = valtes_get_field('about_valtes', [
]);

?>
<section class="container px-4 py-10 md:py-30 md:px-5">
    <div class="flex flex-wrap-reverse sm:flex-nowrap">
        <div class="flex flex-col items-start justify-center w-full mt-[1.88rem] sm:w-1/2 sm:mt-0">
            <?php if (!empty($About['title'])): ?>
                <h2 class="section-sec-heading">
                    <?php echo $About['title']; ?>
                </h2>
            <?php endif; ?>
            <?php if (!empty($About['description'])): ?>
                <div class="lg:mt-7.5 mt-5 space-y-3 section-sec-description sm:pr-28">
                    <?php echo $About['description']; ?>
                </div>
            <?php endif; ?>
            <div class="flex flex-wrap w-full gap-6 lg:mt-10 mt-[1.88rem] ">
                <?php if (!empty($About['cta']['url'])): ?>
                    <a href="<?php echo $About['cta']['url']; ?>"
                        class="flex items-center justify-center gap-2 btn btn-primary">
                        <?php echo $About['cta']['title']; ?>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 ml-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M15 16l4 -4" />
                                <path d="M15 8l4 4" />
                            </svg>
                        </span>
                    </a>
                <?php endif; ?>
                <?php if (!empty($About['cta_2']['url'])): ?>
                    <a href="<?php echo $About['cta_2']['url']; ?>"
                        class="flex items-center justify-center gap-2 btn btn-primary">
                        <?php echo $About['cta_2']['title']; ?>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 ml-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M15 16l4 -4" />
                                <path d="M15 8l4 4" />
                            </svg>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="flex items-center justify-end w-full sm:w-1/2">
            <?php if (!empty($About['image']['url'])): ?>
                <div class="relative">
                    <img src="<?php echo $About['image']['url']; ?> " alt=""
                        class=" sm:h-[21rem] h-auto w-auto relative rounded-full object-cover">
                    <div
                        class=" sm:h-18 sm:w-18 h-10 w-10 bg-[#bbbef4] rounded-full absolute sm:top-0 top-4 sm:right-5 right-0 -z-50">
                    </div>
                    <div
                        class="absolute bottom-0 w-20 h-20 rounded-full sm:h-28 sm:w-28 bg-primaryLight sm:left-0 -left-3 -z-50">
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>