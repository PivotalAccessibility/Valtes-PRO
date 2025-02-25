<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if ($args) {
    extract($args);
}

$hero = valtes_get_field('hero', []);
?>

<section class="pb-5 sm:pb-0">
    <div class="container flex flex-col-reverse 
    md:flex md:flex-wrap md:flex-row
    md:px-5 px-4">
        <div class="flex items-center justify-start h-auto p-0 sm:mt-20 mt-5 xl:w-1/2 sm:w-full xl:mt-12 md:mt-20">
            <div class=" sm:pr-24" dir="ltr">
                <?php if (!empty($hero['title'])): ?>
                    <h1 class="mb-6 section-heading">
                        <?php echo $hero['title']; ?>
                    </h1>
                <?php endif; ?>
                <?php if (!empty($hero['description'])): ?>
                    <div class="section-description">
                        <?php echo $hero['description']; ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($hero['cta']['url'])): ?>
                    <div class="flex sm:flex-nowrap flex-wrap sm:space-x-6 mt-5">
                        <a href="<?php echo $hero['cta']['url']; ?>" class="btn btn-primary">
                            <?php echo $hero['cta']['title']; ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if (!empty($hero['image']['url'])): ?>
            <div class="flex justify-center h-auto xl:w-1/2 sm:w-full xl:justify-start mt-32 xl:mt-0">
                <div class="relative 2xl:left-16 -top-7 lg:-top-16">
                    <div class="rounded-full h-[18rem] w-[18rem] md:h-[40rem] md:w-[40rem] overflow-hidden">
                        <img src="<?php echo $hero['image']['url']; ?>" class="object-cover w-full h-full" alt="<?php echo $hero['image']['alt']; ?>">
                    </div>
                    <img src="<?php echo valtes_assets('images/Ellipse-2.svg') ?>" class="
                absolute h-full w-full
                -bottom-3/20 -left-1/14
                " alt="">
                    <img src="<?php echo valtes_assets('images/Ellipse-3.svg') ?>" class="
                absolute h-full w-full
                -bottom-1/6 -left-1/7
                " alt="">
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>