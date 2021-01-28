<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="css/loginreg.css">
</head>
  <body>
    <center>
      <img src="img/mrvapelogo.jpg" width="100px">
    </center>
      <div class="wrapper fadeInDown">
        <div id="formContent">

          <h2 class="active underlineHove"><a href="login.php" class="click">Log In</a></h2>
            <form method="POST" action="register.php"> 
              <input type="text" class="fadeIn first" name="firstname" placeholder="First Name" required="TRUE">
                <input type="text" class="fadeIn first" name="lastname" placeholder="Last Name" required="TRUE">
                <input type="password" class="fadeIn first" name="password" placeholder="Password" required="TRUE">
              <input type="text" class="fadeIn first" name="email" placeholder="Email" required="TRUE">
    
            <input type="submit" class="fadeIn fourth" value="Register" name="btnRegister">


    <?php

          $servername = "localhost";
          $username = "root";
          $password = "";
          $databasename = "mrvapeshop";

        $connect = mysqli_connect($servername,$username,$password,$databasename);

          if (isset($_POST['btnRegister'])) {
          $lastname = $_POST['lastname'];
          $firstname = $_POST['firstname'];
          $email = $_POST['email'];
          $password = $_POST['password'];

        $insert = "INSERT INTO employee_tbl(firstname,lastname,email,password)VALUES('$firstname','$lastname','$email','$password')";
    $query = mysqli_query($connect,$insert);

      if ($query == TRUE) {
        echo "<strong>Account Created</strong>";}
      else{
        echo "<strong>Account not Created</strong>";}
       }   
    ?>
    
</form>

  </div>
</div>

</body>
</html>