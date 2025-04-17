<?php


$milestones = $args['milestones'];


?>

<section class="bg-primaryLight py-10">
    <div class="container relative px-5 my-4 sm:px-5 xl:px-0">

        <h2 class="w-full mb-10 text-3xl font-bold text-[#1c233e] text-center">
            <?php echo $milestones['heading']; ?>
        </h2>
        <div class="flex">
            <div class="relative flex flex-col mx-auto gap-14">
                <img src="<?php echo valtes_assets('images/line.png') ?>" alt="" width="50"
                    class="absolute h-full lg:left-[13.75rem] -left-[1.65rem]">
                <?php foreach ($milestones['milestones'] as $milestone): ?>
                <div class="relative flex flex-col justify-end -mt-4 lg:justify-center lg:flex-row lg:items-center ">

                    <div class="flex items-center flex-row-reverse lg:flex-row justify-end w-[16rem]">
                        <span class="pr-5 text-xl font-bold text-primary"><?php echo $milestone['date']; ?></span>
                        <div class="w-5 h-5 mr-3 -ml-3 rounded-full lg:w-6 lg:h-6 bg-primary lg:m-0"></div>
                    </div>
                    <?php foreach ($milestone['inner_milestones'] as $index => $inner): ?>
                    <div
                        class="flex lg:items-center lg:w-[43.65rem] w-full justify-start p-4 mb-4 lg:mb-3 <?php echo (isset($milestone['first_image']) && $milestone['first_image'] == "left") ? 'lg:flex-row-reverse flex-col-reverse' : 'lg:flex-row flex-col'; ?>">
                        <div
                            class="<?php echo (isset($milestone['first_image']) && $milestone['first_image'] == "left") ? 'lg:pl-6' : 'lg:pr-6'; ?>">
                            <h3 class="mb-2 text-lg font-bold text-[#1C233E]"><?php echo $inner['title']; ?></h3>
                            <p class="text-sm mb-6 lg:mb-0 text-gray-700  w-full"><?php echo $inner['description']; ?>
                            </p>
                        </div>
                        <div
                            class="relative <?php echo $inner['image']['url'] == null ? "hidden" : "block"; ?> before:content-[''] lg:w-full w-[90%] lg:h-full before:absolute before:w-[2.5rem] before:h-[2.5rem] before:bg-[#6997ff] before:rounded-full before:-translate-y-1/2 <?php echo (isset($milestone['first_image']) && $milestone['first_image'] == "left") ? 'lg:mb-0 mb-2 before:-left-1 before:-bottom-3' : 'mb-0 before:-right-1 before:top-6'; ?>">
                            <?php $focusPoint = get_post_meta($inner['image']['ID'], 'bg_pos_desktop', true );?>
                            <img src="<?php echo $inner['image']['url']; ?>" alt=""
                                style="object-fit: cover; object-position: <?php echo $focusPoint; ?>;"
                                class="relative z-10 rounded-full md:h-44 h-24 w-full md:min-w-[400px] object-cover object-center">
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>