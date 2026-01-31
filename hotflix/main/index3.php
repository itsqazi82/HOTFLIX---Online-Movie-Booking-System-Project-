<?php
include('header.php');
?>
	<!-- home -->
	<section class="home home--hero">
		
		<div class="container">
			<div class="row">

			
				<!-- hero carousel -->
				<div class="col-12">
					<div class="hero splide splide--hero">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button">
							<i class="fa-solid fa-left-long"></i>
							</button>
							<button class="splide__arrow splide__arrow--next" type="button">
							<i class="fa-solid fa-right-long"></i>
							</button>
						</div>
						
						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<div class="hero__slide" data-bg="img/bg/venom.jpg">
										<div class="hero__content">
											<h2 class="hero__title">Savage Beauty <sub class="green">9.8</sub></h2>
											<p class="hero__text">A brilliant scientist discovers a way to harness the power of the ocean's currents to create a new, renewable energy source. But when her groundbreaking technology falls into the wrong hands, she must race against time to stop it from being used for evil.</p>
											<p class="hero__category">
												<a href="#">Action</a>
												<a href="#">Drama</a>
												<a href="#">Comedy</a>
											</p>
											<div class="hero__actions">
												<a href="#" class="hero__btn">
													<span>Coming soon</span>
												</a>
											</div>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="hero__slide" data-bg="img/bg/jurassicpark.jpg">
										<div class="hero__content">
											<h2 class="hero__title">From the Other Side <sub class="yellow">6.9</sub></h2>
											<p class="hero__text">In a world where magic is outlawed and hunted, a young witch must use her powers to fight back against the corrupt authorities who seek to destroy her kind.</p>
											<p class="hero__category">
												<a href="#">Adventure</a>
												<a href="#">Triler</a>
											</p>
											<div class="hero__actions">
											<a href="#" class="hero__btn">
											<span>Coming soon</span>
												</a>
											</div>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="hero__slide" data-bg="img/bg/kong.jpg">
										<div class="hero__content">
											<h2 class="hero__title">Endless Horizon <sub class="red">6.2</sub></h2>
											<p class="hero__text">When a renowned archaeologist goes missing, his daughter sets out on a perilous journey to the heart of the Amazon rainforest to find him. Along the way, she discovers a hidden city and a dangerous conspiracy that threatens the very balance of power in the world.</p>
											<p class="hero__category">
												<a href="#">Action</a>
												<a href="#">Drama</a>
												<a href="#">Triler</a>
											</p>
											<div class="hero__actions">
											<a href="#" class="hero__btn">
											<span>Coming soon</span>
												</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- hero carousel -->
			</div>
		</div>
	</section>
	<!-- end home -->

	<!-- fixed filter wrap -->
	<div>
		<!-- filter (fixed position) -->

		<section class="home home--bg">
		<div class="container">
			<div class="row">

					<div class="filter filter--fixed">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div class="filter__content">
										<!-- menu btn -->
										<button class="filter__menu" type="button"><i class="ti ti-filter"></i>Filter</button>
										<!-- end menu btn -->

										<!-- filter desk -->
										<div class="filter__items">
											<select class="filter__select" name="genre" id="filter__genre">
												<option value="0">All genres</option>
												<option value="1">Action/Adventure</option>
												<option value="2">Animals</option>
												<option value="3">Animation</option>
												<option value="4">Biography</option>
												<option value="5">Comedy</option>
												<option value="6">Cooking</option>
												<option value="7">Dance</option>
												<option value="8">Documentary</option>
												<option value="9">Drama</option>
												<option value="10">Education</option>
												<option value="11">Entertainment</option>
												<option value="12">Family</option>
												<option value="13">Fantasy</option>
												<option value="14">History</option>
												<option value="15">Horror</option>
												<option value="16">Independent</option>
												<option value="17">International</option>
												<option value="18">Kids</option>
												<option value="19">Medical</option>
												<option value="20">Military/War</option>
												<option value="21">Music</option>
												<option value="22">Mystery/Crime</option>
												<option value="23">Nature</option>
												<option value="24">Paranormal</option>
												<option value="25">Politics</option>
												<option value="26">Racing</option>
												<option value="27">Romance</option>
												<option value="28">Sci-Fi/Horror</option>
												<option value="29">Science</option>
												<option value="30">Science Fiction</option>
												<option value="31">Science/Nature</option>
												<option value="32">Spanish</option>
												<option value="33">Travel</option>
												<option value="34">Western</option>
											</select>

											<select class="filter__select" name="quality" id="filter__quality">
												<option value="0">Any quality</option>
												<option value="1">HD 1080</option>
												<option value="2">HD 720</option>
												<option value="3">DVD</option>
												<option value="4">TS</option>
											</select>

											<select class="filter__select" name="rate" id="filter__rate">
												<option value="0">Any rating</option>
												<option value="1">from 3.0</option>
												<option value="2">from 5.0</option>
												<option value="3">from 7.0</option>
												<option value="4">Golder Star</option>
											</select>

											<select class="filter__select" name="sort" id="filter__sort">
												<option value="0">Relevance</option>
												<option value="1">Newest</option>
												<option value="2">Oldest</option>
											</select>
										</div>
										<!-- end filter desk -->
										
										<!-- filter btn -->
										<button class="filter__btn" type="button">Apply</button>
										<!-- end filter btn -->

										<!-- amount -->
										<span class="filter__amount">Showing 18 of 1713</span>
										<!-- end amount -->
									</div>
								</div>
							</div>
						</div>
					</div>
		<!-- end filter (fixed position) -->
		
		<!-- catalog -->
		
				<!-- home title -->
				<div class="col-12">
					<h1 class="home__title"><b>MOST VIEWED</b> OF THIS SEASON</h1>
				</div>
				<!-- end home title -->

				<!-- home carousel -->
				<div class="col-12">
					<div class="home__carousel splide splide--home">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button">
							<i class="fa-solid fa-left-long"></i>
							</button>
							<button class="splide__arrow splide__arrow--next" type="button">
							<i class="fa-solid fa-right-long"></i>
							</button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">

