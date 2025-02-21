<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$form = valtes_get_field('form', [
    'heading'=> 'Deel jij de zorg ook met ons?',
    'title'=>'Die horen wij natuurlijk graag!',
    'description'=> 'We zijn altijd op zoek naar samenwerkingspartners, ... en ... Vul het contactformulier hiernaast in,
                    of neem contact op met ons.',

    'social'=> [
     
        [
            'url'=>'#',
            'title'=>'+31 6 18 23 96 74',
            'icon'=>[
                'url'=>valtes_assets('/images/phone.svg'),
                'alt'=>''
            ]
        ],
        [
            'url'=>'#',
            'title'=>'/company/valtes',
            'icon'=>[
                'url'=>valtes_assets('/images/linkedin.svg'),
                'alt'=>''
            ]
            ],   [
                'url'=>'#',
                'title'=>'info@valtes.nl',
                'icon'=>[
                    'url'=> valtes_assets('/images/message.svg'),
                    'alt'=>''
                ]
            ]
    ],
]);

?>
<section class="my-20">
        <div class="container">
            <?php if(!empty($form['heading'])): ?>
        <h2 class="mx-auto mb-6 text-center section-sec-heading">
            <?php echo $form['heading'] ?>
        </h2>
        <?php endif ?>
        <div class="grid items-center justify-center w-full grid-cols-1 px-5 mx-auto lg:grid-cols-2">
            <!-- Left Content -->
            <div class="p-6 py-8 mx-auto bg-blue-50 rounded-3xl">
                <?php if(!empty($form['title'])): ?>
                <h2 class="mb-10 form-title">
                    <?php echo $form['title']; ?>
                </h2>
                <?php endif ?>
                <?php if(!empty($form['description'])): ?>
                <p class="w-auto text-gray-600 form-description">
                    <?php echo $form['description'] ?>
                </p>
                <?php endif ?>
                <ul class="space-y-6 mt-7">
                    <?php foreach($form['social'] as $key => $form): ?>
                    <?php if(!empty($form['url'])): ?>
                    <li>
                        <a href="<?php echo $form['url'] ?>" class="text-[#2b37dc] underline font-bold flex items-center text-xl">
                            <div class="mr-5">
                                <?php if(!empty($form['icon']['url'])): ?>
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
                <form class="space-y-2 bg-white rounded-lg md:p-10">
                    <!-- Organisatie -->
                    <div>
                        <label for="organisatie" class="block mb-2 text-lg font-bold text-gray-800">Organisatie</label>
                        <input type="text" id="organisatie" placeholder="Voer een organisatie in"
                            class="w-full p-[6.5px] text-gray-600 border-gray-400 border-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>

                    <!-- E-mailadres -->
                    <div>
                        <label for="email" class="block mb-2 text-lg font-bold text-gray-800">
                            E-mailadres<span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" placeholder="Voer uw e-mailadres in"
                            class="w-full p-[6.5px]  text-gray-600 border-gray-400 border-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>

                    <!-- Telefoonnummer -->
                    <div>
                        <label for="telefoonnummer"
                            class="block mb-2 text-lg font-bold text-gray-800">Telefoonnummer</label>
                        <input type="text" id="telefoonnummer" placeholder="Voer het telefoonnummer in"
                            class="w-full p-[6.5px] text-gray-600 border-gray-400 border-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-8">
                        <button type="submit"
                            class="w-full py-3 bg-[#2b37dc] text-white text-sm font-semibold rounded-full hover:bg-blue-700 transition">
                            Verstuur
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>