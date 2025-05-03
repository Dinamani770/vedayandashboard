<?php include 'inc/header.php';
 include 'madminpanel.php';
?>

<html>
    <head>
<style>
.container{
    background-color: rgb(189, 228, 250);
	display: flex;             /* Enables Flexbox */
            justify-content: center;   /* Centers items horizontally */
            align-items: center;  
  text-align: center;
  height:650px;
  width:500px;
  margin:auto;
  margin-top:10px;
}
.col-lg-8 .form-group label{

display: block; /* Ensures the label takes up the full width */
            text-align:left; /* Aligns text to the left */
padding:5px;
}
.col-lg-8 .form-group small{

display: block; /* Ensures the label takes up the full width */
            text-align:left; /* Aligns text to the left */
padding:5px;
}
.col-lg-8 .form-group input[type="text"]{
background-color: rgb(255, 255, 255);
display:block; /* Ensures the label takes up the full width */
justify-content: center; /* Centers horizontally */
            align-items: center;     /* Centers vertically */
			width: 300px;            /* Sets the width of the text box */
            height: 20px;
padding:5px;
}
.col-lg-8 .form-group input[type="email"]{
background-color: rgb(255, 255, 255);
display:block; /* Ensures the label takes up the full width */
justify-content: center; /* Centers horizontally */
            align-items: center;     /* Centers vertically */
			width: 300px;            /* Sets the width of the text box */
            height: 20px;
padding:5px;
}
.col-lg-8 .form-group input[type="password"]{
background-color: rgb(255, 255, 255);
display:block; /* Ensures the label takes up the full width */
justify-content: center; /* Centers horizontally */
            align-items: center;     /* Centers vertically */
			width: 300px;            /* Sets the width of the text box */
            height: 20px;
padding:5px;
.col-lg-8 button{
background-color: rgb(14, 223, 153);
margin-top:5px;
padding:5px;
display: block;       /* Makes the button a block-level element */
            margin: 0 auto; 
			
}
    </style>

</head>
       <Body>


<div class="container">
		<div class="row">
        <div class="col-lg-12 text-center">
				<h1 class="mt-5">Online Examination System</h1>
				<p class="lead">Complete MCQ Based Online Examination System!</p>
				<img src="img/regi.png" width="130px;"/>				
        </div>
        
        <div class="col-lg-2">
        
		</div>
		
		<div class="col-lg-8">
			<div class="form-group">
				<label for="exampleInputName">FullName</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter Your FullName" style="padding:10px; width:300px;">
				<small id="emailHelp" class="form-text text-muted">Enter your full name (Spaces allowed).</small>
	</div>
	
	<div class="form-group">
				<label for="exampleInputusername">Username</label>
				<input type="text" class="form-control" id="userName" name="userName" placeholder="Enter Username (without spaces)" style="padding:10px; width:300px;">
				<small id="emailHelp" class="form-text text-muted">Enter only the username</small>
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">Email Address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="Password"><br><br>
			</div>
	<button type="submit" id="registersubm" value="Signup" class="btn btn-success">Register</button><br>
	<a class="btn btn-outline-danger" href="index.php">Already Registered? Login</a>
	</form>
	<br/><br/>
	<span id="state"></span>
		</div>

		<div class="col-lg-2"></div>
		</div>
  </div>
  

?>
</body>
</html>
