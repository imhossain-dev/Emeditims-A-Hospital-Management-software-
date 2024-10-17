<?php
  include 'header.php';
  include 'connections/insertUser.php'; 

?>
<div class="login-form-wrap-reg">
    <div class="left-section-reg">
      <div class="title">
        <h1>Emeds</h1>
        <h2>Register on our website</h2>
      </div>
      <div class="form">
    <form name = "regForm" class="" action="register.php" method="post">

      <label for="">Name </label>
      <input type="text" name="Name" value=""><br>

      <label for="">Username </label>
      <input type="text" name="Username" value="" onkeyup="userVal();canSubmit();"><br>
      <p id="form1"></p>

      <label for="">Password </label>
      <input type="password" name="Password" onkeyup="passVal();canSubmit();" value=""><br>
      <p id="form2"></p>

      <label for="">Re-type Password </label>
      <input type="password" name="RePassword" onkeyup="matchPass();canSubmit();" value=""><br>
      <p id="form3"></p>
      

      <label for="">Contact no  </label>
      <input type="text" name="contact" value=""><br>

      <label for="">Email  </label>
      <input type="text" name="email" onkeyup="emailVal();canSubmit();" value=""><br>
      <p id="form4"></p>


      <input id="regInput" type="submit" name="register" value="Submit">

    </form> 
    </div>
  </div>
</div>
<?php
  include 'footer.php';
?>