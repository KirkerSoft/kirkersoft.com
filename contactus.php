<?php
	$location='page5';
	include_once('header.php');
?>
<section id="content">
  <div class="container_24">
    <div class="wrapper">
      <article class="grid_7 prefix_1 ">
        <h2>Our address</h2>
        <div class="map">
          <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"> </iframe>
        </div>       
          <dl class="address">
            <dt>8901 Marmora Road,<br>
Glasgow, D04 89GR..</dt>
            <dd> <span>Telephone:</span> +1 800 603 6035</dd>
            <dd> <span>FAX:</span> +1 800 889 9898 </dd>
            <dd>E-mail: <a class="mail-1" href="#">mail@demolink.org</a> </dd>
          </dl>
      
      </article>
      <article class="grid_15 prefix_1">
        <h2>Get in touch</h2>
        <form id="contact-form">
          <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
          <fieldset>
            <label class="name">
              <input type="text" value="Name:">
              <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
            <label class="email">
              <input type="email" value="E-mail:">
              <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
            <label class="phone">
              <input type="tel" value="Phone:">
              <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
            <label class="message">
              <textarea>Message:</textarea>
              <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
            <div class="buttons-wrapper"> <a class="link-2" data-type="reset">clear</a> <a class="link-2" data-type="submit">submit</a></div>
          </fieldset>
        </form>
      </article>
    </div>
  </div>
</section>
<?php
	include_once('footer.php');
?>
