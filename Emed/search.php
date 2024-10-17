<?php
    
    include 'header.php';
    include 'connections/connection.php';
    

    if (isset($_POST['search'])) {

        $value= $_POST['search'];
        $sql = "SELECT * FROM items WHERE itemName LIKE '%".$value."%' OR category LIKE '%".$value."%'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<img src='images/uploads/".$row['image']." 'style='width:300px;height:300px;'><br>" .$row['itemName']. "<br>" . $row['price']."<br>";
                if (isset($_SESSION['admin'])) {
                    ?>
                    <a href="connections/insertItems.php?update=<?php echo $row['id']; ?>">Update item</a> <br>
                    <a href="connections/updateItems.php?delete=<?php echo $row['id']; ?>">Delete item</a> <br>
                    
                    <?php    
                }
                elseif (isset($_SESSION['email'])) {
                    ?>
                    <a href="cart.php?cart=<?php echo $row['id']; ?>">Add to cart</a> <br>
                    <?php
                }
            }
        }else{
            echo "No items to show";
        }
    }

    include 'footer.php';
?>