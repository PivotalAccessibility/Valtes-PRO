<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$data = valtes_get_field('intro',[]);

?>

<section class="bg-[#f0f5ff] pt-28 pb-16">
    <div class="flex flex-col justify-center items-center gap-4 max-w-4xl mx-auto 2xl:max-w-5xl container">
        <h1 class="text-3xl font-bold text-center">
            <?php echo $data['title']; ?>
        </h1>
        <p class="leading-5 text-base w-[80%] text-center">
            <?php echo $data['description']; ?>
        </p>
    </div>
</section>