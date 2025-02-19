<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$municipalities = valtes_get_field('municipalities', []);

?>

<section class="bg-[#f0f5ff] py-10">
    <div class="flex flex-col items-center justify-center mt-8">
        <?php if(!empty($municipalities['heading'])): ?>
        <h2 class="text-3xl font-bold text-gray-800">
            <?php echo $municipalities['heading']; ?>
        </h2>
        <?php endif; ?>
        <div class=" grid lg:grid-cols-9 md:grid-cols-6 sm:grid-cols-3 grid-cols-1 gap-8 mt-10 px-5">
            <?php foreach($municipalities['clients'] as $index => $municipalitie): ?>
            <?php if(!empty($municipalitie['image']['url'])): ?>
            <div class="w-auto flex items-center justify-center">
                <img src="<?php echo $municipalitie['image']['url']; ?>"
                    alt="<?php echo $municipalitie['image']['alt']; ?>" class=" w-auto h-16">
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>