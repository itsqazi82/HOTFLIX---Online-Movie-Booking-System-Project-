<?php
include('connect.php');

if (isset($_GET['deleteID'])) {
    $fetch = mysqli_real_escape_string($con, $_GET['deleteID']);

    if (!empty($fetch)) {
        $delete = "DELETE FROM `movie_upload` WHERE `mov_id` = $fetch";
        $run = mysqli_query($con, $delete);

        if ($run) {
            // Redirect back to cinema.php after successful deletion
            header('Location: view-cat.php');
            echo "<script>alert('Movie delete successfull');</script>";

            exit;
        } else {
            echo "<script>alert('Failed to delete the Movie. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Invalid Movie ID.');</script>";
    }
} else {
    echo "<script>alert('No Movie ID provided.');</script>";
}
?>
