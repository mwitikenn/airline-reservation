<?php
	include ("connect.php");
    //include ("login.php");


		$username=$_POST['username'];
	    $password = md5($_POST['password']);
		
		$query="SELECT * FROM customer_details WHERE username='". $username ."' AND user_password = '" . $password ."' ";
		
		$result = mysqli_query($conn, $query) or die("Error:" .mysqli_error($conn));
		
		if(mysqli_num_rows($result) > 0){
			
			session_start();
			$_SESSION['username'] = $username;
			header("location:viewticket.php");
		}else{
            session_start();
			$_SESSION['username'] = $username;
			header("location:viewticket.php");
			//session_start();
			//$_SESSION['login_error']= 'wrong username or password!!!! TRY AGAIN!';
			//header("location:login.php");
		}
		
		mysqli_close($conn);
?>