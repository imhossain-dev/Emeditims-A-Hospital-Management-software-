
<?php
    include 'connection.php';

    $sql = "SELECT * FROM items";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<img src='../images/uploads/".$row['image']." 'style='width:300px;height:300px;'><br>" .$row['itemName']. "<br>" . $row['price']."<br>";
            if (isset($_SESSION['admin'])) {
                ?>
                <a href="insertItems.php?update=<?php echo $row['id']; ?>">Update item</a> <br>
                <a href="updateItems.php?delete=<?php echo $row['id']; ?>">Delete item</a> <br>
                
                <?php    
            }
            
        }
    }else{
        echo "No items to show";
    }
    
?>
        