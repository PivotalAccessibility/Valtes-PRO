<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>

<header id="header" x-data="header" role="banner" class=" bg-transparent fixed top-7 w-full !z-50">
    <?php get_template_part('template-parts/skip-link'); ?>
    <section class="bg-[#1c233e] text-white">
        <div class="container flex items-center justify-between max-w-4xl py-2 mx-auto 2xl:max-w-5xl">
            <div class=" sm:block hidden">
                Toegankelijkheidsinstellingen
            </div>
            <div class="flex justify-center items-center w-full sm:w-auto gap-8">
                <a href="#" class="flex justify-between gap-4 underline">Lettertype
                    <img src="<?php echo valtes_assets('images/goals-images/Down-Arrow.svg') ?>" alt="">
                    <img src="<?php echo valtes_assets('images/goals-images/Up-Arrow.svg') ?>" alt="">
                </a>
                <a href="#" class="flex justify-between gap-4 underline">vergroot contrast
                    <img src="<?php echo valtes_assets('images/goals-images/contrast.svg') ?>" alt="">
                </a>
            </div>
        </div>
    </section>

    <div class="container items-center justify-between hidden max-w-4xl py-2 mx-auto md:flex 2xl:max-w-5xl">
        <div class="flex items-center ">
            <a href="<?php echo home_url(); ?>" class="">
                <img src="<?php echo valtes_assets('images/Valtespro_Logo.png') ?>" alt="" class="w-auto h-6 ">
            </a>

            <div class="ml-10 ">
                <?php
                    //   wp_nav_menu( 
                    //     array( 
                    //         'theme_location' => 'my-custom-menu'
                    //     ) 
                    // ); 

                    wp_nav_menu(array(
                    'theme_location' => 'my-custom-menu',
                    'container' => 'nav',
                    'menu_class' => 'navbar-menu flex',
                    // 'walker' => new Custom_Nav_Walker()
                ));
                ?>
            </div>
        </div>

        <a href=""
            class="flex items-center px-3 py-2 text-xs font-normal text-blue-700 bg-white border border-blue-700 rounded-full ">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                    <path d="M11 13l9 -9" />
                    <path d="M15 4h5v5" />
                </svg>
            </span>
            Voor professionals
        </a>

    </div>

    <!-- <header class="flex items-center justify-between p-4 bg-white shadow-md"> -->
    <div id="mobile-header" class="flex items-center text-lg font-bold justify-evenly md:hidden bg-white">
        <a href="<?php echo home_url(); ?>" class="">
            <img src="<?php echo valtes_assets('images/valtes_logo_dark.svg') ?>" alt="" class="w-28 ">
        </a>
            <div>
                <a href=""
                    class="flex items-center px-3 py-2 text-xl font-semibold text-[#2b37dc] bg-white border-2 border-[#2b37dc] rounded-full ">
                    Voor professionals
                </a>
            </div>
            <div class="px-3 py-4 bg-[#2B37DC] rounded-lg">
                <!-- Custom Hamburger Menu -->
                <button id="menuToggle" class="relative z-50 flex flex-col space-y-1">
                    <span class="block w-6 h-0.5 bg-white transition-transform origin-center"></span>
                    <span class="block w-6 h-0.5 bg-white transition-transform origin-center"></span>
                    <span class="block w-6 h-0.5 bg-white transition-transform origin-center"></span>
                </button>
            </div>
        </div>

        <!-- </header> -->
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="z-40 flex flex-col h-[100%] sm:hidden p-6 bg-white">
            <div class="h-screen flex flex-col justify-center">
                <h2 class="text-xl font-bold text-center mb-4 text-[#1C233E]">Menu</h2>
                <!-- <ul class="space-y-4">
                <li><a href="#" class="block p-3 border border-blue-400 rounded-lg">Over Valtes</a></li>
                <li><a href="#" class="block p-3 border border-blue-400 rounded-lg">Valtes voor ⌄</a></li>
                <li><a href="#" class="block p-3 border border-blue-400 rounded-lg">Kenniscentrum</a></li>
                <li><a href="#" class="block p-3 border border-blue-400 rounded-lg">Contact</a></li>
            </ul> -->
                <?php
                    //   wp_nav_menu( 
                    //     array( 
                    //         'theme_location' => 'my-custom-menu'
                    //     ) 
                    // ); 

                    wp_nav_menu(array(
                    'theme_location' => 'my-custom-menu',
                    'container' => 'nav',
                    'menu_class' => 'navbar-menu',
                    // 'walker' => new Custom_Nav_Walker()
                ));
                ?>
                </div>

            <div class="mt-8">
                <a href="#" class="block py-4 font-bold text-center text-white bg-[#2b37dc] text-xl rounded-full">Download de Valtes app</a>
            </div>
        </div>

        <script>
            const mobileHeader=document.getElementById('mobile-header');
            const menuToggle = document.getElementById('menuToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const bars = menuToggle.querySelectorAll('span');
            menuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                if (!mobileMenu.classList.contains('hidden')) {
                    // Transform hamburger into close button
                    bars[0].classList.add('rotate-45', 'translate-y-1.5');
                    bars[1].classList.add('opacity-0');
                    bars[2].classList.add('-rotate-45', '-translate-y-1.5');
                    mobileHeader.classList.add('bg-white');
                } else {
                    // Restore hamburger
                    bars[0].classList.remove('rotate-45', 'translate-y-1.5');
                    bars[1].classList.remove('opacity-0');
                    bars[2].classList.remove('-rotate-45', '-translate-y-1.5');
                    mobileHeader.classList.remove('bg-white');

                    
                }
            });
        </script>

</header>