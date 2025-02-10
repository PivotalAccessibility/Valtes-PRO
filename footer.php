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

$footer = valtes_get_field('footer', [
   'valtes_logo' => [
      'url' => valtes_assets('images/valtes_logo.svg'),
      'alt' => 'Valtes Logo',
   ],
   'valtes_address' => 'Valtes Care B.V. Industrieweg 1 9402 NP Assen',
   'user_image' => [
      'url' => valtes_assets('images/Zorginnovatieprijs_2024_RGB.png'),
      'alt' => 'User Image',
   ],
   'use_valtes' => [
      [
         'title' => [
            'url' => '#',
            'name' => 'Gemeenten en welzijnsorganisaties',
         ]
      ],
      [
         'title' => [
            'url' => '#',
            'name' => 'Zorgaanbieders',
         ]
      ],
      [
         'title' => [
            'url' => '#',
            'name' => 'Contentpartners',
         ]
      ],
      [
         'title' => [
            'url' => '#',
            'name' => 'Communicatiepartners',
         ]
      ],
   ],
   'informations' => [
      [
        'info' => [
            'url' => '#',
            'name' => 'Contact',
         ]
      ],
      [
         'info' => [
             'url' => '#',
             'name' => 'Over Valtes',
          ]
       ],
       [
         'info' => [
             'url' => '#',
             'name' => 'Kenniscentrum',
          ]
       ],
       [
         'info' => [
             'url' => '#',
             'name' => 'In de media',
          ]
       ],
       [
         'info' => [
             'url' => '#',
             'name' => 'Jobs',
          ]
       ],
   ],
   'stay_in_touch' => [
      'title' => 'Vragen, opmerkingen of ideeën?',
      'description' => 'We horen graag van je.',
      'cta' => [
         'url' => '#',
         'name' => 'Contact',
      ]
   ], 
   'collaborators' => [
      'title' => 'Samenwerken met Valtes?',
      'description' => 'Neem dan een kijkje op onze website voor partners:',
      'cta' => [
         'url' => '#',
         'name' => 'Voor professionals',
      ]
   ],
]);

?>

</main><!-- #content -->

<div class="sr-only live-status-region" role="status"></div>
<footer class="when-sm:mt-16 bg-[#1c233e]">
   <div class="container max-w-4xl px-4 mx-auto 2xl:max-w-5xl">
      <div class="grid grid-cols-12 gap-5 pt-5 lg:gap-0 lg:grid-cols-12">
         <div class="flex flex-row items-start col-span-12 space-x-3 lg:justify-start justify-evenly lg:flex-col lg:col-span-3 lg:space-x-0">
            <div>
               <img src="<?php echo valtes_assets('images/valtes_logo.svg') ?>" alt="Valtes Logo" class="w-32 h-10">
               <p class="pb-4 mt-5 text-xs font-normal text-white">
                  Valtes Care B.V. </br> Industrieweg 1 9402 NP </br> Assen
               </p>
            </div>
            <div class="p-5 bg-white rounded-full">
               <img src="<?php echo valtes_assets('images/Zorginnovatieprijs_2024_RGB.png') ?>" alt=""
                  class="h-10 w-28">
            </div>
         </div>
         <div class="flex-col items-start hidden col-span-6 lg:flex lg:col-span-3">
            <h2 class="text-sm font-bold text-white">Valtes Voor</h2>
            <ul class="text-[#a5a5a5] mt-5 text-xs font-normal space-y-3">
               <li><a href="#">Gemeenten en welzijnsorganisaties</a></li>
               <li><a href="#">Zorgaanbieders</a></li>
               <li><a href="#">Contentpartners</a></li>
               <li><a href="#">Communicatiepartners</a></li>
            </ul>
         </div>

         <!-- for phone valtes voor start-->

         <div class="col-span-12 px-2 lg:hidden">

            <button id="valtes_voor" class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#232A44]">
               <div class="font-semibold text-white">Valtes Voor</div>
                  <div id="down_arrow" class="flex items-center justify-center p-2 bg-[#9195a2] rounded-full"><svg width="12" height="12"
                        viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M6.02344 10.3281L0.46875 4.77344L0.984375 3.28125L6.02344 8.32031L11.0625 3.28125L11.5547 4.77344L6.02344 10.3281Z"
                           fill="#1C233E" />
                     </svg>

                    

                  </div>
                  <div id="up_arrow" class="hidden items-center justify-center p-2 bg-[#9195a2] rounded-full">  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.97656 1.67187L11.5313 7.22656L11.0156 8.71875L5.97656 3.67969L0.9375 8.71875L0.445313 7.22656L5.97656 1.67187Z" fill="#1C233E"/>
