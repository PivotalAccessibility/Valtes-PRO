<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$partners = valtes_get_field('partners', []);
?>

<section class="">
    <div class="container flex flex-col mb-[3.75rem]">
        <h2 class="mx-auto text-center section-sec-heading">
            <?php echo $partners['heading']; ?>
        </h2>
        <div class="relative w-full">
            <div class="grid grid-cols-1 mt-5 md:mt-10 lg:grid-cols-3 mySlider gap-7">

                <?php foreach ($partners['all_partners'] as $partner): ?>

                    <div class="flex flex-col items-center justify-between">

                        <div class=" px-10 flex flex-col items-center justify-center">

                            <?php if (!empty($partner['image']['url'])): ?>
                                <div class="rounded-full h-44 w-44 bg-purple-400">
                                    <img src="<?php echo $partner['image']['url'] ?>" alt="<?php echo $partner['image']['alt'] ?>" class="rounded-full h-44 w-44 object-cover">
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($partner['name'])): ?>
                                <h2 class="font-bold text-center section-description mt-6">
                                    <?php echo $partner['name']; ?>
                                </h2>
                            <?php endif; ?>

                            <?php if (!empty($partner["company_logo"]['url'])): ?>
                                <div class=" py-7">
                                    <img src="<?php echo $partner["company_logo"]['url'] ?>" alt="<?php echo $partner["company_logo"]['alt'] ?>" class="h-auto w-1/2 justify-self-center">
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($partner['description'])): ?>
                                <p class="section-sec-description text-center">
                                    <?php echo wp_trim_words($partner['description'], 10, '...'); ?>
                                </p>
                            <?php endif; ?>
                        </div>

                        <div class="mt-8">
                            <?php if (!empty($partner["company_link"]['url'])): ?>
                                <a href="<?php echo $partner["company_link"]['url'] ?>" class="btn btn-outline flex items-center">
                                    <span class="mr-2">
                                        <img src="<?php echo valtes_assets('images/up-right-from-squares.png') ?>" alt="">
                                    </span>
                                    <?php echo $partner["company_link"]['title'] ?>
                                </a>
                            <?php endif; ?>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>