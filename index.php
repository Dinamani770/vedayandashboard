<?php 
include 'inc/header.php';
include 'madminpanel.php';
?>
<?php
  Session::checkLogin();
?>
<head>
	<style>
 .mcontainer{
  background-color: rgb(255, 255, 255);
  border: 5px solidrgb(61, 136, 71);
  margin-top: 5px;
  min-height: 400px;
  margin-left: 450px;
  box-shadow: 5px 5px 10px gray;

  justify-content: center; /* Centers horizontally */
    align-items: center;
  text-align: center;
  padding: 0px;
  width: 528px;
}
.col-l-6 .form-group label{

display: block; /* Ensures the label takes up the full width */
            text-align:center; /* Aligns text to the left */
padding:10px;
}
.col-l-6 .form-group input[type="text"]{

display: block; /* Ensures the label takes up the full width */
justify-content: center; /* Centers horizontally */
            align-items: center;     /* Centers vertically */
			width: 200px;            /* Sets the width of the text box */
            height: 30px;
padding:50px;
}
.col-l-6 .form-group{


padding:5px;
}

</style>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="mcontainer">
		<div class="row">
        	<div class="col-lg-12 text-center">
				<h3 class="mt-5" style="color: red;">Wel Come to vedayan foundation</h3>
				<h3 class="mt-5">Student Login Here</h3>
				<img src="img/test.jpg" width="130px;"/>				
			</div>

			<div class="col-lg-3">
			
			</div>

			<div class="col-l-6">
				<form action="index.php" method="post"> 
					<div class="form-group">
						<label for="exampleInputEmail1">Email Address</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" stye="padding:10px; width:300px;">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Password" stye="padding:10px; width:300px;">
					</div>
					<button type="submit" id="loginsubm" value="Signup" class="btn btn-success" style="padding:10px; margin-top:10px; width:200px;background-color:rgb(255, 149, 0);color: white; border:0px;">Log In</button>
					</form>
					<br/>
					<p><a class="btn btn-outline-info btn-lg" href="register.php">New User? Signup for Free</a></p>
					<p><a class="btn btn-outline-info btn-lg" href="welcome.php">Back</a></p>
					<span class="empty" style="display: none;">Fields must not be empty</span>
					<span class="disable" style="display: none;">User ID Disable!</span>
					<span class="error" style="display: none;">Email or Password did not match.</span>
					
			</div>


			<div class="col-lg-3"></div>
		</div>
	</div>  
	<?php 
//include 'inc/sidebar.php';

?>
</body>
</html>
