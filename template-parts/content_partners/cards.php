<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}


$card = valtes_get_field('card', []);

?>



<section class="" name="valtes-card">
    <div class="container md:py-[7.5rem] py-14">
        <div class="flex flex-col md:gap-[7.5rem] gap-[1.88rem]">
            <?php foreach ($card['cards'] as $index => $item): ?>
                <div class="">
                    <?php if ($index % 2 == 0): ?>
                        <div class="flex flex-col md:gap-32 gap-[1.88rem] px-3 lg:flex-row lg:px-0">
                            <div class="flex flex-row justify-center w-full md:w-1/2 md:justify-start">
                                <div class="relative w-full">
                                    <?php if (!empty($item['image']['url'])): ?>
                                        <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>" class="w-full z-10">
                                    <?php endif; ?>
                                    <div class="absolute h-[7.43425rem] w-[7.43425rem] rounded-full hidden lg:block bg-jobborder top-1 right-1 -z-20">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-start justify-center w-full gap-4 pr-0 lg:pr-32 md:gap-10 lg:w-1/2">
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
                        <div class="flex flex-col-reverse px-3 gap-[1.88rem] md:gap-0 lg:flex-row lg:px-0">
                            <div class="flex flex-col items-start justify-center w-full gap-4 pr-0 mt-5 md:gap-10 lg:w-1/2 lg:mt-0 lg:pr-32">
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
                                <div class="relative">
                                    <?php if (!empty($item['image']['url'])): ?>
                                        <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>" class="">
                                    <?php endif; ?>
                                        <div class="absolute h-[8.75rem] w-[8.75rem] rounded-full hidden lg:block bg-[#E0E3ED] bottom-1 right-1 -z-20">
                                        </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>