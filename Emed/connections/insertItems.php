<?php 

    include 'connection.php'; 

    session_start();

    if (!isset($_SESSION['admin'])) {
        header("Location:../index.php");
    }
    $pid='';
    $nam = '';
    $prc= '';
    $cat = '';
    $quan = '';
    $img = '';

    if (isset($_GET['update'])) {
        $pid = $_GET['update'];

        $sql = "SELECT * FROM items WHERE id='$pid'";
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload A Product</title>
    
    <style>
        label{
            text-transform: uppercase;
            text-decoration: underline;
            font-size: 20px;
        }
    </style>

</head>
<body>
    <h2>Enter below:</h2>

    <form action="insertItems.php" name="upload" method="post" enctype="multipart/form-data">

        <label for="prodName">Name of Product:</label> <br>
        <input type="text" name="prodName" id="" value=""> <br>

        <label for="price">Price:</label><br>
        <input type="text" name="price" id="" value=""><br>

        <label for="image">Image of Product:</label><br>
        <input type="file" name="image" id="" value=""><br>

        <label for="quantity">Number of Product:</label><br>
        <input type="text" name="quantity" id="" value=""><br>

        <label for="category">Product Category:</label><br>
        <input type="text" name="category" id="" value=""><br>

        <input type="submit" name="upload" id="" value="Upload">
    
    
    </form>

    <h1>OR</h1>

    <h2>Update for product ID <?php echo $pid; ?> below:</h2>

    <form action="insertItems.php" name="update" method="post" enctype="multipart/form-data">

        <input type="hidden" name="prodID" value="<?php echo $pid; ?>" id="">

        <label for="prodName">Name of Product:</label> <br>
        <input type="text" name="prodName" id="" value="<?php echo $nam; ?>"> <br>

        <label for="price">Price:</label><br>
        <input type="text" name="price" id="" value="<?php echo $prc; ?>"><br>

        <label for="image">Image of Product:</label><br>
        <input type="file" name="image" id="" value="<?php echo $img; ?>"><br>

        <label for="quantity">Number of Product:</label><br>
        <input type="text" name="quantity" id="" value="<?php echo $quan; ?>"><br>

        <label for="category">Product Category:</label><br>
        <input type="text" name="category" id="" value="<?php echo $cat; ?>"><br>

        <input type="submit" name="update" id="" value="Update">
    
    
    </form>

    <?php

    

    if(isset($_POST['upload'])){


        $targetFilePath = "../images/uploads/" . basename($_FILES['image']['name']);
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        $name = $_POST['prodName'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $category = $_POST['category'];
        $image = $_FILES['image']['name'];

        $sql= "INSERT INTO items (itemName, price, quantity, category, image) VALUES('$name','$price','$quantity','$category','$image')";
        $result = mysqli_query($conn, $sql);

    }

    $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){

            if($result){
                echo "New record created successfully";
                header("Location: ../dashboard.php");
            }
            else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        // Upload file to server
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            echo "Uploaded file successfully";
             
        }
        else{
            echo "Sorry, there was an error uploading your file.";
        }
    }else{
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.";
    }

    if (isset($_POST['update'])) {
        $id= $_POST['prodID'];
        $targetFilePath = "../images/uploads/" . basename($_FILES['image']['name']);
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        $name = $_POST['prodName'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $category = $_POST['category'];
        $image = $_FILES['image']['name'];
        

        $sql = "UPDATE items SET itemName = '$name', price = '$price', quantity = '$quantity', category = '$category', image = '$image' WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

        if ($result) {
            echo "Updated Successfully";
            header("Location: ../dashboard.php");
        }else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
        }

    }
?>

</body>
</html>