<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$form = valtes_get_field('form', []);

?>

<section class="container mx-auto max-w-4xl 2xl:max-w-5xl mt-10 px-5 sm:px-0">
  <div class="flex flex-col md:flex-row gap-4">
    <div class="w-full pt-5 md:w-1/2 flex flex-col justify-between items-start">
      <div class="w-full bg-[#f0f5ff] flex flex-col items-start justify-between gap-8 p-5 rounded-2xl">
        <h2 class="font-bold text-lg">
          <?php echo $form['title']; ?>
        </h2>
        <p>
          <?php echo $form['description']; ?>
        </p>
        <div>
          <a href="" class="flex items-center px-3 py-2 text-xs font-normal text-blue-700 bg-white border border-blue-700 rounded-full md:w-40 w-full">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                <path d="M11 13l9 -9" />
                <path d="M15 4h5v5" />
              </svg>
            </span>
            Voor professionals
          </a>
        </div>
      </div>
      <div class="relative w-full mt-5 sm:mt-0">
        <div class="mb-6 w-full">
          <img src="<?php echo $form['image']['url']; ?>"
            alt="<?php the_title(); ?>" class="rounded-full h-40 w-full object-cover z-10 relative">
        </div>
        <div class=" h-10 w-10 rounded-full bg-[#6997ff] absolute bottom-5 left-5"></div>
      </div>
    </div>

    <div class="w-full sm:w-1/2 sm:ml-10">
      <?php echo do_shortcode('[forminator_form id="202"]'); ?>
    </div>

  </div>
</section>