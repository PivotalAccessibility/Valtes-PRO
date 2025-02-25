<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$hero = valtes_get_field('hero', [
    'title' => 'We delen de zorg met communicatiepartners',
    'description' => 'Bij Valtes geloven we dat sterke communicatie essentieel is om mantelzorgers de juiste informatie en ondersteuning te bieden. Als communicatiepartner speel je een cruciale rol in het bereiken van mantelzorgers die vaak buiten beeld blijven. En het kost bijna geen tijd. Wij voorzien je van communicatie-materiaal.',
    'image' => [
        'url' => valtes_assets('/images/hero.png'),
        'alt' => ''
    ],
    'cta' => [
        'url' => '#',
        'title' => 'Neem contact op met ons'
    ],
]);


?>

<section class="sm:pb-0">
    <div class="container flex flex-col-reverse px-4 md:flex md:flex-wrap md:flex-row md:px-5">
        <div class="flex items-center justify-start h-auto p-0 mt-5 sm:mt-20 xl:w-1/2 sm:w-full xl:mt-12 md:mt-20">
            <div class="w-full sm:pr-24 lg:w-auto" dir="ltr">
                <?php if (!empty($hero['title'])): ?>
                    <h1 class="mb-6 section-heading">
                        <?php echo $hero['title']; ?>
                    </h1>
                <?php endif; ?>
                <?php if (!empty($hero['description'])): ?>
                    <p class="mt-6 text-base font-normal">
                        <?php echo $hero['description']; ?>
                    </p>
                <?php endif; ?>
                <div class="flex flex-wrap gap-5 mt-8">
                    <?php if (!empty($hero['cta']['url'])): ?>
                        <a href="<?php echo $hero['cta']['url']; ?>" class="btn btn-primary">
                            <?php echo $hero['cta']['title']; ?>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($hero['cta2']['url'])): ?>
                        <a href="<?php echo $hero['cta2']['url']; ?>" class="flex btn btn-outline">
                            <img src="<?php echo valtes_assets('images/up-right-from-square.svg') ?>" alt="">
                            <?php echo $hero['cta2']['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="flex justify-center h-auto mt-32 xl:w-1/2 sm:w-full xl:justify-start xl:mt-0">
            <div class="relative 2xl:left-16 -top-7 lg:-top-16">
                <div class="rounded-full h-[18rem] w-[18rem] md:h-[40rem] md:w-[40rem] overflow-hidden">
                    <img src="<?php echo $hero['image']['url']; ?>" class="object-cover w-full h-full"
                        alt="<?php echo $hero['image']['alt']; ?>">
                </div>
                <img src="<?php echo valtes_assets('images/Ellipse-2.svg') ?>"
                    class="absolute w-full h-full -bottom-3/20 -left-1/14" alt="">
                <img src="<?php echo valtes_assets('images/Ellipse-3.svg') ?>"
                    class="absolute w-full h-full -bottom-1/6 -left-1/7" alt="">

            </div>
        </div>
    </div>
    </div>
</section>