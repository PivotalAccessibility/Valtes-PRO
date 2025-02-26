<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$form = valtes_get_field('form', []);

?>

<section class="">
<div class="container  lg:py-[7.5rem] py-[3.75rem]">
        <?php if (!empty($form['section_heading'])): ?>
            <h2 class="mx-auto text-center section-sec-heading">
                <?php echo $form['section_heading'] ?>
            </h2>
        <?php endif ?>
        <div class="grid items-center justify-center w-full grid-cols-1 px-5 mx-auto mt-[1.88rem] md:mt-[3.75rem] gap-6 lg:grid-cols-2">
            <!-- Left Content -->
            <div class="grid gap-4 md:p-11 p-5 mx-auto lg:p-[2.25rem] lg:gap-8 bg-blue-50 rounded-3xl">
                <?php if (!empty($form['title'])): ?>
                    <h2 class="form-title">
                        <?php echo $form['title']; ?>
                    </h2>
                <?php endif ?>
                <?php if (!empty($form['description'])): ?>
                    <p class="w-auto text-gray-600 form-description">
                        <?php echo $form['description'] ?>
                    </p>
                <?php endif ?>
                <ul class="grid gap-4 lg:gap-8">
                <?php if (!empty($form['email']['url'])): ?>
                            <li>
                                <a href="<?php echo $form['email']['url'] ?>" class="flex items-center gap-5 form-social">
                                    <div class="md:w-8 md:h-6 w-6 h-[1.125rem]">
                                            <img src="<?php echo valtes_assets('images/message.svg') ?>" alt="<?php echo $form['icon']['alt'] ?>">
                                    </div>
                                    <?php echo $form['email']['title']; ?>
                                </a>

                            </li>
                        <?php endif ?>

                        <?php if (!empty($form['phone_number']['url'])): ?>
                            <li>
                                <a href="<?php echo $form['phone_number']['url'] ?>" class="flex items-center gap-5 form-social">
                                    <div class="md:size-8 size-6">
                                            <img src="<?php echo valtes_assets('images/phone.svg') ?>" alt="<?php echo $form['icon']['alt'] ?>">
                                    </div>
                                    <?php echo $form['phone_number']['title']; ?>
                                </a>

                            </li>
                        <?php endif ?>
                        <?php if (!empty($form['linkedin']['url'])): ?>
                            <li>
                                <a href="<?php echo $form['linkedin']['url'] ?>" class="flex items-center gap-5 form-social">
                                    <div class="md:size-8 size-6">
                                            <img src="<?php echo valtes_assets('images/linkedin.svg') ?>" alt="<?php echo $form['icon']['alt'] ?>">
                                    </div>
                                    <?php echo $form['linkedin']['title']; ?>
                                </a>

                            </li>
                        <?php endif ?>
                </ul>
            </div>


        <?php if(!empty($form['form_shortcode'])): ?>
        <div class="flex items-center justify-center flex-col w-full md:px-[6.65rem] px-0 mx-auto mt-2">
            <?php echo do_shortcode($form['form_shortcode']); ?>
        </div>
        <?php endif; ?>

    </div>
    </div>
</section>