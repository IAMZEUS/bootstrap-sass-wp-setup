<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dogdev
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/production.css">


<script src="https://use.typekit.net/lif8puv.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <nav class="navbar navbar-default" id="primary-nav">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <div class="mobile-trigger">
          <div id="nav-icon1" data-toggle="modal" data-target="#myModal">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="http://nina-day.wmgdev001.com/wp-content/uploads/2017/07/nina_day_logo.jpg" alt="Nina Day" class="img-responsive"><span>Casting</span></a>
      </div>
        <?php
            wp_nav_menu( array(
                'menu'              => 'menu-1',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>


    </div><!-- /.container-fluid -->
  </nav>
