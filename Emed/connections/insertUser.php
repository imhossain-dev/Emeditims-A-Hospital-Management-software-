<?php 

    include 'connection.php'; 
    
    if (isset($_POST['register'])) {

        $uname = $_POST['Username'];
        $pswd = $_POST['Password'];
        $name = $_POST['Name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];

        $sql = "SELECT email FROM users";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['email']===$email) {

                header("Location:register.php");

                echo "<h2 style='color:red;'>Email already taken</h2>";
                
                }else{
                  
            $sql = "INSERT INTO users (name, username, password, email, contact) VALUES ('$name','$uname','$pswd','$email','$contact')";
            $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location:login.php");
            echo "Registration successful<br>Login with your Email and Password";
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
                }
            }
        }else{
            $sql = "INSERT INTO users (name, username, password, email, contact) VALUES ('$name','$uname','$pswd','$email','$contact')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location:login.php");
                echo "Registration successful<br>Login with your Email and Password";
            }else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        }
        
    
?>