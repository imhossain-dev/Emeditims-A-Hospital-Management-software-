


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

<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row  btn-primary" style="padding: 30px;">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">PRESCRIPTION</h2>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <form action="pat_prescription.php" method="POST">
                            <input type="text" name="email" placeholder="Enter Your Email">
                            <input type="submit" name="input" value-"submit">
                            
                        </form>
                        
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                                <div class="card">  
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0 th1">Patient</th>
                                                        <th class="border-0 th2">Medicine</th>
                                                        <th class="border-0 th3">Durability</th>
                                                        <th class="border-0 th3">Time</th>
                                                        <th class="border-0 th4">Should Take</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
<?php

if(isset($_POST['input'])){
    
    $email=$_POST['email'];
  
  $conn = mysqli_connect("localhost","emeditim_username","password@000","emeditim_users");
  
  $query="select * from `prescription` where patient='$email'";
  $query_run=mysqli_query($conn,$query);

    
     
while($row=mysqli_fetch_array($query_run)){
?>    
      <tr>
        
        <td ><?php echo $row['patient'];?></td>
        <td><?php echo $row['disease']; ?></td>
        <td><?php echo $row['medicine']; ?></td>
        <td><?php echo $row['durability']; ?></td>
        <td><?php echo $row['time']; ?></td>
        <td><?php echo $row['take']; ?></td>
        
    </tr>
 <?php  
}
}
?>
  
                                          </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
          
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    
            <div class="footer" style="position:absolute; width:100%; height:60px; bottom: 0; ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2019 Concept. All rights reserved
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     </div>

  

        </div>
        </div>

    </div>
            
</body>