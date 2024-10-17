<?php
  include 'header.php';  

  include 'connections/connection.php';

  //session_start();

  if(isset($_SESSION['email'])){
    header("Location:index.php");
  }

  if (isset($_POST['login'])) {
    $inputEmail = $_POST['email'];
    $inputPass = $_POST['pswd'];

    $sql = "SELECT password FROM users WHERE email='$inputEmail'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        if($row["password"]===$inputPass){
          echo "login successful.";
          
          $_SESSION['email']= $inputEmail;
          header("Location:index.php");
        }else{
          
          echo "login failed";
        }
      }
    } else {
      echo "User ".$inputEmail." Not found";
    }
  }
  
?>


    <div class="login-form-wrap">
    <div class="left-section">
      <div class="title">
        <h1>Emeds</h1>
        <p>Sign in to your account!</p>
      </div>
      <div class="form">
        <form name="logForm" class="login" action="login.php" method="post">

      <label for="">Type your Email  </label>
      <input type="text" name="email" value="" placeholder="email"><br>
      

      <label for="">Give Password </label>
      <input type="password" name="pswd"  value="" placeholder="password"><br>
      
      
      <input type="submit" name="login" value="Login">
    
    </form>
        <div class="create-account">
          Don,t have an Account? <a href="register.php">Create</a>
        </div>
      </div>
    </div>
    
    <div class="right-section">
      <div class="welcome-text">
  <p>Dont have a account?Click on the register and create account now.</p>
    <h2> <a href="register.php">Registration</a> </h2>
      </div>
    </div>
  </div>

<?php
  include 'footer.php';
  //session_destroy();
?>