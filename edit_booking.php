
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">


	<head>
		<title>Kenya airways</title>
		<script type="text/javascript" src="validate.js"></script>
		<link href="style.css" rel="stylesheet" media="screen">	
				
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
                          >
						</ul>
					</nav>
				</div>
			</div>
		</section>
        
		<!-- main area -->
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">
			
				<div class="clearfix main_content floatleft">
				
					
					<div class="clearfix content">
						<div class="content_title"><h2>Personal Info</h2></div>
						
						<div class="clearfix main_content_container">
<?php
include ("connect.php");

 $id = $_REQUEST['customer_id'];

    $query="SELECT * FROM customer_details WHERE customer_id ='".$id."'";
    $result = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($result);
    $first_name= $row['first_name'];
    $last_name= $row['last_name'];
    $surname = $row['surname'];
    $phone_number = $row['phone_number'];
    $passport_number = $row['passport_number'];
    $age = $row['age'];
    $gender = $row['Gender'];
    $nationality = $row['nationality'];
    $email = $row['email'];
	$username = $row['username'];
	$password = md5($row['user_password']);
    $departure = $row['departure'];
    $destination = $row['destination'];
    $class = $row['class'];
    $date = $row['date'];
    $time = $row['time'];
	
?>


	
    	<form name="myForm" action="update_booking.php" onSubmit="return validateForm()" method="POST">
        	<input type="hidden" name="update_id" value="<?php echo $id;?>"/>
                                    First Name: <input type="text" name="first_name" /><br ><br>
                                    Last Name: <input type="text" name="last_name" /><br ><br>
                                    Surname: <input type="text" name="surname" /><br ><br>
                                    Email Address: <input type="text" name="email" /><br ><br>
                                    Gender: <input type="radio" name="gender" value="male" checked="checked">Male</input>
                                            <input type="radio" name="gender" value="female">   Female</input><br ><br>
                                    Age: <input type="radio" name="age" value="under_18" checked="checked">Under 18</input> 
                                         <input type="radio" name="age" value="over_18">    Over 18</input><br><br>
                                    Nationality: <select name="nationality">
                                                      <option value="kenyan">Kenyan</option>
                                                      <option value="Ugandan">Ugandan</option>
                                                      <option value="Tanzanian">Tanzananian</option>
                                                      <option value="Rwanda">Rwanda</option>
                                                    </select> <br><br>
                                    Phone Number: <input type="number" name="phone_number" /><br ><br>
                                    Passport number: <input type="number" name="passport_number" /><br ><br>
                                    Username : <input type="text" name="username" /><br ><br>
                                    Password : <input type="password" name="password" /><br ><br>
                        
                        <div class="content_title"><h2>Flight Info</h2></div>
                                    
                                    Departure: <select name="departure">
                                                      <option value="nairobi">Nairobi</option>
                                                      <option value="kampala">Kampala</option>
                                                      <option value="arusha">Arusha</option>
                                                      <option value="bujumbura">Bujumbura</option>
                                                    </select> <br><br>
                                    Destination: <select name="destination">
                                                      <option value="nairobi">Nairobi</option>
                                                      <option value="kampala">Kampala</option>
                                                      <option value="arusha">Arusha</option>
                                                      <option value="bujumbura">Bujumbura</option>
                                                    </select> <br><br>
                                    Class: <input type="radio" name="class" value="economy" checked="checked">Economy</input>
                                            <input type="radio" name="class" value="primier">Primier</input><br ><br>
                                    Date of travel: <input type="date" name="date" value="date"</input>
                                    Time of travel: <input type="time" name="time" value="time"</input><br><br>
                                    <input type="submit" value="update details" name="" />
            </form>
            <br> <br>
           
	                 
                                    
						</div>
					</div>
					
				</div>

				<div class="clearfix sidebar_container floatright">
				
					<div class="clearfix advert">
                        <h2>Click the link and trade in our shares</h2>
						<a href="https://live.mystocks.co.ke/stock=KQ"><p>Kenya airways. the pride of Africa</p></a><br><br>
					</div>
                    
					<div class="clearfix  single_sidebar">
						
							 <h2>Buy goods online and have them delivered to you wherever you are now.</h2>
                                <ul>
                                    <li class="cat-item"><a href="https://www.jumia.co.ke/?nopopup=true&wt_s1=9527774409_83432362209&wt_sk1=Exact_9527774409_jumia+kenya&gclid=Cj0KEQjw7-K7BRCkkIH3t_WwoskBEiQAD8oY3rvE_YVv2Yd9ud4ChjTcIwo7EHx2_LNIEZjBZsLzErwaAuGa8P8HAQ">Amazing offers at Jumia!!</a>(12)</li>
                                    <li class="cat-item"><a href="http://www.kilimall.co.ke/?gclid=Cj0KEQjw7-K7BRCkkIH3t_WwoskBEiQAD8oY3ps-W_pOPE6xgCaB6ohSPB8QLL0LuC0EBQzof3O9iGgaApFz8P8HAQ">Shop at Kilimall. Shop now!! </a>(12)</li>
                                    <li class="cat-item"><a href="http://www.avechi.com/">Affordable classy stuff at avechi!!</a>(12)</li>
                                    <li class="cat-item"><a href="">Category Name </a>(12)</li>
                                    <li class="cat-item"><a href="">Category Name </a>(12)</li>
                                </ul>
						
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



