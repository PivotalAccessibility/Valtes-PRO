<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

$heroTitle = !empty($args['title']) ? $args['title'] : false;
$heroDescription = !empty($args['description']) ? $args['description'] : false;
$heroCta = !empty($args['cta']) ? $args['cta'] : false;
$heroCta2 = !empty($args['cta2']) ? $args['cta2'] : false;
$heroImage = !empty($args['image']) ? $args['image'] : false;
$social = !empty($args['social']) ? $args['social'] : false;


?>

<section class="pb-5 sm:pb-0">
  <div class="container flex flex-col-reverse  
    md:flex md:flex-wrap md:flex-row
    md:px-5 px-4">
    <div class="flex items-center justify-start h-auto p-0 sm:mt-20 mt-5 xl:w-1/2 sm:w-full xl:mt-12 md:mt-20">
      <div class=" sm:pr-24" dir="ltr">
        <?php if (!empty($heroTitle)): ?>
          <h1 class="mb-6 section-heading">
            <?php echo $heroTitle; ?>
          </h1>
        <?php endif; ?>
        <?php if (!empty($heroDescription)): ?>
          <div class="text-base mt-5 font-normal">
            <?php echo $heroDescription; ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($social['email']['url'])): ?>
          <div class=" w-full mt-5">
            <a href="<?php echo $social['email']['url']; ?>" class="form-ctas-snd flex items-center">
              <img src="<?php echo valtes_assets('images/message.svg') ?>" alt="" class="h-5 w-5 mr-4">
              <?php echo $social['email']['title']; ?>
            </a>
          </div>
        <?php endif; ?>

        <?php if (!empty($social['phone_number']['url'])): ?>
          <div class=" w-full mt-3">
            <a href="<?php echo $social['phone_number']['url']; ?>" class="form-ctas-snd flex items-center">
              <img src="<?php echo valtes_assets('images/phone.svg') ?>" alt="" class=" h-5 w-5 mr-4">
              <?php echo $social['phone_number']['title']; ?>
            </a>
          </div>
        <?php endif; ?>

        <?php if (!empty($social['linkedin']['url'])): ?>
          <div class=" w-full mt-3">
            <a href="<?php echo $social['linkedin']['url']; ?>" class="form-ctas-snd flex items-center">
              <img src="<?php echo valtes_assets('images/linkedin.svg') ?>" alt="" class=" h-5 w-5 mr-4">
              <?php echo $social['linkedin']['title']; ?>
            </a>
          </div>
        <?php endif; ?>

        <div class="flex flex-wrap mt-5 gap-5">
          <?php if (!empty($heroCta['url'])): ?>
            <a href="<?php echo $heroCta['url']; ?>" class="btn btn-primary">
              <?php echo $heroCta['title']; ?>
            </a>
          <?php endif; ?>
          <?php if (!empty($heroCta2['url'])): ?>
            <a href="<?php echo $heroCta2['url']; ?>" class="btn btn-outline flex">
              <img src="<?php echo valtes_assets('images/up-right-from-square.svg') ?>" alt="">
              <?php echo $heroCta2['title']; ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="flex justify-center h-auto xl:w-1/2 sm:w-full xl:justify-start mt-32 xl:mt-0">
      <div class="relative 2xl:left-16 -top-7 lg:-top-16">
        <div class="rounded-full h-[18rem] w-[18rem] md:h-[40rem] md:w-[40rem] overflow-hidden">
          <img src="<?php echo $heroImage['url']; ?>" class="object-cover w-full h-full" alt="<?php echo $heroImage['alt']; ?>">
        </div>
        <img src="<?php echo valtes_assets('images/Ellipse-2.svg') ?>" class="
                absolute h-full w-full
                -bottom-3/20 -left-1/14
                " alt="">
        <img src="<?php echo valtes_assets('images/Ellipse-3.svg') ?>" class="
                absolute h-full w-full
                -bottom-1/6 -left-1/7
                " alt="">
        <div class="absolute bg-white rounded-full border-5 border-[#f3f6ff] 
                md:px-8 md:py-10 md:-bottom-1/60 md:-left-1/20
                px-5 py-6 -bottom-1/12 -left-1/30
                ">
          <img src="<?php echo valtes_assets('images/Zorginnovatieprijs_2024_RGB.png') ?>" class="object-cover 
                    md:w-40
                    w-24
                    " alt="">
        </div>
      </div>
    </div>
  </div>
  </div>
</section>