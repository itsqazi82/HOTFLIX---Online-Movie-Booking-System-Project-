<?php
include('connect.php');

if (isset($_GET['deleteID'])) {
    $fetch = mysqli_real_escape_string($con, $_GET['deleteID']);

    if (!empty($fetch)) {
        $delete = "DELETE FROM `user` WHERE `id` = $fetch";
        $run = mysqli_query($con, $delete);

        if ($run) {
            // Redirect back to cinema.php after successful deletion
            header('Location: users.php');
            echo "<script>alert('Rescord delete successfull');</script>";

            exit;
        } else {
            echo "<script>alert('Failed to delete the record. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Invalid record ID.');</script>";
    }
} else {
    echo "<script>alert('No record ID provided.');</script>";
}
?>
