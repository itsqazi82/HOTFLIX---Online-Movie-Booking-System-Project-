<?php
include('header.php');
include('connect.php'); // Ensure your database connection is included

// Check if movieID is passed in the URL
if (isset($_GET['movieID'])) {
    $movieID = intval($_GET['movieID']); // Sanitize input

    // Fetch the movie details
    $query = "SELECT * FROM `movie_upload` WHERE `mov_id` = $movieID";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $movie = mysqli_fetch_assoc($result); // Fetch movie details
    } else {
        echo "<p>Movie not found.</p>";
        exit; // Stop script execution if movie is not found
    }
} else {
    echo "<p>No movie selected.</p>";
    exit; // Stop script execution if movieID is not provided
}
?>

<style>
    
		/* Seat booking grid layout */
.seats {
    display: grid;
    grid-.-columns: repeat(11, 40px); /* Default 11 columns */
    gap: 10px;
    justify-content: center;
    margin-top: 20px;
    width: 100%;
    max-width: 800px; /* Max width for the grid */
    margin-left: auto;
    margin-right: auto;
}

/* Seat styles */
.seat {
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 5px;
    text-align: center;
    cursor: pointer;
    user-select: none;
}

/* Color styles for seats */
.gold {
    background-color: #FFD700;
}

.platinum {
    background-color: #00BFFF;
}

.box {
    background-color: #8A2BE2;
}

.unavailable {
    background-color: #ccc;
    cursor: not-allowed;
}

/* Hover effect for available seats */
.seat:hover:not(.unavailable) {
    opacity: 0.8;
}

/* Row label style */
.row-label {
    grid-column: 1 / span 11;
    font-weight: bold;
    text-align: center;
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    /* For smaller screens, reduce the number of columns */
    .seats {
        grid-.-columns: repeat(7, 40px); /* 7 columns on smaller screens */
    }
}

