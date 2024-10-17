<?php

    include 'header.php';
    
    if(isset($_SESSION['admin'])){
    echo "Welcome " . $_SESSION['admin'];
    }else {
        header("Location:adminLogin.php");
    }
?>
 
<h2>
    <ul class="dashboard">
        <li class="dashlist"><a href="connections/insertItems.php">Add Items to Website</a></li>
        <li class="dashlist"><a href="index.php">update products</a></li>
        <li class="dashlist"><a href="#">manage users</a></li>
        <li class="dashlist"><a href="adminProf.php?id=<?php echo $_SESSION['id']; ?>">view or edit your profile</a></li>
        <li class="dashlist"><a href="logout.php">Logout</a></li>
    </ul>
</h2> 

<?php

    include 'footer.php';
?>