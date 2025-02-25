<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$form = valtes_get_field('form', [
    'heading' => 'Deel jij de zorg ook met ons?',
    'title' => 'Die horen wij natuurlijk graag!',
    'description' => 'We zijn altijd op zoek naar samenwerkingspartners, ... en ... Vul het contactformulier hiernaast in,
                    of neem contact op met ons.',

    'social' => [
        [
            'url' => '#',
            'title' => 'info@valtes.nl',
            'icon' => [
                'url' => valtes_assets('/images/message.svg'),
                'alt' => ''
            ]
        ],
        [
            'url' => '#',
            'title' => '+31 6 18 23 96 74',
            'icon' => [
                'url' => valtes_assets('/images/phone.svg'),
                'alt' => ''
            ]
        ],

        [
            'url' => '#',
            'title' => '/company/valtes',
            'icon' => [
                'url' => valtes_assets('/images/linkedin.svg'),
                'alt' => ''
            ]
        ]
    ],
]);

?>

<section class="">
    <div class="container  lg:py-[7.5rem] py-[3.75rem]">
        <?php if (!empty($form['heading'])): ?>
            <h2 class="mx-auto text-center section-sec-heading">
                <?php echo $form['heading'] ?>
            </h2>
        <?php endif ?>
        <div class="grid items-center justify-center w-full grid-cols-1 px-5 mx-auto mt-15 lg:grid-cols-2">
            <!-- Left Content -->
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
                    <?php foreach ($form['social'] as $key => $form): ?>
                        <?php if (!empty($form['url'])): ?>
                            <li>
                                <a href="<?php echo $form['url'] ?>" class="flex items-center form-social">
                                    <div class="mr-5">
                                        <?php if (!empty($form['icon']['url'])): ?>
                                            <img src="<?php echo $form['icon']['url'] ?>" alt="<?php echo $form['icon']['alt'] ?>">
                                        <?php endif ?>
                                    </div>
                                    <?php echo $form['title'] ?>
                                </a>

                            </li>
                        <?php endif ?>
                    <?php endforeach ?>



                </ul>
            </div>

            <!-- Right Form -->
            <div class="w-full px-5 mx-auto mt-8 lg:mt-0">
            <?php echo do_shortcode('[forminator_form id="20"]'); ?>
            </div>
        </div>
    </div>
</section>