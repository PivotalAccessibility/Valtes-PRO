<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if ($args) {
    extract($args);
}

$hero = valtes_get_field('hero', [
    'title' =>  'We delen de zorg met zorgorganisaties',
    'description' => 'We voeren innovatie- en pilottrajecten uit met zorginstellingen en kennisinstituten. Deze projecten richten zich op de zorgtechnologie van morgen, waarmee we proactieve oplossingen ontwikkelen.',
    'cta' => [
        'url' => '#',
        'title' => 'Neem contact op met ons'
    ],
    'image' => [
        'url' => 'https://img.freepik.com/free-photo/abstract-autumn-beauty-multi-colored-leaf-vein-pattern-generated-by-ai_188544-9871.jpg',
        'alt' => '',
    ],

]);
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
                    <div class="section-description leading-6">
                        <?php echo $hero['description']; ?>
                    </div>
                <?php endif; ?>
                <div class="flex flex-wrap mt-8 gap-5">
                    <?php if (!empty($hero['cta']['url'])): ?>
                        <a href="<?php echo $hero['cta']['url']; ?>" class="btn btn-primary">
                            <?php echo $hero['cta']['title']; ?>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($hero['cta2']['url'])): ?>
                        <a href="<?php echo $hero['cta2']['url']; ?>" class="btn btn-outline flex">
                            <img src="<?php echo valtes_assets('images/up-right-from-square.svg') ?>" alt="">
                            <?php echo $hero['cta2']['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
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
    </div>
    </div>
</section>