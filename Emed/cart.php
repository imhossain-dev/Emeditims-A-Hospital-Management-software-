<?php
    include 'header.php';
    include 'connections/connection.php';
    //session_start();

    if (isset($_SESSION['email'])) {
        $customer = $_SESSION['email'];
        $sql = "SELECT id FROM users WHERE email='$customer'";
        $result = mysqli_query($conn,$sql);
        $user= mysqli_fetch_assoc($result);
        $uid= $user['id'];

    }else {
        header("Location:login.php");
    }

    if (isset($_GET['cart'])) {
        $cid= $_GET['cart'];

        $sql = "SELECT * FROM items WHERE id='$cid'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){

            while ($row = mysqli_fetch_assoc($result)) {
                $nam = $row['itemName'];
                $prc= $row['price'];
                $cat = $row['category'];
                $quan = $row['quantity'];
                $img = $row['image'];
        
            }
        }
    
    }
?>

    <h2>You have chosen the following item:</h2>

    <h3>Product Name : <?php echo $nam; ?>, Price : <?php echo $prc; ?></h3>
    <?php
    if ($quan<1) {
        echo "<h2>Sorry, Product is out of stock!<h2>";
    }else {
        
    ?>
    
    <form name="cartForm" action="cart.php" method="post">

    <input type="hidden" name="prodID" id="" value="<?php echo $cid; ?>">

    <h3 style="display: inline;">Select quantity :</h3>
    <input type="text" name="quant" id="" value="1" placeholder="Number of items..">

    <input type="hidden" name="userID" id="" value="<?php echo $uid; ?>">
    
    <input type="submit" name="confirm" id="" value= "CONFIRM ORDER">
    
    </form>
    <?php
    }

    if (isset($_POST['confirm'])) {
        
        $user=$_POST['userID'];
        $prd = $_POST['prodID'];
        $quant = (int)$_POST['quant'];
        $bill = $quant;

        $sql = "INSERT INTO orders (pid, uid, quantity, bill) VALUES('$prd','$user','$quant','$bill')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Order taken successfully!";
            header("Location:index.php");
        } else {
            echo "Error" .$sql. " " .$mysqli_error($conn);
        }
        


    }
    
    include 'footer.php';
?>