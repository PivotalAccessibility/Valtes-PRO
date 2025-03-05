<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$share = valtes_get_field('share', []);

?>

<section class="container flex flex-col items-center px-5 py-0 md:py-[7.5rem] sm:px-0">
    <?php if (!empty($share['title'])): ?>
        <h2 class="text-center section-sec-heading">
            <?php echo $share['title']; ?>
        </h2>
    <?php endif; ?>
    <?php if (!empty($share['description'])): ?>
        <p class="mt-2 text-center md:mt-10 section-description">
            <?php echo $share['description']; ?>
        </p>
    <?php endif; ?>
    <div class="grid grid-cols-1 gap-5 mt-10 md:gap-11 lg:grid-cols-2">
        <?php foreach ($share['cards'] as $card): ?>
            <a href="<?php echo $card['link']['url']; ?>" class=" md:w-auto w-full md:rounded-full rounded-t-[60px] rounded-b-3xl border-2 border-jobborder p-3 flex md:flex-row flex-col items-center hover:bg-primaryLight group" target="_blank">
                <img src="<?php echo $card['image']['url']; ?>" alt="<?php echo $card['image']['alt']; ?>" class="w-full h-24 md:h-40 rounded-[60px] md:rounded-full md:w-48 object-cover">
                <div class="flex items-center justify-between gap-5">
                    <div class="md:px-5 mt-4 md:mt-0">
                        <h3 class="text-base font-bold md:text-xl text-black group-hover:underline group-hover:text-jobborder">
                            <?php echo $card['link']['title']; ?>
                        </h3>
                        <p class="mt-2 text-base font-normal md:mt-3 group-hover:underline group-hover:text-jobborder">
                            <?php echo $card['para']; ?>
                        </p>
                    </div>
                    <span class="w-10">
                        <img src="<?php echo valtes_assets('images/top-right-arrow.svg') ?>" alt="" class="size-[1.12475rem] md:size-[1.125rem]">
                    </span>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>