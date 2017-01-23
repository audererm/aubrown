<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Salon_Noir
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<!-- michaels content -->
<body>
<div id="connect">
	<a href="https://www.facebook.com/MetroHairCLW/" id="fb"></a>
	<a href="" id="tw"></a>
	<a href="" id="gg"></a>
	<a href="" id="yt"></a>
	<a href="" id="pin"></a>
	<a href="" id="ins"></a>
	</div>
	<div class="fixed-action-btn">
    <a href="contact" class="btn-floating btn-large">
      <i class="large material-icons">email</i>
    </a>
	</div>

<div class="z-depth-3 site-container">
<div class="navbar">
  <nav class="white" role="navigation">
    <div class="nav-wrapper">
	
	<!-- Mobile Button Collapsible -->
	<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="height: 48px !important; line-height: 48px !important;">menu</i></a>
	
	<!-- Left-Aligned Logo Link -->
	<ul class="left hide-on-med-and-down">
	<li><div id="logo-container" style="margin-top: -35px;">
	<img class="responsive-img z-depth-1" style="width:286px;" src="http://metrohairsalonandspa.com/wp-content/uploads/2016/12/logo-scissors.png">
	</div></li>
	</ul>
	
	<!-- Left-Aligned Logo Link -->
	<ul class="left hide-on-large-only">
	<li style=""><div id="mobile-logo-container" class="brand-logo">
	<img class="responsive-img z-depth-1" src="http://metrohairsalonandspa.com/wp-content/uploads/2016/12/logo-scissors.png">
	</div></li>
	</ul>
	
	<div id="main-nav" class="hide-on-med-and-down" style="float: right; margin-top: 18px;">
	<?php wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'primary-menu',
		'container'	 => '',
		) );
        ?>
	</div>

	  
<!-- Dropdown Menu Structure -->
	  <ul id='services' class="dropdown-content z-depth-1">
    <li><a class="" href="hair-services.php">Hair Services</a></li>
	<li><a class="" href="spa-services.php">Spa Services</a></li>
	  </ul>
	  
	  <ul id='gallery' class="dropdown-content z-depth-1">
    <li><a class="" href="">Hair</a></li>
    <li><a class="" href="">Spa</a></li>
    <li><a class="" href="">Nails</a></li>
	  </ul>	 
  
 
    </div>
  </nav>
  </div>
  </div>
  
  <!-- Mobile Nav -->
  <ul id="slide-out" class="side-nav">
      <div id="hero-banner" class="center side-nav-logo">
        <img src="http://metrohairsalonandspa.com/wp-content/uploads/2016/12/logo-scissors.png" class="responsive-img center z-depth-1">
      </div>
	  <li class="divider"></li>
      <li><a href="contact.php">CONTACT</a></li>
	  <li class="divider"></li>
	  <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">SERVICES<i class="material-icons right">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">Hair Services</a></li>
                <li><a href="#!">Spa Services</a></li>               
              </ul>
            </div>
          </li>
        </ul>
      </li>
	  <li class="divider"></li>
	  <li><a href="team.php">MEET OUR TEAM</a></li>
	  <li class="divider"></li>
	  <li><a href="products.php">PRODUCTS</a></li>
	  <li class="divider"></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">GALLERY<i class="material-icons right">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="hair-gallery.php">Hair</a></li>
                <li><a href="#!">Spa</a></li>
                <li><a href="#!">Nails</a></li>
                
              </ul>
            </div>
          </li>
		  <li class="divider"></li>
        </ul>
      </li>
    </ul> 