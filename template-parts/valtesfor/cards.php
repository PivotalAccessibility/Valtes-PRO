<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$cards = valtes_get_field('cards', []);

?>

<section class="py-20 container flex flex-col items-center">
    <div class=" grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-3">
    <?php foreach($cards['cards'] as $card): ?>
        <div class=" flex flex-col items-start">
            <div class="h-40 w-full rounded-full">
                <img src="<?php echo $card['image']['url']; ?>" alt="<?php echo $card['image']['alt']; ?>" class=" h-40 w-full rounded-full bg-red-500 object-cover">
            </div>
            <h2 class=" mt-5 text-base font-bold">
                <?php echo $card['title']; ?>
            </h2>
            <p class=" mt-5 font-normal text-sm">
                <?php echo $card['description']; ?>
            </p>
        </div>
    <?php endforeach; ?>
    </div>
    <div class=" mt-20 w-[60%]">
        <div class=" flex items-start">
            <img src="<?php echo $cards['user_image']['url'] ?>" alt="<?php echo $cards['user_image']['alt'] ?>" class=" h-32 w-32 rounded-full bg-gray-500 object-cover">
            <div class=" ml-5 mt-3">
                <p class=" font-bold">
                    <?php echo $cards['user_review']; ?>
                </p>
                <h3 class=" mt-3 font-normal text-sm">
                    <?php echo $cards['user_name']; ?>
                </h3>
            </div>
        </div>
    </div>
</section>