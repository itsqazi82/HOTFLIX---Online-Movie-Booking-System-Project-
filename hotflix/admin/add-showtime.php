<?php
include('header.php');
include("connect.php");

if (isset($_POST['btn'])) {
    // Sanitize and store form inputs
    $moviename = mysqli_real_escape_string($con, $_POST['moviename']);
    $start = mysqli_real_escape_string($con, $_POST['starttime']);
    $end = mysqli_real_escape_string($con, $_POST['endtime']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    
    // Correct the SQL query using $moviename
    // $insert_query = "INSERT INTO `movieshow`(`show_movie`, `show_timestart`, `show_timeend`, `show_date`) 
    //                  VALUES ('$moviename', '$start', '$end', '$date')";
    $insert_query = "INSERT INTO `movieshow`(`show_movie`, `show_timestart`, `show__timeend`, `show_date`) VALUES ('$moviename','$start','$end','$date')";

    $result = mysqli_query($con, $insert_query);

    if ($result) {
        echo "<script>alert('Movie show Added Successfully');</script>";
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
                    <h2>Add ShowTime</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form class="sign__form sign__form--add" method="POST">
                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="row">

                            <div class="col-6 col-xl-6">
    <div class="sign__group">
        <select class="sign__selectjs" name="moviename" id="sign__cinema" style="color:white;">
            <?php
                include("connect.php");
                $query = "SELECT * FROM movie_upload";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <option value="<?php echo $row['mov_name']; ?>"><?php echo $row['mov_name']; ?></option>
            <?php } ?>
        </select>
    </div>
</div>


                                
                                <div class="col-12">
                                    <div class="sign__group">
                                        <label for="starttime" style="color:white;">Start Time</label>
                                        <input type="time" class="sign__input" name="starttime" id="starttime" placeholder="Enter Start Time">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="sign__group">
                                        <label for="endtime" style="color:white;">End Time</label>
                                        <input type="time" class="sign__input" name="endtime" id="endtime" placeholder="Enter End Time">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="sign__group">
                                        <label for="showdate" style="color:white;">Show Date</label>
                                        <input type="date" class="sign__input" name="date" id="showdate" placeholder="Enter Show Date">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                    <button type="submit" name="btn" class="btn btn-primary">Publish</button>
                    <div class="submitting"></div>
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
