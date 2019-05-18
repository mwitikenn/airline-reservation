<?php
	include ("connect.php");
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
    $surname = $_POST['surname'];
    $phone_number = $_POST['phone_number'];
    $passport_number = $_POST['passport_number'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $email = $_POST['email'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $class = $_POST['class'];
    $date = $_POST['date'];
    $time = $_POST['time'];
	
	$query = "INSERT INTO customer_details (first_name, last_name, surname, email, phone_number, passport_number, age, gender, nationality, username, user_password, departure, destination, class, date, time)".
	"VALUES ('".$first_name ."','" .$last_name . "', '".$surname."', '".$email."',  '".$phone_number."', '".$passport_number."', '".$age."', '".$gender."', '".$nationality."','" . $username."','" . $password. "', '".$departure."',  '".$destination."', '".$class."', '".$date."', '".$time."')";
	
	$result= mysqli_query($conn,$query) or die("Error occured: " .mysqli_error($conn));
	
	if($result){
		
		header("location:bookings.php");
	}
	else{
		echo "Error occured: " +mysqli_error($conn);
	}
	
?>