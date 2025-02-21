<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$cards = valtes_get_field('cards', []);

?>

<section class="md:py-20 py-10 container flex flex-col items-center px-5 sm:px-0">
    <div class=" grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
    <?php foreach($cards['cards'] as $card): ?>
        <div class=" flex flex-col items-start">
            <div class="w-full rounded-full">
                <img src="<?php echo $card['image']['url']; ?>" alt="<?php echo $card['image']['alt']; ?>" class=" h-56 w-full rounded-full object-cover">
            </div>
            <h2 class=" mt-5 text-2xl font-bold text-black">
                <?php echo $card['title']; ?>
            </h2>
            <p class=" mt-5 font-normal text-base text-black leading-6">
                <?php echo $card['description']; ?>
            </p>
        </div>
    <?php endforeach; ?>
    </div>
    <div class=" mt-20 md:w-[80%]">
        <div class=" flex md:flex-nowrap flex-wrap md:items-start items-center justify-center">
            <img src="<?php echo $cards['user_image']['url'] ?>" alt="<?php echo $cards['user_image']['alt'] ?>" class=" md:h-52 md:w-52 h-24 w-24 rounded-full bg-gray-500 object-cover">
            <div class=" md:ml-5 mt-5">
                <p class=" font-bold text-black text-2xl">
                    <?php echo $cards['user_review']; ?>
                </p>
                <h3 class=" mt-3 font-normal text-base text-black">
                    <?php echo $cards['user_name']; ?>
                </h3>
            </div>
        </div>
    </div>
</section>