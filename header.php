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
	if ($location=='page5') {
		echo "<script>$(window).load(function(){";
		echo "	$('#contact-form').forms({";
		echo "		ownerEmail:'johnl@kirkersoft.com'";
		echo "	})";
		echo "})</script>";
	}
	elseif ($location=='page1') {
		echo "<script src=\"js/slides.min.jquery.js\"></script>";
		echo "<script src=\"js/max-height.js\"></script>";
	}
?>
	<script>
		$(window).load(function() {	
			$('#slides').slides({
				effect: 'fade',
				fadeSpeed:700,
				preload: true,
				play: 7000,
				pause: 1500,
				generatePagination: true,
				crossfade: true,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({left:-900},300);
					if (window.console && console.log) {console.log('animationStart on slide: ', current);};
				},
				animationComplete: function(current){
					$('.caption').animate({left:0},300);
					if (window.console && console.log) {console.log('animationComplete on slide: ', current);};
				},
				slidesLoaded: function() {$('.caption').animate({left:0},300);}
			});
		});		
	</script>
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
          <li<?php if ($location=='page1') { echo ' class="current"'; } ?>><a href="index.php"><span>Home</span></a></li>
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
<?php
	if ($location=='page1') {
		echo<<<END
      <!--======================== slider ===========================-->
      <div class="slider-box">
    <div class="slider-box-bottom">
          <div class="slider-btns"> <a href="#" class="button ">register</a> <a href="#" class="button a">sign in</a> </div>
          <div class="slider-phone">Call us: <span>925 - 480 - 7638</span></div>
        </div>
    <div id="slides">
          <div class="slides_container">
        <div class="slide"> <img src="images/slide-1.jpg" alt="">
              <div class="caption item1">
            <div class="indents1"> We are experts in managing <span>&amp; supporting</span> <strong>it operations</strong> </div>
          </div>
            </div>
        <div class="slide"> <img src="images/slide-2.jpg" alt="">
              <div class="caption item2">
            <div class="indents1"> Use <strong>information technology </strong> <span>to meet your business objectives </span> </div>
          </div>
            </div>
        <div class="slide"> <img src="images/slide-3.jpg" alt="">
              <div class="caption item3">
            <div class="indents1"> Networking. Database Management.<br>
                  Applications Development.<br>
                  Project Management. </div>
          </div>
            </div>
        <div class="slide"> <img src="images/slide-4.jpg" alt="">
              <div class="caption item4">
            <div class="indents1"> What can we do for you through <span><strong>Information Technology</strong></span> Consulting? </div>
          </div>
            </div>
      </div>
        </div>
  </div>
</header>
END;
	}
	else {
		echo<<<END
</header>
<div class="main">
  <div class="border-horiz"></div>
</div>
END;
	}
?>
