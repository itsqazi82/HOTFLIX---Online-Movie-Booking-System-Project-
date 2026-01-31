<?php
// include('header.php');
include('connect.php'); // Ensure your database connection is included

// Check if movieID is passed in the URL
if (isset($_GET['bookID'])) {
    $bookID = intval($_GET['bookID']); // Sanitize input

    // Fetch the movie details
    $query = "SELECT * FROM `booking` WHERE `bk_id` = $bookID";
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Movie Ticket</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    /* Main body styling */
/* RESET */
*{
    box-sizing:border-box;
}

/* SCREEN VIEW */
body{
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    background:#0f0f0f;
    font-family:'Segoe UI', Tahoma, sans-serif;
    color:#fff;
}

/* STACK */
.main-container{
    display:flex;
    flex-direction:column;
    align-items:center;
    gap:25px;
}

/* TICKET */
.ticket-container{
    width:700px;
    background:linear-gradient(90deg, #c81414ff 65%, #fafafa 65%);
    border-radius:18px;
    display:flex;
    padding:25px;
    position:relative;
    box-shadow:0 15px 30px rgba(0,0,0,0.6);
}

/* CUT CIRCLES */
.ticket-container::before,
.ticket-container::after{
    content:'';
    position:absolute;
    width:26px;
    height:26px;
    background:#0f0f0f;
    border-radius:50%;
}

.ticket-container::before{
    left:15px;
    top:-13px;
}
.ticket-container::after{
    right:15px;
    bottom:-13px;
}

/* DETAILS */
.ticket-details{
    flex:1;
    padding-right:25px;
}

.ticket-details h2{
    margin:6px 0 12px;
    color:#ffd700;
    letter-spacing:1px;
    font-size:1.9rem;
}

.ticket-details p{
    margin:6px 0;
    font-size:1.05rem;
}

.ticket-price{
    margin-top:12px;
    font-size:1.4rem;
    font-weight:700;
    background:linear-gradient(145deg,#ffd700,#ffb300);
    color:#000;
    padding:8px 22px;
    border-radius:10px;
    display:inline-block;
}

/* IMAGE */
.ticket-image{
    width:220px;
    display:flex;
    justify-content:center;
    align-items:center;
}

.ticket-image img{
    width:100%;
    border-radius:12px;
    border:3px solid rgba(255,215,0,0.7);
}

/* BUTTONS */
.print-button-container{
    display:flex;
    gap:15px;
}

.print-btn{
    padding:12px 30px;
    font-size:1.05rem;
    font-weight:600;
    background:linear-gradient(145deg,#ffd700,#ffb300);
    color:#000;
    border:none;
    border-radius:8px;
    cursor:pointer;
    transition:0.3s;
}

.print-btn:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 18px rgba(0,0,0,0.4);
}

/* MOBILE */
@media(max-width:768px){
    .ticket-container{
        flex-direction:column;
        width:90%;
        text-align:center;
    }

    .ticket-details{
        padding-right:0;
    }

    .ticket-image{
        width:150px;
        margin:auto;
    }
}

/* ================= PRINT MODE ================= */
@media print{
    body{
                background-color: #000;


    }

    .main-container{
        gap:0;
        background-color: #000;

    }

    .ticket-container{
        width:100%;
        box-shadow:none;
        /* border:1px dashed #000; */
        background:#fff;
        color:#000;
        background:linear-gradient(90deg, #c81414ff 65%, #fafafa 65%);
        /* background-color: #000; */
    }

    .ticket-details h2{
        color:#ffd700;
    }
    

    .ticket-price{
        /* background:#eee; */
        color: #000;
    }

    .ticket-image img{
        border:1px solid #000;
    }

    .print-button-container{
        display:none;
    }
}


    </style>
</head>
<body>
    <div class="main-container">
    <div class="ticket-container">
        <!-- Ticket Details -->
        <div class="ticket-details">
            <br>
            <strong>Movie Name:</strong><h2><?php echo $movie['bk_moviename']; ?></h2>
            <p style="color:white;"><strong>User Name:</strong><?php echo $movie['bk_person_name']; ?></p>
            <p><strong>Seat No:</strong> <?php echo $movie['bk_seat_no']; ?></p>
            <p><strong>Date:</strong> <?php echo $movie['bk_mvdate']; ?></p>
            <p><strong>Time:</strong> <?php echo $movie['bk_show_time']; ?></p>
            <p class="ticket-price"><?php echo 1200 * $movie['bk_num_people'] . " PKR"; ?></p>
        </div>
        <!-- Movie Image -->
<?php 
include('connect.php');
// echo $_SESSION['image'];
session_start();
$select = "SELECT * FROM `booking";
$result = mysqli_query($con, $query);

?>

        <div class="ticket-image">
            <!-- <img src="path/to/movie-image.jpg" alt="Movie Image"> -->
            <img src="../main/img/<?php echo $_SESSION['image']; ?>" alt="Movie Image">
        </div>

    </div>

    <!-- Print Button -->
     <br>
     <!-- Print Button -->
<!-- Print Button -->
<div class="print-button-container">
    <button class="print-btn" onclick="window.print()">Print Ticket</button>
    <br>
    <a href="index.php"><button class="print-btn">Go to Home</button></a>
</div>
</div>


    <!-- <button class="print-btn" onclick="window.print()">Print Ticket</button>
      -->
</body>
</html>
