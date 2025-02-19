<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if ($args) {
    extract($args);
}

$explain = valtes_get_field('explaination', []);

?>

<section class="bg-primaryLight py-16">
    <div class="container flex flex-col items-center justify-center px-5 sm:px-5 xl:px-0">
        <?php if (!empty($explain['title'])): ?>
            <h2 class="section-heading">
                <?php echo $explain['title']; ?>
            </h2>
        <?php endif; ?>
        <?php if (!empty($explain['description'])): ?>
            <p class="mt-5 text-center sm:w-[65%] section-description">
                <?php echo $explain['description']; ?>
            </p>
        <?php endif; ?>
            <?php if (!empty($explain['image']['url'])): ?>
                <div class="mt-5 sm:mt-10">
                    <img src="<?php echo $explain['image']['url']; ?>" alt="<?php echo $explain['image']['alt']; ?>" class=" h-96 w-auto">
                </div>
            <?php endif; ?>
        <div class="w-full">
            <div class="flex mt-10 gap-6 justify-end">
                <?php if (!empty($explain['appstore_link'])): ?>
                    <div>
                        <a href="<?php echo $explain['appstore_link']; ?>">
                            <img src="<?php echo $explain['appstore_image']['url']; ?>" alt="<?php echo $explain['appstore_image']['alt']; ?>" class="w-auto h-10">
                        </a>
                    </div>
                <?php endif; ?>
                <?php if (!empty($explain['googleplay_link'])): ?>
                    <div>
                        <a href="<?php echo $explain['googleplay_link']; ?>">
                            <img src="<?php echo $explain['googleplay_image']['url']; ?>" alt="<?php echo $explain['googleplay_image']['alt']; ?>" class="w-auto h-10">
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>






