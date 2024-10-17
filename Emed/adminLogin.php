<?php 
    include 'header.php'; 

    //session_start();
    if (isset($_SESSION['admin'])) {
        header("Location:dashboard.php");
    }
?>
    <div class="login-form-wrap">
    <div class="left-section">
    <div class="form">
    <form name="admin" action="adminLogin.php" method="post">

        <input type="text" name="admin" id="" placeholder="Admin Name.." value="">    

        <input type="text" name="email" id="" placeholder="Admin Email.." value="">

        <input type="password" name="password" id="" placeholder="Admin Password.." value="">

        <input type="submit" name="submit" id="" value="Login">

    </form>
    </div>
    </div>
    </div>

    <?php
        include 'connections/connection.php';

        if (isset($_POST['submit'])) {
            $aname = $_POST['admin'];
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $sql = "SELECT * FROM admins WHERE adminName = '$aname'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result)>0) {
                while ($row= mysqli_fetch_assoc($result)) {
                    if ($aname===$row['adminName']&&$email===$row['email']&&$pass===$row['password']) {
                        $_SESSION['admin']= $aname;
                        $_SESSION['id']= $row['id'];
                        header("Location:dashboard.php");
                    }else {
                        echo "Invalid Credentials.";
                    }
                }
            }
        }

    ?>

</body>
</html>

<?php include 'footer.php' ?>