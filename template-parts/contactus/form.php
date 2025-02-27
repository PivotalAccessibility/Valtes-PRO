<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$form = valtes_get_field('form', []);

?>

<section class="bg-white items-center justify-center px-5 md:px-0">
    <div class=" md:w-[63rem] w-full mx-auto md:px-24">
        <?php echo do_shortcode($form['contact_form_shortcode']); ?>
    </div>
</section>