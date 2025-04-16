<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if ($args) {
    extract($args);
}
$clients = valtes_get_field('clients', []);
?>


<section class="md:pb-32 pb-[3.75rem]">
    <div class="flex flex-col items-center lg:px-[1.8rem] gap-7.5 justify-center">
        <?php if (!empty($clients['heading'])): ?>
            <h2 class="text-center section-sec-heading">
                <?php echo $clients['heading']; ?>
            </h2>
        <?php endif; ?>
        <div class="w-full overflow-x-auto">
            <div
                class="flex grid-cols-1 gap-[3.75rem] sm:grid lg:grid-cols-9 md:grid-cols-5 sm:grid-cols-3 md:space-x-0 md:pb-0 imageSlider">
                <?php foreach ($clients['clients'] as $index => $clientlogo): ?>
                    <?php if (!empty($clientlogo['image']['url'])): ?>
                        <div class="flex items-center justify-center flex-shrink-0 w-auto sm:flex-shrink">
                            <img src="<?php echo $clientlogo['image']['url']; ?>" alt="<?php echo $clientlogo['image']['alt']; ?>"
                                class="w-auto">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>