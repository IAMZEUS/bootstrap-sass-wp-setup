<?php
/**
 * The template for displaying all pages
 * Template Name: Grid
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


<section class="grid">
	
	<div class="grid-wrap">

	<div id="project-grid">

		<?php
	
	$hello = get_permalink();

	$parts = explode('/', $hello);

	$right_cat = $parts[3];	 ?>



					<!-- Hover Effect Loop -->
	<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'category_name' => $right_cat, 'orderby' => 'date', 'posts_per_page' => -1, 'order' => 'DSC')) ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

				<!-- Square  -->
				<div class="grid-item text-center portfolioThumbnail">
				
				<a href="<?php echo get_permalink(); ?>">
	        <?php if (has_post_thumbnail( $post->ID ) ): ?>
	          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	          <div class="portfolioBox" style="background-repeat: no-repeat;background-size: contain; background-position:center; background-image: url('<?php echo $image[0]; ?>')">
	        <?php endif; ?>



	                              <div class="portfolioOverlay">
	                                <span class="portfolioContent">
	                                    <h5><?php the_title(); ?></h5>
	                                    <p><?php the_field('excerpt'); ?></p>
	                                </span>

	                              </div>
	                            </div>
	                            </a>
	                        </div>


	                    <?php endwhile; ?>
	</div>
	</div>
</section>

<section class="phantom">
	<div class="container-fluid">
		<div class="row">
			<h1>Phantom</h1>
		</div>
	</div>
</section>

<script>
	try {
		var w = document.getElementsByClassName('title-wrap')[0].getElementsByTagName('h1')[0].textContent;
		w = w.replace('-', ' ')
		document.getElementsByClassName('title-wrap')[0].getElementsByTagName('h1')[0].innerHTML = w;

	} catch (e) {
		console.log(e.message);
	}
</script>


<?php get_footer(); ?>
