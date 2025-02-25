<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$form = valtes_get_field('form', [
    'section_heading' => 'Deel jij de zorg ook met ons?',
    'title' => 'Die horen wij natuurlijk graag!',
    'description' => 'We zijn altijd op zoek naar samenwerkingspartners, ... en ...  Vul het contactformulier hiernaast in, of neem contact op met ons.',
    'email' => [
        'url' => '#',
        'title' => 'info@valtes.nl'
    ],
    'phone_number' => [
        'url' => '#',
        'title' => '+31 6 18 23 96 74'
    ],
    'linkedin' => [
        'url' => '#',
        'title' => '/company/valtes'
    ]
]);

?>

<section class="">
<div class="container  lg:pb-[7.5rem] pb-[3.75rem]">
    <?php if (!empty($form['section_heading'])): ?>
        <h2 class="text-center section-sec-heading">
            <?php echo $form['section_heading']; ?>
        </h2>
    <?php endif; ?>
    <div class="flex flex-col gap-4 mt-5 md:flex-row md:mt-10">
        <div class="flex flex-col items-start w-full pt-5 sm:pt-0 md:w-1/2">
        <div class="grid gap-4 p-5 mx-auto lg:p-[2.25rem] lg:gap-8 bg-blue-50 rounded-3xl">
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
                                <a href="<?php echo $form['email']['url'] ?>" class="flex items-center form-social">
                                    <div class="mr-5">
                                            <img src="<?php echo valtes_assets('images/message.svg') ?>" alt="<?php echo $form['icon']['alt'] ?>">
                                    </div>
                                    <?php echo $form['email']['title']; ?>
                                </a>

                            </li>
                        <?php endif ?>

                        <?php if (!empty($form['phone_number']['url'])): ?>
                            <li>
                                <a href="<?php echo $form['phone_number']['url'] ?>" class="flex items-center form-social">
                                    <div class="mr-5">
                                            <img src="<?php echo valtes_assets('images/phone.svg') ?>" alt="<?php echo $form['icon']['alt'] ?>">
                                    </div>
                                    <?php echo $form['phone_number']['title']; ?>
                                </a>

                            </li>
                        <?php endif ?>
                        <?php if (!empty($form['linkedin']['url'])): ?>
                            <li>
                                <a href="<?php echo $form['linkedin']['url'] ?>" class="flex items-center form-social">
                                    <div class="mr-5">
                                            <img src="<?php echo valtes_assets('images/linkedin.svg') ?>" alt="<?php echo $form['icon']['alt'] ?>">
                                    </div>
                                    <?php echo $form['linkedin']['title']; ?>
                                </a>

                            </li>
                        <?php endif ?>



                </ul>
            </div>
        </div>

        <div class="w-full mt-2 sm:w-1/2 lg:px-28">
            <?php echo do_shortcode('[forminator_form id="20"]'); ?>
        </div>
    </div>
    </div>
</section>



