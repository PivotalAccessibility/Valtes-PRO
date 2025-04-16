<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$clients = valtes_get_field('clients', []);

?>

<section class="bg-primaryLight py-20">
    <div class="flex flex-col items-center justify-center">
        <?php if (!empty($clients['title'])): ?>
            <h2 class="text-center section-sec-heading">
                <?php echo $clients['title']; ?>
            </h2>
        <?php endif; ?>
        <div class="w-full mt-10 overflow-x-auto">
            <div class="flex grid-cols-1 gap-12 pb-5 space-x-5 sm:grid lg:grid-cols-7 md:grid-cols-5 sm:grid-cols-3 md:space-x-0 md:pb-0 imageSlider">
                <?php foreach ($clients['images'] as $index => $image): ?>
                    <?php if (!empty($image['image']['url'])): ?>
                        <div class="flex items-center justify-center flex-shrink-0 w-auto sm:flex-shrink">
                            <img src="<?php echo $image['image']['url']; ?>" alt="<?php echo $image['image']['alt']; ?>" class="w-auto h-16 object-contain">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>