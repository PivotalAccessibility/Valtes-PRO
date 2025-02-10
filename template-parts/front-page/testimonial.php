<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$args = array(
    'post_type'      => 'testimonials',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
);

$testimonials_query = new WP_Query($args);
$total_testimonials = $testimonials_query->found_posts; // Get total count

?>

<!-- Include Alpine.js if not already included -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/embla-carousel@8.0.0/embla.min.js" defer></script>

<div x-data="carousel()" class="my-16">
    <div class="pt-10 pb-10 container max-w-4xl mx-auto 2xl:max-w-5xl px-0 sm:px-0 relative">
        <div>
            <h2 class=" font-bold text-3xl text-center">
                Wat zeggen gebruikers
            </h2>
        </div>
        <div x-ref="viewport" class="embla__viewport overflow-hidden mt-10 relative">
            <div x-ref="container" class="embla__container flex space-x-3">
                <?php if ($testimonials_query->have_posts()) : ?>
                <?php $index = 0; ?>
                <?php while ($testimonials_query->have_posts()) : $testimonials_query->the_post(); ?>
                <div class="embla__slide flex flex-col justify-start shrink-0 grow-0 basis-full sm:basis-[18rem] when-sm:flex-wrap-reverse shadow-lg p-3 rounded-2xl"
                    x-bind:aria-hidden="activeIndex !== <?php echo $index; ?>">

                    <div>
                        <div class=" flex justify-start">
                            <div class="h-16 w-16 rounded-full bg-purple-400">
                                <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                                    class="h-16 w-16 rounded-full object-cover">
                                <?php endif; ?>
                            </div>
                            <div class=" ml-2">
                                <h2 class="font-bold text-sm when-sm:text-md">
                                    <?php the_title(); ?>
                                </h2>
                            </div>
                        </div>
                        <div class=" mt-3">
                            <p class=" text-xs text-black !leading-5 font-normal"><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
                <?php $index++; ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <p>No testimonials found.</p>
                <?php endif; ?>
            </div>
        </div>

        <button @click="scrollPrev()" :disabled="!canScrollPrev"
            class="absolute top-[45%] -left-14 h-10 w-10 flex items-center justify-center rounded-full bg-white text-black"
            aria-label="Previous">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M15 6l-6 6l6 6" />
            </svg>
        </button>

        <button @click="scrollNext()" :disabled="!canScrollNext"
            class="absolute top-[45%] -right-14 h-10 w-10 flex items-center justify-center rounded-full bg-white text-black"
            aria-label="Next">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 6l6 6l-6 6" />
            </svg>
        </button>

        <div class="flex items-center justify-center mt-4">
            <div class="flex space-x-2">
                <template x-for="(dot, index) in dots" :key="index">
                    <button @click="goToSlide(index)"
                        :class="activeIndex === index ? 'bg-blue-500 w-3 h-3' : 'bg-blue-700 w-2 h-2 opacity-50 hover:opacity-100'"
                        class="rounded-full transition-all duration-300"></button>
                </template>
            </div>
        </div>

        <!-- <div class="h-14 w-14 bg-[#6997ff] rounded-full absolute top-20 -left-5"></div> -->
        <!-- <div class="h-28 w-28 bg-[#bbbef4] rounded-full absolute bottom-5 -right-10"></div> -->

    </div>
</div>

<script>
function carousel() {
    return {
        embla: null,
        activeIndex: 0,
        canScrollPrev: false,
        canScrollNext: false,
        totalSlides: <?php echo $total_testimonials; ?>,
        dots: [],

        init() {
            this.embla = EmblaCarousel(this.$refs.viewport, {
                loop: false
            });

            this.dots = Array.from({
                length: this.totalSlides
            }, (_, i) => i);

            this.embla.on('select', () => {
                this.activeIndex = this.embla.selectedScrollSnap();
                this.canScrollPrev = this.embla.canScrollPrev();
                this.canScrollNext = this.embla.canScrollNext();
            });

            this.embla.on('init', () => {
                this.canScrollPrev = this.embla.canScrollPrev();
                this.canScrollNext = this.embla.canScrollNext();
            });

            this.$watch('activeIndex', () => {
                this.canScrollPrev = this.embla.canScrollPrev();
                this.canScrollNext = this.embla.canScrollNext();
            });
        },

        scrollPrev() {
            this.embla.scrollPrev();
        },

        scrollNext() {
            this.embla.scrollNext();
        },

        goToSlide(index) {
            this.embla.scrollTo(index);
        }
    };
}
</script>