<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$municipalities = valtes_get_field('municipalities', []);

?>

<section class="bg-primaryLight py-10">
    <div class="flex flex-col items-center justify-center">
        <?php if (!empty($municipalities['heading'])): ?>
            <h2 class="section-sec-heading text-center">
                <?php echo $municipalities['heading']; ?>
            </h2>
        <?php endif; ?>
        <div class="mt-10 w-full overflow-x-auto">
            <div class="flex sm:grid lg:grid-cols-9 md:grid-cols-6 sm:grid-cols-3 grid-cols-1 gap-4 space-x-5 md:space-x-0 pb-5 md:pb-0 imageSlider">
                <?php foreach ($municipalities['clients'] as $index => $image): ?>
                    <?php if (!empty($image['image']['url'])): ?>
                        <div class="w-auto flex items-center justify-center flex-shrink-0 sm:flex-shrink">
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