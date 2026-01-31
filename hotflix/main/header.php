<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/splide.min.css">
	<link rel="stylesheet" href="css/slimselect.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Icon font -->
	<link rel="stylesheet" href="webfont/tabler-icons.min.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="Online Movies, TV Shows & Cinema HTML .">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>HotFlix – Online Movies, TV Shows & Cinema HTML .</title>
	<style>
		.background-video {
  position: fixed; /* Fix the video in the background */
  top: 0;
  left: 0;
  width: 100%; /* Make video fill the full width */
  height: 100%; /* Make video fill the full height */
  object-fit: cover; /* Ensure the video covers the entire area */
  z-index: -1; /* Place the video behind other content */
}

/* Optional: Ensure the content doesn't get hidden behind the video */
.main {
  position: relative;
  z-index: 1;
}

.background-image {
  position: fixed; /* Fix the image in the background */
  top: 0;
  left: 0;
  width: 100%; /* Make the image fill the full width of the screen */
  height: 250%; /* Make the image fill the full height of the screen */
  object-fit: cover; /* Ensure the image covers the entire screen */
  z-index: -1; /* Put the image behind the content */
}

.main-header-two__top-social-box {
    background: rgba(0, 0, 0, 0.1);   /* VIP dark glass look */
    padding: 10px 0;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    font-family: 'Poppins', sans-serif;
}

.main-header-two__top-social-box-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    color: #000000;
}

/* Left side text */
.main-header-two__top-social-text {
    font-size: 14px;
    color: #ffffff;
    margin: 0;
}

.main-header-two__top-social-text i {
    color: #00aaff;
    margin-right: 5px;
}

/* Middle menu (Empowering smarter | Custom Software Development) */
.main-header-two__top-menu-box {
    margin-right: 20px;
}

.main-header-two__top-menu {
    list-style: none;
    display: flex;
    gap: 20px;
    margin: 0;
    padding: 0;
}

.main-header-two__top-menu li a {
    color: #ffffff;
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
}

.main-header-two__top-menu li a:hover {
    color: #00aaff;
}

/* Social Icons Right */
.main-header-two__top-social a {
    color: #00aaff;
    font-size: 16px;
    margin-left: 12px;
    transition: 0.3s;
}

.main-header-two__top-social a:hover {
    color: #00aaff;
}

/* Wrap for center alignment */
.main-header-two__top-menu-social-box {
    display: flex;
    align-items: center;
}

/* ---------- RESPONSIVE ---------- */
@media (max-width: 768px) {
    .main-header-two__top-social-box-inner {
        flex-direction: column;
        gap: 10px;
        text-align: center;
    }

    .main-header-two__top-menu-box {
        margin-right: 0;
    }

    .main-header-two__top-menu {
        justify-content: center;
        gap: 15px;
    }

    .main-header-two__top-social a {
        margin-left: 10px;
    }
}
	</style>
</head>

