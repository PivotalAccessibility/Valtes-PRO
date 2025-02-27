<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}


$solution = valtes_get_field('solution', []);

?>


<section class="bg-primaryLight" name="valtes-solution">
    <div class="container py-10 md:py-20 max-md:px-4">
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-col flex-wrap justify-center items-center gap-7">
                <?php if (!empty($solution['title'])): ?>
                    <h2 class="relative z-10 text-center section-sec-heading">
                        <?php echo $solution['title']; ?>
                        <!-- <div class="relative w-full">
                        <svg
                            class="absolute h-2 text-blue-400 -z-9" width="302" height="11"
                            viewBox="0 0 302 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.875 7C100.434 2.92834 197.398 3.07231 297.875 7" stroke="#6997FF"
                                stroke-width="8" stroke-linecap="round" />
                        </svg>
                    </div> -->
                    </h2>
                <?php endif; ?>
                <?php if (!empty($solution['description'])): ?>
                    <p class="section-description text-center lg:w-[75%] w-auto">
                        <?php echo $solution['description']; ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="flex flex-col md:py-20 py-10 gap-7 md:gap-20">
                <?php foreach ($solution['solution_cards'] as $index => $item): ?>
                    <?php if ($index % 2 == 0): ?>
                        <div class="flex flex-col px-3 md:gap-0 gap-7 lg:flex-row lg:px-0">
                            <div class="flex flex-row w-full lg:w-1/2">
                                <div class="relative card-image">
                                    <?php if (!empty($item['image']['url'])): ?>
                                        <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>"
                                            class="relative z-10 object-cover rounded-full size-full">
                                    <?php endif; ?>
                                    <div
                                        class="absolute size-28 rounded-full hidden lg:block bg-jobborder top-1 right-1">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-start justify-center w-full gap-4 md:gap-10 lg:w-1/2 pr-32">
                                <?php if (!empty($item['title'])): ?>
                                    <h2 class="section-sec-heading">
                                        <?php echo $item['title']; ?>
                                    </h2>
                                <?php endif; ?>
                                <?php if (!empty($item['description'])): ?>
                                    <p class="section-sec-description">
                                        <?php echo $item['description']; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="flex flex-col-reverse px-3 md:gap-0 gap-7 lg:flex-row lg:px-0">
                            <div class="flex flex-col items-start justify-center w-full gap-4 md:gap-10 lg:w-1/2 pr-32">
                                <?php if (!empty($item['title'])): ?>
                                    <h2 class="section-sec-heading">
                                        <?php echo $item['title']; ?>
                                    </h2>
                                <?php endif; ?>
                                <?php if (!empty($item['description'])): ?>
                                    <p class="section-sec-description">
                                        <?php echo $item['description']; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="flex flex-row justify-center w-full lg:w-1/2 lg:justify-end lg:items-end">
                                <div class="relative card-image">
                                    <?php if (!empty($item['image']['url'])): ?>
                                        <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>"
                                            class="relative z-10 object-cover rounded-full size-full">
                                    <?php endif; ?>
                                    <div
                                        class="absolute size-36 rounded-full hidden lg:block bg-evenCard bottom-1 right-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="w-full flex justify-center items-center">
                <img src="<?php echo $solution['footer_image']['url']; ?>"
                    alt="<?php echo $solution['footer_image']['alt']; ?>" class="w-auto h-20 object-cover">
            </div>
        </div>
    </div>
</section>