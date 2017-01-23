<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta name="description" content="">
  <title>Metro Hair Salon and Spa</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  
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
    <li><a class="" href="hair-gallery.php">Hair</a></li>
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
                <li><a href="#!">Hair</a></li>
                <li><a href="#!">Spa</a></li>
                <li><a href="#!">Nails</a></li>
                
              </ul>
            </div>
          </li>
		  <li class="divider"></li>
        </ul>
      </li>
    </ul>
  
<?php 
    
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$to = 'metrohairtexts@gmail.com';
		$subject = 'Appointment Request';
		$headers = 'From: appointments@metrohairsalonandspa.com' . "\r\n" .
    'Reply-To: appointments@metrohairsalonandspa.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
		$first_name = htmlspecialchars($_POST['first_name']);
		$last_name  = htmlspecialchars($_POST['last_name']);
		$phone = htmlspecialchars($_POST['phone']);
		$email  = htmlspecialchars($_POST['email']);
		$date  = htmlspecialchars($_POST['date']);
		$time  = htmlspecialchars($_POST['time']);
		$message =  'First name: ' . $first_name . "\n" .
		'Last name: ' . $last_name . "\n" .
		'Phone: ' . $phone . "\n" .
		'Email: ' . $email . "\n" .
		'Date: ' . $date . "\n" .
		'Time: ' . $time;
		
		mail($to , $subject , $message , $headers);

	}	
?>
 
 
 <!-- Heading -->
 <div class="site-container">
  <div class="section no-pad-bot no-pad-top" style="background-color: #eee;">
	<div class="section no-pad-bot no-pad-top" style="background-color: #eee; max-height: 300px;">
	  <div class="video-container">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3526.2394318679803!2d-82.71579488452764!3d27.894624882714833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2e53fdd7f55c5%3A0x69be322412b220db!2s13505+Icot+Blvd+%23201%2C+Clearwater%2C+FL+33760!5e0!3m2!1sen!2sus!4v1481120560280" frameborder="0" style="border:0; max-height: 300px;" allowfullscreen></iframe>
  </div>
  </div>
  <div class="page-container">
  <br>
  <h4 class="header center light" style="color: #2d3034;">Get in touch with us.</h4>
  <h5 class="header center light" style="color: #2d3034;">(727)-539-7797</h5>
  <p class="center" style="color: #2d3034;">Call us or fill out your information below to schedule an appointment. Appointments should be at least 24 hours in advance.</p>
		<!--<div id="contact-container">
  	  <form class="col s12" id="appointment" method="POST" action="" onsubmit="Materialize.toast('Your request has been sent successfully.', 4000)" style="margin-top:20px;">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" name="first_name" required>
          <label for="first_name" data-error="Please enter your first name.">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="last_name" required>
          <label for="last_name" data-error="Please enter your last name.">Last Name</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s6">
          <input id="phone" type="tel" name="phone" required>
          <label for="telephone" data-error="Please enter a valid phone number.">Telephone</label>
        </div>
        <div class="input-field col s6">
          <input id="email" type="email" name="email">
          <label for="email" data-error="Please enter a valid e-mail address.">Email</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Type a message here</label>
        </div>
      </div>
	<div class="row" style="margin-top: 20px;">
		<div class="col s12">
		<button id="submit" name="submit" type="submit" class="btn-large waves-effect waves-light" style="width: 100%; background-color: #2d3034;">Submit</button>
		</div>
	  </div>	  
    </form>
	</div>-->
	<div id="appointment-container">
  <form class="col s12" id="appointment" method="POST" action="" onsubmit="Materialize.toast('Your request has been sent successfully.', 4000)" style="margin-top:20px;">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" name="first_name" required>
          <label for="first_name" data-error="Please enter your first name.">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="last_name" required>
          <label for="last_name" data-error="Please enter your last name.">Last Name</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s6">
          <input id="phone" type="tel" name="phone" required>
          <label for="telephone" data-error="Please enter a valid phone number.">Telephone</label>
        </div>
        <div class="input-field col s6">
          <input id="email" type="email" name="email">
          <label for="email" data-error="Please enter a valid e-mail address.">Email</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s6">
          <input type="date" name="date" class="datepicker">
          <label for="date">Pick a date</label>
        </div>
		<div class="input-field col s6">
          <select name="time">
      <option value="" disabled selected>Pick a time</option>
      <option value="9:00 AM">9:00 AM</option>
      <option value="9:30 AM">9:30 AM</option>
      <option value="10:00 AM">10:00 AM</option>
	  <option value="10:30 AM">10:30 AM</option>
      <option value="11:00 AM">11:00 AM</option>
      <option value="11:30 AM">11:30 AM</option>
	  <option value="12:00 PM">12:00 PM</option>
      <option value="12:30 PM">12:30 PM</option>
      <option value="1:00 PM">1:00 PM</option>
	  <option value="1:30 PM">1:30 PM</option>
      <option value="2:00 PM">2:00 PM</option>
      <option value="2:30 PM">2:30 PM</option>
	  <option value="3:00 PM">3:00 PM</option>
	  <option value="3:30 PM">3:30 PM</option>
      <option value="4:00 PM">4:00 PM</option>
      <option value="4:30 PM">4:30 PM</option>
	  <option value="5:00 PM">5:00 PM</option>
    </select>
    <label>Pick a time</label>
        </div>
      </div>
	<div class="row" style="margin-top: 20px;">
		<div class="col s12">
		<button id="submit" name="submit" type="submit" class="btn-large waves-effect waves-light" style="width: 100%; background-color: #2d3034;">Submit</button>
		</div>
	  </div>	  
    </form>
  </div>
  <br><br>
  </div>
  </div>


</div>

  <!-- Footer -->
  <div class="site-container">
  <footer class="page-footer" style="margin-top:0px; background-color: #2d3034;">
    <div class="footer-container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text footer-heading medium-text">Metro Hair Salon & Spa</h5>
          <p class="white-text footer-link small-text"><i class="material-icons left" style="font-size: 16px;">place</i>13505 Icot Blvd. Suite 201 Clearwater, FL 33760</p>
		  <p class="white-text footer-link small-text"><i class="material-icons left" style="font-size: 16px;">phone</i>(727)-539-7797</p>
		  <p class="white-text footer-link small-text"><i class="material-icons left" style="font-size: 16px;">email</i>metrohairtexts@gmail.com</p>
        </div>
        <!--<div class="col l3 s12">
          <h5 class="white-text footer-heading"></h5>
          <ul>
            <li><a class="white-text footer-link" href="#!"></a></li>
            <li><a class="white-text footer-link" href="#!"></a></li>
            <li><a class="white-text footer-link" href="#!"></a></li>
            <li><a class="white-text footer-link" href="#!"></a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text footer-heading"></h5>
          <ul>
            <li><a class="white-text footer-link" href="#!"></a></li>
            <li><a class="white-text footer-link" href="#!"></a></li>
            <li><a class="white-text footer-link" href="#!"></a></li>
            <li><a class="white-text footer-link" href="#!"></a></li>
          </ul>
        </div>-->
      </div>
    </div>
    <div class="footer-container copyright white-text" style="background-color: #2d3034;">
      <div>
		<span class="small-text">Metro Hair Salon & Spa &copy Copyright 2016. All Rights Reserved.</span>
		<span><a href="http://www.royceshayegan.com" target="_blank"><i class="material-icons dev-icon">favorite</i></a></span>	
		
		</div>
      </div>
  </footer>
  </div>
  


  <!--  Scripts-->
  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <script src="js/init.js"></script>
	
  </body>
</html>
