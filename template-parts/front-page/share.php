<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$share = valtes_get_field('share', []);

?>

<section class=" container py-20 flex flex-col items-center px-5 sm:px-0">
    <?php if(!empty($share['title'])): ?>
    <h2 class="section-sec-heading text-center">
        <?php echo $share['title']; ?>
    </h2>
    <?php endif; ?>
    <?php if(!empty($share['description'])): ?>
    <p class=" section-description mt-5">
        <?php echo $share['description']; ?>
    </p>
    <?php endif; ?>
    <div class=" mt-10 grid lg:grid-cols-2 grid-cols-1 gap-4">
        <?php foreach($share['cards'] as $card): ?>
        <a href="<?php echo $card['link']['url']; ?>"
            class=" md:w-auto w-full md:rounded-full rounded-t-[60px] rounded-b-3xl border-2 border-[#6997ff] p-2 flex md:flex-row flex-col items-center hover:bg-[#f0f5ff] group">
            <img src="<?php echo $card['image']['url']; ?>" alt="<?php echo $card['image']['alt']; ?>"
                class=" h-40 md:w-48 w-full rounded-full">
            <div class="px-5 md:w-96 mt-4 md:mt-0">
                <h3 class=" font-bold md:text-xl text-base text-primary group-hover:underline group-hover:text-[#6997ff]">
                    <?php echo $card['link']['title']; ?>
                </h3>
                <p class=" font-normal mt-2 group-hover:text-[#6997ff] text-base">
                    <?php echo $card['para']; ?>
                </p>
            </div>
            <span class=" pr-10 hidden md:block">
                <img src="<?php echo valtes_assets('images/top-right-arrow.svg') ?>" alt="">
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</section>