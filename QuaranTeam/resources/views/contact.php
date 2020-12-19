<!DOCTYPE html>
<html>
<head>
	<title>QuaranTeam Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
		
<style type="text/css">
body{
			font-family: Arial, Helvetica, sans-serif;
			margin: 0;
			padding: 20px;
			background-image: url("/pictures/b1.jpg");
			background-size: cover;
}
.head{
	background-color: turquoise;
	padding: 20px;
	font-family: hinting;
	font-size: 30px;
	font-style: bold;
}
.footer{
	background-color: turquoise;
	padding: 10px;
	font-family: hinting;
	font-size: 15px;
	font-style: bold;
	text-align: center;
	margin-top: 15px;
}
a{
		text-decoration: none;
		border: 3px solid black;
		background: deepskyblue;
		padding: 10px;
		border-radius: 100px 0px 0px 100px;
		font-family: Arial Black;
		color: white;
	}

</style>
		
<header>
		<center><h1 class="head">QuaranTeam</h1>

	<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <li class="nav-item">
        <a class="nav-link" href="home">Home</a>
      </li>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <li class="nav-item">
        <a class="nav-link" href="about">About</a>
      </li>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <li class="nav-item">
        <a class="nav-link" href="contact">Contact</a>
      </li>
     
  </div>
</nav>
</center>
	</header>
<body>
<br><br><br><br><br>
<h2 class="text-center">Contact US</h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                  

                    <form action="mail.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contact</h3>
                                    <p class="m-0">QuaranTeam</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                            
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control"  name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" name="email" placeholder="Email@gmail.com">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                   


                </div>
	</div>
</div>
<br><br><br><br><br><br><br><br><br>
</body>
	<footer>
		<h6 class="footer">QuaranTeam@2020<h6>
	</footer>
</html>