<?php
include('connect.php');
$sql = "SELECT * FROM `movie_upload` limit 6";
$run = mysqli_query($con , $sql);
while ($data = mysqli_fetch_assoc($run)) {
?>
								<li class="splide__slide">
									<div class="item item--hero">
										<div class="item__cover">
											<img src="img/<?php echo $data['mov_image'] ?>" alt="">
											<?php

if (isset($_SESSION['role']) && $_SESSION['role'] === "User") {
?>
    <a href="details.php?movieID=<?php echo $data['mov_id'] ?>" class="item__play" style="font-size:8px;">
        WATCH TRAILER
        <!-- <i class="ti ti-player-play-filled"></i> -->
    </a>
<?php
} else {
?>
    <a href="#" onclick="alert('Please log in first to watch the trailer.'); return false;" class="item__play" style="font-size:8px;">
        WATCH TRAILER
        <!-- <i class="ti ti-player-play-filled"></i> -->
    </a>
<?php
}
?>


											<span class="item__rate item__rate--green"><?php echo $data['mov_rating'] ?>/10</span>
											<button class="item__favorite" type="button"><i class="fa-duotone fa-solid fa-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php"><?php echo $data['mov_name'] ?></a></h3>
											<span class="item__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>
										</div>
									</div>
								</li>
<?php } ?>

							</ul>
						</div>
					</div>
				</div>
				<!-- end home carousel -->
			</div>
		</div>
	</section>
		<!-- end catalog -->
	</div>
	<!-- end fixed filter wrap -->

	<!-- section -->
	<section class="section section--border">
	<section class="home home--bg">
	
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<div class="section__title-wrap">
						<h2 class="section__title">Trending Movies</h2>
						<a href="catalog.php" class="section__view section__view--carousel">View All</a>
					</div>
				</div>
				<!-- end section title -->

				<!-- carousel -->
				<div class="col-12">
					<div class="section__carousel splide splide--content">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button">
							<i class="fa-solid fa-left-long"></i>
							</button>
							<button class="splide__arrow splide__arrow--next" type="button">
							<i class="fa-solid fa-right-long"></i>
							</button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">

