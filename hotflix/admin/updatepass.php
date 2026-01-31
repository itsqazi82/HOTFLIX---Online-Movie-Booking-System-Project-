


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/slimselect.css">
	<link rel="stylesheet" href="css/admin.css">

	<!-- Icon font -->
	<link rel="stylesheet" href="webfont/tabler-icons.min.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="Online Movies, TV Shows & Cinema HTML .">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>HotFlix – Online Movies, TV Shows & Cinema HTML .</title>
</head>

<body>
	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form action="#" method="POST" class="sign__form">
							<a href="index.php" class="sign__logo">
								<img src="img/logo.svg" alt="">
							</a>

							<div class="sign__group">
								<input type="password" name="current_password" class="sign__input" placeholder="Current Password" required>
							</div>

							<div class="sign__group">
								<input type="password" name="new_password" class="sign__input" placeholder="New Password" required>
							</div>


							<button name="btn" class="sign__btn" type="submit">Change Password</button>
					
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/admin.js"></script>
</body>
</html>
<?php
include('connect.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if updateID is set
if (!isset($_GET["updateID"])) {
    die("No ID provided");
}

$fetch = $_GET["updateID"];
// Use prepared statement to prevent SQL injection
$select = "SELECT * FROM `user` WHERE `u_name` = ?";
$stmt = mysqli_prepare($con, $select);
mysqli_stmt_bind_param($stmt, "s", $fetch);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$record = mysqli_fetch_assoc($result);

if (!$record) {
    echo "<script>alert('Record not found');</script>";
}

if (isset($_POST['btn'])) {
    $current_password = mysqli_real_escape_string($con, $_POST["current_password"]);
    $new_password = mysqli_real_escape_string($con, $_POST["new_password"]);
    
    // Verify current password first (you should hash passwords in database)
    // This is just a basic example - you should use password_hash()/password_verify()
    if ($current_password !== $record['u_password']) {
        echo "<script>alert('Current password is incorrect');</script>";
    } else {
        // Update password
        $update = "UPDATE `user` SET `u_password` = ? WHERE `u_name` = ?";
        $stmt = mysqli_prepare($con, $update);
        mysqli_stmt_bind_param($stmt, "ss", $new_password, $fetch);
        
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Update successful');</script>";
            header('Location: index.php');
            exit();
        } else {
            echo "<script>alert('Update failed');</script>";
        }
    }
}
?>