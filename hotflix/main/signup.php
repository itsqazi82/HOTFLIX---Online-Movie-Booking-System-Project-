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
						<h1 class="section__title section__title--head">Signup</h1>
						<!-- end section title -->

						<!-- breadcrumbs -->
						<ul class="breadcrumbs">
							<li class="breadcrumbs__item"><a href="index.php">Home</a></li>
							<li class="breadcrumbs__item breadcrumbs__item--active">Signup</li>
						</ul>
						<!-- end breadcrumbs -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->D
	<!-- contacts -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-8">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title">Signup Form</h2>
						</div>
						<!-- end section title -->

						<div class="col-12">
							<form method="POST">
								<div class="row">
									<div class="col-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="firstname">Name</label>
											<input id="firstname" type="text" name="m_name" class="sign__input" placeholder="Haseeb (Single name only) " require>
										</div>
									</div>

									<div class="col-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="email">Email</label>
											<input id="email" type="text" name="m_email" class="sign__input" placeholder="abc@email.com">
										</div>
									</div>

									<div class="col-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="firstname">Password</label>
											<input id="firstname" type="text" name="m_pass" class="sign__input" placeholder="abc123">
										</div>
									</div>

									<div class="col-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="email">Phone</label>
											<input id="email" type="number" name="m_phone" class="sign__input" placeholder="+19212336444">
										</div>
									</div>

									<div class="col-12">
										<div class="sign__group">
											<label class="sign__label" for="subject">Address</label>
											<input id="subject" type="text" name="m_add" class="sign__input" placeholder="Address">
										</div>
									</div>

									<!-- <div class="col-12">
										<div class="sign__group">
											<label class="sign__label" for="message">Message</label>
											<textarea id="message" name="message" class="sign__textarea" placeholder="Type your message..."></textarea>
										</div>
									</div> -->

									<div class="col-12">
										<a href="index.php">
										<button type="submit" name="btn" class="sign__btn sign__btn--small">Signup</button>
										</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<?php
include('connect.php');
session_start();
if (isset($_POST['btn'])) {
    $name = $_POST['m_name'];
    $email = $_POST['m_email'];
    $pass = $_POST['m_pass'];
    $add = $_POST['m_add'];
    $phone = $_POST['m_phone'];

    $insert = "INSERT INTO `user`(`u_name`, `u_email`, `u_password`, `u_phone`, `u_address`, `u_role`)
	 VALUES ('$name','$email','$pass','$phone','$add','User')";
    $run = mysqli_query($con, $insert);

    if ($run) {
        echo "<script>
                alert('Signup successful!');
                window.location.href = 'index.php';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('Signup failed! Please try again.');
              </script>";
    }
}
?> 
				
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
								<a href="#"><i class="ti ti-brand-facebook"></i></a>
								<a href="#"><i class="ti ti-brand-x"></i></a>
								<a href="https://www.instagram.com/volkov_des1gn/" target="_blank"><i class="ti ti-brand-instagram"></i></a>
								<a href="#"><i class="ti ti-brand-discord"></i></a>
								<a href="#"><i class="ti ti-brand-telegram"></i></a>
								<a href="#"><i class="ti ti-brand-tiktok"></i></a>
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