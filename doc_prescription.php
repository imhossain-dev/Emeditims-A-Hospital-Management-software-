<?php 

$conn = mysqli_connect("localhost","emeditim_username","password@000","emeditim_users");

$query = "SELECT * FROM pat_register";
$result =mysqli_query($conn, $query);

 if (isset($_POST['submit'])) {

 $patient = $_POST['patient'];
 $disease = $_POST['disease'];
 $medicine = $_POST['medicine']; 
 $durability = $_POST['durability'];
 $daily = $_POST['daily'];
 $take = $_POST['take'];

 $query1 ="insert into prescription(patient,disease,medicine,durability,daily,take) values('$patient','$disease','$medicine','$durability','$daily','$take')";
	$resultt=mysqli_query($conn,$query1);
	if($resultt)
	{
		echo "<script> alert ('Prescription Submitted') </script>";
    	echo "<script> window.open('doc_prescription.php','_self')</script>";
	}


 }

?>


<link href="style1.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://kit.fontawesome.com/b5e3558374.js" crossorigin="anonymous"></script>
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="doc_prescription.php"><i class="fas fa-prescription-bottle"></i><span class="hidden-xs hidden-sm">Prescription</span></a></li>
                        <li><a href="#"><i class="fas fa-people-arrows"></i><span class="hidden-xs hidden-sm">Add Dependent</span></a></li>
                        <li><a href="#"><i class="fas fa-user-clock"></i><span class="hidden-xs hidden-sm">Add Reminder</span></a></li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add Appointment</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Update Profile</span></a></li>
                    </ul>
                </div>
            </div>

<div class="col-md-10" id="pres" style="background-color: grey; ">
   

   <div class="card">
            
            <a href="" class="list-group-item active" style="background-color: rgb(32,57,53)"> <h3 class="alignmiddle container"><i class="fa fa-address-card" aria-hidden="true"></i>  Add Prescription  </h3></a>
            <div class="card-body">

                <form class="form-group" action="doc_prescription.php" method="post">
                    <label>Select Patient</label>
                    
                    <select name="patient" value="<?php while ($row1=mysqli_fetch_array($result)):;?> <?php echo $row1[3]; ?>" class="form-control">
                        <option><?php echo $row1[3]; ?></option>
                            <?php endwhile; ?>
                    </select><br>
                    
                    <label>Disease Description</label>
                    <input type="text" name="disease" class="form-control"><br>

                    <label>Medicine</label>
                    <input type="text" name="medicine" class="form-control"><br>
                    
                    <label>Durability :</label>
                    <select name ="durability" class="form-control">
                        <option value="One Week"> One Week</option>
                        <option value="Two Week">Two Week</option>
                        <option value="Three Week">Three Week</option>
                    </select><br>
                    <label> Daily :</label>
                    <select name ="daily" class="form-control">
                        <option value="Morning"> Morning</option>
                        <option value="Afternoon">Afternoon</option>
                        <option value="Night">Night</option>
                        <option value="Morning and Night">Morning and Night</option>
                        <option value="Afternoon and Night">Afternoon and Night</option>
                        <option value="Morning And Afternoon">Morning And Afternoon</option>
                        </select><br>
                    <label>Medicine Should Taken</label>
                    <select name ="take" class="form-control">
                        <option value="After Food">After Food</option>
                        <option value="Before Food">Before Food</option>
                    </select><br>
                    </select> <br>
                    <input type="submit" class="btn btn-primary" name="submit" value="Enter Values">
                    
                </form>
            </div>
        </div>  

        </div>
        </div>

    </div>
            
</body>