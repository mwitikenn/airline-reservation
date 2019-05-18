<?php
	include ("connect.php");
	
	

	$id=$_POST['update_id'];
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
	
	echo $id;
	
	$query = "UPDATE customer_details SET first_name='" .$first_name . "', last_name='".$last_name."',surname='".$surname."',phone_number='".$phone_number."',passport_number='".$passport_number."',age='".$age."',gender='".$gender."',nationality='".$nationality."', email='".$email."', username='".$username."', user_password='".$password."', departure='".$departure."', destination='".$destination."', class='".$class."', date='".$date."', time='".$time."' WHERE customer_id='".$id."'";

	$result= mysqli_query($conn,$query) or die("Error occured: " .mysqli_error($conn));
	
	if($result){
		echo "Details updated <br> ";
		header("Location: viewticket.php");
	}
	else{
		echo "Error occured: " +mysqli_error($conn);
	}

	