<body>
	
	<!-- header -->
	<header class="header">
		<div class="main-header-two__top-social-box">
                    <div class="container">
                        <div class="main-header-two__top-social-box-inner">
                            <p class="main-header-two__top-social-text"> <i class="fa fa-clock"></i> <span>Open
                                    Hours:</span> Mon – Sat: 12pm – 12am, Sunday: CLOSED</p>
                            <div class="main-header-two__top-menu-social-box">
                                <div class="main-header-two__top-menu-box">
                                    <ul class="list-unstyled main-header-two__top-menu">
                                        <li><a href="#Empowering-smarter">Enjoy your movie</a></li>
                                        <li><a href="#Custom-Software-Development">Enjoy you fun</a></li>
                                        <!-- <li><a href="about.html">About</a></li> -->
                                    </ul>
                                </div>
                                <div class="main-header-two__top-social">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
		
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- header logo -->
						<a href="index.php" class="header__logo">
							<img src="img/logo.svg" alt="">
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link" href="index3.php">Home </a>

								<!-- <ul class="dropdown-menu header__dropdown-menu">
									<li><a href="index.php">Home style 1</a></li>
									<li><a href="index2.php">Home style 2</a></li>
									<li><a href="index3.php">Home style 3</a></li>
								</ul> -->
							</li>

							<li class="header__nav-item">
								<a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Movie <i class="fa-solid fa-caret-down"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="catalog.php">Movie trailer</a></li>
									<!-- <li><a href="catalog2.php">Catalog style 2</a></li> -->
									<li><a href="details.php"> Reviews</a></li>
									<!-- <li><a href="details2.php">Details TV Series</a></li> -->
								</ul>
							</li>
							<!-- end dropdown -->

							<li class="header__nav-item">
								<a href="pricing.php" class="header__nav-link">Pricing plan</a>
							</li>

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages <i class="fa-solid fa-caret-down"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="about.php">About Us</a></li>
									<!-- <li><a href="profile.php">Profile</a></li> -->
									<li><a href="actor.php">Actor</a></li>
									<li><a href="contacts.php">Contacts</a></li>
									<li><a href="faq.php">Help center</a></li>
									<li><a href="privacy.php">Privacy policy</a></li>
									<!-- <li><a href="../admin/index.php" target="_blank">Admin pages</a></li> -->
								</ul>
							</li>
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link header__nav-link--more" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<!-- <li><a href="signin.php">Sign in</a></li>
									<li><a href="signup.php">Sign up</a></li> -->
<?php
session_start(); // Make sure session is started

if (isset($_SESSION['role']) && $_SESSION['role'] === "User") {
?>
    <li>
        <a href="forgot.php?updateID=<?php echo $_SESSION['name']; ?>">Change Password</a>
    </li>
<?php
} else {
?>
    <a href="#" onclick="alert('Please log in first to watch the trailer.'); return false;" class="item__play" style="font-size:8px;">
        WATCH TRAILER
    </a>
<?php
}
?>

									<li><a href="404.php">404 Page</a></li>
								</ul>
							</li>
							<!-- end dropdown -->
						</ul>
						<!-- end header nav -->

						<!-- header auth -->
						<div class="header__auth">
							<form action="#" class="header__search">
								<input class="header__search-input" type="text" placeholder="Search...">
								<button class="header__search-button" type="button">
									<i class="fa-solid fa-magnifying-glass"></i>
								</button>
								<button class="header__search-close" type="button">
									<i class="fa-solid fa-xmark"></i>	
								</button>
							</form>

							<button class="header__search-btn" type="button">
								<i class="fa-solid fa-magnifying-glass"></i>
							</button>

							<!-- dropdown -->
							<!-- <div class="header__lang">
								<a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">EN <i class="fa-solid fa-caret-down"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="#">English</a></li>
									<li><a href="#">Spanish</a></li>
									<li><a href="#">French</a></li>
								</ul>
							</div> -->
							<!-- end dropdown -->

							<!-- dropdown -->
							<?php
if($_SESSION['role']==="User"){
?>
							<div class="header__profile">
								<a class="header__sign-in header__sign-in--user">
									<i class="fa-regular fa-user"></i>
									<span><?php echo $_SESSION['name'] ?></span>
								</a>
							
							</div>
							<div class="header__profile">
								<a class="header__sign-in header__sign-in--user" href="signout.php">
									<i class="fa-regular fa-user"></i>
									<span>Signout</span>
								</a>
						
							</div>
<?php
} else{ ?>
<div class="header__profile">
								<a class="header__sign-in header__sign-in--user" href="signin.php">
									<i class="fa-regular fa-user"></i>
									<span>Signin</span>
								</a>
							
							</div>
							<div class="header__profile">
								<a class="header__sign-in header__sign-in--user" href="signup.php">
									<i class="fa-regular fa-user"></i>
									<span>Signup</span>
								</a>
						
							</div>
<?php } ?>
							<!-- end dropdown -->
						</div>
						<!-- end header auth -->

						<!-- header menu btn -->
						<button class="header__btn" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end header menu btn -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->
