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

          <h2 class="active underlineHove"><a href="login" class="click">Log In</a></h2>
            <form method="POST" action="/register"> 
            @csrf
              <input type="text" class="fadeIn first" name="firstname" placeholder="First Name" required="TRUE">
                <input type="text" class="fadeIn first" name="lastname" placeholder="Last Name" required="TRUE">
                <input type="password" class="fadeIn first" name="password" placeholder="Password" required="TRUE">
              <input type="text" class="fadeIn first" name="email" placeholder="Email" required="TRUE">
    
            <input type="submit" class="fadeIn fourth" value="Register" name="btnRegister">



    
</form>

  </div>
</div>

</body>
</html>