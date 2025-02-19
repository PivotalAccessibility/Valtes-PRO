<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}


$challenge = valtes_get_field('challenge', []);

?>

<section class="bg-[#f0f5ff] py-20">
    <div class="container flex flex-col items-center">
        <h2 class="section-heading mt-32">
            <?php echo $challenge['heading'] ?>
        </h2>
        <div class=" grid grid-cols-3 gap-4 mt-10">
            <?php foreach($challenge['challenges'] as $index => $challenge): ?>
                <div class=" flex flex-col items-center px-5">
                    <span class=" font-bold text-4xl">
                        <?php echo $challenge['counter'] ?>
                    </span>
                    <p class=" mt-3 text-center">
                        <?php echo $challenge['description'] ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    
        <div class="mt-10">
            <video width="320" height="240" controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>