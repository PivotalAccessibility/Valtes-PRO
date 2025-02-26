<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$goals = $args['goals'];

$bgColors = ['#89ADFF', '#E0EAFF', '#F0F5FF', '#2B37DC', '#BBBEF4'];
$textColors = ['#1C233E', '#1C233E', '#1C233E', '#ffffff', '#1C233E'];

$floatingItems = $goals['floating_section']['description'] ?? [];
$itemCount = count($floatingItems);
$radiusX = 50; // Horizontal spread (oval width)
$radiusY = 40;  // Vertical spread (oval height)
$centerX = 50; // Center position in percentage
$centerY = 50; // Center position in percentage

?>

<section class="w-full">
    <div class="container flex flex-col items-center justify-center sm:py-20 py-10 px-5 sm:px-5 xl:px-0 relative">
        <?php if (!empty($goals['title'])): ?>
            <h2 class="section-sec-heading text-center w-full">
                <?php echo esc_html($goals['title']); ?>
            </h2>
        <?php endif; ?>

        <?php if (!empty($goals['description'])): ?>
            <div class="py-8 text-center md:w-2/3 section-description">
                <?php echo $goals['description']; ?>
            </div>
        <?php endif; ?>

        <div class="relative lg:w-[55rem] md:w-[40rem] lg:h-[40rem] md:h-[30rem] w-full mt-5">
            <div class="flex flex-col md:hidden gap-8">
                <?php foreach ($floatingItems as $index => $value): ?>
                    <?php if ($index <= $itemCount / 2): ?>
                        <?php continue; endif; ?>
                    <div class="flex p-5 w-3/4 justify-evenly <?php echo $index % 2 === 0 ? 'self-start' : 'self-end'; ?> lg:absolute items-center rounded-full shadow-lg" style="background-color: <?php echo esc_attr($bgColors[$index % count($bgColors)]); ?>;">
                        <img src="<?php echo esc_url($value['image']['url']); ?>" class="w-5" alt="<?php echo esc_attr($value['image']['alt']); ?>">
                        <div class="ml-3 grow">
                            <h3 class="text-xs md:text-2xl font-bold" style="color: <?php echo esc_attr($textColors[$index % count($textColors)]); ?>;">
                                <?php echo esc_html($value['content']); ?>
                            </h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php if (!empty($goals['floating_section']['title'])): ?>
                <h2 class="md:absolute static top-1/2 left-1/2 md:transform md:-translate-x-1/2 md:-translate-y-1/2 text-2xl md:text-3.5xl font-bold text-center md:w-fit w-full my-8 md:my-0" style="color: <?php echo esc_attr($textColors[0]); ?>;">
                    <?php echo esc_html($goals['floating_section']['title']); ?>
                </h2>
            <?php endif; ?>
            <div class="hidden md:block">
                <?php foreach ($floatingItems as $index => $value): ?>
                    <?php
                    $angle = -90 + (360 / $itemCount) * $index; // Start from the top (-90°)
                    $x = $centerX + $radiusX * cos(deg2rad($angle)); // X position (wider spread)
                    $y = $centerY + $radiusY * sin(deg2rad($angle)); // Y position (flatter spread)
                    ?>
                    <div class="absolute flex p-9 w-fit justify-evenly items-center rounded-full shadow-lg" style="background-color: <?php echo esc_attr($bgColors[$index % count($bgColors)]); ?>;
                            top: <?php echo esc_attr($y); ?>%;
                            left: <?php echo esc_attr($x); ?>%;
                            transform: translate(-50%, -50%);">
                        <div class="p-2">
                            <img src="<?php echo esc_url($value['image']['url']); ?>" class="w-9" alt="<?php echo esc_attr($value['image']['alt']); ?>">
                        </div>
                        <div class="ml-3 w-62">
                            <h3 class="text-xs md:text-2xl font-bold" style="color: <?php echo esc_attr($textColors[$index % count($textColors)]); ?>;">
                                <?php echo esc_html($value['content']); ?>
                            </h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="flex flex-col md:hidden gap-8">
                <?php foreach ($floatingItems as $index => $value): ?>
                    <?php if ($index > $itemCount / 2): ?>
                        <?php continue; endif; ?>
                    <div class="flex p-5 w-3/4 justify-evenly <?php echo $index % 2 === 0 ? 'self-end' : 'self-start'; ?> lg:absolute items-center rounded-full shadow-lg" style="background-color: <?php echo esc_attr($bgColors[$index % count($bgColors)]); ?>;">
                        <img src="<?php echo esc_url($value['image']['url']); ?>" class="w-5" alt="<?php echo esc_attr($value['image']['alt']); ?>">
                        <div class="ml-3 grow">
                            <h3 class="text-xs md:text-2xl font-bold" style="color: <?php echo esc_attr($textColors[$index % count($textColors)]); ?>;">
                                <?php echo esc_html($value['content']); ?>
                            </h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>