</svg>
                  </div>

            </button>

            <ul id="valtes_voor-list" class="hidden mt-4 space-y-4">
            <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class=" text-[#6E7A84]">Gemeenten en welzijnsorganisaties</a></li>
               <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">Zorgaanbieders</a></li>
               <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">Contentpartners</a></li>
               <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">Communicatiepartners</a></li>
            </ul>
         </div>

         <!-- for phone valtes voor end-->

         <div class="flex-col items-start hidden col-span-6 lg:flex lg:col-span-2">
            <h2 class="text-sm font-bold text-white">Informatie</h2>
            <ul class="text-[#a5a5a5] mt-5 text-xs font-normal space-y-3">
               <li><a href="#">Contact</a></li>
               <li><a href="#">Over Valtes</a></li>
               <li><a href="#">Kenniscentrum</a></li>
               <li><a href="#">In de media</a></li>
               <li><a href="#">Jobs</a></li>
            </ul>
         </div>

         <!-- for phone Informatie start-->

         <div class="col-span-12 px-2 lg:hidden">

            <button id="info" class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#232A44]">
               <div class="font-semibold text-white">Informatie</div>
               <div id="down_arrow_info" class="flex items-center justify-center p-2 bg-[#9195a2] rounded-full"><svg width="12" height="12"
                        viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M6.02344 10.3281L0.46875 4.77344L0.984375 3.28125L6.02344 8.32031L11.0625 3.28125L11.5547 4.77344L6.02344 10.3281Z"
                           fill="#1C233E" />
                     </svg>

                    

                  </div>
                  <div id="up_arrow_info" class="hidden items-center justify-center p-2 bg-[#9195a2] rounded-full">  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.97656 1.67187L11.5313 7.22656L11.0156 8.71875L5.97656 3.67969L0.9375 8.71875L0.445313 7.22656L5.97656 1.67187Z" fill="#1C233E"/>
</svg>
                  </div>

            </button>

            <ul id="info_list" class="hidden mt-4 space-y-4">
            <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class=" text-[#6E7A84]">Contact</a></li>
               <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">Over Valtes</a></li>
               <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">Kenniscentrum</a></li>
               <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">In de media</a></li>
               <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">Jobs</a></li>
          
            </ul>
         </div>

         <!-- for phone informatie end-->




           <!-- for phone Privacy start-->

           <div class="col-span-12 px-2 lg:hidden">

<button id="privacy" class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#232A44]">
   <div class="font-semibold text-white">Privacy</div>
   <div id="down_arrow_privacy" class="flex items-center justify-center p-2 bg-[#9195a2] rounded-full"><svg width="12" height="12"
            viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
               d="M6.02344 10.3281L0.46875 4.77344L0.984375 3.28125L6.02344 8.32031L11.0625 3.28125L11.5547 4.77344L6.02344 10.3281Z"
               fill="#1C233E" />
         </svg>

        

      </div>
      <div id="up_arrow_privacy" class="hidden items-center justify-center p-2 bg-[#9195a2] rounded-full">  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.97656 1.67187L11.5313 7.22656L11.0156 8.71875L5.97656 3.67969L0.9375 8.71875L0.445313 7.22656L5.97656 1.67187Z" fill="#1C233E"/>
</svg>
      </div>

</button>

<ul id="privacy_list" class="hidden mt-4 space-y-4">
<li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class=" text-[#6E7A84]">Contact</a></li>
   <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">Over Valtes</a></li>
   <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">Kenniscentrum</a></li>
   <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">In de media</a></li>
   <li class="flex items-center justify-between w-full px-3 py-4 rounded-lg bg-[#202742]"><a href="#" class="text-[#6E7A84]">Jobs</a></li>

</ul>
</div>

