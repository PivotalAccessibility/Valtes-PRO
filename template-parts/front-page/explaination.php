<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$explain = valtes_get_field('explaination', [
  'title' => 'Hier komt uitleg over de <span class="underline decoration-[#6895fc]">app</span>',
  'description' => 'Hier komen 3 à 4 zinnen te staan, en dat ziet er dan ongeveer zo uit. Er zal niet </br> veel informatie komen, maar wel net genoeg. Dit is een voorbeeld van hoe dat </br> er dan uit ziet. Lezers moeten duidelijk krijgen wat de app doet.',
  'image' => [
      'url' => valtes_assets('images/mockups.png'),
      'alt' => 'Iphones',
  ],
  'appstore_link' => '#',
  'appstore_image' => [
      'url' => valtes_assets('images/AppStore.png'),
      'alt' => 'AppStore image',
   ],
  'googleplay_link' => '#',
  'googleplay_image' => [
    'url' => valtes_assets('images/GooglePlay.png'),
    'alt' => 'GooglePlay image',
  ]
]);

?>

<section class="bg-[#f0f5ff] py-16">
    <div class=" max-w-4xl mx-auto 2xl:max-w-5xl container flex flex-col items-center justify-center px-5 sm:px-0">
        <h2 class="font-bold text-3xl text-center">
            <?php echo $explain['title']; ?>
        </h2>
        <p class=" font-normal mt-5 text-center text-sm sm:w-[35rem]">
            <?php echo $explain['description']; ?>
        </p>
        <div class=" mt-5 sm:mt-0">
            <img src="<?php echo $explain['image']['url']; ?>" alt="<?php echo $explain['image']['alt']; ?>" class="sm:h-[29rem] h-auto sm:w-auto w-full">
        </div>
        <div class=" flex mt-10 items-center sm:justify-end justify-center w-full ">
            <div>
                <a href="">
                    <img src="<?php echo valtes_assets('images/AppStore.png') ?>" alt="" class=" h-10 w-auto">
                </a>
            </div>
            <div>
                <a href="">
                    <img src="<?php echo valtes_assets('images/GooglePlay.png') ?>" alt="" class=" h-10 w-auto ml-5">
                </a>
            </div>
        </div>
    </div>
</section>