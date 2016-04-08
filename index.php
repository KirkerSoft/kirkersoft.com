<!DOCTYPE html>
<html lang="en">
	<head>
	<title>KirkerSoft</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/ui.totop.css" type="text/css" media="screen">
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>	
	<script src="js/slides.min.jquery.js"></script>
	<script src="js/max-height.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
	<script src="js/script.js"></script>
	<script>
		$(window).load(function() {	
			$('#slides').slides({
				effect: 'fade',
				fadeSpeed:700,
				preload: true,
				play: 7000,
				pause: 3000,
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
	<body id="home">
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
              <li class="current"><a href="index.php"><span>home</span></a></li>
              <li><a href="aboutus.php"><span>company</span></a></li>
              <li><a href="services.php"><span>services</span></a>
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
              <li><a href="projects.php"><span>projects</span></a></li>
              <li class="last-item"><a href="contactus.php"><span>contact us</span></a></li>
            </ul>
      </nav>
          <div class="clear"> </div>
        </div>
  </div>
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
<div class="main">
      <div class="border-horiz"></div>
    </div>
<!--======================== content ===========================-->
<section id="content">
      <div class="container_24">
    <div class="p3">
          <article class="grid_6">
        <div class="box-1 maxheight">
              <figure><img src="images/home-img1.png " alt="" /><img class="active" src="images/home-img1-hover.png " alt="" /></figure>
              <h4>Technical<br>
            Support</h4>
              <p>Praesent vestibulum aenean Nonummy hendrerit mauris. Hasellus porta. Fusce varius mi cum sociis natoque. </p>
              <a href="#" class="link-1">read more</a> </div>
      </article>
          <article class="grid_6">
        <div class="box-1 maxheight">
              <figure><img src="images/home-img2.png " alt="" /><img class="active" src="images/home-img2-hover.png " alt="" /></figure>
              <h4>Network<br>
            Solutions</h4>
              <p>Praesent vestibulum aenean Nonummy hendrerit mauris. Hasellus porta. Fusce varius mi cum sociis natoque. </p>
              <a href="#" class="link-1">read more</a> </div>
      </article>
          <article class="grid_6">
        <div class="box-1 maxheight">
              <figure><img src="images/home-img3.png " alt="" /><img class="active" src="images/home-img3-hover.png " alt="" /></figure>
              <h4>Database<br>
            Management</h4>
              <p>Praesent vestibulum aenean Nonummy hendrerit mauris. Hasellus porta. Fusce varius mi cum sociis natoque. </p>
              <a href="#" class="link-1">read more</a> </div>
      </article>
          <article class="grid_6">
        <div class="box-1 maxheight">
              <figure><img src="images/home-img4.png " alt="" /><img class="active" src="images/home-img4-hover.png " alt="" /></figure>
              <h4>Web<br>
            Development</h4>
              <p>Praesent vestibulum aenean Nonummy hendrerit mauris. Hasellus porta. Fusce varius mi cum sociis natoque. </p>
              <a href="#" class="link-1">read more</a> </div>
      </article>
          <div class="clear"></div>
        </div>
    <div class="wrapper p22">
          <article class="grid_10 prefix_1">
        <h2>Why choose us?</h2>
        <div class="txt-1">Praesent vestibulum aenean Nonummy hendrerit mauris. Hasellus porta. Fusce suscipit varius mi cum sociis natoque. penatibus et magnis dis parturient montes nascetur ridiculus</div>
        <div class="wrapper">
              <figure class="img-indent"><img src="images/home-img5.png " alt="" /></figure>
              <div class="overflow">
            <blockquote class="quote-1">&nbsp;Praesent vestibulum aenean Nonummy hendrerit mauris. Hasellus porta. Fusce suscipit varius mi cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Nulla dui. </blockquote>
          </div>
            </div>
        <div class="name-1"><strong>John Lester </strong>(Owner)</div>
        <!--<a href="#" class="link-2 fright">read more</a>-->
        <div class="clear"></div>
      </article>
          <article class="grid_5 prefix_1">
        <h2>Featured:</h2>
        <ul class="list-1">
              <li><a href="#">Managed Services</a></li>
              <li><a href="#">Virtual Office / Private Cloud</a></li>
              <li><a href="#">Strategic Planning</a></li>
              <li><a href="#">Installation</a></li>
              <li><a href="#">Mobile IT</a></li>
              <li><a href="#">Network Security</a></li>
            </ul>
      </article>
          <article class="grid_5 prefix_2">
        <h2>Popular:</h2>
        <ul class="list-1">
              <li><a href="#">Email</a></li>
              <li><a href="#">Web Hosting</a></li>
              <li><a href="#">Offsite Backup</a></li>
              <li><a href="#">Internet Access</a></li>
              <li><a href="#">VoIP</a></li>
              <li><a href="#">Digital Media</a></li>
            </ul>
      </article>
        </div>
  </div>
    </section>
<?php
	include_once('footer.php');
?>
