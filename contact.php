<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KNR Contact Us</title>
  <!-- HEADER -->
  <?php
  include_once('header.php');
  ?>
  <!-- END HEADER -->

  <!-- Intro Section -->
  <section class="inner-intro bg-img-contact light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
        <div class="title_row">
          <h1 data-title="Contact"><span>Contact</span></h1>
          <div class="page-breadcrumb">
            <a>Home</a>/ <span>Contact</span>
          </div>

        </div>

      </div>
    </div>
  </section>
  <!-- Intro Section End-->


  <!-- Contact Section -->
  <section class="ptb ptb-xs-60">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8 offset-md-2 text-center">
          <h2>GET IN TOUCH</h2>
          <p class="lead"> If you have a question or a comment, please call us below mentioned numbers or reach us at the email address from Monday to Sunday 9.30am to 6.30pm or email us at use the form below to contact us.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 col-lg-12 contact pb-60 pt-30">
          <div class="row text-center">
            <div class="col-md-4 col-lg-4 pb-xs-30"> <i class="ion-android-call icon-circle pos-s"></i><a href="#" class="mt-15 i-block">+914424312188, +914424313022 </a> </div>
            <div class="col-md-4 col-lg-4 pb-xs-30"> <i class="ion-ios-location icon-circle pos-s"></i>
              <p class="mt-15"> No.2, First Floor,8th Street,<br />
                Nandanam Extension, <br>
                Chennai – 600035, India
              </p>
            </div>
            <div class="col-md-4 col-lg-4 pb-xs-30"> <i class="ion-ios-email icon-circle pos-s"></i><a href="mailto:ravichandran@knrengineers.com" class="mt-15 i-block">ravichandran@knrengineers.com <br> info@knrengineers.com </a> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Map Section -->
    <div >
      <div id="map1" style="height:100vh; width:100%;"></div>
    </div>
    <!-- Map Section -->
    <div class="container contact-form padding pt-xs-40 mt-up">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <h4>GET IN TOUCH</h4>
          <p> Please reach us to email address monday-sunday. </p>
          <!-- Contact FORM -->
          <form action="mail.php" class="contact-form mt-45" id="contact" method="post">
            <!-- IF MAIL SENT SUCCESSFULLY -->
            <div id="success">
              <div role="alert" class="alert alert-success"> <strong>Thanks</strong> for using our template. Your message has been sent. </div>
            </div>
            <!-- END IF MAIL SENT SUCCESSFULLY -->
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <div class="form-field">
                  <input class="input-sm form-full" id="name" type="text" name="name" placeholder="Your Name">
                </div>
                <div class="form-field">
                  <input class="input-sm form-full" id="email" type="text" name="email" placeholder="Email">
                </div>
                <div class="form-field">
                  <input class="input-sm form-full" id="sub" type="text" name="sub" placeholder="Subject">
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="form-field">
                  <textarea class="form-full" id="message" rows="7" name="msg" placeholder="Your Message"></textarea>
                </div>
              </div>
              <div class="col-md-12 col-lg-12 mt-30">
                <button class="btn-text" type="submit" id="submit" name="button"> Send Message </button>
              </div>
            </div>
          </form>
          <!-- END Contact FORM -->
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section -->


  <!-- Footer_Section -->
  <?php
  include_once('footer.php');

  ?>
  <!-- Footer_Section_End -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALoldghVizEW1D4tkcdiZVpJVQ0WZaXsg&callback=initMap&libraries=&v=weekly" async></script>
  <script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      const uluru = {
        lat: 13.028633770199248,
        lng: 80.16839218678861,
      };
      // The map, centered at Uluru
      const map = new google.maps.Map(document.getElementById("map1"), {
        zoom: 6,
        center: uluru,
      });
      // The marker, positioned at Uluru
      const marker = new google.maps.Marker({
        position: uluru,
        map: map,
      });
    }
  </script>

  </body>

</html>