<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$form = valtes_get_field('form', []);

?>

<section class="container sm:mt-0 mt-5 px-5 sm:px-5 xl:px-0 py-20">
    <?php if(!empty($form['section_heading'])): ?>
    <h1 class="text-2xl font-bold text-center">
        <?php echo $form['section_heading']; ?>
    </h1>
    <?php endif; ?>
    <div class="flex flex-col md:flex-row gap-4 mt-10">
        <div class="w-full pt-5 sm:pt-0 md:w-1/2 flex flex-col items-start">
            <div class="w-full bg-[#f0f5ff] flex flex-col items-start p-5 rounded-2xl">
                <?php if(!empty($form['form_title'])): ?>
                <h2 class="font-bold text-lg">
                    <?php echo $form['form_title']; ?>
                </h2>
                <?php endif; ?>
                <?php if(!empty($form['form_description'])): ?>
                <p class="section-description mt-5">
                    <?php echo $form['form_description']; ?>
                </p>
                <?php endif; ?>

                <?php if(!empty($form['email']['url'])): ?>
                <div class=" w-full mt-5">
                    <a href="<?php echo $form['email']['url']; ?>"
                        class="flex items-center text-base font-bold text-blue-700 w-full underline">
                        <img src="<?php echo valtes_assets('images/message.svg') ?>" alt="" class="h-5 w-5 mr-4">
                        <?php echo $form['email']['title']; ?>
                    </a>
                </div>
                <?php endif; ?>

                <?php if(!empty($form['phone_number']['url'])): ?>
                <div class=" w-full mt-3">
                    <a href="<?php echo $form['phone_number']['url']; ?>"
                        class="flex items-center text--base font-bold text-blue-700 w-full underline">
                        <img src="<?php echo valtes_assets('images/phone.svg') ?>" alt="" class=" h-5 w-5 mr-4">
                        <?php echo $form['phone_number']['title']; ?>
                    </a>
                </div>
                <?php endif; ?>

                <?php if(!empty($form['linkedin']['url'])): ?>
                <div class=" w-full mt-3">
                    <a href="<?php echo $form['linkedin']['url']; ?>"
                        class="flex items-center text-base font-bold text-blue-700 w-full underline">
                        <img src="<?php echo valtes_assets('images/linkedin.svg') ?>" alt="" class=" h-5 w-5 mr-4">
                        <?php echo $form['linkedin']['title']; ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if(!empty($form['form_shortcode'])): ?>
        <div class="w-full sm:w-1/2 sm:ml-10 mt-2">
            <?php echo do_shortcode($form['form_shortcode']); ?>
        </div>
        <?php endif; ?>

    </div>
</section>