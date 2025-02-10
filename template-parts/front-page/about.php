<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$data = valtes_get_field('about_valtes_app',[]);

?>

<section class="bg-[#f0f5ff] py-16">
    <div class="container flex flex-col items-center justify-center max-w-4xl mx-auto 2xl:max-w-5xl px-5 sm:px-0">
        <h2 class="font-bold text-3xl text-center">
            <?php echo $data['title']; ?>
        </h2>
        <div class=" flex flex-wrap sm:flex-nowrap sm:items-end items-center justify-between mt-10 sm:mt-0">
            <div class=" mt-5 sm:mt-0">
                <img src="<?php echo valtes_assets('images/left_tilted.png') ?>" alt="" class="h-60 w-auto mr-20">
                <div class="bg-white w-72 rounded-2xl flex items-start p-3 h-20">
                    <div
                        class="bg-[#2b37dc] p-5 text-white rounded-full h-10 w-10 flex items-center justify-center font-bold">
                        1
                    </div>
                    <div class="ml-5">
                        <p class="text-xs leading-5 font-normal">
                            <?php echo $data['content'][0]['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class=" mt-5 sm:mt-0">
                <img src="<?php echo valtes_assets('images/centered_image.png') ?>" alt="" class="h-80 w-80">
                <div class="bg-white w-72 rounded-2xl flex items-start p-3 h-20">
                    <div
                        class="bg-[#2b37dc] p-5 text-white rounded-full h-10 w-10 flex items-center justify-center font-bold">
                        2
                    </div>
                    <div class="ml-5">
                        <p class="text-xs leading-5 font-normal">
                            <?php echo $data['content'][1]['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class=" mt-5 sm:mt-0">
                <img src="<?php echo valtes_assets('images/right_tilted.png') ?>" alt="" class="h-48 w-auto sm:ml-20">
                <div class="bg-white w-72 rounded-2xl flex items-start p-3 h-20">
                    <div
                        class="bg-[#2b37dc] p-5 text-white rounded-full h-10 w-10 flex items-center justify-center font-bold">
                        3
                    </div>
                    <div class="ml-5">
                        <p class="text-xs leading-5 font-normal">
                            <?php echo $data['content'][2]['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>