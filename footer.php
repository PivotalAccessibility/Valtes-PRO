<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pivotalaccessibility
 */

$footer = valtes_get_field('footer', [], 'option');

?>

</main><!-- #content -->

<div class="sr-only live-status-region" role="status"></div>
<footer class="when-sm:mt-16 bg-[#1c233e]">
    <div class="container px-4">
        <div class="grid grid-cols-12 gap-5 pt-5 pb-8 min-md:border-b-1 border-[#333951] lg:gap-0 lg:grid-cols-12">
            <div class="flex flex-row items-start col-span-12 space-x-3 lg:justify-start justify-evenly lg:flex-col lg:col-span-3 lg:space-x-0">
                <div>
                    <img src="<?php echo $footer['valtes_logo']['url'] ?>" alt="<?php echo $footer['valtes_logo']['alt'] ?>" class="w-32 h-10">
                    <p class="pb-4 mt-5 text-base font-normal text-white md:pr-32">
                        <?php echo $footer['address'] ?>
                    </p>
                </div>
                <div class="p-5 bg-white rounded-full">
                    <img src="<?php echo $footer['label_image']['url'] ?>" alt="<?php echo $footer['label_image']['alt'] ?>" class="h-10 w-28">
                </div>
            </div>

            <div class="flex-col items-start hidden col-span-6 lg:flex lg:col-span-3">
                <h2 class="text-sm font-bold text-white">
                    <?php echo $footer['valtes_voor_section']['title'] ?>
                </h2>

                <ul class="text-[#a5a5a5] mt-5 text-base font-normal space-y-3">
                    <?php foreach ($footer['valtes_voor_section']['page_name'] as $index => $name): ?>
                        <li>
                            <a href="<?php echo $name['link']['url'] ?>">
                                <?php echo $name['link']['title'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>

            <!-- for phone valtes voor start-->
            <div class="col-span-12 px-2 lg:hidden">

                <button id="valtes_voor" class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#232A44]">
                    <div class="font-semibold text-white">Valtes Voor</div>
                    <div id="down_arrow" class="flex items-center justify-center p-2 bg-[#9195a2] rounded-full"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.02344 10.3281L0.46875 4.77344L0.984375 3.28125L6.02344 8.32031L11.0625 3.28125L11.5547 4.77344L6.02344 10.3281Z" fill="#1C233E" />
                        </svg>



                    </div>
                    <div id="up_arrow" class="hidden items-center justify-center p-2 bg-[#9195a2] rounded-full"> <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.97656 1.67187L11.5313 7.22656L11.0156 8.71875L5.97656 3.67969L0.9375 8.71875L0.445313 7.22656L5.97656 1.67187Z" fill="#1C233E" />
                        </svg>
                    </div>

                </button>

                <ul id="valtes_voor-list" class="hidden mt-4 space-y-4">
                    <?php foreach ($footer['valtes_voor_section']['page_name'] as $index => $name): ?>
                        <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]">
                            <a href="<?php echo $name['link']['url'] ?>" class="text-[#6E7A84]">
                                <?php echo $name['link']['title'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- for phone valtes voor end-->

            <div class="flex-col items-start hidden col-span-6 lg:flex lg:col-span-2">
                <h2 class="text-sm font-bold text-white">
                    <?php echo $footer['information_section']['title'] ?>
                </h2>
                <ul class="text-[#a5a5a5] mt-5 text-base font-normal space-y-3">
                    <?php foreach ($footer['information_section']['page_name'] as $index => $name): ?>
                        <li>
                            <a href="<?php echo $name['link']['url'] ?>">
                                <?php echo $name['link']['title'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- for phone Informatie start-->
            <div class="col-span-12 px-2 lg:hidden">

                <button id="info" class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#232A44]">
                    <div class="font-semibold text-white">Informatie</div>
                    <div id="down_arrow_info" class="flex items-center justify-center p-2 bg-[#9195a2] rounded-full">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.02344 10.3281L0.46875 4.77344L0.984375 3.28125L6.02344 8.32031L11.0625 3.28125L11.5547 4.77344L6.02344 10.3281Z" fill="#1C233E" />
                        </svg>
                    </div>
                    <div id="up_arrow_info" class="hidden items-center justify-center p-2 bg-[#9195a2] rounded-full">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.97656 1.67187L11.5313 7.22656L11.0156 8.71875L5.97656 3.67969L0.9375 8.71875L0.445313 7.22656L5.97656 1.67187Z" fill="#1C233E" />
                        </svg>
                    </div>

                </button>

                <ul id="info_list" class="hidden mt-4 space-y-4">
                    <?php foreach ($footer['information_section']['page_name'] as $index => $name): ?>
                        <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]">
                            <a href="<?php echo $name['link']['url'] ?>" class="text-[#6E7A84]">
                                <?php echo $name['link']['title'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- for phone informatie end-->


            <!-- for phone Privacy start-->

            <!-- <div class="col-span-12 px-2 lg:hidden">

               <button id="privacy" class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#232A44]">
                   <div class="font-semibold text-white">Privacy</div>
                   <div id="down_arrow_privacy" class="flex items-center justify-center p-2 bg-[#9195a2] rounded-full">
                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M6.02344 10.3281L0.46875 4.77344L0.984375 3.28125L6.02344 8.32031L11.0625 3.28125L11.5547 4.77344L6.02344 10.3281Z" fill="#1C233E" />
                       </svg>



                   </div>
                   <div id="up_arrow_privacy" class="hidden items-center justify-center p-2 bg-[#9195a2] rounded-full">
                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M5.97656 1.67187L11.5313 7.22656L11.0156 8.71875L5.97656 3.67969L0.9375 8.71875L0.445313 7.22656L5.97656 1.67187Z" fill="#1C233E" />
                       </svg>
                   </div>

               </button>

               <ul id="privacy_list" class="hidden mt-4 space-y-4 text-base">
                   <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class=" text-[#6E7A84]">Contact</a></li>
                   <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">Over Valtes</a></li>
                   <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">Kenniscentrum</a></li>
                   <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">In de media</a></li>
                   <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">Jobs</a></li>

               </ul>
           </div> -->
            <!-- for phone Privacy end-->


            <div class="flex flex-col col-span-12 lg:col-span-4">
                <h2 class="hidden text-sm font-bold text-white lg:block">Download de gratis Valtes app:</h2>
                <div class="flex flex-col gap-6 mx-auto mt-5 md:mx-0 lg:flex-row">
                    <img src="<?php echo $footer['download_section']['main_image']['url'] ?>" class="lg:w-auto self-center lg:self-auto lg:h-40 w-[60%] h-auto" alt="<?php echo $footer['download_section']['main_image']['alt'] ?>">
                    <div class="flex flex-row items-center gap-6 gap sm:ml-5 lg:flex-col">
                        <div class="flex flex-col gap-3">
                            <a href="<?php echo $footer['download_section']['appstore_link'] ?>">
                                <img src="<?php echo $footer['download_section']['appstore_image']['url'] ?>" class="lg:w-auto lg:h-8" alt="<?php echo $footer['download_section']['appstore_image']['alt'] ?>">
                            </a>
                            <a href="<?php echo $footer['download_section']['googleplay_link'] ?>">
                                <img src="<?php echo $footer['download_section']['googleplay_image']['url'] ?>" class="lg:w-auto lg:h-8" alt="<?php echo $footer['download_section']['googleplay_image']['alt'] ?>">
                            </a>
                        </div>
                        <img src="<?php echo $footer['download_section']['qr_image']['url'] ?>" class="w-28 lg:w-20 lg:h-20" alt="<?php echo $footer['download_section']['qr_image']['alt'] ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-5 py-6  min-md:border-b-1 border-[#333951] ">
            <div class="flex flex-col items-start justify-between col-span-12 lg:flex-row lg:items-end lg:col-span-3">
                <div>
                    <h3 class="text-lg font-medium leading-6 text-white">
                        <?php echo $footer['contact_us']['title'] ?>
                    </h3>
                    <p class="mt-2 text-base font-normal text-[#b2b2b2]">
                        <?php echo $footer['contact_us']['description'] ?>
                    </p>
                </div>
                <a href="<?php echo $footer['contact_us']['link']['url'] ?>" class="mt-5 btn-footer btn-outline md:mt-0">
                    <?php echo $footer['contact_us']['link']['title'] ?>
                </a>
            </div>
            <div class="flex flex-col items-start justify-between col-span-12 lg:px-5 lg:flex-row lg:items-end lg:col-span-6">
                <div class="flex flex-col items-start">
                    <h3 class="text-lg font-medium leading-7 text-white">
                        <?php echo $footer['collaboration']['title'] ?>
                    </h3>
                    <p class="mt-2 text-base font-normal text-[#b2b2b2]">
                        <?php echo $footer['collaboration']['description'] ?>
                    </p>
                </div>
                <a href="<?php echo $footer['collaboration']['link']['url'] ?>" class="btn-footer btn-outline flex justify-center items-center md:w-[16rem] w-full mt-5 md:mt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2B37DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-1">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                        <path d="M11 13l9 -9" />
                        <path d="M15 4h5v5" />
                    </svg>
                    <?php echo $footer['collaboration']['link']['title'] ?>
                </a>
            </div>
            <div class="flex items-center justify-center col-span-12 mt-4 lg:mt-0 lg:justify-end lg:col-span-3">
                <span>
                    <svg width="51" height="32" viewBox="0 0 51 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M39.2143 0H11.7786C10.5214 0 9.5 1.03571 9.5 2.30714V29.6929C9.5 30.9643 10.5214 32 11.7786 32H39.2143C40.4714 32 41.5 30.9643 41.5 29.6929V2.30714C41.5 1.03571 40.4714 0 39.2143 0ZM19.1714 27.4286H14.4286V12.1571H19.1786V27.4286H19.1714ZM16.8 10.0714C15.2786 10.0714 14.05 8.83571 14.05 7.32143C14.05 5.80714 15.2786 4.57143 16.8 4.57143C18.3143 4.57143 19.55 5.80714 19.55 7.32143C19.55 8.84286 18.3214 10.0714 16.8 10.0714ZM36.95 27.4286H32.2071V20C32.2071 18.2286 32.1714 15.95 29.7429 15.95C27.2714 15.95 26.8929 17.8786 26.8929 19.8714V27.4286H22.15V12.1571H26.7V14.2429H26.7643C27.4 13.0429 28.95 11.7786 31.2571 11.7786C36.0571 11.7786 36.95 14.9429 36.95 19.0571V27.4286Z" fill="#C4D7FF" />
                    </svg>
                </span>
                <a href="<?php echo $footer['linkedin']['url'] ?>" class="ml-3 text-base font-bold underline lg:mt-0 text-[#C3D7FF]">
                    <?php echo $footer['linkedin']['title'] ?>
                </a>
            </div>
        </div>


        <div class="flex flex-col items-center justify-between pb-5 text-white lg:py-5 lg:flex-row">
            <div class="w-full text-center lg:text-start">
                <p class="px-3 text-sm font-normal lg:text-xs">
                    <?php echo $footer['copyright_text'] ?>
                </p>
            </div>
            <div class="items-center hidden lg:flex">
                <a href="<?php echo $footer['cookie_policy']['url'] ?>" class="px-3 text-xs font-normal">
                    <?php echo $footer['cookie_policy']['title'] ?>
                </a>
                <span>/</span>
                <a href="<?php echo $footer['privacy_statement_text']['url'] ?>" class="px-3 text-xs font-normal">
                    <?php echo $footer['privacy_statement_text']['title'] ?>
                </a>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

<script>
    const valtes_voor = document.getElementById('valtes_voor');
    const info = document.getElementById('info');
    const privacy = document.getElementById('privacy');

    valtes_voor?.addEventListener("click", function (e) {
        const list = document.getElementById("valtes_voor-list");
        const down_arrow = document.getElementById("down_arrow");
        const up_arrow = document.getElementById("up_arrow");
        if (list.style.display === "block") {
            list.style.display = "none"; // Hide the list
            down_arrow.style.display = "flex"; // Show the down arrow
            up_arrow.style.display = "none"; // Hide the up arrow
        } else {
            list.style.display = "block"; // Show the list
            down_arrow.style.display = "none"; // Hide the down arrow
            up_arrow.style.display = "flex"; // Show the up arrow

        }
    });

    info?.addEventListener("click", function (e) {
        const listinfo = document.getElementById("info_list");
        const down_arrow_info = document.getElementById("down_arrow_info");
        const up_arrow_info = document.getElementById("up_arrow_info");
        if (listinfo.style.display === "block") {
            listinfo.style.display = "none";
            down_arrow_info.style.display = "flex"; // Show the down arrow
            up_arrow_info.style.display = "none"; // Hide the up arrow
        } else {
            listinfo.style.display = "block";
            down_arrow_info.style.display = "none"; // Hide the down arrow
            up_arrow_info.style.display = "flex"; // Show the up arrow
        }
    });

    privacy?.addEventListener("click", function (e) {
        const listprivacy = document.getElementById("privacy_list");
        const down_arrow_privacy = document.getElementById("down_arrow_privacy");
        const up_arrow_privacy = document.getElementById("up_arrow_privacy");

        if (listprivacy.style.display === "block") {
            listprivacy.style.display = "none";
            down_arrow_privacy.style.display = "flex"; // Show the down arrow
            up_arrow_privacy.style.display = "none"; // Hide the up arrow
        } else {
            listprivacy.style.display = "block";
            down_arrow_privacy.style.display = "none"; // Hide the down arrow
            up_arrow_privacy.style.display = "flex"; // Show the up arrow
        }
    });
</script>

</html>