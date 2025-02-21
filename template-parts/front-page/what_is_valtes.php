<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


?>

<section class=" container md:py-20 py-10 md:px-5 px-4">
    <div class=" flex flex-wrap-reverse sm:flex-nowrap ">
        <div class=" sm:w-1/2 w-full flex flex-col items-start justify-center sm:mt-0 mt-10">
            <?php if (!empty($args['title'])): ?>
                <h2 class="section-sec-heading">
                    <?php echo $args['title']; ?>
                </h2>
            <?php endif; ?>
            <?php if (!empty($args['description'])): ?>
                <div class=" font-normal mt-5 text-base space-y-3 sm:pr-28 leading-5">
                    <?php echo $args['description']; ?>
                </div>
            <?php endif; ?>
            <div class=" flex mt-5 w-full gap-6 flex-wrap">
                <?php if (!empty($args['cta']['url'])): ?>
                    <a href="<?php echo $explain['cta']['url']; ?>" class="btn btn-primary flex justify-center items-center gap-2">
                        <?php echo $args['cta']['title']; ?>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 ml-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M15 16l4 -4" />
                                <path d="M15 8l4 4" />
                            </svg>
                        </span>
                    </a>
                <?php endif; ?>
                <?php if (!empty($args['cta_2']['url'])): ?>
                    <a href="<?php echo $args['cta_2']['url']; ?>" class="btn btn-primary flex justify-center items-center gap-2">
                        <?php echo $args['cta_2']['title']; ?>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 ml-2">
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
        <div class=" sm:w-1/2 w-full flex items-center justify-end">
            <?php if (!empty($args['image']['url'])): ?>
                <div class="relative">
                    <img src="<?php echo $args['image']['url']; ?> " alt="" class=" sm:h-[21rem] h-auto w-auto relative rounded-full object-cover">
                    <div class=" sm:h-18 sm:w-18 h-10 w-10 bg-[#bbbef4] rounded-full absolute sm:top-0 -top-1 sm:right-5 right-0 -z-50"></div>
                    <div class=" sm:h-28 sm:w-28 h-20 w-20 bg-primaryLight rounded-full absolute bottom-0 sm:left-0 -left-3 -z-50"></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>