<?php
include('connect.php');
$sql = "SELECT * FROM `movie_upload` limit 6";
$run = mysqli_query($con , $sql);
while ($data = mysqli_fetch_assoc($run)) {
?>
								<li class="splide__slide">
									<div class="item item--hero">
										<div class="item__cover">
											<img src="img/<?php echo $data['mov_image'] ?>" alt="">
											<?php

if (isset($_SESSION['role']) && $_SESSION['role'] === "User") {
?>
    <a href="details.php?movieID=<?php echo $data['mov_id'] ?>" class="item__play" style="font-size:8px;">
        WATCH TRAILER
        <!-- <i class="ti ti-player-play-filled"></i> -->
    </a>
<?php
} else {
?>
    <a href="#" onclick="alert('Please log in first to watch the trailer.'); return false;" class="item__play" style="font-size:8px;">
        WATCH TRAILER
        <!-- <i class="ti ti-player-play-filled"></i> -->
    </a>
<?php
}
?>


											<span class="item__rate item__rate--green"><?php echo $data['mov_rating'] ?>/10</span>
											<button class="item__favorite" type="button"><i class="fa-duotone fa-solid fa-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php"><?php echo $data['mov_name'] ?></a></h3>
											<span class="item__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>
										</div>
									</div>
								</li>
<?php } ?>

							</ul>
						</div>
					</div>
				</div>
				<!-- end carousel -->
			</div>
		</div>
	</section>
	</section>

	<!-- end section -->

	<!-- section -->
	<section class="section section--border">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="section__title">Select your plan</h2>
				</div>
			</div>

			<div class="row">
				<!-- plan -->
				<div class="col-12 col-md-6 col-lg-4 order-md-2 order-lg-1">
					<div class="plan">
						<h3 class="plan__title">Basic</h3>
						<span class="plan__price">Free</span>
						<ul class="plan__list">
							<li class="plan__item"><i class="fa-solid fa-check"></i> 7 days</li>
							<li class="plan__item"><i class="fa-solid fa-check"></i> 720p Resolution</li>
							<li class="plan__item plan__item--none"><i class="fa-solid fa-xmark"></i> Limited Availability</li>
							<li class="plan__item plan__item--none"><i class="fa-solid fa-xmark"></i> Desktop Only</li>
							<li class="plan__item plan__item--none"><i class="fa-solid fa-xmark"></i> Limited Support</li>
						</ul>
						<a href="signin.php" class="plan__btn">Register</a>
					</div>
				</div>
				<!-- end plan -->

				<!-- plan -->
				<div class="col-12 col-md-12 col-lg-4 order-md-1 order-lg-2">
					<div class="plan plan--orange">
						<h3 class="plan__title">Premium</h3>
						<span class="plan__price">$34.99 <sub>/ month</sub></span>
						<ul class="plan__list">
							<li class="plan__item"><i class="fa-solid fa-check"></i> 1 Month</li>
							<li class="plan__item"><i class="fa-solid fa-check"></i> Full HD</li>
							<li class="plan__item"><i class="fa-solid fa-check"></i> Limited Availability</li>
							<li class="plan__item plan__item--none"><i class="fa-solid fa-xmark"></i> TV & Desktop</li>
							<li class="plan__item plan__item--none"><i class="fa-solid fa-xmark"></i> 24/7 Support</li>
						</ul>
						<button class="plan__btn" type="button" data-bs-toggle="modal" data-bs-target="#plan-modal">Choose Plan</button>
					</div>
				</div>
				<!-- end plan -->

				<!-- plan -->
				<div class="col-12 col-md-6 col-lg-4 order-md-3">
					<div class="plan plan--red">
						<h3 class="plan__title">Cinematic</h3>
						<span class="plan__price">$49.99 <sub>/ month</sub></span>
						<ul class="plan__list">
							<li class="plan__item"><i class="fa-solid fa-check"></i> 2 Months</li>
							<li class="plan__item"><i class="fa-solid fa-check"></i> Ultra HD</li>
							<li class="plan__item"><i class="fa-solid fa-check"></i> Limited Availability</li>
							<li class="plan__item"><i class="fa-solid fa-check"></i> Any Device</li>
							<li class="plan__item"><i class="fa-solid fa-check"></i> 24/7 Support</li>
						</ul>
						<button class="plan__btn" type="button" data-bs-toggle="modal" data-bs-target="#plan-modal">Choose Plan</button>
					</div>
				</div>
				<!-- end plan -->
			</div>
		</div>
	</section>
	<!-- end section -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer__content">
						<a href="index.php" class="footer__logo">
							<img src="img/logo.svg" alt="">
						</a>

						<span class="footer__copyright">© HOTFLIX, 2025 <br> Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></span>

						<nav class="footer__nav">
							<a href="about.php">About Us</a>
							<a href="contacts.php">Contacts</a>
							<a href="privacy.php">Privacy policy</a>
						</nav>

						<button class="footer__back" type="button">
						<i class="fa-solid fa-up-long"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- mobile filter -->
	<div class="mfilter">
		<div class="mfilter__head">
			<h6 class="mfilter__title">Filter</h6>

			<button class="mfilter__close" type="button"><i class="ti ti-x"></i></button>
		</div>

		<div class="mfilter__select-wrap">
			<div class="sign__group">
				<select class="filter__select" name="mgenre" id="mfilter__genre">
					<option value="0">All genres</option>
					<option value="1">Action/Adventure</option>
					<option value="2">Animals</option>
					<option value="3">Animation</option>
					<option value="4">Biography</option>
					<option value="5">Comedy</option>
					<option value="6">Cooking</option>
					<option value="7">Dance</option>
					<option value="8">Documentary</option>
					<option value="9">Drama</option>
					<option value="10">Education</option>
					<option value="11">Entertainment</option>
					<option value="12">Family</option>
					<option value="13">Fantasy</option>
					<option value="14">History</option>
					<option value="15">Horror</option>
					<option value="16">Independent</option>
					<option value="17">International</option>
					<option value="18">Kids</option>
					<option value="19">Medical</option>
					<option value="20">Military/War</option>
					<option value="21">Music</option>
					<option value="22">Mystery/Crime</option>
					<option value="23">Nature</option>
					<option value="24">Paranormal</option>
					<option value="25">Politics</option>
					<option value="26">Racing</option>
					<option value="27">Romance</option>
					<option value="28">Sci-Fi/Horror</option>
					<option value="29">Science</option>
					<option value="30">Science Fiction</option>
					<option value="31">Science/Nature</option>
					<option value="32">Spanish</option>
					<option value="33">Travel</option>
					<option value="34">Western</option>
				</select>
			</div>

			<div class="sign__group">
				<select class="filter__select" name="mquality" id="mfilter__quality">
					<option value="0">Any quality</option>
					<option value="1">HD 1080</option>
					<option value="2">HD 720</option>
					<option value="3">DVD</option>
					<option value="4">TS</option>
				</select>
			</div>

			<div class="sign__group">
				<select class="filter__select" name="mrate" id="mfilter__rate">
					<option value="0">Any rating</option>
					<option value="1">from 3.0</option>
					<option value="2">from 5.0</option>
					<option value="3">from 7.0</option>
					<option value="4">Golder Star</option>
				</select>
			</div>

			<div class="sign__group">
				<select class="filter__select" name="msort" id="mfilter__sort">
					<option value="0">Relevance</option>
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
				</select>
			</div>
		</div>

		<button class="mfilter__apply" type="button">Apply</button>
	</div>
	<!-- end mobile filter -->

	<!-- plan modal -->
	<div class="modal fade" id="plan-modal" tabindex="-1" aria-labelledby="plan-modal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content">
					<button class="modal__close" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>

					<form action="#" class="modal__form">
						<h4 class="modal__title">Select plan</h4>

						<div class="sign__group">
							<label for="fullname" class="sign__label">Name</label>
							<input id="fullname" type="text" name="name" class="sign__input" placeholder="Full name">
						</div>

						<div class="sign__group">
							<label for="email" class="sign__label">Email</label>
							<input id="email" type="text" name="email" class="sign__input" placeholder="example@domain.com">
						</div>

						<div class="sign__group">
							<label class="sign__label" for="value">Choose plan:</label>
							<select class="sign__select" name="value" id="value">
								<option value="35">Premium - $34.99</option>
								<option value="50">Cinematic - $49.99</option>
							</select>

							<span class="sign__text">You can spend money from your account on the renewal of the connected packages, or to order cars on our website.</span>
						</div>

						<div class="sign__group">
							<label class="sign__label">Payment method:</label>

							<ul class="sign__radio">
								<li>
									<input id="type1" type="radio" name="type" checked="">
									<label for="type1">Visa</label>
								</li>
								<li>
									<input id="type2" type="radio" name="type">
									<label for="type2">Mastercard</label>
								</li>
								<li>
									<input id="type3" type="radio" name="type">
									<label for="type3">Paypal</label>
								</li>
							</ul>
						</div>

						<button type="button" class="sign__btn sign__btn--modal">
							<span>Proceed</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end plan modal -->

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