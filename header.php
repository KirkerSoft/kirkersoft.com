<!DOCTYPE html>
<html lang="en">
<head>
	<title>KirkerSoft</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen">
	<link rel="icon" href="./favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="./css/ui.totop.css" type="text/css" media="screen">
	<script src="./js/jquery-1.7.1.min.js"></script>
	<script src="./js/superfish.js"></script>
	<script src="./js/jquery.easing.1.3.js"></script>
	<script src="./js/jquery.ui.totop.js"></script>
	<script src="./js/script.js"></script>
<?php
	if ($location == 'page5') {
		echo "<script>$(window).load(function(){";
		echo "	$('#contact-form').forms({";
		echo "		ownerEmail:'johnl@kirkersoft.com'";
		echo "	})";
		echo "})</script>";
	}
?>
</head>
<?php
	echo '<body id="' . $location . '">';
?>

<!--======================== header ===========================-->
<header>
  <div class="main"> 
    <!--======================== logo ============================-->
    <h1><a href="http://www.KirkerSoft.com"> </a></h1>
    <div class="row-nav"> 
      <!--======================== menu ============================-->
      <nav>
        <div id="menu-icon">Menu <span></span></div>
        <ul class="sf-menu">
          <li<?php if ($location=='home') { echo ' class="current"'; } ?>><a href="index.php"><span>Home</span></a></li>
          <li<?php if ($location=='page2') { echo ' class="current"'; } ?>><a href="aboutus.php"><span>Company</span></a></li>
          <li<?php if ($location=='page3') { echo ' class="current"'; } ?>><a href="services.php"><span>Services</span></a>
            <ul>
              <li><a href="#">Managed Services</a></li>
              <li><a href="#">Virtual Office / Private Cloud</a></li>
              <li><a href="#">Salad</a>
                <ul>
                  <li><a href="#">Email</a></li>
                  <li><a href="#">Web Hosting</a></li>
                  <li class="last-item"><a href="#">Offsite Backup</a></li>
                </ul>
              </li>
              <li><a href="#">Strategic Planning</a></li>
              <li><a href="#">Installation</a></li>
              <li class="last-item"><a href="#">Mobile IT</a></li>
            </ul>
          </li>
          <li<?php if ($location=='page4') { echo ' class="current"'; } ?>><a href="projects.php"><span>Projects</span></a></li>
          <li class="last-item<?php if ($location=='page5') { echo ' current'; } ?>"><a href="contactus.php"><span>Contact Us</span></a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="main">
  <div class="border-horiz"></div>
</div>
