<?php

	session_start();
	if(!isset($_SESSION['username'])){
		header("location:login.php");
	}
?>

<?php
	
	include ("connect.php");

	$query = "SELECT * FROM customer_details ";
	$result = mysqli_query($conn,$query);
	if(mysqli_num_fields($result) > 0){
		
?>

<!DOCTYPE >
<html>


	<head>
		<title>Kenya airways</title>
		<script type="text/javascript" src="validate.js"></script>
        <script type="text/javascript" src="confirmcancel.js"></script>
		<link href="viewcss.css" rel="stylesheet" media="screen">	
				
	</head>

	<body>
	
        <!--header area-->
		<section id="header_area">
			<div class="wrapper header">
				<div class="clearfix header_top">
					<div class="clearfix logo floatleft">
						<a href=""><h1><span>KENYA AIRWAYS</span> The pride of Africa</h1></a>
					</div>
					<div class="clearfix search floatright">
						<form>
							<input type="text" placeholder="Search"/>
							<input type="submit" />
						</form>
					</div>
				</div>
				<div class="header_bottom">
					<nav>
						<ul id="nav">
							<li><a href="kenyaairways_home.html"><b>Home</b></a></li>
							
							<li><a href="bookings.php"><b>Bookings</b></a></li>
                            
						</ul>
					</nav>
				</div>
			</div>
		</section>
        
		<!-- main area -->
		<section id="content_area">
			<div class="clearfix  main_content_area">
			
				<div class="clearfix main_content floatleft">
				
					
					<div class="clearfix content">
						<div class="content_title"><h2>Personal Info</h2></div>
						
						<div class="clearfix main_content_container">

	<a href="logout.php">Logout</a>



	<table width="40%" border='1'>
    <tr>
    	<td>First name</td>
        <td>Last name</td>
        <td>Surname</td>
        <td>phone number</td>
        <td>passport number</td>
        <td>gender</td>
        <td>nationality</td>
        <td>email</td>
        <td>username</td>
        <td>Departure</td>
        <td>Destination</td>
        <td>Class</td>
        <td>Date</td>
        <td>Time</td>
        <td>Edit</td>
        <td>Delete</td>
     </tr>
<?php
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";

			echo "<td>" . $row["first_name"] . "</td>";
			echo "<td>" . $row["last_name"] . "</td>";
			echo "<td>" . $row['surname'] . "</td>";
            echo "<td>" . $row['phone_number'] . "</td>";
            echo "<td>" . $row['passport_number'] . "</td>";
            echo "<td>" . $row['Gender'] . "</td>";
            echo "<td>" . $row['nationality']. "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row['departure'] . "</td>";
            echo "<td>" . $row['destination'] . "</td>";
            echo "<td>" . $row['class'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
			echo '<td><a href="edit_booking.php?customer_id=' . $row['customer_id'] . '">Edit</a></td>';
			echo '<td><a href="cancel_booking.php?customer_id=' . $row['customer_id'] . ' " onclick="return confirmCancel_id();">Delete</a></td>';
		echo "</tr>";
	}
	echo "</table>";
	}
	else{
		echo "No records were found!";
	}
?>
                                    
                                    
						</div>
					</div>
					
				</div>

			</div>
		</section>
		
<!--footer area-->

		<section id="footer_bottom_area">
			<div class="clearfix wrapper footer_bottom">
				<div class="clearfix copyright floatleft">
					<p> Copyright &copy; All rights reserved by <span>kenn.com</span></p>
				</div>

			</div>
			</div>
		</section>

		

	</body>
</html>





