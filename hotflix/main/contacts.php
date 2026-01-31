<?php
include('header.php');
?>
	<!-- page title -->
	<section class="section section--first">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h1 class="section__title section__title--head">Contacts</h1>
						<!-- end section title -->

						<!-- breadcrumbs -->
						<ul class="breadcrumbs">
							<li class="breadcrumbs__item"><a href="index.php">Home</a></li>
							<li class="breadcrumbs__item breadcrumbs__item--active">Contacts</li>
						</ul>
						<!-- end breadcrumbs -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- contacts -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-8">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title">Contact Form</h2>
						</div>
						<!-- end section title -->

						<div class="col-12">
							<form action="#" class="sign__form sign__form--full">
								<div class="row">
									<div class="col-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="firstname">Name</label>
											<input id="firstname" type="text" name="firstname" class="sign__input" placeholder="John">
										</div>
									</div>

									<div class="col-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="email">Email</label>
											<input id="email" type="text" name="email" class="sign__input" placeholder="email@email.com">
										</div>
									</div>

									<div class="col-12">
										<div class="sign__group">
											<label class="sign__label" for="subject">Subject</label>
											<input id="subject" type="text" name="subject" class="sign__input" placeholder="Partnership">
										</div>
									</div>

									<div class="col-12">
										<div class="sign__group">
											<label class="sign__label" for="message">Message</label>
											<textarea id="message" name="message" class="sign__textarea" placeholder="Type your message..."></textarea>
										</div>
									</div>

									<div class="col-12">
										<button type="button" class="sign__btn sign__btn--small">Send</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<div class="col-12 col-md-6 col-xl-4">
					<div class="row">
						<!-- contacts -->
						<div class="col-12">
							<h2 class="section__title section__title--mt">Get In Touch</h2>

							<p class="section__text">We are always happy to help and provide more information about our services. You can contact us through email, phone, or by filling out the form on our website. Thank you for considering us!</p>

							<ul class="contacts__list">
								<li><a href="tel:+18002345678">+1 800 234 56 78</a></li>
								<li><a href="mailto:support@hotflix.com">support@hotflix..</a></li>
							</ul>

							<div class="contacts__social">
								<a href="#"><i class="fa-brands fa-twitter"></i></a>
								<a href="#"><i class="ti ti-brand-x"></i></a>
								<a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
								<a href="#"><i class="fa-brands fa-discord"></i></a>
								<a href="#"><i class="fa-brands fa-square-instagram"></i></a>
								<a href="#"><i class="fa-brands fa-tiktok"></i></a>
							</div>
						</div>
						<!-- end contacts -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end contacts -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer__content">
						<a href="index.php" class="footer__logo">
							<img src="img/logo.svg" alt="">
						</a>

						<span class="footer__copyright">© HOTFLIX, 2025 <br> Create by <a href="#Alpha_teams" target="_blank">Alpha Teams</a></span>

						<nav class="footer__nav">
							<a href="about.php">About Us</a>
							<a href="contacts.php">Contacts</a>
							<a href="privacy.php">Privacy policy</a>
						</nav>

						<button class="footer__back" type="button">
							<i class="fa-solid fa-arrow-up"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/splide.min.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>