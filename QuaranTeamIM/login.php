<!DOCTYPE html>
<html>
<head>
  <title>Welcome Login</title>
  <link rel="stylesheet" type="text/css" href="css/loginreg.css">
</head>

<body>
    <center>
      <img src="img/mrvapelogo.jpg" width="100px">
    </center>
        <div class="wrapper fadeInDown">
          <div id="formContent">
            <h2 class="inactive underlineHover"><a href="register.php" class="click"><b>Register</b></a></h2>
 
               <form method="POST" action="login.php">
                    <input type="text" class="fadeIn first" name="email" placeholder="Email">
                    <input type="password" class="fadeIn first" name="password" placeholder="Password">
                     <input type="submit" class="fadeIn first" value="Log In" name="btnLogin">

      <?php
			session_start();
					$servername = "localhost";
					$username = "root";
					$password = "";
					$databasename = "mrvapeshop";

    		$connect = mysqli_connect($servername,$username,$password,$databasename);


    		if (isset($_POST['btnLogin'])){
			   $lastname = $_POST['lastname'];
        	$firstname = $_POST['firstname'];
        	$email = $_POST['email'];
        	$password = $_POST['password'];
        	

        $login ="SELECT*FROM employee_tbl WHERE email= '$email' AND password = '$password'";

        $result =mysqli_query($connect,$login);
        $num = mysqli_num_rows($result);

        if ($num == 1) {

	       $_SESSION['email'] = $email;
	       header('location:welcome.php');
        }else{
        header('location:login.php');
        }
      }
      
      ?>

    </form>

  
  </div>
</div>
</body>
</html>