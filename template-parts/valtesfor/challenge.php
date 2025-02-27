<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$challenge = valtes_get_field('challenge', []);

?>

<section class="bg-primaryLight py-20 max-md:px-4">
  <div class="container flex flex-col items-center">
    <h2 class="section-sec-heading text-center">
      <?php echo $challenge['heading'] ?>
    </h2>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 pt-10">
      <?php foreach ($challenge['challenges'] as $index => $challengeItem): ?>
        <div class="flex flex-col items-center gap-6">
          <div class="counter">
            <span class="counter-count" data-target="<?php echo $challengeItem['counter']; ?>">0</span>%
          </div>
          <p class="mt-3 counter-description">
            <?php echo $challengeItem['description']; ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-20 relative">
      <div class="absolute inset-0 flex items-center justify-center z-30 cursor-pointer" id="thumbnail-container">
        <img src="https://media.istockphoto.com/id/814423752/photo/eye-of-model-with-colorful-art-make-up-close-up.jpg?s=612x612&w=0&k=20&c=l15OdMWjgCKycMMShP8UK94ELVlEGvt7GmB_esHWPYE=" alt="Video Thumbnail" class="h-full w-full md:h-[27.4375rem] rounded-2xl">
        <div class="absolute z-30 h-16 w-16 bg-white rounded-full flex items-center justify-center border-2 border-primary">
          <button class="absolute z-40">
            <img src="<?php echo valtes_assets('images/play-button.svg'); ?>" alt="">
          </button>
        </div>
      </div>
      <video id="video" controls class="w-72 h-48 md:w-[50.8125rem] md:h-[27.4375rem] rounded-2xl relative z-20">
        <source src="<?php echo valtes_assets('images/wordpress_video.mp4'); ?>" type="video/mp4">
        <source src="<?php echo valtes_assets('images/wordpress_video.mp4'); ?>" type="video/ogg">
        Your browser does not support the video tag.
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

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll(".counter-count");

    const observerOptions = {
      root: null,
      rootMargin: "0px",
      threshold: 1,
    };

    const startCounter = (counter) => {
      let count = 0;
      const target = parseInt(counter.getAttribute("data-target"), 10);
      const speed = Math.max(10, 2000 / target); // Dynamic speed
      counter.textContent = 0; // Reset counter every time it enters
      const timer = setInterval(() => {
        if (count < target) {
          count++;
          counter.textContent = count;
        } else {
          clearInterval(timer);
        }
      }, speed);
    };
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          startCounter(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  });
</script>