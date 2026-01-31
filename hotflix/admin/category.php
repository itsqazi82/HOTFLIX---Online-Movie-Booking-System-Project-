<?php
include('header.php');

include("connect.php");

if (isset($_POST['btn'])) {
    $name = mysqli_real_escape_string($con, $_POST['m_name']);
    $trailer = mysqli_real_escape_string($con, $_POST['m_trailer']);
    $rating = mysqli_real_escape_string($con, $_POST['m_rating']);
    $description = mysqli_real_escape_string($con, $_POST['m_Description']);
    $director = mysqli_real_escape_string($con, $_POST['m_director']);
    $year = mysqli_real_escape_string($con, $_POST['m_year']);
    $action = mysqli_real_escape_string($con, $_POST['m_action']);

    $type = $_FILES['m_pic']['type'];

    if (strtolower($type) == 'image/jpg' 
        || strtolower($type) == 'image/jpeg' 
        || strtolower($type) == 'image/png') {
        
        $imagename = mysqli_real_escape_string($con, $_FILES['m_pic']['name']);
        $target = 'img/'.basename($imagename);

        if (move_uploaded_file($_FILES['m_pic']['tmp_name'], $target)) {
            
            $insert = "INSERT INTO `movie_upload`(`mov_name`, `mov_trailer`, `mov_description`, `mov_image`, `mov_rating`,
			 `mov_director`, `mov_year`, `mov_action`) VALUES ('$name', '$trailer', '$description', '$imagename', '$rating',
			 ' $director','$year','$action')";

            
            $result = mysqli_query($con, $insert);

            if ($result) {
                echo "<script>alert('Movie Added Successfully');</script>";
            } else {
                echo "Error: " . mysqli_error($con);
            }
        } else {
            echo "<script>alert('Failed to upload file');</script>";
        }
    } else {
        echo "<script>alert('Invalid file type');</script>";
    }
}

?>
	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>MOVIE DETAILS</h2>

						<span class="main__title-stat">0 Total</span>

						<div class="main__title-wrap">
							<!-- <a href="add-item.php" class="main__title-link main__title-link--wrap">Add item</a> -->

							<select class="filter__select" name="sort" id="filter__sort">
								<option value="0">Date created</option>
								<option value="1">Rating</option>
								<option value="2">Views</option>
							</select>

							<!-- search -->
							<form action="#" class="main__title-form">
								<input type="text" placeholder="Find movie / tv series..">
								<button type="button">
									<i class="ti ti-search"></i>
								</button>
							</form>
							<!-- end search -->
						</div>
					</div>
				</div>
				<!-- end main title -->

				<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form method="POST" enctype="multipart/form-data">
							<!-- <a href="index.php" class="sign__logo">
								<img src="img/logo.svg" alt="">
							</a> -->

							<div class="" style="font-size: 20px; color: white; text-align: center;">
								Add Category
							</div>

							<div class="sign__group">
								<input type="text" name="m_name" class="sign__input" placeholder="Enter movie name">
							</div>

							<div class="sign__group">
								<input type="text" name="m_Description" class="sign__input" placeholder="Enter movie Description">
							</div>

							<div class="sign__group">
								<input type="text" name="m_trailer" class="sign__input" placeholder="Enter movie trailer">
							</div>

							<div class="sign__group">
								<input type="number" name="m_rating" class="sign__input" placeholder="Enter movie rating">
							</div>

							<div class="sign__group">
								<input type="text" name="m_director" class="sign__input" placeholder="Enter movie Director">
							</div>

							<div class="sign__group">
								<input type="number" name="m_year" class="sign__input" placeholder="Enter movie Year">
							</div>

							<div class="sign__group">
								<input type="text" name="m_action" class="sign__input" placeholder="Enter movie action">
							</div>

							<div class="sign__group">
    							<input type="file" name="m_pic" class="sign__input" accept="image/*,video/*" placeholder="Upload Movie Description">
							</div>



							<button name="btn" class="sign__btn" type="submit">Add</button>

							
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>


	<img src="img/cover14.jpg" class="background-image" alt="">




	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/admin.js"></script>
</body>
</html>