@media (max-width: 480px) {
    /* For very small screens, reduce further */
    .seats {
        grid-.-columns: repeat(5, 40px); /* 5 columns on very small screens */
    }

    /* Adjust the seat size on very small screens */
    .seat {
        width: 30px;
        height: 30px;
        line-height: 30px;
    }
}

    </style>
	<!-- page title -->
	<section class="section section--first">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h1 class="section__title section__title--head">BOOK TICKET</h1>
						<!-- end section title -->

						<!-- breadcrumbs -->
						<ul class="breadcrumbs">
							<li class="breadcrumbs__item"><a href="index.php">Home</a></li>
							<li class="breadcrumbs__item breadcrumbs__item--active">Bookticket</li>
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
							<h2 class="section__title">Book ticket Form</h2>
						</div>
						<!-- end section title -->

						<div class="col-12">
                        <form method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="sign__group">
                                        <label class="sign__label" for="movie-name">Movie Name</label>
                                        <input id="movie-name" type="text" name="movie_name" class="sign__input" value="<?php echo $movie['mov_name']; ?>" readonly>
                                    </div>
                                </div>

                               

                                <!-- Movie Category -->
                                <div class="col-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="movie-category">Movie Category</label>
                                        <input id="movie-category" type="text" name="movie_category" class="sign__input" value="<?php echo $movie['mov_action']; ?>" readonly>
                                    </div>
                                </div>
                                <!-- Person Name -->
                                 <?php
                                 $select = "SELECT * FROM `user`";
                                 ?>
                                <div class="col-12 col-xl-6">
                                <div class="sign__group">
                                    <label class="sign__label" for="person-name">User name</label>
                                    <input id="person-name" type="text" name="person_name" class="sign__input" value="<?php echo $_SESSION['name'] ?>" readonly>
                                </div>
                                </div>

                                <!-- Number of Tickets -->
                                <div class="col-12 col-xl-6">
                                <div class="sign__group">
                                    <label class="sign__label" for="num-people">Number of Tickets</label>
                                    <input id="num-people" type="number" name="num_people" class="sign__input" placeholder="Enter number of tickets" min="1" required>
                                </div>
                                </div>
                                

                                <!-- Show Time -->
                                <div class="col-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="show-time">Show Time</label>
                                        <select type="time
                                        " id="show-time" name="show_time" class="sign__input" required>
                                            <option value="" disabled selected>Select a time</option>
                                            <option value="10:00 AM">10:00 AM</option>
                                            <option value="1:00 PM">1:00 PM</option>
                                            <option value="4:00 PM">4:00 PM</option>
                                            <option value="7:00 PM">7:00 PM</option>
                                            <option value="10:00 PM">10:00 PM</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-12 col-xl-6">
                                <div class="sign__group">
                                    <label class="sign__label" for="day">Select Date</label>
                                    <input id="day" type="date" name="mvdate" class="sign__input" required>
                                </div>
                                </div>

                               <!-- Screen Selection -->
                               <div class="col-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="show-time">Screen</label>
                                        <select id="show-time" name="screen_type" class="sign__input" required>
                                            <option value="" disabled selected>Select Screen</option>
                                            <option value="3D">3D</option>
                                            <option value="4D">4D</option>
                                            <option value="2D">2D</option>
                                            <option value="VR">VR</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-12 col-xl-6">
                                <div class="sign__group">
                                    <label class="sign__label" for="address">City</label>
                                    <input id="address" type="text" name="city_nm" class="sign__input" placeholder="Your City" required>
                                </div>
                                </div>
                                <!-- Cinema Selection -->
                               <div class="col-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="cinema_select">Cinema Selection</label>
                                        <select id="show-time" name="cinema_select" class="sign__input" required>
                                            <option value="" disabled selected>Select Cinema</option>
                                            <option value="Atrium">Atrium</option>
                                            <option value="Nuplex">Nuplex</option>
                                            <option value="Capri">Capri</option>
                                            <option value="Cineplex">Cineplex</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Payment Method -->
                                <div class="col-12">
                                <div class="sign__group">
                                    <label class="sign__label">Payment Method</label>
                                    <select name="payment_method" class="sign__input">
                                    <option value="credit">Credit/Debit Card</option>
                                    <option value="cash">Cash</option>
                                    <option value="wallet">Digital Wallet</option>
                                    </select>
                                </div>
                                </div>
				<!-- Seat Selection Image -->
				<h3 class="text-center" style="color:white!important; margin:20px; 
				font-weight:bolder; font-size:45px">Cinema Seat Plan</h3>
					<div class="seats">
						<!-- Row A -->
						<div class="row-label"style="color:white;">A</div>
						<div class="seat gold">A1</div>
						<div class="seat gold">A2</div>
						<div class="seat platinum">A3</div>
						<div class="seat platinum">A4</div>
						<div class="seat platinum">A5</div>
						<div class="seat platinum">A6</div>
						<div class="seat platinum">A7</div>
						<div class="seat platinum">A8</div>
						<div class="seat box">A9</div>
						<div class="seat box">A10</div>
						<div class="seat box">A11</div>

						<!-- Row B -->
						<div class="row-label"style="color:white;">B</div>
						<div class="seat gold">B1</div>
						<div class="seat gold">B2</div>
						<div class="seat platinum">B3</div>
						<div class="seat platinum">B4</div>
						<div class="seat platinum">B5</div>
						<div class="seat platinum">B6</div>
						<div class="seat platinum">B7</div>
						<div class="seat box">B8</div>
						<div class="seat box">B9</div>
						<div class="seat unavailable">B10</div>
						<div class="seat unavailable">B11</div>
						<!-- Row C -->

						<div class="row-label" style="color:white;">C</div>
						<span></span><span></span>
						<div class="seat platinum">C1</div>
						<div class="seat platinum">C2</div>
						<div class="seat platinum">C3</div>
						<div class="seat platinum">C4</div>
						<div class="seat platinum">C5</div>
						<div class="seat box">C6</div>
						<div class="seat box">C7</div>
						<!-- Row D -->

						<div class="row-label"style="color:white;">D</div>
						<span></span><span></span><span></span><span></span>
						<div class="seat platinum">D1</div>
						<div class="seat platinum">D2</div>
						<div class="seat platinum">D3</div>
						</div>
						<span></span><span></span><span></span><span></span>

						<!-- Seat Selection Input -->
						<div class="sign__group col-12" style="width:300px;color:white!important;">
							<input type="text" class="sign__input" placeholder="Enter the Seat No" name="seat_no">
						</div>
                        


                        <div class="sign__group">
    <label class="sign__label" for="movie-name">Movie Image</label>
    <img src="../main/img/<?php echo $movie['mov_image']; ?>" alt="">
    <!-- Hidden input for the image path -->
    <input type="hidden" name="img" value="<?php echo $movie['mov_image']; ?>">
</div>


                                <!-- Submit Button -->
                                <div class="col-12">
                                <button type="submit" name="btn" class="sign__btn sign__btn--small">Book Ticket</button>
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
    $mviename = $_POST['movie_name'];
    $mviecat = $_POST['movie_category'];
    $pnam = $_POST['person_name'];
    $numofpep = $_POST['num_people'];
    $showtime = $_POST['show_time'];
    $mviedat = $_POST['mvdate'];
    $screentype=$_POST['screen_type'];
    $citynm = $_POST['city_nm'];
    $cinemaselct = $_POST['cinema_select'];
    $payment = $_POST['payment_method'];
    $seatno = $_POST['seat_no'];
    $image = $_POST['img'];
    $_SESSION['image'] = $image;

    $insert = "INSERT INTO `booking`(`bk_moviename`, `bk_movie_category`, `bk_person_name`, `bk_num_people`, `bk_show_time`, `bk_mvdate`, `bk_screen_type`, `bk_citynm`, `bk_cinema_select`, `bk_Payment_Method`, `bk_seat_no`, `bk_img`) VALUES ('$mviename','$mviecat','$pnam','$numofpep','$showtime','$mviedat','$screentype','$citynm','$cinemaselct','$payment','$seatno','$image')";
    $run = mysqli_query($con, $insert);
    


    if ($run) {
        echo "<script>
                alert('book ticket successful!');
                window.location.href = 'checkout.php';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('book ticket failed! Please try again.');
              </script>";
    }
}
?>
				
				<div class="col-12 col-md-6 col-xl-4">
					<div class="row">
						<!-- contacts -->
                        <div class="col-12">
                                    
                        </div>
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