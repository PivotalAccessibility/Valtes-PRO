<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$hero = valtes_get_field('goals', []);

?>

<section class="w-full">
    <div class="container flex flex-wrap items-center justify-center max-w-4xl px-3 mx-auto lx:p-0 2xl:max-w-5xl my-28">
        <div class="flex flex-wrap justify-center w-full">
    <h2 class="text-3xl font-bold text-[#1C233E] text-center w-full">
        <?php echo $hero['title']; ?>   
    </h2>
    <p class="text-sm text-gray-700 w-[36rem] my-4 text-center">
        <?php echo $hero['description']; ?>
    </p>
</div>    

<div class="relative lg:w-[44rem] w-full space-y-5 lg:space-y-0 lg:h-[25rem] mt-5 flex flex-col lg:block">


<div class="flex self-end lg:self-auto lg:absolute top-0 left-56 bg-[#89ADFF] p-6 w-fit justify-evenly items-center rounded-full">
    <div class="p-2"><img src="<?php echo valtes_assets('images/goals-images/nurse-assistant-emergency.png') ?>" class="w-9" alt=""></div>
    <div class="ml-3 w-44"><span class="text-lg leading-0.5 font-bold text-[#1C233E]">We zijn behulpzaam en helpen vooruit</span></div>
</div>

<div class="flex bg-[#E0EAFF] p-6 w-fit justify-evenly lg:absolute -left-28 bottom-54 items-center rounded-full">
    <div class="p-2"><img src="<?php echo valtes_assets('images/goals-images/Back-Camera-1--Streamline-Core.svg.png') ?>" class="w-9" alt=""></div>
    <div class="ml-3 w-28"><span class="text-lg leading-0.5 font-bold text-[#1C233E]">We voorzien in vrijheid</span></div>
</div> 

<h3 class="lg:absolute self-center top-44 left-64 lg:text-[1.625rem] text-4xl font-bold text-[#1C233E] my-8 text-center w-fit">Onze Kernwaarden</h3>


<div class="flex bg-[#F0F5FF] self-end lg:self-auto lg:absolute -right-28 bottom-40 p-6 w-fit justify-evenly items-center rounded-full">
    <div class="p-2"><img src="<?php echo valtes_assets('images/goals-images/Business-Progress-Bar-2--Streamline-Core.svg.png') ?>" class="w-9" alt=""></div>
    <div class="w-40 ml-3"><span class="text-lg leading-0.5 font-bold text-[#1C233E]">We streven naar uitmuntendheid</span></div>
</div>



<div class="flex bg-[#2B37DC] p-6 w-fit justify-evenly lg:absolute bottom-6 -left-6 items-center rounded-full">
    <div class="p-2"><img src="<?php echo valtes_assets('images/goals-images/Decent-Work-And-Economic-Growth--Streamline-Core.svg.png') ?>" class="w-9" alt=""></div>
    <div class="w-40 ml-3"><span class="text-lg leading-0.5 font-bold text-white">We zetten in op groei met impact</span></div>
</div>

<div class="flex bg-[#BBBEF4] self-end lg:self-auto p-6 w-fit lg:absolute right-14 -bottom-6 justify-evenly items-center rounded-full">
    <div class="p-2"><img src="<?php echo valtes_assets('images/goals-images/Peace-Hand--Streamline-Core.svg.png') ?>" class="w-9" alt=""></div>
    <div class="ml-3 w-44"><span class="text-lg leading-0.5 font-bold text-[#1C233E]">We doen alles energiek en anders</span></div>
</div>

<!-- <div class="flex bg-[#E0EAFF] p-6 w-fit justify-evenly lg:absolute -left-28 bottom-54 items-center rounded-full">
    <div class="p-2"><img src="<?php echo valtes_assets('images/goals-images/Back-Camera-1--Streamline-Core.svg.png') ?>" class="w-9" alt=""></div>
    <div class="ml-3 w-28"><span class="text-lg leading-0.5 font-bold text-[#1C233E]">We voorzien in vrijheid</span></div>
</div>  -->


</div>
</div>
</section>