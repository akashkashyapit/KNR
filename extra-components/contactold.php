﻿<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Glojivoc - Multipurpose Business Consulting and Professional Services HTML5 Bootstrap4 Responsive Template</title>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-EE6B7Z7KFW"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-EE6B7Z7KFW');
	</script>
	<!-- HEADER -->
	<?php
	include_once('header.php');
	?>
	<!-- END HEADER -->
	<!-- CONTENT -->
	<!-- Intro Section -->
	<section class="inner-intro bg-img light-color overlay-before parallax-background">
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
	<!-- End Intro Section -->
	<!-- Contact Section -->
	<section class="padding ptb-xs-60">
		<div class="container">

			<div class="row">

				<div class="col-lg-8">

					<div class="headeing pb-30">
						<h2>Get in Touch</h2>
						<span class="b-line l-left line-h"></span>
					</div>
					<!-- Contact FORM -->
					<form class="contact-form " id="contact">
						<!-- IF MAIL SENT SUCCESSFULLY -->
						<div id="success">
							<div role="alert" class="alert alert-success">
								<strong>Thanks</strong> for using our template. Your message has been sent.
							</div>
						</div>
						<!-- END IF MAIL SENT SUCCESSFULLY -->
						<div class="row">
							<div class="col-lg-6">
								<div class="form-field">
									<input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Your Name">
								</div>
								<div class="form-field">
									<input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email">
								</div>
								<div class="form-field">
									<input class="input-sm form-full" id="sub" type="text" name="form-subject" placeholder="Subject">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-field">
									<textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message"></textarea>
								</div>
							</div>
							<div class="col-lg-12 mt-30">
								<button class="btn-text" type="button" id="submit" name="button">
									Send Message
								</button>
							</div>
						</div>
					</form>
					<!-- END Contact FORM -->
				</div>

				<div class="col-lg-4 contact mt-sm-30 mt-xs-30">
					<div class="headeing pb-20">
						<h2>Contact Info</h2>
						<span class="b-line l-left line-h"></span>
					</div>
					<div class="contact-info">

						<ul class="info">
							<h3>Regional Office</h3>
							<li>
								<div class="icon ion-ios-location"></div>
								<div class="content">
									<p>
										No.2, First Floor,8th Street,
									</p>
									<p>
										Nandanam Extension, Chennai – 600035, India
									</p>
								</div>
							</li>

							<li>
								<div class="icon ion-android-call"></div>
								<div class="content">
									<p>
										+91 44 24312188,
									</p>
									<p>
										24313022
									</p>
								</div>
							</li>
							<li>
								<div class="icon ion-ios-email"></div>
								<div class="content">
									<p>
										info@knrengineers.com
									</p>
									<!-- <p>
												http://admin@.com
											</p> -->
								</div>
							</li>
						</ul>
						<ul class="event-social">
							<li>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
		<!-- Map Section -->

	</section>
	<!-- Map -->
	<section class="map-box">
		<div class="map">
			<div id="map"></div>
		</div>
	</section>
	<!-- Contact Section -->
	<!--End Contact-->

	<!-- Footer_Section -->
	<?php
	include_once('footer.php');

	?>
	<!-- Footer_Section_End -->

	</body>

</html>