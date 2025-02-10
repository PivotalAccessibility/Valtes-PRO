<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}


$experts = valtes_get_field('expert_content', [])

?>

<section class=" max-w-4xl mx-auto 2xl:max-w-5xl container py-20 px-5 sm:px-0">
    <div class=" sm:flex items-center justify-center">
        <div class=" sm:w-1/2 flex items-center justify-center">
            <img src="<?php echo $experts['images']['url']; ?>" alt="" class=" w-auto h-72">
        </div>
        <div class=" sm:w-1/2 mt-5 sm:mt-0">
            <h2 class=" font-semibold text-3xl">
                <?php echo $experts['title']; ?>
            </h2>
            <p class=" font-normal mt-5 text-xs space-y-3 leading-4.5 whitespace-pre-line sm:pr-10">
                <?php echo $experts['description']; ?>
            </p>
        </div>
    </div>
</section>