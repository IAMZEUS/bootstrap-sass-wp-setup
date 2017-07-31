<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dogdev
 */

?>
<div class="f-line"></div>
<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <p>Nina Day is a casting agency that pushes the expectations of the traditional casting company, inspired by the limitless discovery of who can make your project shine. With a background in high fashion model casting and documentary film production, casting director nina day was inspired to launch a multi-discipline agency for progressive visions. <br><br>
          &copy; <?php echo date("Y"); ?> all rights reserved.
         </p>
       </div>
       <div class="col-md-1">
         <div class="s-border"></div>
       </div>
      
      <div class="col-md-3">
        <p>526 West 26th St. Suite 502<br>
           New York, NY 10001 <br>
           212.929.6462 <br>
           Business Inquiry: <a href="mailto:nina@ninaday.com">nina@ninaday.com</a><br>
           Talent Inquiry: <a href="mailto:casting@ninaday.om">casting@ninaday.com</a><br><br>


         </p>

      </div>
    </div>
  </div>
</footer>


<!-- Modal -->
<div class="modal modal-fullscreen fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php
            wp_nav_menu( array(
                'menu'              => 'menu-1',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container_class'   => 'mm-nav-wrap',
                'menu_class'        => 'mm-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
      </div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/covervid/scripts/scripts.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/grid.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_url') ?>/assets/js/main.js"></script>


<?php wp_footer(); ?>

</body>
</html>
