<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$header = valtes_get_field('header', [], 'option');

?>

<header id="header" x-data="header" role="banner" class=" bg-transparent fixed top-0 w-full !z-50">
    <?php get_template_part('template-parts/skip-link'); ?>
    <!-- <section class="bg-[#1c233e] text-white">
        <div class="container flex items-center justify-between py-2">
            <div class="hidden sm:block">
                <?php esc_html_e( "Toegankelijkheidsinstellingen" , "valtes" ) ?>
            </div>
        </div>
    </section> -->

    <div class="container items-center justify-between hidden py-2 lg:flex">
        <div class="flex items-center ">
            <a href="<?php echo home_url(); ?>" class="">
                <img src="<?php echo $header['valtespro_logo']['url'] ?>" alt="<?php echo $header['valtespro_logo']['alt'] ?>" class="w-auto h-6 ">
            </a>

            <div class="ml-10">
                <?php                
                wp_nav_menu(array(
                    'theme_location' => 'my-custom-menu',
                    'container' => 'nav',
                    'menu_class' => 'navbar-menu flex',
                    'walker' => new Custom_Walker_Nav_Menu()
                ));
                ?>
            </div>
        </div>

        <a href="<?php echo $header['cta']['url'] ?>"
            class="flex items-center px-3 py-2 text-xs font-semibold text-blue-700 bg-white border-2 border-blue-700 rounded-full"
            target="_blank"
            >
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                    <path d="M11 13l9 -9" />
                    <path d="M15 4h5v5" />
                </svg>
            </span>
            <?php echo $header['cta']['title'] ?>
        </a>

    </div>

    <!-- <header class="flex items-center justify-between p-4 bg-white shadow-md"> -->
    <div id="mobile-header" class="flex items-center text-lg font-bold justify-between lg:hidden px-2 py-2">
        <a href="<?php echo home_url(); ?>" class="">
            <img src="<?php echo valtes_assets('images/Valtespro_logo.png') ?>" alt="" class="w-20 ">
        </a>
        <div>
            <a href="<?php echo $header['cta']['url'] ?>"
                class="sm:flex items-center px-3 py-2 text-sm font-semibold text-primary bg-white border-2 border-primary rounded-full w-full"
                target="_blank"
                >
                <?php echo $header['cta']['title'] ?>
            </a>
        </div>
        <div class="px-3 py-4 bg-primary rounded-lg">
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
    <div id="mobileMenu" class="z-40 flex-col h-screen hidden p-6 bg-white">
        <div class="flex flex-col justify-between h-[80vh] overflow-y-scroll">
            <div class=" mt-10">
                <h2 class="text-xl font-bold text-center mb-4 text-[#1C233E]">
                    <?php esc_html_e( "Menu" , "valtes" ) ?>
                </h2>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'my-custom-menu',
                        'container' => 'nav',
                        'menu_class' => 'navbar-menu',
                        // 'walker' => new Custom_Nav_Walker()
                    ));
                ?>
            </div>
            <div class="">
                <button class="py-4 font-bold text-center text-white bg-primary text-xl rounded-full w-full">
                    <?php esc_html_e( "Download de Valtes app" , "valtes" ) ?>
                </button>
            </div>
        </div>
    </div>

    <script>
    const mobileHeader = document.getElementById('mobile-header');
    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const bars = menuToggle.querySelectorAll('span');

    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        if (!mobileMenu.classList.contains('hidden')) {
            // Transform hamburger into close button
            bars[0].classList.add('rotate-45', 'translate-y-[6px]');
            bars[1].classList.add('opacity-0');
            bars[2].classList.add('-rotate-45', '-translate-y-[6px]');
            mobileHeader.classList.add('bg-white');
        } else {
            // Restore hamburger
            bars[0].classList.remove('rotate-45', 'translate-y-[6px]');
            bars[1].classList.remove('opacity-0');
            bars[2].classList.remove('-rotate-45', '-translate-y-[6px]');
            mobileHeader.classList.remove('bg-white');
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        const header = document.getElementById("header");

        const topSentinel = document.createElement("div");
        topSentinel.style.position = "absolute";
        topSentinel.style.top = "0";
        topSentinel.style.height = "1px";
        topSentinel.style.width = "100%";
        document.body.prepend(topSentinel);

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) {
                        header.classList.add("bg-white", "shadow-md");
                    } else {
                        header.classList.remove("bg-white", "shadow-md");
                    }
                });
            },
            {
                root: null,
                threshold: 0,
            }
        );

        observer.observe(topSentinel);
    });
    
    </script>

</header>