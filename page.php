<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pivotalaccessibility
 */

get_header(); ?>

<div class="container">
	<h1 class="section-heading mt-20"><?php the_title(); ?></h1>
	<div id="primary" class="content-area prose py-10">
		<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				the_content();
				get_template_part( 'template-parts/content/page');

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile;
		?>
	</div><!-- #primary -->
</div><!-- .container -->

<?php
get_footer();
