<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dogdev
 */

?>

<section id="about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
		<div class="col-md-6">
			<?php the_content(); ?>
		</div>
		<div class="col-md-3">
			<div class="sidebar-content" id="s1">
				<h5>Business Inquiries:<br>
					<span>Nina Day Casting<br>
								526 West 26th Street<br>
								Suite 502 New York, NY 10001<br>
								212.929.6462<br>
								<a href="mailto:nina@ninaday.com">nina@ninaday.com</a>
					</span>
				</h5>
			</div>

			<div class="sidebar-content">
				<h5>Talent Inquiries:<br>
					<span>If you are interested in being added to our talent database, please email <a href="mailto:casting@ninaday.com">casting@ninaday.com</a>
					</span>
				</h5>
			</div>

			<div class="sidebar-content" id="s3">
				<h5>Social Media:</h5>
				<div class="social-side-wrap">
					<ul class="social">
						<li><a href="https://www.instagram.com/ninadaycasting/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.facebook.com/ninadaycast/"><i class="fa fa-facebook"></i></a></li>
					</ul>
				</div>
			</div>



		</div>
		</div>
	</div>
</section>
