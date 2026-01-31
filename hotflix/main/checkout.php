<?php
include('header.php');
session_start();
// include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Booking Details</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #121212;
    color: #e0e0e0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
    text-align: center;
}

.header1 {
    margin-bottom: 20px;
    font-size: 2.5em;
    color: #f5a623;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #1c1c1c;
    border-radius: 10px;
    overflow: hidden;
}

th, td {
    padding: 12px 20px;
    text-align: center;
    border-bottom: 1px solid #333;
    width:150px;
}

th {
    background-color: #333;
    color: #fff;
    font-size: 1.2em;
}

td {
    background-color: #2a2a2a;
    color: #ccc;
}

/* .cell_width{
    
} */

tr:nth-child(even) {
    background-color: #3a3a3a;
}

tr:hover {
    background-color: #555;
}

@media screen and (max-width: 768px) {
    table {
        font-size: 0.9em;
    }
}

    </style>
</head>
<body>
    <div class="container">
        <form method="POST">
        <h1 class="header1">Movie Booking Details</h1>
        <!-- Checkout Button -->
        <div class="col-12">
            <button type="submit" name="btn" class="sign__btn sign__btn--small" style="margin-left:30rem;margin-right:20rem;margin-bottom:2rem;width:15rem;">Checkout Details</button>
        </div>
         <?php
         include("connect.php");
         
         if(isset($_POST['btn'])){
            $select="SELECT * FROM `booking` ORDER BY `bk_id` DESC LIMIT 1";
            $run=mysqli_query($con,$select);
            while($data=mysqli_fetch_assoc($run)){
                ?>
                
        <table>
            <thead>
                <tr>
                    <th>Movie Name</th>
                    <th>Person Name</th>
                    <th>No of Tickets</th>
                    <th>Movie Time</th>
                    <th>Movie Date</th>
                    <th>Screen Type</th>
                    <th>Selected Cinema</th>
                    <th>Payment Method</th>
                    <th>Seat No</th>
                    <th>Ticket Price</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $data['bk_moviename']?></td>
                    <td><?php echo $data['bk_person_name']?></td>
                    <td><?php echo $data['bk_num_people']?></td>
                    <td><?php echo $data['bk_show_time']?></td>
                    <td><?php echo $data['bk_mvdate']?></td>
                    <td><?php echo $data['bk_screen_type']?></td>
                    <td><?php echo $data['bk_cinema_select']?></td>
                    <td><?php echo $data['bk_Payment_Method']?></td>
                    <td><?php echo $data['bk_seat_no']?></td>
                    <td><?php echo 1200*$data['bk_num_people']." PKR"?></td>
                    <td><img src="../main/img/<?php echo $_SESSION['image']; ?>" alt="Movie Image" style="width: 100px; height: auto;"></td>


                </tr>
                <!-- Add more rows here as needed -->
            </tbody>
        </table>
        <!-- Print Ticket -->
        <div class="col-12">
        
<!-- 
        <div class="ticket" style="text-align: center; 
										color:rgb(255, 255, 255);
										padding: 20px; 
										background:rgb(87, 87, 87); 
										border-radius: 10px; 
										box-shadow: 0 4px 8px rgba(255, 255, 255, 0.39); 
										width: 300px;
										margin: 20px auto;">
		<a href="print_ticket.php?bookID=<?php echo $data['bk_id']; ?>" style="color:rgb(255, 255, 255);">BOOK TICKET</a>

										</div> -->
                                        
                                    </div>
                                        <div class="ticket" style="
										text-align:center;
										color:#fff;
										padding:20px;
										border-radius:10px;
										width:300px;
										margin:20px auto;
									">
										<a href="print_ticket.php?bookID=<?php echo $data['bk_id']; ?>"
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
        <?php
            }
         }
         ?>
         
</form>
<?php

?>
    </div>
</body>
</html>
