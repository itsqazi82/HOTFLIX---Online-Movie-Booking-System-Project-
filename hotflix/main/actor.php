<?php
include('header.php');
?>
	<!-- details -->
	<section class="section section--details">
		<!-- details background -->
		<div class="section__details-bg" data-bg="img/bg/actor__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="section__title section__title--head">Michelle Rodriguez</h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-12 col-lg-9 col-xl-6">
					<div class="item item--details">
						<div class="row">
							<div class="col-12 col-sm-5 col-md-5">
								<div class="item__cover">
									<img src="img/covers/actor.jpg" alt="">
								</div>
							</div>

							<div class="col-12 col-md-7">
								<div class="item__content">
									<ul class="item__meta">
										<li><span>Career:</span> Actress</li>
										<li><span>Height:</span> 1.65 m</li>
										<li><span>Date of birth:</span> July 12, 1978</li>
										<li><span>Place of birth:</span> San Antonio, Texas, United States</li>
										<li><span>Age:</span> 44</li>
										<li><span>Zodiac:</span> Cancer</li>
										<li><span>Genres:</span> <a href="#">Action</a> <a href="#">Triler</a> <a href="#">Drama</a></li>
										<li><span>Total number of movies:</span> 109</li>
										<li><span>First movie:</span> <a href="details.php">Girl Fight (2000)</a></li>
										<li><span>Last movie:</span> <a href="details.php">Fast and the Furious 10 (2023)</a></li>
										<li><span>Best movie:</span> <a href="details.php">Avatar</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end content -->
			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->

	
	<!-- end content -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer__content">
						<a href="index.php" class="footer__logo">
							<img src="img/logo.svg" alt="">
						</a>

						<span class="footer__copyright">© HOTFLIX, 2019—2024 <br> Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></span>

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

	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>

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