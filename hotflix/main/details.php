<?php
include('header.php');
include('connect.php');

// Check if movieID is passed in the URL
if (isset($_GET['movieID'])) {
    $movieID = intval($_GET['movieID']); // Sanitize input

    // Query the database for the selected movie
    $query = "SELECT * FROM `movie_upload` WHERE `mov_id` = $movieID";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>
        <section class="section section--details">
            <div class="container">
                <div class="row">
                    <!-- Title -->
                    <div class="col-12">
                        <h1 class="section__title section__title--head">Movie name : <b><?php echo $row['mov_name']; ?></b></h1>
                    </div>
                    <!-- End Title -->

                    <!-- Content -->
                    <div class="col-12 col-xl-6">
                        <div class="item item--details">
                            <div class="row">
                                <!-- Card Cover -->
                                <div class="col-12 col-sm-5 col-md-5 col-lg-4 col-xl-6 col-xxl-5">
                                    <div class="item__cover">
                                        <img src="img/<?php echo $row['mov_image']; ?>" alt="">
                                        <span class="item__rate item__rate--green"><?php echo $row['mov_rating']; ?>/10</span>
                                        <button class="item__favorite item__favorite--static" type="button"><i class="fa-duotone fa-solid fa-bookmark"></i></button>
                                    </div>
                                </div>
                                <!-- End Card Cover -->

                                <!-- Card Content -->
                                <div class="col-12 col-md-7 col-lg-8 col-xl-6 col-xxl-7">
                                    <div class="item__content">
                                        <ul class="item__meta">
                                            <li><span>Director:</span> <a href="#"><?php echo $row['mov_director']; ?></a></li>
                                            <li><span>Genre:</span> <a href="#"><?php echo $row['mov_action']; ?></a></li>
                                            <li><span>Trailer:</span> <a href="<?php echo $row['mov_trailer']; ?>">Watch Trailer</a></li>
                                            <li><span>Premiere:</span><b><?php echo $row['mov_year']; ?></b></li>
                                        </ul>
										<div class="ticket" style="
										text-align:center;
										color:#fff;
										padding:20px;
										border-radius:10px;
										width:300px;
										margin:20px auto;
									">
										<a href="book_tickets.php?movieID=<?php echo $row['mov_id']; ?>"
										style="
											display:inline-block;
											padding:12px 28px;
											font-size:15px;
											font-weight:600;
											letter-spacing:1px;
											text-decoration:none;
											color:#fff;
											background:linear-gradient(135deg, #ff512f, #dd2476);
											border-radius:30px;
											box-shadow:0 6px 15px rgba(0,0,0,0.4);
											transition:all 0.3s ease;
										"
										onmouseover="
											this.style.transform='translateY(-3px)';
											this.style.boxShadow='0 10px 25px rgba(255,81,47,0.7)';
											this.style.background='linear-gradient(135deg, #dd2476, #ff512f)';
										"
										onmouseout="
											this.style.transform='translateY(0)';
											this.style.boxShadow='0 6px 15px rgba(0,0,0,0.4)';
											this.style.background='linear-gradient(135deg, #ff512f, #dd2476)';
										">
											BOOK TICKET
										</a>
									</div>

                                        <div class="item__description">
                                            <p><?php echo $row['mov_description']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card Content -->
                            </div>
                        </div>
                    </div>
                    <!-- End Content -->

                    <!-- Player -->
                    <div class="col-12 col-xl-6">
                        <video controls crossorigin playsinline poster="img/<?php echo $row['mov_image']; ?>" id="player">
                            <source src="<?php echo $row['mov_trailer']; ?>" type="video/mp4">
							
                            <!-- <a href=	"path/to/movie-trailer.mp4" download>Download</a> -->
                        </video>
                    </div>
                    <!-- End Player -->
                </div>
            </div>
        </section>
        <?php
    } else {
        echo "<p>Movie not found.</p>";
    }
} else {
    echo "<p>No movie selected.</p>";
}
?>


	
	<!-- end details -->

	<!-- content -->
	<section class="content">
		<div class="content__head content__head--mt">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Discover</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item" role="presentation">
								<button id="1-tab" class="active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">Comments</button>
							</li>

							<li class="nav-item" role="presentation">
								<button id="2-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</button>
							</li>

							<li class="nav-item" role="presentation">
								<button id="3-tab" data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab" aria-controls="tab-3" aria-selected="false">Photos</button>
							</li>
						</ul>
						<!-- end content tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8">
					<!-- content tabs -->
					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab" tabindex="0">
							<div class="row">
								<!-- comments -->
								<div class="col-12">
									<div class="comments">
										<ul class="comments__list">
											<!--   -->

										<?php
								include("connect.php");
								$select = "SELECT * FROM `review`";
								$result = mysqli_query($con, $select);
								while($row = mysqli_fetch_assoc($result)){
							?>
											<li class="comments__item">
												<div class="comments__autor">
													<img class="comments__avatar" src="img/user.svg" alt="">
													<?php
if($_SESSION['role']==="User"){
?>
													<span class="comments__name"><?php echo $_SESSION['name'] ?></span>
													<?php } ?>
													<span class="comments__time">02.08.2018, 15:24</span>
												</div>
												<p class="comments__text"><?php echo $row['rev_comment'] ?></p>
												<div class="comments__actions">
													<!-- <div class="comments__rate">
														<button type="button"><i class="ti ti-thumb-up"></i>74</button>

														<button type="button">13<i class="ti ti-thumb-down"></i></button>
													</div> -->
													
													<button type="button"><i class="ti ti-arrow-forward-up"></i>Reply</button>
													<button type="button"><i class="ti ti-quote"></i>Quote</button>
												</div>
											</li>
								<?php } ?>
										</ul>

										<!-- paginator mobile -->
										<div class="paginator-mob paginator-mob--comments">
											<span class="paginator-mob__pages">5 of 628</span>

											<ul class="paginator-mob__nav">
												<li>
													<a href="#">
														<i class="ti ti-chevron-left"></i>
														<span>Prev</span>
													</a>
												</li>
												<li>
													<a href="#">
														<span>Next</span>
														<i class="ti ti-chevron-right"></i>
													</a>
												</li>
											</ul>
										</div>
										<!-- end paginator mobile -->

										<!-- paginator desktop -->
										
										<!-- end paginator desktop -->

										<form action="#" method="POST" enctype="multipart/form-data" class="sign__form sign__form--comments">
											<div class="sign__group">
												<textarea id="text" name="comm" class="sign__textarea" placeholder="Add comment"></textarea>
											</div>
											<button type="submit" name="btn" class="sign__btn sign__btn--small">Send</button>
										</form>

										<?php
