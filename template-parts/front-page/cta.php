<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$cta = valtes_get_field('cta', []);

?>

<section class=" flex flex-col justify-center items-center py-20 max-w-4xl mx-auto 2xl:max-w-5xl container">
    <h2 class=" font-bold text-3xl text-center">
        <?php echo $cta['title']; ?>
    </h2>
    <p class=" font-normal mt-5 text-center text-sm">
        <?php echo $cta['description']; ?>
    </p>

    <div class=" flex flex-wrap sm:flex-nowrap items-center justify-around mt-10 w-full">

        <!-- Phone tilted left -->
        <div class= " relative">

            <!-- blue dot -->
            <div class=" h-6 w-6 bg-[#2B37DC] rounded-full absolute top-0 right-0"></div>
            <div class=" h-40 w-40 bg-[#F0F5FF] rounded-full absolute -bottom-5 left-2"></div>
            <div class="relative">
                <img src="<?php echo $cta['left_image']['url']; ?>" alt="<?php echo $cta['left_image']['alt']; ?>" class=" h-[220px] w-[150px] !z-50">
            </div>

        </div>

        <!-- QR div -->
        <div class=" sm:flex flex-col items-center justify-center hidden">
            <img src="<?php echo valtes_assets('images/arrow.svg') ?>" alt="" class="h-9 w-9">
            <img src="<?php echo $cta['qr_image']['url']; ?>" alt="<?php echo $cta['qr_image']['alt']; ?>" class="h-40 w-40 mt-5">
        </div>

        <!-- Phone tilted right -->
        <div class=" relative">
            <!-- blue dot -->
            <div class=" h-16 w-16 bg-[#2B37DC] rounded-full absolute -left-5 bottom-0"></div>
            <div class=" h-36 w-36 bg-[#E2ECFF] rounded-full absolute top-0 -right-5"></div>
            <div class="relative">
                <img src="<?php echo $cta['right_image']['url']; ?>" alt="<?php echo $cta['right_image']['alt']; ?>" class=" sm:h-[250px] h-56 sm:w-[180px] w-auto">
            </div>

        </div>
    </div>

    <div class=" flex mt-10">
        <div>
            <a href="<?php echo $cta['appstore_link']; ?>">
                <img src="<?php echo $cta['appstore_image']['url']; ?>" alt="<?php echo $cta['appstore_image']['alt']; ?>" class=" h-10 w-auto">
            </a>
        </div>
        <div>
            <a href="<?php echo $cta['googleplay_link']; ?>">
                <img src="<?php echo $cta['googleplay_image']['url']; ?>" alt="<?php echo $cta['googleplay_image']['alt']; ?>" class=" h-10 w-auto ml-5">
            </a>
        </div>
    </div>

</section>