<!-- for phone Privacy end-->



         <div class="flex flex-col col-span-12 lg:col-span-4">
            <h2 class="hidden text-sm font-bold text-white lg:block">Download de gratis Valtes app:</h2>
            <div class="flex flex-col mt-5 lg:flex-row">
               <img src="<?php echo valtes_assets('images/footer-phones.png') ?>" class="lg:w-auto self-center lg:self-auto lg:h-40 w-[60%] h-auto" alt="">
               <div class="flex flex-row items-center mt-6 ml-5 lg:mt-0 lg:flex-col justify-evenly">
                  <div class="flex flex-col space-y-2">
                  <img src="<?php echo valtes_assets('images/AppStorewhite.png') ?>" class="lg:w-auto lg:h-8" alt="">
                  <img src="<?php echo valtes_assets('images/GooglePlaywhite.png') ?>" class="lg:mt-3 lg:w-auto lg:h-8" alt="">
                  </div>
                  <img src="<?php echo valtes_assets('images/qr.png') ?>" class="lg:mt-3 w-28 lg:w-20 lg:h-20" alt="">
               </div>
            </div>
         </div>
      </div>
      <div class="h-[1px] bg-gray-500 mt-3 w-full"></div>

      <div class="grid grid-cols-12 gap-5 py-6 lg:gap-0">
         <div class="flex flex-col items-start justify-between col-span-12 lg:flex-row lg:items-end lg:col-span-3">
            <div>
               <h3 class="text-base font-medium leading-6 text-white w-[70%]">Vragen, opmerkingen of ideeën?</h3>
               <p class="mt-2 text-xs font-normal text-[#b2b2b2]">We horen graag van je.</p>
            </div>
            <button
               class="mt-3 lg:mt-0 flex items-center justify-center text-[18px] px-4 py-3 lg:text-xs font-medium text-[#2B37DC] bg-white border-2 border-[#2B37DC] rounded-full w-full lg:w-fit">Contact</button>
         </div>
         <div
            class="flex flex-col items-start justify-between col-span-12 lg:px-5 lg:flex-row lg:items-end lg:col-span-6">
            <div class="flex flex-col lg:items-center">
               <h3 class="text-base font-medium leading-7 text-white">Samenwerken met Valtes?</h3>
               <p class="mt-2 text-xs font-normal text-[#b2b2b2] w-[70%]">Neem dan een kijkje op onze website voor partners:</p>
            </div>
            <a href=""
               class="flex items-center justify-center lg:w-40 text-[18px] py-2 mt-3 lg:mt-0 font-medium lg:text-xs text-[#2B37DC] bg-white border-2 border-[#2B37DC] rounded-full w-full">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2B37DC" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-1">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                  <path d="M11 13l9 -9" />
                  <path d="M15 4h5v5" />
               </svg>
               Voor professionals
            </a>
         </div>
         <div class="flex items-center justify-center col-span-12 mt-4 lg:mt-0 lg:justify-end lg:items-end lg:col-span-3">
            <span>
            <svg width="51" height="32" viewBox="0 0 51 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M39.2143 0H11.7786C10.5214 0 9.5 1.03571 9.5 2.30714V29.6929C9.5 30.9643 10.5214 32 11.7786 32H39.2143C40.4714 32 41.5 30.9643 41.5 29.6929V2.30714C41.5 1.03571 40.4714 0 39.2143 0ZM19.1714 27.4286H14.4286V12.1571H19.1786V27.4286H19.1714ZM16.8 10.0714C15.2786 10.0714 14.05 8.83571 14.05 7.32143C14.05 5.80714 15.2786 4.57143 16.8 4.57143C18.3143 4.57143 19.55 5.80714 19.55 7.32143C19.55 8.84286 18.3214 10.0714 16.8 10.0714ZM36.95 27.4286H32.2071V20C32.2071 18.2286 32.1714 15.95 29.7429 15.95C27.2714 15.95 26.8929 17.8786 26.8929 19.8714V27.4286H22.15V12.1571H26.7V14.2429H26.7643C27.4 13.0429 28.95 11.7786 31.2571 11.7786C36.0571 11.7786 36.95 14.9429 36.95 19.0571V27.4286Z" fill="#C4D7FF"/>
</svg>

            </span>
            <a href="" class="ml-3 text-base font-bold underline lg:mt-0 text-[#C3D7FF]">/company/valtes</a>
         </div>
      </div>
      <div class="h-[1px] bg-gray-500 w-full hidden lg:block"></div>

      <div class="flex flex-col items-center justify-between pb-5 text-white lg:py-5 lg:flex-row">
         <div class="w-[65%] lg:w-full text-center lg:text-start">
            <p class="px-3 text-sm font-normal lg:text-xs">© 2024 Valtes Care B.V. · Ontwikkeld door RocketCare</p>
         </div>
         <div>
            <p class="hidden px-3 text-xs font-normal lg:block">
               Cookieverklaring / Privacy statement
            </p>
         </div>
      </div>
   </div>
</footer>

