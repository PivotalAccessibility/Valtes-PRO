<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}


$solution = valtes_get_field('solution', [
    'title' => 'de Valtes -oplossing',
    'description' => 'We hebben een eigen innovatieve sensor ontwikkelt. We detecteren onraad, onveilige situaties en afwijkend gedrag, zodat zorgprofessionals en mantelzorgers met vertrouwen de zorg kunnen dragen.',
    'solutions' => [
        [
            'image' => [
                'url' => 'https://img.freepik.com/free-photo/abstract-autumn-beauty-multi-colored-leaf-vein-pattern-generated-by-ai_188544-9871.jpg',
                'alt' => '',
            ],
            'title' => 'Onveilige situaties',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores recusandae repellat adipisci accusamus totam voluptatibus voluptate incidunt. Non, reprehenderit id.',
        ],
        [
            'image' => [
                'url' => 'https://img.freepik.com/free-photo/abstract-autumn-beauty-multi-colored-leaf-vein-pattern-generated-by-ai_188544-9871.jpg',
                'alt' => '',
            ],
            'title' => 'Onveilige situaties',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores recusandae repellat adipisci accusamus totam voluptatibus voluptate incidunt. Non, reprehenderit id.',
        ],
        [
            'image' => [
                'url' => 'https://img.freepik.com/free-photo/abstract-autumn-beauty-multi-colored-leaf-vein-pattern-generated-by-ai_188544-9871.jpg',
                'alt' => '',
            ],
            'title' => 'Onveilige situaties',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores recusandae repellat adipisci accusamus totam voluptatibus voluptate incidunt. Non, reprehenderit id.',
        ],
        [
            'image' => [
                'url' => 'https://img.freepik.com/free-photo/abstract-autumn-beauty-multi-colored-leaf-vein-pattern-generated-by-ai_188544-9871.jpg',
                'alt' => '',
            ],
            'title' => 'Onveilige situaties',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores recusandae repellat adipisci accusamus totam voluptatibus voluptate incidunt. Non, reprehenderit id.',
        ]
        ],
        'footer_image' => [
            'url' => valtes_assets("/images/Europese_unie.png"),
            'alt' => ''
        ]
]);

?>



<section class="bg-[#F0F5FF]" name="valtes-solution">
    <div class="container">
        <div class="flex flex-col justify-center items-center gap-20">
            <div class="flex flex-col flex-wrap justify-center items-center py-10 gap-[1.875rem]">
                <?php if (!empty($solution['title'])): ?>
                    <h2 class="section-sec-heading text-center z-10 relative">
                        <?php echo $solution['title']; ?>
                        <!-- <div class="relative w-full">
                        <svg
                            class="absolute  h-2 -z-9 text-blue-400" width="302" height="11"
                            viewBox="0 0 302 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.875 7C100.434 2.92834 197.398 3.07231 297.875 7" stroke="#6997FF"
                                stroke-width="8" stroke-linecap="round" />
                        </svg>
                    </div> -->
                    </h2>
                <?php endif; ?>
                <?php if (!empty($solution['description'])): ?>
                    <p class="section-sec-description text-center px-1 lg:px-0 lg:w-[75%] w-auto">
                        <?php echo $solution['description']; ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="">
                <?php foreach ($solution['solutions'] as $index => $item): ?>
                    <?php if ($index % 2 == 0): ?>
                        <div class="flex lg:flex-row flex-col px-3 lg:px-0 gap-4 lg:gap-0">
                            <div class="w-full lg:w-1/2 flex flex-row">
                                <div class="relative card-image">
                                    <?php if (!empty($item['image']['url'])): ?>
                                        <img src="<?php echo $item['image']['url']; ?>"
                                            alt="<?php echo $item['image']['alt']; ?>"
                                            class=" rounded-full object-cover z-10 relative size-full">
                                    <?php endif; ?>
                                    <div class="absolute h-[7.43425rem] w-[7.43425rem] rounded-full hidden lg:block bg-[#6997FF] top-1 right-1">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2 flex flex-col justify-center gap-10 items-start">
                                <?php if (!empty($item['title'])): ?>
                                    <h2 class="section-sec-heading">
                                        <?php echo $item['title']; ?>
                                    </h2>
                                <?php endif; ?>
                                <?php if (!empty($item['description'])): ?>
                                    <p class="section-sec-description">
                                        <?php echo $item['description']; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="flex lg:flex-row flex-col-reverse px-3 lg:px-0">
                            <div class="w-full lg:w-1/2 flex flex-col justify-center items-start gap-10">
                                <?php if (!empty($item['title'])): ?>
                                    <h2 class="section-sec-heading">
                                        <?php echo $item['title']; ?>
                                    </h2>
                                <?php endif; ?>
                                <?php if (!empty($item['description'])): ?>
                                    <p class="section-sec-description">
                                        <?php echo $item['description']; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="w-full lg:w-1/2 flex flex-row justify-center lg:justify-end lg:items-end">
                                <div class="relative card-image">
                                    <?php if (!empty($item['image']['url'])): ?>
                                        <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>"
                                            class="rounded-full object-cover size-full relative z-10">
                                    <?php endif; ?>
                                    <div
                                        class="absolute h-[8.75rem] w-[8.75rem] rounded-full hidden lg:block bg-[#E5E8F3] bottom-1 right-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="h-[4.6875rem] w-[23.375rem]">
                <img src="<?php echo $solution['footer_image']['url']; ?>" alt="<?php echo $solution['footer_image']['alt']; ?>" class="h-full w-full">
            </div>
        </div>
    </div>
</section>