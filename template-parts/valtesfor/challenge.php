<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$challenge = valtes_get_field('challenge', []);

$video_url = $challenge['video'];

?>

<section class="bg-primaryLight py-20 max-md:px-4">
  <div class="container flex flex-col items-center">
    <?php if (!empty($challenge['heading'])): ?>
      <h2 class="section-sec-heading text-center">
        <?php echo $challenge['heading'] ?>
      </h2>
    <?php endif; ?>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 pt-10">
      <?php foreach ($challenge['challenges'] as $index => $challengeItem): ?>
        <div class="flex flex-col items-center gap-6">
          <?php if (!empty($challengeItem['counter'])): ?>
            <div class="counter">
              <span class="counter-count" data-target="<?php echo $challengeItem['counter']; ?>">0</span>%
            </div>
          <?php endif; ?>
          <?php if (!empty($challengeItem['description'])): ?>
            <p class="mt-3 counter-description">
              <?php echo $challengeItem['description']; ?>
            </p>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="mt-20 relative">
      <div class="absolute inset-0 flex items-center justify-center z-30 cursor-pointer" id="thumbnail-container">
        <?php if (!empty($challenge['thumbnail'])): ?>
          <img src="<?php echo $challenge['thumbnail']['url']; ?>" alt="<?php echo $challenge['thumbnail']['alt']; ?>" class="h-full w-full md:h-[27.4375rem] rounded-2xl object-cover">
        <?php endif; ?>
        <div class="absolute z-30 h-16 w-16 bg-white rounded-full flex items-center justify-center border-2 border-primary">
          <button class="absolute z-40">
            <img src="<?php echo valtes_assets('images/play-button.svg'); ?>" alt="">
          </button>
        </div>
      </div>
      <video id="video" controls class="w-72 h-48 md:w-[50.8125rem] md:h-[27.4375rem] rounded-2xl relative z-20">
        <?php if (!empty($video_url['url'])): ?>
          <source src="<?php echo esc_url($video_url['url']); ?>" type="video/mp4">
        <?php endif; ?>
      </video>
      <div class="md:size-20 size-9 bg-jobborder -top-1/12 -right-1/25 rounded-full absolute">
      </div>
      <div class="bg-[#BBBEF4] md:size-40 size-16 rounded-full absolute -bottom-1/12 -left-1/15">
      </div>
    </div>
  </div>
</section>

<script>
  const thumbnailContainer = document.getElementById('thumbnail-container');
  const video = document.getElementById('video');

  thumbnailContainer.addEventListener('click', () => {
    thumbnailContainer.style.display = 'none';
    video.classList.remove('hidden');
    video.play();
  });
</script>