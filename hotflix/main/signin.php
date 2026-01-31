<?php
// session_start();
include('connect.php');
include('header.php');



if (isset($_POST['btn'])) {
    $email = $_POST['m_email'];
    $pass = $_POST['m_pass'];

    // Secure query using prepared statements
    $stmt = $con->prepare("SELECT * FROM `user` WHERE `u_email` = ? AND `u_password` = ?");
    $stmt->bind_param("ss", $email, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->num_rows;

    if ($row > 0) { 
        $data = $result->fetch_assoc();
        $_SESSION['name'] = $data['u_name'];
        $_SESSION['role'] = $data['u_role'];

        if ($_SESSION['role'] == 'User') {
            // header("Location: index.php");
			echo '<script>window.location.href="index.php";</script>';
            exit();
        } elseif ($_SESSION['role'] == 'Admin') {
            echo '<script>window.location.href="../admin/index.php";</script>';

			
            exit();
        }
    } else {
        echo "<p>Invalid email or password.</p>";
    }

    $stmt->close();
}
?>


	<!-- page title -->
	<section class="section section--first">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h1 class="section__title section__title--head">Signin Page</h1>
						<!-- end section title -->

						<!-- breadcrumbs -->
						<ul class="breadcrumbs">
							<li class="breadcrumbs__item"><a href="index.php">Home <i class="fa-solid fa-arrow-right"></i></a></li>
							<li class="breadcrumbs__item breadcrumbs__item--active">Signin</li>
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
							<h2 class="section__title">Signin Form</h2>
							<br>
						</div>
						<!-- end section title -->

						<div class="col-12">
							<form method="POST">
								<div class="row">

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


									<!-- <div class="col-12">
										<div class="sign__group">
											<label class="sign__label" for="message">Message</label>
											<textarea id="message" name="message" class="sign__textarea" placeholder="Type your message..."></textarea>
										</div>
									</div> -->

									<div class="col-12">
										<a href="index.php">
										<button type="submit" name="btn" class="sign__btn sign__btn--small">Signin</button>
										</a>
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
								<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
								<a href="https://www.instagram.com/volkov_des1gn/" target="_blank">
									<i class="fa-brands fa-instagram"></i>
								</a>
								<a href="#"><i class="fa-brands fa-discord"></i></a>
								<a href="#"><i class="fa-brands fa-telegram"></i></a>
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