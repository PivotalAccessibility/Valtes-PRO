<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}


$card = valtes_get_field('card', [
    'cards' => [
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
                'url' => 'https://media.istockphoto.com/id/1317323736/photo/a-view-up-into-the-trees-direction-sky.jpg?s=612x612&w=0&k=20&c=i4HYO7xhao7CkGy7Zc_8XSNX_iqG0vAwNsrH1ERmw2Q=',
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
    ]
]);

?>



<section class="" name="valtes-card">
    <div class="container">
        <div>
            <?php foreach ($card['cards'] as $index => $item): ?>
                <div class="">
                    <?php if ($index % 2 == 0): ?>
                        <div class="flex lg:flex-row flex-col py-10 px-3 lg:px-0 gap-4 lg:gap-0">
                            <div class="w-full lg:w-1/2 flex flex-row">
                                <div class="relative card-image">
                                    <?php if (!empty($item['image']['url'])): ?>
                                        <img src="<?php echo $item['image']['url']; ?>"
                                            alt="<?php echo $item['image']['alt']; ?>"
                                            class=" rounded-full object-cover z-10 relative size-full">
                                    <?php endif; ?>
                                    <div class="absolute h-[7.43425rem] w-[7.43425rem] rounded-full hidden lg:block bg-jobborder top-1 right-1">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2 flex flex-col justify-center gap-4 items-start">
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
                        <div class="flex lg:flex-row flex-col-reverse px-3 py-10 lg:px-0">
                            <div class="w-full lg:w-1/2 flex flex-col justify-center items-start gap-4 mt-5 lg:mt-0">
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
                                        class="absolute h-[8.75rem] w-[8.75rem] rounded-full hidden lg:block bg-[#E0E3ED] bottom-1 right-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>