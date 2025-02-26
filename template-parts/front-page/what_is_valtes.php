<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


?>

<section class="container px-4 py-10 md:py-20 md:px-5">
    <div class="flex flex-wrap-reverse sm:flex-nowrap">
        <div class="flex flex-col items-start justify-center w-full mt-10 sm:w-1/2 sm:mt-0">
            <?php if (!empty($args['title'])): ?>
                <h2 class="section-sec-heading">
                    <?php echo $args['title']; ?>
                </h2>
            <?php endif; ?>
            <?php if (!empty($args['description'])): ?>
                <div class="mt-5 section-sec-description">
                    <?php echo $args['description']; ?>
                </div>
            <?php endif; ?>
            <div class="flex flex-wrap w-full gap-6 mt-5">
                <?php if (!empty($args['cta']['url'])): ?>
                    <a href="<?php echo $explain['cta']['url']; ?>" class="flex items-center justify-center gap-2 btn btn-primary">
                        <?php echo $args['cta']['title']; ?>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 ml-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M15 16l4 -4" />
                                <path d="M15 8l4 4" />
                            </svg>
                        </span>
                    </a>
                <?php endif; ?>
                <?php if (!empty($args['cta_2']['url'])): ?>
                    <a href="<?php echo $args['cta_2']['url']; ?>" class="flex items-center justify-center gap-2 btn btn-primary">
                        <?php echo $args['cta_2']['title']; ?>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 ml-2">
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
            <?php if (!empty($args['image']['url'])): ?>
                <div class="relative">
                    <img src="<?php echo $args['image']['url']; ?> " alt="" class=" sm:h-[21rem] h-auto w-auto relative rounded-full object-cover">
                    <div class=" sm:h-18 sm:w-18 h-10 w-10 bg-[#bbbef4] rounded-full absolute sm:top-0 -top-1 sm:right-5 right-0 -z-50"></div>
                    <div class="absolute bottom-0 w-20 h-20 rounded-full sm:h-28 sm:w-28 bg-primaryLight sm:left-0 -left-3 -z-50"></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>