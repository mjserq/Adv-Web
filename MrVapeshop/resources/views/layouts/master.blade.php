<!DOCTYPE html>
<html>
<head>
  <title>
    @yield('Title')
  </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</head>    
	<body>
    <header class="header">
		  		<nav class="navbar navbar-style">
		  			<div class="container">
		  				<div class="navbar-header">
		   					<img class="logo" src="img/mrvapelogo.jpg">
		   					<h1>

                               </h1>
		   				</div>
		   			
		 				 <div class="navbar navbar-expand-lg ">
		    				<div class="container-fluid">
		     		 			<a class="navbar-brand btn btn-warning" href="home">Home</a>
		     		 			<a class="navbar-brand btn btn-warning" href="products">Products</a>
		     		 			<a class="navbar-brand btn btn-warning" href="sales">Sales</a>
		     		 			<a class="navbar-brand btn btn-danger" href="logout">Logout</a>

		    				</div>
		  				</div>
		   			</div>
				</nav>

                <section>
                        @yield ('welcome')
                </section>

                <section>
                        @yield ('products')
                </section>

                <section>
                        @yield ('sales')
                </section>
                

		</header>

    
				
			
	
	


</body>
</html>