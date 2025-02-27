<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if ($args) {
    extract($args);
}

$Explain = valtes_get_field('explanation', []);

?>


<section class="bg-primaryLight">
    <div class="container px-5 lg:pt-20 py-10 lg:pb-[3.13rem] lg:px-0">
        <div class="flex flex-wrap justify-center">
            <?php if (!empty($Explain['title'])): ?>
                <h2 class="text-center section-sec-heading">
                    <?php echo $Explain['title']; ?>
                </h2>
            <?php endif; ?>
            <?php if (!empty($Explain['description'])): ?>
                <p class="text-center sm:w-[52.0625rem] lg:mt-[1.87rem] mt-5 section-description">
                    <?php echo $Explain['description']; ?>
                </p>
            <?php endif; ?>
        </div>
        <?php if (!empty($Explain['image']['url'])): ?>
            <div class="flex justify-center w-auto lg:w-[59.125rem] mx-auto lg:pt-10 lg:pb-5 py-8">
                <img src="<?php echo $Explain['image']['url']; ?>" class="" alt="<?php echo $Explain['image']['alt']; ?>">
            </div>
        <?php endif; ?>
        <div class="flex items-center justify-center gap-10 mx-auto">
            <?php if (!empty($Explain['qr_image']['url'])): ?>
                <img src="<?php echo $Explain['qr_image']['url']; ?>" class="hidden w-8 md:w-24 sm:block"
                    alt="<?php echo $Explain['qr_image']['alt']; ?>">
            <?php endif; ?>
            <?php if (!empty($Explain['appstore_link'])): ?>
                <a href="<?php echo $Explain['appstore_link']; ?>">
                    <img src="<?php echo $Explain['appstore_image']['url']; ?>" class="w-28 md:w-36"
                        alt="<?php echo $Explain['appstore_image']['alt']; ?>">
                </a>
            <?php endif; ?>
            <?php if (!empty($Explain['googleplay_link'])): ?>
                <a href="<?php echo $Explain['googleplay_link']; ?>">
                    <img src="<?php echo $Explain['googleplay_image']['url']; ?>" class="w-28 md:w-36"
                        alt="<?php echo $Explain['googleplay_image']['alt']; ?>">
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>