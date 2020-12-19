<!DOCTYPE html>
<html>
<head>
	<title>QuaranTeam About Page</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
			body{
			font-family: Arial, Helvetica, sans-serif;
			margin: 0;
			padding: 20px;
			background-image: url("/pictures/b1.jpg");
			background-size: cover;
		}
		html{
			box-sizing: border-box;
		}
		*, *:before, *:after{
			box-sizing: inherit;
		}
		h1{
			color: white;
			font-size: 40px;
		}
		img{
			width: 100%;
		}
		p{
			font-size: 20px;
		}
		.column{
			float: left;
			width: 33.3%;
			margin-bottom: 16px;
			padding: 0 8px;
			margin-top: 30px;
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
		.card{
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			border: 5px solid turquoise;
			margin:8px;
		}
		.about-section{
			padding: 50px;
			text-align: center;
			border: 10px solid white;
			color: black;
		}
		.container{
			padding: 0 16px;
		}
		.container::after, .row::after{
			content: "";
			clear: both;
			display: table;
		}
		.title{
			color: turquoise;
		}
		.button{
			border:none;
			outline: 0;
			display: inline-block;
			padding: 8px;
			color: white;
			background-color: turquoise;
			text-align: center;
			cursor: pointer;
			width: 100%; 
		}
		.button:hover{
			background-color: turquoise;
		}
		@media screen and (max-width: 500px){
			.column{
				width: 100%;
				display: block;
			}
        }
        
        .head{
	background-color: turquoise;
	padding: 20px;
	font-family: hinting;
	font-size: 70px;
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

<body><center>
	<div class="about-section">
		<h1>About Us</h1>
		<p>This is all about who we are and what we do.</p>
		<p>QuaranTeam is the name of our group and currently developing </br>
		a Sales and Inventory System</p>
	</div>

	<div class="row">
		<div class="column">
			<div class="card">
				<img src="/pictures/mjs.jpg">

					<div class="container">
						<h2>Mark Jason Serquiña</h2>
						<p class="title"><b>LEADER</b></p>
						
						<p>markjason@gmail.com</p>
						<p><button class="button">Contact</button></p>
						
					</div>
			</div>
		</div>

		<div class="column">
			<div class="card">
				<img src="/pictures/mca.jpg">

					<div class="container">
						<h2>Ma. Crister Ave</h2>
						<p class="title"><b>MEMBER</b></p>
						
						<p>cristerlazo@gmail.com</p>
						<p><button class="button">Contact</button></p>
						
					</div>
			</div>
		</div>

		<div class="column">
			<div class="card">
				<img src="/pictures/lno.jpg">

					<div class="container">
						<h2>Lyka Obina</h2>
						<p class="title"><b>MEMBER</b></p>
						
						<p>lykaobina06@gmail.com</p>
						<p><button class="button">Contact</button></p>
						
					</div>
			</div>
		</div>
		
	</div>
	</center>
</body>

<footer>
		<h6 class="footer">QuaranTeam@2020<h6>
	</footer>
</html>