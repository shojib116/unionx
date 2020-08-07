<?php
	session_name('unionx');
	session_start();
	include_once 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>UNIONx</title><link rel="icon" href="img/UnionX-icon.png" type="image/icon type">
		<script src="js/jquery-3.5.1.min.js"></script>
		<link rel   ="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
	  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
		<script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/main.js"></script>
		<script src="https://use.fontawesome.com/b030b67108.js"></script>
		<script>

		$(document).ready(function() {
			$(window).scroll(function() {
				if($(window).scrollTop() >= $("#sticky-nav").position().top) {
					$("#sticky-nav").addClass("sticky");
					$(".sticky-nav-banner").css("visibility", "visible");
				} else{
					$("#sticky-nav").removeClass("sticky");
					$(".sticky-nav-banner").css("visibility", "hidden");
				}
			});

			$("#a1").click(function(e) {
				e.preventDefault();
			});
		});


	</script>

	</head>



<body>
	<!--header area starts-->
	<header>
		<div class="header-area">

			<!-- logo -->
			<div class="logo">
				<a href="index.php">
					<img src="img/UnionX-logo-black.png" alt="UNIONX">
				</a>
			</div>
			<!--dropdown menu-->
			<div class="dropmenu">
				<button class="drpbtn" ><a href="#">Explore <i class="fa fa-caret-down"></i></a></button>
					<div class="dropmenu-content">
						<a href="#">Science & Technology</a>
						<a href="#">Engineering & Technology</a>
						<a href="#">Business & Managemnet</a>
						<a href="#">Humanities & Arts</a>
						<a href="#">Laws & Logics</a>
					</div>
			</div>

			<!--search bar-->
			<div class="wrap">
				<div class="search">
					<input type="text" class="searchTerm" placeholder="Find what you want to learn...">
					<button type="submit" class="searchButton">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</div>
			<!--login and sign up section-->
			<div class="header-right">
				<!--Checking session commencement-->
				<?php
					if (!isset($_SESSION['unionxid'])) {

						/*Log in button*/
						echo "<button onclick='document.getElementById(&quot;id01&quot;).style.display=&quot;block&quot;' class='loginbutton'>Login</button>";
						/*login form*/
						echo "<div id='id01' class='modal'>

							<form class='modal-content animate' action='includes/login.inc.php' method='POST'>
								<div class='container'>
									<h2>Log In</h2>
									<div id='errorText' style='text-align:center;padding: 0;'></div>";
									if (isset($_GET['loginfield'])) {
										if ($_GET['loginfield'] == 'empty') {
											echo "<script>document.getElementById('id01').style.display='block'</script>";
											echo "<p class='error'>All fields must be filled!</p>";
										}
									}

									if (isset($_GET['account'])) {
										if ($_GET['account'] == 'doesNotexist') {
											echo "<script>document.getElementById('id01').style.display='block'</script>";
											echo "<p class='error'>Account does not exist! Create a new one.<p>";
										}
									}

									if (isset($_GET['account'])) {
										if ($_GET['account'] == 'exists') {
											echo "<script>document.getElementById('id01').style.display='block'</script>";
											echo "<p class='error'>Accound already exists! Log In.<p>";
										}
									}

									if (isset($_GET['pass'])) {
										if ($_GET['pass'] == 'wrong') {
											echo "<script>document.getElementById('id01').style.display='block'</script>";
											echo "<p class='error'>Wrong password! Try again.<p>";
										}
									}

									if (isset($_GET['signup'])) {
										if ($_GET['signup'] == 'success') {
											echo "<p class='success'>Account created. Log In.<p>";
										}
									}

									echo "<label for='email'><b>Email</b></label>
									<input type='text' placeholder='Enter Email' name='email'>
			      					<label for='psw'><b>Password</b></label>
			     	 				<input type='password' placeholder='Enter Password' name='pwd'>

			      					<button type='submit' name='submitLogin'>Login</button>
			   						<label>
			   	 						<input type='checkbox' checked='checked' name='remember'> Remember me
			      					</label>
								</div>

								<div class='container' style='background-color:#f1f1f1'>
									<button onclick='document.getElementById(&quot;id01&quot;).style.display=&quot;none&quot;' type='button' class='cancelbtn'>Cancel</button>
									<span class='psw'><a href='#'>Forget password?</a></span>
								</div>
							</form>
						</div>";

							/*sign up button*/
						echo "<button onclick='document.getElementById(&quot;id02&quot;).style.display=&quot;block&quot;' class='signupbutton'>Join for free</button>";
							/*signup form*/
						echo "<div id='id02' class='modal'>
						 	<form class='modal-content animate' action='includes/signup.inc.php' method='POST'>
						    	<div class='container'>
						      		<h2>Sign Up</h2>";
						      		if (isset($_GET['signupfield'])) {
										if ($_GET['signupfield'] == 'empty') {
											echo "<script>document.getElementById('id02').style.display='block'</script>";
											echo "<p class='error'>All fields must be filled!</p>";
										}
									}

									if (isset($_GET['name'])) {
										if ($_GET['name'] == 'invalidchar') {
											echo "<script>document.getElementById('id02').style.display='block'</script>";
											echo "<p class='error'>Name contains invalid characters! Try again.<p>";
										}
									}

									if (isset($_GET['email'])) {
										if ($_GET['email'] == 'invalidemail') {
											echo "<script>document.getElementById('id02').style.display='block'</script>";
											echo "<p class='error'>Given email is invalid. Try again with a vaild email.<p>";
										}
									}

									if (isset($_GET['signup'])) {
										if ($_GET['signup'] == 'success') {
											echo "<script>document.getElementById('id01').style.display='block'</script>";
										}
									}

						      		echo "<p>Please fill in this form to create an account.</p>
						      		<hr>

						      		<label for='name'><b>Full Name</b></label>
							      	<input type='text' placeholder='Enter full name' name='name'>

						      		<label for='email'><b>Email</b></label>
							      	<input type='text' placeholder='Enter Email' name='email'>

							      	<label for='psw'><b>Password</b></label>
							      	<input type='password' id='password' placeholder='Enter Password' name='pwd'>

							      	<label for='psw-repeat'><b>Repeat Password</b></label>
							      	<input type='password' id='confirm_password' placeholder='Repeat Password' name='pwd-repeat'>

						      		<p>By creating an account you agree to our <a href='#' style='color:dodgerblue'>Terms & Privacy</a>.</p>

						      		<div class='clearfix'>
						        		<button type='button' onclick='document.getElementById(&quot;id02&quot;).style.display=&quot;none&quot;' class='cancelbtn'>Cancel</button>
						        		<button type='submit' class='signupbtn' name='submitSignup'>Sign Up</button>
						      		</div>
						    	</div>
						  	</form>
						</div>";
					} else {
						$id = $_SESSION['unionxid'];

						$user = new UserView();
						$result = $user->getShortUserDetails($id);

						$ppLocation = $result['ppLocation'];
						$name = $result['name'];
						echo "<div class='profile-drodown'>";
							echo "<button id='dropbtn' type='button' class='profile-dropdownbtn'>";
							echo "<img src='".$ppLocation."'>";
							echo "<p>".$name."<i class='fa fa-caret-down'></i></p>";
							echo "</button>";
							echo "<div id='myDropdown' class='dropdown-content' style='display: none;'>";
								echo "<a href='#'>Profile</a>";
								echo "<a href='#'>Purchases</a>";
								echo "<a href='#'>Settings</a>";
								echo "<a href='#'>Accomplishments</a>";
								echo "<a href='#'>Help Center</a>";
								echo "<form action='includes/logout.inc.php' method='POST'>
									<button type='submit' name='submitLogout' class='logoutbtn'>Logout</button>
									</form>";
							echo "</div>";
						echo "</div>";


					}
				?>
			</div>
		</div>
	</header>
