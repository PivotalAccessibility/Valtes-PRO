<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$logo = valtes_get_field('logo', []);

?>

<section class="bg-[#F0F5FF] lg:py-20 py-[3.75rem]">
    <div class="flex flex-col items-center lg:px-[1.8rem] gap-7.5 justify-center">
        <?php if (!empty($logo['title'])): ?>
            <h2 class="text-center section-sec-heading">
                <?php echo $logo['title']; ?>
            </h2>
        <?php endif; ?>
        <div class="w-full overflow-x-auto">
            <div
                class="flex grid-cols-1 gap-[3.75rem] sm:grid lg:grid-cols-9 md:grid-cols-5 sm:grid-cols-3 md:space-x-0 md:pb-0">
                <?php foreach ($logo['images'] as $index => $image): ?>
                    <?php if (!empty($image['image']['url'])): ?>
                        <div class="flex items-center justify-center flex-shrink-0 w-auto sm:flex-shrink">
                            <img src="<?php echo $image['image']['url']; ?>" alt="<?php echo $image['image']['alt']; ?>"
                                class="w-auto">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>