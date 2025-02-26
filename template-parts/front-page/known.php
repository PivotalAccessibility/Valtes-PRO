<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$known = valtes_get_field('known', []);

?>

<section class="bg-primaryLight md:py-20 py-10 md:my-0 my-[3.75rem]">
    <div class="container flex flex-col items-center justify-center">
        <?php if (!empty($known['title'])): ?>
            <h2 class="text-center section-sec-heading">
                <?php echo $known['title']; ?>
            </h2>
        <?php endif; ?>
        <div class="w-full px-5 mt-10 overflow-x-auto">
            <div class="flex grid-cols-1 gap-[1.88rem] md:gap-[6.75rem] pb-5 space-x-5 sm:grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 md:space-x-0 md:pb-0">
                <?php foreach ($known['images'] as $index => $image): ?>
                    <?php if (!empty($image['image']['url'])): ?>
                        <div class="flex items-center justify-center flex-shrink-0 w-auto sm:flex-shrink">
                            <img src="<?php echo $image['image']['url']; ?>" 
                                 alt="<?php echo $image['image']['alt']; ?>" 
                                 class="w-auto h-16 object-contain">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
