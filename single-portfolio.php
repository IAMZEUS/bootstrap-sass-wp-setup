<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dogdev
 */

get_header(); ?>

	<section class="port-wrap">
		
		<?php
		while ( have_posts() ) : the_post(); ?>

			
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2">
						<div class="info-box">
							<h3><?php the_field('brand') ?></h3>
							<p class="w-small"><?php the_field('project_name') ?></p>
							<p><?php the_field('description') ?></p>
						</div>
					</div>
					<div class="col-md-8 text-center">

					<?php if( get_field('portfolio_content') == 'video' ): ?>

						<?php the_field('video_embed') ?>

					<?php else : ?>

						<div class="slider-wrap">
						<?php if( get_field('slide_width') == 'thin' ): ?>
							<div class="main-slider thin">
						<?php else : ?>
							<div class="main-slider">
						<?php endif; ?>
							<?php
							// check if the repeater field has rows of data
								if( have_rows('slide_images') ):

								 	// loop through the rows of data
								    while ( have_rows('slide_images') ) : the_row(); ?>

								      <img src="<?php the_sub_field('slide_image'); ?>" alt="<?php the_title(); ?>" class="img-responsive">
								      
	<?php
								    endwhile;

								else :

								    // no rows found

								endif;

								?>
						</div>



						</div>		
						
					</div>
				<?php endif; ?>					
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row">
				<div class="small-slider-wrap">


				 <?php 
				 	$categories = get_the_category();
					$right_cat = $categories[0]->slug;
				 ?>


					<div class="small-slider">
										<!-- Hover Effect Loop -->
					<?php 
					
					$loop = new WP_Query( array( 'post_type' => 'portfolio', 'orderby' => 'date', 'category_name' => $right_cat, 'posts_per_page' => 9, 'order' => 'DSC')) ?>



				      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

								<!-- Square  -->
								<div class="grid-item text-center portfolioThumbnail">

					        <?php if (has_post_thumbnail( $post->ID ) ): ?>
					          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					          <div class="portfolioBox" style="background-repeat: no-repeat;background-size: contain; background-position:center; background-image: url('<?php echo $image[0]; ?>')">
					        <?php endif; ?>



					              <a href="<?php echo get_permalink(); ?>">
					                              <div class="portfolioOverlay">
					                                <span class="portfolioContent">
					                                    <h5><?php the_title(); ?></h5>
					                                    <p><?php the_field('excerpt'); ?></p>
					                                </span>

					                              </div>
					                              </a>
					                            </div>
					                        </div>


					                    <?php endwhile; ?>
					</div>
				</div>
			</div>
			</div>

			
	<?php endwhile; // End of the loop. ?>

	</section>
		

<?php
get_footer();
