<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$data = valtes_get_field('intro', []);

?>

<section class="bg-primaryLight py-24 md:px-20 px-4 max-md:pb-8">
    <div class="flex flex-col justify-center items-center gap-6 container md:mt-8 mt-4">
        <?php if (!empty($data['title'])): ?>
            <h1 class="section-heading text-center sm:mt-10">
                <?php echo $data['title']; ?>
            </h1>
        <?php endif; ?>
        <?php if (!empty($data['description'])): ?>
            <p class="section-description sm:w-[60%] w-full text-center">
                <?php echo $data['description']; ?>
            </p>
        <?php endif; ?>
    </div>
</section>