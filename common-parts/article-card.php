<a href="<?php echo get_permalink(get_the_ID()); ?>" class="flex flex-col h-auto transition duration-300 bg-white shadow-lg rounded-2xl hover:shadow-xl">
  <div class="relative">
    <?php
    $categories = get_the_category();
    if (!empty($categories)):
      $category = $categories[0]; // Get first category
      $category_icon = get_field('icon', 'category_' . $category->term_id);
      ?>
      <div class="absolute px-2.5 p-1.5 text-blue-700 bg-white z-10 rounded-full top-4 left-4">
        <h3 class="text-xs font-semibold">
          <?php echo esc_html($category->name); ?>
        </h3>
      </div>
    <?php endif; ?>

    <div class="relative">
      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" class="object-cover w-full h-52 rounded-t-2xl">
      <?php if ($category_icon): ?>
        <div class="absolute p-3 rounded-full bg-primary -bottom-5 left-4">
          <img src="<?php echo esc_url($category_icon['url']); ?>" class="w-5" alt="<?php echo esc_attr($category->name); ?>">
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="flex flex-col justify-between gap-4 p-4 mt-4 grow">
    <div class="flex flex-col gap-4">
      <h2 class="text-lg font-bold">
        <?php
        $title = get_the_title();
        echo $title;
        ?>
      </h2>
      <p class="article-description">
        <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
      </p>
    </div>
    <div class="flex items-end justify-between w-full">
      <div>
        <h2 class="text-base">
          <span class="font-bold text-gray-500">Geschreven door :</span>
          <span class="font-normal">
            <?php the_author(); ?>
          </span>
        </h2>
      </div>
      <div>
        <?php
        $user_id = get_the_author_meta('ID');
        $user_image = get_field('user_organization_logo', 'user_' . $user_id);

        if ($user_image && $user_image['url']) {
          echo '<img src="' . esc_url($user_image['url']) . '" alt="Author Image" class="w-auto h-5">';
        } else {
          echo '<img src="' . esc_url(get_avatar_url($user_id)) . '" alt="Author Image" class="w-auto h-5">';
        }
        ?>
      </div>
    </div>
  </div>
</a>