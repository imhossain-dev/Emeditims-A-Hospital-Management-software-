
<?php 
$con = mysqli_connect("localhost","emeditim_username","password@000","emeditim_users");
 if (isset($_POST['hos_register_submit'])) {
 $hospital_name = $_POST['hospital_name'];
 $password = $_POST['password'];
 $email = $_POST['email'];
 $contact = $_POST['contact'];
 $address = $_POST['address'];
 $emg_contact = $_POST['emg_contact'];
 $query ="insert into hos_register(hospital_name,password,email,contact,address,emg_contact) values('$hospital_name','$password','$email','$contact','$address','$emg_contact')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert ('Hospital Registered') </script>";
    	echo "<script> window.open('reg_hos.php','_self')</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hospital Register</title>
	<link rel="icon" type="text/css" href="icon.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<body>

<div class="loginbox">
		<form class="form-group" action="reg_hos.php" method="post">
					<label>Hospital Name : </label>
					<input type="text" name="first_name" class="form-control"><br>

					
					<label> Password :</label>
					<input type="text" name="password" class="form-control"><br>

					<label>Email :</label>
					<input type="text" name="email" class="form-control"><br>

					<label> Contact Number :</label>
					<input type="text" name="contact" class="form-control"><br>

					<label> Address :</label>
					<input type="text" name="address" class="form-control"><br>
					
					<label> Emergency contact :</label>
					<input type="text" name="emg_contact" class="form-control"><br>
					
					<input type="submit" class="btn btn-primary" name="hos_register_submit" value="Enter Values">

		</form>
</div>


</body>


</head>
</html>