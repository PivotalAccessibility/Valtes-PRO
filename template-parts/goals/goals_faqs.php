<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if ($args) {
    extract($args);
}

$faqs = valtes_get_field('faqs', []);

?>

<section class="container mx-auto 2xl:max-w-5xl max-w-4xl mt-20 px-5 sm:px-0">
    <div class="flex flex-col justify-center items-center gap-4 pb-20">
        <h2 class="text-3xl font-bold text-center">
            <?php echo $faqs['heading']; ?>
        </h2>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="w-full pt-5 md:w-1/2 flex flex-col justify-between items-start">
                <div class="w-full bg-[#f0f5ff] h-52 flex flex-col items-start justify-between gap-5 p-5 rounded-2xl">
                    <h2 class=" font-bold text-lg">
                        <?php echo $faqs['form_title']; ?>
                    </h2>
                    <p>
                        <?php echo $faqs['form_description']; ?>
                    </p>
                    <a href="<?php echo $faqs['form_link']['url']; ?>"
                        class="flex justify-center items-center gap-4 text-[#2B37DC] underline font-bold">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-mail">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" />
                                <path
                                    d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" />
                            </svg>
                        </span>
                        <?php echo $faqs['form_link']['title']; ?>
                    </a>
                </div>
                <div class=" mt-5 sm:mt-0">
                    <p>
                        <?php echo $faqs['collab_title']; ?>
                    </p>
                </div>
                <div>
                    <a href=""
                        class="flex items-center px-3 py-2 text-xs font-normal text-blue-700 bg-white border border-blue-700 rounded-full w-40 mt-5 sm:mt-0">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-5 h-5 mr-2">
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
            <div class="w-full md:w-1/2 sm:p-5 md:px-20">
                <?php echo do_shortcode('[forminator_form id="202"]'); ?>
            </div>

        </div>
    </div>
</section>