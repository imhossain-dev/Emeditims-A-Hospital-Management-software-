<?php

    include 'connection.php';

    if(isset($_GET['delete'])){
        $pid = $_GET['delete'];
        $sql= "DELETE FROM items WHERE id='$pid'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Item Deleted successfully";
            header("Location:../dashboard.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
    }

?>