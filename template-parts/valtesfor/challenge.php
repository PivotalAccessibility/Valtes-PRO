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
      <video controls class="w-72 h-48 md:w-[50.8125rem] md:h-[27.4375rem] rounded-2xl relative z-20">
        <source src="movie.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
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
  document.addEventListener("DOMContentLoaded", function () {
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