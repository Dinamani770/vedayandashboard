<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/asso.php');
	$exam = new Associate();
	//include_once ($filepath.'/../classes/Centre.php');
  include 'cadminpanel.php';
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
   	  $addQuestion = $exam->Addadmission($_POST);
   }
   // Get Total
   //$total = $exam->getTotalRows();
   //$next = $total+1;
?>

<html>
    <head>
<style>
<?php /*
.container{
    background-color: rgb(189, 228, 250);
	display: flex;             /* Enables Flexbox /
            justify-content: center;   /* Centers items horizontally 
            align-items: center;  
  text-align: center;
  height:650px;
  width:900px;
  margin:auto;
  margin-top:10px;
}
.col-lg-8 .form-group label{

display: flex; /* Ensures the label takes up the full width 
            text-align:left; /* Aligns text to the left 
padding:5px;
}
.col-lg-8 .form-group small{

display: flex; /* Ensures the label takes up the full width 
            text-align:left; /* Aligns text to the left 
padding:5px;
}
.col-lg-8 .form-group input[type="text"]{
background-color: rgb(255, 255, 255);
display:flex; /* Ensures the label takes up the full width /
flex: 1 1 45%;
justify-content: cener; /* Centers horizontally /
            align-items: cener;     /* Centers vertically /
			width: 300px;            /* Sets the width of the text box *
            height: 20px;
padding:5px;
}
.col-lg-8 .form-group input[type="email"]{
background-color: rgb(255, 255, 255);
display:block; /* Ensures the label takes up the full width /
justify-content: center; /* Centers horizontally /
            align-items: center;     /* Centers vertically/
			width: 300px;            /* Sets the width of the text box /
            height: 20px;
padding:5px;
}
.col-lg-8 .form-group input[type="password"]{
background-color: rgb(255, 255, 255);
display:block; /* Ensures the label takes up the full width /
justify-content: center; /* Centers horizontally /
            align-items: center;     /* Centers vertically *
			width: 300px;            /* Sets the width of the text box /
            height: 20px;
padding:5px;
}
.col-lg-8 button{
background-color: rgb(14, 223, 153);
margin-top:5px;
padding:5px;
display: block;       /* Makes the button a block-level element /
            margin: 0 auto; 
			
}
    </style>*/
    ?>
</style>
<link rel="stylesheet" href="sreg.css">
</head>
       <Body>
       <form method="post" action="sadmission.php" >
<?php /*echo htmlspecialchars($_SERVER["PHP_SELF"]);*/  ?>
  <div class="inputbox">
  <h2>Student Registration</h2>
  <?php
              if (isset($addQuestion)) {
                echo $addQuestion;}?>
                <br>
				
  <div class="head"> 
    State Name:<select name="state" id="count">
      <option value="Odisha">Odisha</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Wbengal">Westbengal</option>
      <option value="Assam">Assam</option>
      <option value="Manipur">Manipur</option>
      <option value="Tripura">Tripura</option>
</select>
    Centre Name:<select name="cname" id="count">
      <option value="Rourkela">Rourkela</option>
      <option value="Angul">Angul</option>
      <option value="Keonjhar">Keonjhar</option>
      <option value="Rampur">Rampur</option>
  </select>
  
</div>
  
    <div class="inputfield">
  <input type="text" name="sname" placeholder="Student Name" required>
  <input type="text" name="email" placeholder="Email" required>
</div>
  <div class="inputfield">
  <input type="text" name="pname"placeholder="Parents Name" required>
  <input type="text" name="address"placeholder="Address" required>
</div>
<div class="inputfield">
  <input type="text" name="occu"placeholder="Occupation" required>
  <input type="text" name="phoneno"placeholder="Phone no" required>
</div>
  <br>
  <div class="bcontent">
  Date of Birth: <input type="date" name="dob"placeholder=" Date of birtth" required>
  Date of Registration: <input type="date" name="dor"placeholder=" Date of Registration" required><br><br>
  Marital Status:
   <input type="radio" name="m" value=" Married"> Married
  <input type="radio" name="m" value=" Unmarried"> Unmarried
  <br><br>
  Educational Qualification:
    <select name="qul" id="count">
      <option value="Matriculate">Matriculate</option>
      <option value="HSC">HSC</option>
      <option value="Diploma">Diploma</option>
      <option value="Graduate">Graduate</option>
  </select>
    <br><br>
    Course Interested:
    <select name="course" id="count" >
      <option value="CCA">CCA</option>
      <option value="DCA">DCA</option>
      <option value="CFA">CFA</option>
      <option value="ADCA">ADCA</option>
  </select>
    <br><br>
  Gender:
  <input type="radio" name="gendre" id="option1" value="female"> Female
  <input type="radio" name="gendre" id="option1" value="male"> Male
  <input type="radio" name="gendre" id="option1" value="other"> Other
  <br>
Comment:  <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
  </div>
  <div class="btm">
  <input type="submit" name="submit" value="Save">  
  
  <br>
  </div>
  <br><br>
  <div class="bbtm">
  <button><a href="index.php">Back</a></button>
  <button><a href="regview.php">Edit Data</a></button>
  <button><a href="pdfreport.php">View/Download PDF</a></button>
  <button><a href="">Login</a></button>
  <br><br>
  </div>
  
</div>
</form>
        
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
