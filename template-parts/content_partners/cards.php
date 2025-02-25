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
    <div class="container md:py-[7.5rem] py-14">
        <div class="flex flex-col md:gap-[7.5rem] gap-[1.88rem]">
            <?php foreach ($card['cards'] as $index => $item): ?>
                <div class="">
                    <?php if ($index % 2 == 0): ?>
                        <div class="flex flex-col gap-[1.88rem] px-3 lg:flex-row lg:px-0 lg:gap-0">
                            <div class="flex flex-row w-full lg:w-1/2">
                                <div class="relative card-image">
                                    <?php if (!empty($item['image']['url'])): ?>
                                        <img src="<?php echo $item['image']['url']; ?>"
                                            alt="<?php echo $item['image']['alt']; ?>"
                                            class="relative z-10 object-cover rounded-full size-full">
                                    <?php endif; ?>
                                    <div class="absolute h-[7.43425rem] w-[7.43425rem] rounded-full hidden lg:block bg-jobborder top-1 right-1">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-start justify-center w-full gap-4 md:gap-10 lg:w-1/2">
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
                        <div class="flex flex-col-reverse px-3 gap-[1.88rem] md:gap-0 lg:flex-row lg:px-0">
                            <div class="flex flex-col items-start justify-center w-full gap-4 mt-5 md:gap-10 lg:w-1/2 lg:mt-0">
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
                            <div class="flex flex-row justify-center w-full lg:w-1/2 lg:justify-end lg:items-end">
                                <div class="relative card-image">
                                    <?php if (!empty($item['image']['url'])): ?>
                                        <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>"
                                            class="relative z-10 object-cover rounded-full size-full">
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