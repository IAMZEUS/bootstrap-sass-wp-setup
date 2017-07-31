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
 * @package dogdev
 */

get_header(); ?>

	<section id="video-player">
		<div class="covervid-wrapper ">
	    <video class="covervid-video " autoplay muted loop poster="img/video-fallback.png">
	        <source src="<?php bloginfo('template_url')?>/videos/reel.webmhd.webm" type="video/webm">
	        <source src="<?php bloginfo('template_url')?>/videos/reel.mp4" type="video/mp4">
	    </video>
	</div>
</section>

<section class="grid">

	<div class="grid-wrap">

	<div id="project-grid">

		<!-- Hover Effect Loop -->
	<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'category_name' => 'home', 'orderby' => 'date', 'order' => 'DSC')) ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

				<!-- Wide -->
				<?php if( get_field('size') == 'wide' ): ?>
          <div class="grid-item wide text-center portfolioThumbnail">

				<!-- Tall -->
				<?php elseif( get_field('size') == 'tall' ) : ?>
					<div class="grid-item tall text-center portfolioThumbnail">

				<?php else : ?>

				<!-- Square  -->
				<div class="grid-item text-center portfolioThumbnail">
				<?php endif; ?>

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


<?php
get_footer();
