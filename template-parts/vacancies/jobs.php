
<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$jobs = valtes_get_field('jobs', [
   
    'vacancies'=>[
       [
       'job'=>  [ 'title'=> 'Onderzoeksopdracht',
                'url'=>'#',
           'position'=> 'Stage',
           'location'=> 'Assen',],
       ],
       [
        'job'=>  [ 'title'=> 'Rol',
        'url'=>'#',
            'position'=> 'Categorie',
            'location'=> 'Assen',],
       ],
       [
        'job'=>  [ 'title'=> '[gesloten] Projectleider bij Valtes',
        'url'=>'#',
            'position'=> 'Project',
            'location'=> 'Assen',],
            ]
    ],

]);


?>

<section class="bg-[#F0F5FF] lg:py-16 py-10">
        <div class="container flex flex-col items-center justify-center gap-6 px-6 font-bold lg:px-0">
        <?php foreach($jobs['vacancies'] as $index => $jobs): ?>
                <?php if(!empty($jobs['job']['url'])): ?>
                <a href="<?php echo $jobs['job']['url'] ?>" class="flex flex-col md:flex-row justify-between border-3 border-[#6997FF] rounded-2xl md:rounded-full w-full px-6 py-2 bg-white section-description gap-3.5 sm:gap-0 section-description">
                   <?php echo $jobs['job']['title'] ?>
                    <div class="flex flex-row gap-6 text-gray-500 md:gap-4">
                        <span class="flex flex-row gap-2"><img src="<?php echo valtes_assets("/images/vacancies/position.svg") ?>" alt="" class=""><?php echo $jobs['job']['position'] ?></span>
                        <span class="flex flex-row gap-2"><img src="<?php echo valtes_assets("/images/vacancies/location.svg") ?>" alt=""><?php echo $jobs['job']['location'] ?></span>
                    </div>
                </a>
                <?php endif ?>
                <?php endforeach ?>
               
        </div>
    </section>