<?php
include 'mheader.php';
?>

<link rel="stylesheet" href="css/admin.css">

<div class="bcontainer">
		<div class="row">
        	<div class="col-lg-12 text-center">
				<h3 class="mt-5" style="color: red;">Online Examination System</h3>
				<h3 class="mt-5">Student Login Here</h3>
				<img src="img/test.jpg" width="130px;"/>				
			</div>

			<div class="col-lg-3">
			
			</div>

			<div class="col-lg-6">
				<form action="index.php" method="post"> 
					<div class="form-group">
						<label for="exampleInputEmail1">Email Address</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Password">
					</div>
					<button type="submit" id="loginsubm" value="Signup" class="btn btn-success">Log In</button>
					</form>
					<br/>
					<p><a class="btn btn-outline-info btn-lg" href="register.php">New User? Signup for Free</a></p>
					<p><a class="btn btn-outline-info btn-lg" href="../mysite.php">Back</a></p>
					<span class="empty" style="display: none;">Fields must not be empty</span>
					<span class="disable" style="display: none;">User ID Disable!</span>
					<span class="error" style="display: none;">Email or Password did not match.</span>
			</div>


			<div class="col-lg-3"></div>
		</div>
	</div>  