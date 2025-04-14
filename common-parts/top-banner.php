<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

$isDarkBg = $args['isDarkBg'] ?? false;

$heroTitle = !empty($args['title']) ? $args['title'] : false;
$heroDescription = !empty($args['description']) ? $args['description'] : false;
$heroCta = !empty($args['cta']) ? $args['cta'] : false;
$heroCta2 = !empty($args['cta2']) ? $args['cta2'] : false;
$heroImage = !empty($args['image']) ? $args['image'] : false;
$social = !empty($args['social']) ? $args['social'] : false;
$floating_image = !empty($args['floating_image']) ? $args['floating_image'] : false;


?>

<section class="<?= $isDarkBg ? 'bg-primaryLight' : '' ?> pb-16 md:pb-32">
  <div class="container flex flex-col-reverse px-4 md:px-5 sm:flex-row max-lg:flex-wrap">
    <div class="flex items-center justify-start h-auto p-0 mt-5 sm:mt-20 xl:w-1/2 sm:w-full xl:mt-12 md:mt-20">
      <div class=" sm:pr-24" dir="ltr">
        <?php if (!empty($heroTitle)): ?>
          <h1 class="section-heading">
            <?php echo $heroTitle; ?>
          </h1>
        <?php endif; ?>
        <?php if (!empty($heroDescription)): ?>
          <div class="mt-5 md:mt-6 section-description text-xl prose">
            <?php echo $heroDescription; ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($social['email']['url'])): ?>
          <div class="w-full mt-5 ">
            <a href="<?php echo $social['email']['url']; ?>" class="flex items-center form-ctas-snd">
              <img src="<?php echo valtes_assets('images/message.svg') ?>" alt="" class="w-5 h-5 mr-4">
              <?php echo $social['email']['title']; ?>
            </a>
          </div>
        <?php endif; ?>

        <?php if (!empty($social['phone_number']['url'])): ?>
          <div class="w-full mt-3 ">
            <a href="<?php echo $social['phone_number']['url']; ?>" class="flex items-center form-ctas-snd">
              <img src="<?php echo valtes_assets('images/phone.svg') ?>" alt="" class="w-5 h-5 mr-4 ">
              <?php echo $social['phone_number']['title']; ?>
            </a>
          </div>
        <?php endif; ?>

        <?php if (!empty($social['linkedin']['url'])): ?>
          <div class="w-full mt-3 ">
            <a href="<?php echo $social['linkedin']['url']; ?>" class="flex items-center form-ctas-snd">
              <img src="<?php echo valtes_assets('images/linkedin.svg') ?>" alt="" class="w-5 h-5 mr-4 ">
              <?php echo $social['linkedin']['title']; ?>
            </a>
          </div>
        <?php endif; ?>

        <div class="flex flex-wrap gap-5 mt-8">
          <?php if (!empty($heroCta['url'])): ?>
            <a href="<?php echo $heroCta['url']; ?>" class="btn btn-primary">
              <?php echo $heroCta['title']; ?>
            </a>
          <?php endif; ?>
          <?php if (!empty($heroCta2['url'])): ?>
            <a href="<?php echo $heroCta2['url']; ?>" class="flex btn btn-outline">
              <img src="<?php echo valtes_assets('images/up-right-from-square.svg') ?>" alt="">
              <?php echo $heroCta2['title']; ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="flex justify-center h-auto mt-24 xl:w-1/2 sm:w-full xl:justify-start xl:mt-0">
      <div class="relative 2xl:left-16 -top-7 lg:-top-16">
        <div class="rounded-full size-[40rem] sm:size-[40rem] md:size-[20rem] lg:size-[30rem] xl:size-[40rem] overflow-hidden">
          <img src="<?php echo $heroImage['url']; ?>" class="object-cover w-full h-full" alt="<?php echo $heroImage['alt']; ?>">
        </div>
        <img src="<?php echo valtes_assets('images/Ellipse-2.svg') ?>" class="absolute w-full h-full -bottom-3/20 -left-1/14" alt="">
        <img src="<?php echo valtes_assets('images/Ellipse-3.svg') ?>" class="absolute w-full h-full -bottom-1/6 -left-1/7" alt="">
        <?php if (!empty($floating_image['url'])): ?>
          <div class="absolute bg-white rounded-full border-5 border-[#f3f6ff] 
                md:px-8 md:py-10 md:-bottom-1/60 md:-left-1/20
                px-5 py-6 -bottom-1/12 -left-1/30
                ">
            <img src="<?= $floating_image['url'] ?>" class="object-cover w-24 md:w-40" alt="">
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  </div>
</section>