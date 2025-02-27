<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$intro = valtes_get_field('intro', []);

?>

<section class="pb-10">
    <div class="container px-6 md:mt-36 mt-10">
        <div class="flex flex-col justify-center items-center">
            <?php if(!empty($intro['heading'])): ?>
            <h1 class="text-center section-heading"><?php echo $intro['heading'] ?></h1>
            <?php endif ?>
            <?php if(!empty($intro['description'])): ?>
            <p class="text-center section-description lg:w-1/2 w-full mt-5"><?php echo $intro['description'] ?></p>
            <?php endif ?>
        </div>
    </div>
</section>