<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}


$mission = valtes_get_field('mission', [
    'title' => 'Onze missie',
    'description' => 'Onze missie is om zorgtechnologie te ontwikkelen die mantelzorgers en zorgbehoevenden op een effectieve en gebruiksvriendelijke manier ondersteunt. We streven naar oplossingen die niet alleen de druk op mantelzorgers en zorgmedewerkers verlichten, maar ook de kwaliteit van leven van zorgbehoevenden verbeteren. Door innovatie en samenwerking met zorgorganisaties en kennisinstellingen creëren we technologie die proactief werkt en toekomstbestendig is. We werken actief samen met eindgebruikers zoals mantelzorgers en zorgmedewerkers. Zo bouwen we aan een zorgsysteem waarin iedereen langer zelfstandig en met vertrouwen kan leven.',
    'image' => [
        'url' => 'https://img.freepik.com/free-photo/abstract-autumn-beauty-multi-colored-leaf-vein-pattern-generated-by-ai_188544-9871.jpg',
        'alt' => '',
    ],
]);

?>


<section class=" container md:py-20 py-10 md:px-5 px-4">
    <div class=" flex flex-wrap-reverse sm:flex-nowrap ">
        <div class=" sm:w-1/2 w-full flex flex-col items-start justify-center sm:mt-0 mt-10">
            <div class="sm:pr-24">
                <?php if (!empty($mission['title'])): ?>
                    <h2 class="section-sec-heading">
                        <?php echo $mission['title']; ?>
                    </h2>
                <?php endif; ?>
                <?php if (!empty($mission['description'])): ?>
                    <div class=" section-sec-description mt-5">
                        <?php echo $mission['description']; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class=" sm:w-1/2 w-full flex items-center justify-end">
            <?php if (!empty($mission['image']['url'])): ?>
                <div class="relative">
                    <img src="<?php echo $mission['image']['url']; ?> " alt="" class=" sm:h-[21rem] h-auto w-auto relative rounded-full object-cover">
                    <div class=" sm:h-28 sm:w-28 h-10 w-10 bg-[#6997FF] rounded-full absolute sm:top-0 -top-1 sm:left-5 left-0 -z-50"></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>