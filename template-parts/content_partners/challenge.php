<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}


$challenge = valtes_get_field('challenge', []);

?>

<section class="bg-primaryLight">
    <div class="container flex flex-col items-center gap-10 py-10 md:py-20 ">
        <?php if (!empty($challenge['heading'])): ?>
            <h2 class="text-center section-sec-heading">
                <?php echo $challenge['heading'] ?>
            </h2>
        <?php endif; ?>
        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($challenge['challenges'] as $index => $challenge): ?>
                <div class="flex flex-col items-center gap-4">
                    <?php if (!empty($challenge['counter'])): ?>
                        <span class="counter">
                            <span class="counter-count" data-target="<?php echo $challenge['counter']; ?>">0</span>%
                        </span>
                    <?php endif; ?>
                    <?php if (!empty($challenge['description'])): ?>
                        <p class="w-full leading-6 text-center section-description md:leading-7">
                            <?php echo $challenge['description'] ?>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>