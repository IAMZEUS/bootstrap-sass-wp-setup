<?php
/**
 * Template Name: About
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dogdev
 */

get_header(); ?>

<div  class="about-wrap">


		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page-about' );


		endwhile; // End of the loop.
		?>

</div><!-- #primary -->

<?php
get_footer();
