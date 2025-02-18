<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$clients = valtes_get_field('clients', []);

?>

<section class="bg-[#f0f5ff] py-10">
    <div class="flex flex-col items-center justify-center mt-8">
        <?php if(!empty($clients['title'])): ?>
        <h2 class="text-3xl font-bold text-gray-800">
            <?php echo $clients['title']; ?>
        </h2>
        <?php endif; ?>
        <div class=" grid lg:grid-cols-7 md:grid-cols-5 sm:grid-cols-3 grid-cols-1 gap-8 mt-10 px-5">
            <?php foreach($clients['images'] as $index => $client): ?>
            <?php if(!empty($client['image']['url'])): ?>
            <div class="w-auto flex items-center justify-center">
                <img src="<?php echo $client['image']['url']; ?>" alt="<?php echo $client['image']['alt']; ?>"
                    class=" w-auto h-16">
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>