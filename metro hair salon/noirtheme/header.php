<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta name="description" content="">
  <title>Metro Hair Salon and Spa</title>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<?php wp_head(); ?>
</head>
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
    <a href="contact.php" class="btn-floating btn-large">
      <i class="large material-icons">email</i>
    </a>
	</div>
<!-- Navbar -->
<div class="z-depth-3 site-container">
<div class="navbar">
  <nav class="white" role="navigation">
    <div class="nav-wrapper">
	
	<!-- Mobile Button Collapsible -->
	<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="height: 50px !important; line-height: 50px !important;">menu</i></a>
	
	<!-- Left-Aligned Logo Link -->
	<ul class="left hide-on-med-and-down">
	<li><a id="logo-container" href="index.php" class="waves-effect waves-light">
	<img class="responsive-img z-depth-1" src="images/metrologo4.png">
	</a></li>
	</ul>
	
	<!-- Left-Aligned Logo Link -->
	<ul class="left hide-on-large-only">
	<li><a id="mobile-logo-container" href="index.php" class="brand-logo waves-effect waves-light">
	<img class="responsive-img z-depth-1" src="images/metrologo4.png">
	</a></li>
	</ul>
	
	<!-- Left-Aligned Links -->	
    <ul class="left hide-on-med-and-down" style="margin-left:60px;">
		<li><a class="waves-effect waves-light dropdown-button" data-constrainwidth="false" data-beloworigin="true" data-activates='services'>Services</a></li>
		<li><a href="products.php" class="waves-effect waves-light">Products</a></li>
		<li><a href="team.php" class="waves-effect waves-light">Meet Our Team</a></li>
		<li><a class="waves-effect waves-light dropdown-button" data-constrainwidth="false" data-beloworigin="true" data-activates='gallery'>Gallery</a>
		<li><a href="careers.php" class="waves-effect waves-light">Careers</a>
		<li><a href="contact.php" class="waves-effect waves-light contact-button">Contact</a></li>
    </ul>


	  
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
        <img src="images/metrologo4.png" class="responsive-img center z-depth-1">
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
 