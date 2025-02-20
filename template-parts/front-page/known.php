<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$known = valtes_get_field('known', []);

?>

<section class="bg-[#f0f5ff] py-10">
    <div class="flex flex-col items-center justify-center container">
        <?php if(!empty($known['title'])): ?>
        <h2 class="section-sec-heading text-center">
            <?php echo $known['title']; ?>
        </h2>
        <?php endif; ?>
        <div class=" grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-1 gap-4 mt-10">
            <?php foreach($known['images'] as $index => $image): ?>
            <?php if(!empty($image['image']['url'])): ?>
            <div class="w-auto flex items-center justify-center">
                <img src="<?php echo $image['image']['url']; ?>" alt="<?php echo $image['image']['alt']; ?>"
                    class=" w-auto h-16">
            </div>
            <?php endif;?>
            <?php endforeach; ?>
        </div>
    </div>
</section>