<!DOCTYPE>
<html>


	<head>
		<title>Kenya airways</title>
		
		<link href="style.css" rel="stylesheet" media="screen">	
				
	</head>

	<body>
	
<?php
	session_start();
		if (isset($_SESSION['login_error'])) {
			echo $_SESSION['login_error'];
			unset($_SESSION['login_error']);
		}
?>
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
		
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">
			
				<div class="clearfix main_content floatleft">
				
					
					<div class="clearfix content">
						<div class="content_title"><h2>Use the username and password you created to login</h2></div>
						
						<div class="clearfix main_content_container">
							
                            <form id="login" action="processlogin.php"  name="loginform" method="post">
                                <fieldset>
                                    <legend>Login</legend>
                                    
                                    Username: <input type="text" name="username" required /><br><br>
                                    Password: <input  name="password" type="password" placeholder="password" required />
                                    <br><br>
                                    <input type="submit" value="login" name="loginbtn" />
                                    </fieldset>
                                    </form>
                           <?php
    print_r($_POST);

    //Or:
    foreach ($_POST as $key => $value)
        echo $key.'='.$value.'<br />';
?>

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
		
		
        
		
		<section id="footer_bottom_area">
			<div class="clearfix wrapper footer_bottom">
				<div class="clearfix copyright floatleft">
					<p> Copyright &copy; All rights reserved by <span>kenn.com</span></p>
				</div>
				
			</div>
		</section>

		

	</body>
</html>