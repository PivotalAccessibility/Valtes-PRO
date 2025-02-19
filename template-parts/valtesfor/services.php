<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$services = valtes_get_field('services', []);

?>

<section class="bg-[#f0f5ff] py-10">
    <div class="flex flex-col items-center container">
        <h2 class=" section-heading">
            <?php echo $services['heading'] ?>
        </h2>
        <p class=" section-description mt-5 w-full sm:w-[70%] text-center">
            <?php echo $services['description'] ?>
        </p>
        <div class=" mt-5 hidden sm:block">
            <img src="<?php echo $services['image']['url'] ?>" alt="<?php echo $services['image']['alt'] ?>" class="h-[40rem] w-auto">
        </div>
    </div>
</section>