<!-- <footer class="bg-[#1c233e]">
    <div class="container flex flex-col p-3 mx-auto">
        <div class="grid py-4 space-y-5 md:grid-cols-12 sm:space-y-0">
            <div class="flex flex-col col-span-3 space-y-5 grow">
                <div class="">
                  <img src="<?php echo valtes_assets('images/valtes_logo.svg') ?>" alt="">
                </div>
                <div class="mt-4 text-white"><span>Valtes Care B.V.<br>Industrieweg 1 9402 NP<br> Assen</span></div>
                <div class="">
                    <div class="flex justify-center py-6 bg-white rounded-full w-50">
                          <img src="./Zorginnovatieprijs_2024_RGB.png" class="w-30" alt="" />
                    </div>
                </div>
            </div>
            <div class="flex flex-col col-span-3">
                <div class="my-auto sm:my-0">
                <h2 class="mb-4 text-xl font-bold text-white">Valtes Voor</h2>
                <ul class="space-y-4">
                    <li class="text-sm font-medium text-gray-500"><a href="">Gemeenten en welzijnsorganisaties</a></li>
                    <li class="text-sm font-medium text-gray-500"><a href="">Zorgaanbieders</a></li>
                    <li class="text-sm font-medium text-gray-500"><a href="">Contentpartners</a></li>
                    <li class="text-sm font-medium text-gray-500"><a href="">Communicatiepartners</a></li>
                </ul>
            </div>
            </div>
            <div class="flex flex-col col-span-2">
                <div class="my-auto sm:my-0">
                <h2 class="mb-4 text-xl font-bold text-white">Informatie</h2>
                <ul class="space-y-4">
                    <li class="text-sm font-medium text-gray-500"><a href="">Contact</a></li>
                    <li class="text-sm font-medium text-gray-500"><a href="">Over Valtes</a></li>
                    <li class="text-sm font-medium text-gray-500"><a href="">Kenniscentrum</a></li>
                    <li class="text-sm font-medium text-gray-500"><a href="">In de media</a></li>
                    <li class="text-sm font-medium text-gray-500"><a href="">Jobs</a></li>
                </ul>
            </div>
            </div>
            <div class="flex flex-col items-center col-span-4 md:items-start">
                <h2 class="mb-4 text-xl font-bold text-white">Download de gratis Valtes app:</h2>
                <div class=" md:space-x-10 md:flex">
                    <div class="">
                        <img src="./footer-phones.png" alt="">
                    </div>
                    <div class="flex flex-col items-center mt-4 space-y-4 md:items-center md:mt-0">
                        <img src="./Appstore.png" class="bg-white w-30" alt="">
                        <img src="./GooglePlay.png" class="bg-white w-30" alt="">
                        <img src="./qr.png" class="bg-white w-25" alt="">
                    </div>
                </div>
            </div>

        </div>
        <hr class="mt-3 text-gray-100 opacity-25">
        <div class="grid my-8 sm:grid-cols-12">
            <div class="flex-row flex-wrap col-span-6 p-3 md:flex md:col-span-4 sm:p-0">
                <div class="flex-col justify-center md:flex sm:w-min">
                    <h3 class="w-full mb-3 text-xl font-semibold text-white sm:w-50">Vragen, opmerkingen of ideeën?</h3>
                    <p class="text-gray-500">We horen graag van je.</p>
                </div>
                <div class="flex items-end w-full sm:w-min">
                    <button class="px-4 py-2 w-full mx-auto text-[#2b37dc] mt-4 bg-white rounded-full border-2 border-[#2b37dc]">Contact</button>
                </div>
            </div>
            <div class="flex flex-row flex-wrap col-span-6 p-3 sm:p-0">
                <div class="flex-col justify-center ">
                    <h3 class="mb-3 text-xl font-semibold text-white w-70">Samenwerken met Valtes?</h3>
                    <p class="text-gray-500 w-60">Neem dan een kijkje op onze website voor partners:</p>
                </div>
                <div class="flex items-end w-full sm:w-max">
                    <button class="px-4 py-2 w-full text-[#2b37dc] bg-white mt-4 rounded-full border-2 border-[#2b37dc]">Voor professionals</button>
                </div>
            </div>
            <div class="flex justify-start col-span-2 p-3 sm:p-0 sm:justify-end">
                <a href="" class="flex items-center text-xl text-[#c3d7ff] font-semibold underline"><span><img src="./linkedin.png"
                            class="w-10 mr-4" alt=""></span> /Company/Valtes</a>
            </div>
        </div>
        <hr class="text-gray-100 opacity-25">
        <div class="flex-wrap items-center justify-between px-3 py-6 space-y-5 text-sm text-gray-300 sm:space-y-0 sm:px-0 md:flex">
            <p>© 2024 Valtes Care B.V. • Ontwikkeld door RocketCare</p>
            <p>Cookieverklaring / Privacy statement</p>
        </div>
    </div>
   </footer> -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>



<script>

const valtes_voor = document.getElementById('valtes_voor');
const info = document.getElementById('info');
const privacy = document.getElementById('privacy');

valtes_voor.addEventListener("click", function (e) {
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



  info.addEventListener("click", function (e) {
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
  }});

  privacy.addEventListener("click", function (e) {
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
  }});


</script>

</html>