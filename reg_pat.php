
<?php 


$con = mysqli_connect("localhost","emeditim_username","password@000","emeditim_users");

 if (isset($_POST['pat_register_submit'])) {

 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name']; 
 $password = $_POST['password'];
 $email = $_POST['email'];
 $contact = $_POST['contact'];
 $gender = $_POST['gender'];
 $age = $_POST['age'];
 $weight = $_POST['weight'];
 $emg_contact = $_POST['emg_contact'];

 $query ="insert into pat_register(first_name,last_name,password,email,contact,gender,age,weight,emg_contact) values('$first_name','$last_name','$password','$email','$contact','$gender','$age','$weight','$emg_contact')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert ('Patient Registered') </script>";
    	echo "<script> window.open('reg_pat.php','_self')</script>";
	}


 }


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Paitent Register</title>
	<link rel="icon" type="text/css" href="icon.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<body>
	    <h1 class="heading2">eMediTimes</h1>

<div class="loginbox">
		<form class="form-group" action="reg_pat.php" method="post">
					<label>First Name : </label>
					<input type="text" name="first_name" class="form-control"><br>

					<label>Last Name :</label>
					<input type="text" name="last_name" class="form-control"><br>
					
					<label> Password :</label>
					<input type="text" name="password" class="form-control"><br>

					<label>Email :</label>
					<input type="text" name="email" class="form-control"><br>

					<label> Contact Number :</label>
					<input type="text" name="contact" class="form-control"><br>
					<label>Gender :</label>
					<select name ="gender" class="form-control">
						<option value="Male"> Male</option>
						<option value="Female">Female</option>
					</select><br>
					<label> Age :</label>
					<input type="text" name="age" class="form-control"><br>
					<label> Weight :</label>
					<input type="text" name="weight" class="form-control"><br>
					<label> Emergency contact :</label>
					<input type="text" name="emg_contact" class="form-control"><br>
					<input type="submit" class="btn btn-primary" name="pat_register_submit" value="Enter Values">				
		</form>
</div>


</body>


</head>
</html>