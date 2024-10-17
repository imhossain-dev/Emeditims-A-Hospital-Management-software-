<?php

session_start();

if(isset($_POST['submit'])){

  $conn = mysqli_connect("localhost","emeditim_username","password@000","emeditim_users");

     $uid = mysqli_real_escape_string($conn,$_POST['uid']);
      $pwd = mysqli_real_escape_string($conn,$_POST['pwd']); 
      
      $sql = "SELECT * FROM pat_register WHERE contact = '$uid' and password = '$pwd'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row

      if(empty($uid) || empty($pwd) ){
         echo "<script> alert ('Fillup All the Fields') </script>";
         echo "<script>window.open('login.html','_self')</script>";
      exit();
      }
      else{

         if($count == 1) {
            
            $_SESSION['uid']=$uid;

            echo "<script> alert ('Login Success') </script>";
            echo "<script>window.open('dashboard_pat.php','_self')</script>";
            exit();
         }else{
            echo "<script> alert ('Invalid Username and password') </script>";
            echo "<script>window.open('pat_login.php','_self')</script>";
               exit();
            }

      }
    
      
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script src="https://kit.fontawesome.com/b5e3558374.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Poppins:400,700&display=swap" rel="stylesheet">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="pat_login.php" method="post" class="form-box">
					<span class="login100-form-title">
						<h1>Patient Login</h1>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="uid" placeholder="Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pwd" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit" value="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<h3><span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a></h3>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="reg_pat.php">
						<h4>	Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</h4></a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>