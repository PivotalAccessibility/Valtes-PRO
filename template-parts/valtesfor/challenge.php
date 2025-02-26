<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$challenge = valtes_get_field('challenge', []);

?>

<section class="bg-primaryLight py-20">
    <div class="container flex flex-col items-center">
        <h2 class="section-sec-heading text-center">
            <?php echo $challenge['heading'] ?>
        </h2>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 mt-10">
            <?php foreach($challenge['challenges'] as $index => $challengeItem): ?>
            <div class="flex flex-col items-center gap-6">
                <div class="counter" data-target="<?php echo $challengeItem['counter']; ?>">
                    0
                </div>
                <p class="mt-3 counter-description">
                    <?php echo $challengeItem['description']; ?>
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

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".counter");

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
