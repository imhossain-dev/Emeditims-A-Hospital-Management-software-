<?php 
$con = mysqli_connect("localhost","emeditim_username","password@000","emeditim_users");
 if (isset($_POST['doc_register_submit'])) {
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name']; 
 $password = $_POST['password'];
 $email = $_POST['email'];
 $contact = $_POST['contact'];
 $gender = $_POST['gender'];
 $age = $_POST['age'];
 $medicaldegree = $_POST['medicaldegree'];
 $emg_contact = $_POST['emg_contact'];
 $query ="insert into doc_register(first_name,last_name,password,email,contact,gender,age,medicaldegree,emg_contact) values('$first_name','$last_name','$password','$email','$contact','$gender','$age','$medicaldegree','$emg_contact')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert ('Doctor Registered') </script>";
    	echo "<script> window.open('reg_doc.php','_self')</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Register</title>
<link rel="icon" type="text/css" href="icon.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<body style="background-color:#95A5A6; ">
<div class="container">
	

  <nav>
  	<ul>
  		<li><a href="index.html">HOME</a></li>
   		<li><a href="contact.html">CONTACT</a></li>
  		
  		<li><a href="login.php">LOGIN</a></li>
      <li><div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Register
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="reg_doc.php">Doctor</a>
    <a class="dropdown-item" href="reg_pat.php">Patient</a>
    <a class="dropdown-item" href="reg_hos.php">Hospital</a>
  </div>
</div></li>
  	</ul>
  </nav>


</div>

<div class="loginbox">
		<form class="form-group" action="reg_doc.php" method="post">
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
					<label>Medical Degree :</label>
					<input type="text" name="medicaldegree" class="form-control"><br>
					<label> Emergency contact :</label>
					<input type="text" name="emg_contact" class="form-control"><br>
					<input type="submit" class="btn btn-primary" name="doc_register_submit" value="Enter Values">

		</form>
</div>


</body>


</head>
</html>