include('connect.php');
// session_start();

if (isset($_POST['btn'])) {
    $comment = $_POST['comm'];

    $insert = "INSERT INTO `review`(`rev_comment`) VALUES ('$comment')";
    $run = mysqli_query($con, $insert);

    if ($run) {
        echo "<script>
                alert('comment successful!');
              </script>";
        exit;
    } else {
        echo "<script>
                alert('comment failed! Please try again.');
              </script>";
    }
}
?>
									</div>
								</div>
								<!-- end comments -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab" tabindex="0">
							<div class="row">
								<!-- reviews -->
								<div class="col-12">
									<div class="reviews">
										<ul class="reviews__list">
											<!-- <li class="reviews__item">
												<div class="reviews__autor">
													<img class="reviews__avatar" src="img/user.svg" alt="">
													<span class="reviews__name">Best Marvel movie in my opinion</span>
													<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

													<span class="reviews__rating reviews__rating--yellow">6</span>
												</div>
												<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</li> -->

											<!-- <li class="reviews__item">
												<div class="reviews__autor">
													<img class="reviews__avatar" src="img/user.svg" alt="">
													<span class="reviews__name">Best Marvel movie in my opinion</span>
													<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

													<span class="reviews__rating reviews__rating--green">9</span>
												</div>
												<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</li> -->

											<li class="reviews__item">
												<div class="reviews__autor">
													<img class="reviews__avatar" src="img/user.svg" alt="">
													<span class="reviews__name">Best Marvel movie in my opinion</span>
													<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

													<span class="reviews__rating reviews__rating--red">5</span>
												</div>
												<p class="reviews__text">There are mancy variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</li>
										</ul>

										<!-- paginator mobile -->
										<div class="paginator-mob paginator-mob--comments">
											<span class="paginator-mob__pages">5 of 628</span>

											<ul class="paginator-mob__nav">
												<li>
													<a href="#">
														<i class="ti ti-chevron-left"></i>
														<span>Prev</span>
													</a>
												</li>
												<li>
													<a href="#">
														<span>Next</span>
														<i class="ti ti-chevron-right"></i>
													</a>
												</li>
											</ul>
										</div>
										<!-- end paginator mobile -->

										<!-- paginator desktop -->
										<ul class="paginator paginator--comments">
											<li class="paginator__item paginator__item--prev">
												<a href="#"><i class="ti ti-chevron-left"></i></a>
											</li>
											<li class="paginator__item"><a href="#">1</a></li>
											<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
											<li class="paginator__item"><a href="#">3</a></li>
											<li class="paginator__item"><a href="#">4</a></li>
											<li class="paginator__item"><span>...</span></li>
											<li class="paginator__item"><a href="#">36</a></li>
											<li class="paginator__item paginator__item--next">
												<a href="#"><i class="ti ti-chevron-right"></i></a>
											</li>
										</ul>
										<!-- end paginator desktop -->

										<form action="#" class="sign__form sign__form--comments">
											<div class="sign__group">
												<input type="text" class="sign__input" placeholder="Title">
											</div>

											<div class="sign__group">
												<select class="sign__select" name="rating" id="rating">
													<option value="0">Rating</option>
													<option value="1">1 star</option>
													<option value="2">2 stars</option>
													<option value="3">3 stars</option>
													<option value="4">4 stars</option>
													<option value="5">5 stars</option>
													<option value="6">6 stars</option>
													<option value="7">7 stars</option>
													<option value="8">8 stars</option>
													<option value="9">9 stars</option>
													<option value="10">10 stars</option>
												</select>
											</div>

											<div class="sign__group">
												<textarea id="textreview" name="textreview" class="sign__textarea" placeholder="Add review"></textarea>
											</div>

											<button type="button" class="sign__btn sign__btn--small">Send</button>
										</form>
									</div>
								</div>
								<!-- end reviews -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab" tabindex="0">
							<!-- project gallery -->
							<div class="gallery" itemscope>
								<div class="row">
									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="img/gallery/project-1.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="img/gallery/project-1.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 1</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="img/gallery/project-2.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="img/gallery/project-2.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 2</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="img/gallery/project-3.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="img/gallery/project-3.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 3</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="img/gallery/project-4.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="img/gallery/project-4.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 4</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="img/gallery/project-5.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="img/gallery/project-5.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 5</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="img/gallery/project-6.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="img/gallery/project-6.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 6</figcaption>
									</figure>
									<!-- end gallery item -->
								</div>
							</div>
							<!-- end project gallery -->
						</div>
					</div>
					<!-- end content tabs -->
				</div>

				<!-- sidebar -->
				<div class="col-12 col-lg-4">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title section__title--sidebar">You may also like...</h2>
						</div>
						<!-- end section title -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="item">
								<div class="item__cover">
									<img src="img/covers/cover.jpg" alt="">
									<!-- <a href="details.php" class="item__play">
										<i class="ti ti-player-play-filled"></i>
									</a> -->
									<span class="item__rate item__rate--green">8.4</span>
									<button class="item__favorite" type="button"><i class="fa-duotone fa-solid fa-bookmark"></i></button>
								</div>
								<div class="item__content">
									<h3 class="item__title"><a href="details.php">I Dream in Another Language</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="item">
								<div class="item__cover">
									<img src="img/covers/cover2.jpg" alt="">
									<!-- <a href="details.php" class="item__play">
										<i class="ti ti-player-play-filled"></i>
									</a> -->
									<span class="item__rate item__rate--green">7.1</span>
									<button class="item__favorite" type="button"><i class="fa-duotone fa-solid fa-bookmark"></i></button>
								</div>
								<div class="item__content">
									<h3 class="item__title"><a href="details.php">Benched</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="item">
								<div class="item__cover">
									<img src="img/covers/cover3.jpg" alt="">
									<!-- <a href="details.php" class="item__play">
										<i class="ti ti-player-play-filled"></i>
									</a> -->
									<span class="item__rate item__rate--red">6.3</span>
									<button class="item__favorite" type="button"><i class="fa-duotone fa-solid fa-bookmark"></i></button>
								</div>
								<div class="item__content">
									<h3 class="item__title"><a href="details.php">Whitney</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="item">
								<div class="item__cover">
									<img src="img/covers/cover4.jpg" alt="">
									<!-- <a href="details.php" class="item__play">
										<i class="ti ti-player-play-filled"></i>
									</a> -->
									<span class="item__rate item__rate--yellow">6.9</span>
									<button class="item__favorite" type="button"><i class="fa-duotone fa-solid fa-bookmark"></i></button>
								</div>
								<div class="item__content">
									<h3 class="item__title"><a href="details.php">Blindspotting</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="item">
								<div class="item__cover">
									<img src="img/covers/cover5.jpg" alt="">
									<!-- <a href="details.php" class="item__play">
										<i class="ti ti-player-play-filled"></i>
									</a> -->
									<span class="item__rate item__rate--green">8.4</span>
									<button class="item__favorite" type="button"><i class="fa-duotone fa-solid fa-bookmark"></i></button>
								</div>
								<div class="item__content">
									<h3 class="item__title"><a href="details.php">I Dream in Another Language</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="item">
								<div class="item__cover">
									<img src="img/covers/cover6.jpg" alt="">
									<!-- <a href="details.php" class="item__play">
										<i class="ti ti-player-play-filled"></i>
									</a> -->
									<span class="item__rate item__rate--green">7.1</span>
									<button class="item__favorite" type="button"><i class="fa-duotone fa-solid fa-bookmark"></i></button>
								</div>
								<div class="item__content">
									<h3 class="item__title"><a href="details.php">Benched</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end item -->
					</div>
				</div>
				<!-- end sidebar -->
			</div>
		</div>
	</section>
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