<?php
include('header.php');
include("connect.php");

if (isset($_POST['btn'])) {
    // Sanitize and store form inputs
    $cinema = mysqli_real_escape_string($con, $_POST['cinema']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    
    // Insert query to add cinema details
    $insert_query = "INSERT INTO `cinema` (`cin_name`, `cin_city`, `cin_location`,)
                     VALUES ('$cinema', '$city', '$location')";

    $insert_query ="INSERT INTO `cinema`(`cin_name`, `cin_city`, `cin_location`) VALUES ('$cinema ','$city','$location')";

    $result = mysqli_query($con, $insert_query);

    if ($result) {
        echo "<script>alert('Cinema Added Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
		<!-- sidebar copyright -->
		<div class="sidebar__copyright">© HOTFLIX, 2019—2024. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></div>
		<!-- end sidebar copyright -->
	</div>
	<!-- end sidebar -->

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Add Cinema</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
                <form class="sign__form sign__form--add" method="POST">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="row">
                <!-- Screen Selection -->
                <!-- <div class="col-12">
                    <div class="sign__group">
                        <select class="sign__selectjs" name="screen" id="sign__quality">
                            <option value="3D">2D</option>
                            <option value="2D">3D</option>
                            <option value="4D">4D</option>
                            <option value="VR">VR</option>
                        </select>
                    </div>
                </div> -->
                <div class="col-12">
                    <div class="sign__group">
                        <input type="text" class="sign__input" name="cinema" placeholder="Enter Cinema name">
                    </div>
                </div>
                <div class="col-12">
                    <div class="sign__group">
                        <input type="text" class="sign__input" name="location" placeholder="Enter Cinema location">
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="sign__group">
                        <input type="text" class="sign__input" name="city" placeholder="Enter city  ">
                    </div>
                </div>
                <!-- Cinema Selection -->
               
<!-- 
                <div class="col-12 col-md-6">
                    <div class="sign__group">
                        <input type="text" class="sign__input" name="price" placeholder="Price (i.e. PKR)">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="sign__group">
                        <input type="time" class="sign__input" name="time" placeholder="Cinema Time" required>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="sign__group">
                        <input type="date" class="sign__input" name="date" placeholder="Premiere Date" required>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="sign__group">
                        <select class="sign__selectjs" name="category" id="sign__cinema" style="color:white;">
                            <option value="Gold">Gold</option>
                            <option value="Platinum">Platinum</option>
                            <option value="Black Box">Black Box</option>
                        </select>
                    </div>
                </div> -->

                <!-- City -->

                <!-- Location -->
                

                <!-- Publish Button -->
                <div class="form-group">
                    <button type="submit" name="btn" class="btn btn-primary">Publish</button>
                    <div class="submitting"></div>
                </div>
            </div>
        </div>
    </div>
</form>

				</div>
				<!-- end form -->
			</div>
		</div>
	</main>
	<!-- end main content -->
    <img src="img/cover3.jpg" class="background-image" alt="">

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/admin.js"></script>
</body>



</html>
