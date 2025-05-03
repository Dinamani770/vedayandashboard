<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/asso.php');
	$exam = new Associate();
	//include_once ($filepath.'/../classes/Centre.php');
  include 'adminpanel.php';
  //include 'nconnection.php';
 //$aname=$centreUser=$centrePass=$dor=$email=$address=$phone="";
 /*$aname=$_POST['aname'];
$centreUser=$_POST['userName'];
$centrePass=$_POST['password'];
$dor=$_POST['dor'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
*/
?>
<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   	  $addQuestion = $exam->Addcentre($_POST);
   }
   // Get Total
   //$total = $exam->getTotalRows();
   //$next = $total+1;
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

<form method="post" action="cidcreate.php">
<div class="container">
		<div class="row">
        <div class="col-lg-12 text-center">
				<h1 class="mt-5">Centre Registration</h1>
				<?php
              if (isset($addQuestion)) {
                echo $addQuestion;}?>
                <br>
				<p class="lead">Register with Us for Further Assistance</p>
				<img src="img/regi.png" width="130px;"/>				
        </div>
        
        <div class="col-lg-2">
        
		</div>
		
		<div class="col-lg-8">
			<div class="form-group">
				<label for="exampleInputName">FullName</label>
				<input type="text" class="form-control" id="aname" name="name" placeholder="Enter Your FullName" style="padding:10px; width:300px;">
				<small id="emailHelp" class="form-text text-muted">Enter your full name (Spaces allowed).</small>
	</div>
	<div class="form-group">
				<label for="exampleInputName">Address</label>
				<input type="text" class="form-control" id="address" name="address" placeholder="Enter Your FullName" style="padding:10px; width:300px;">
				<small id="emailHelp" class="form-text text-muted">Enter your full name (Spaces allowed).</small>
	</div>
	<div class="form-group">
				<label for="exampleInputusername">Username</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username (without spaces)" style="padding:10px; width:300px;">
				<small id="emailHelp" class="form-text text-muted">Enter only the username</small>
			</div>

			<div class="form-group">
				<label for="exampleInputEmail1">Email Address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="Password"><br>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">phoneno</label>
				<input type="text" name="phoneno" id="phone" class="form-control" placeholder="Password"><br>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Date of Registration</label>
				<input type="date" name="dor" id="dor" class="form-control" placeholder=""><br>
			</div><br><br>
	<button type="submit" name="ubmit" id="ubmit" value="Signup" class="btn btn-success">Register</button><br>
	<a href="index.php">Back</a>
	</form>
	<br/>
			</div>

		<div class="col-lg-2"></div>
		</div>
  </div>
  
</body>
</html>
<?php

//$con=mysqli_connect("localhost","root","","reg");


/*
if(isset($_POST['submit']))
{
	$sql="INSERT INTO tbl_centre (aname, email, phone, address, centreUser, centrePass, dor) VALUES ('$aname', '$email', '$phone', '$address', '$centreUser', '$centrePass', '$dor')";
    $query=mysqli_query($con,$sql);	
  
}
else
{
	echo "";
}*/
  /*$scode=substr($state, 0, 3);
  $ccode=substr($cname, 0, 3);
  $ucode=substr($sname, 0, 4);
  $pcode=substr($sname, 0, 4);
  $syear=$rmonth=date("Y", strtotime($dob));
  $rmonth=date("m", strtotime($dor));
  $ryear=date("Y", strtotime($dor));
  $syear = date("y", strtotime($dor));
  $id=$id+1;
  $roll=$scode."/".$ccode."/".$rmonth."/".$syear."/".$id;
  $uname=$ucode.$ryear;
  $pword=$pcode."@".$ryear;
  //$id=
    /*echo"successfull";
    echo$state;
    echo$cname;*/
  
/*  $sql="INSERT into tbl_centre(phone,centreUser,centrePass,aname,email,dor,address)
    values('$phone','$centreUser','$centrePass','$aname','$email','$dor','$address')";
    $query=mysqli_query($con,$sql);*/
?>
