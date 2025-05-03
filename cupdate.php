<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="sregistration.css">
</head>
<body>  
  <h1>Centre Data Update</h1>
<?php
$con=mysqli_connect("localhost","root","","reg");
$id=$_GET['$uid'];
echo $id;
$select="SELECT * FROM centre WHERE ID=$id";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
//$sname=$_POST['sname'];
//echo $row;
// define variables and set to empty values
/*$phone=$comment=$rgdno=$occup=$sname = $email = $gender = $comment = $pname = $cname=$pname=$address=$dob=$mstatus=$state=$quali=$course="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $state=test_input($_POST["state"]);
  $cname=test_input($_POST["centre"]);
  $sname = test_input($_POST["sname"]);
  $email = test_input($_POST["email"]);
  $pname = test_input($_POST["pname"]);
  $address = test_input($_POST["add"]);
  $dob = test_input($_POST["dbt"]);
  $mstatus = test_input($_POST["m"]);
  $quali = test_input($_POST["qualification"]);
  $course = test_input($_POST["course"]);
  $gender = test_input($_POST["gendre"]);
  $phone = test_input($_POST["phone"]);
  $occup = test_input($_POST["occupation"]);
  $comment = test_input($_POST["comment"]);
  echo $gender;
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
}
echo $row['mstattus'];
?>
<form method="post" action="update.php" >
<?php /*echo htmlspecialchars($_SERVER["PHP_SELF"]);*/?>  
<form method="post">
  <div class="inputbox">
  <h2>Centre Registration</h2>
  <div class="head"> 
    State Name:<select name="state" id="count">
      <option value="Odisha"
      <?php
      if($row['state']=='Odisha')
       {
        
        echo "selected";
      }
      ?>
      >Odisha</option>
      <option value="Jharkhand"
      <?php
      if($row['state']=='Jharkhand')
       {
        
        echo "selected";
      }
      ?>
      >Jharkhand</option>
      <option value="Wbengal"
      <?php
      if($row['state']=='Wbengal')
       {
        
        echo "selected";
      }
      ?>
      >Westbengal</option>
      <option value="Assam"
      <?php
      if($row['state']=='Assam')
       {
        
        echo "selected";
      }
      ?>
      >Assam</option>
      <option value="Manipur"
      <?php
      if($row['state']=='Manipur')
       {
        
        echo "selected";
      }
      ?>
      >Manipur</option>
      <option value="Tripura"
      <?php
      if($row['state']=='Tripura')
       {
        
        echo "selected";
      }
      ?>
      >Tripura</option>
</select>
    Centre Name:<select name="centre" id="count">
      <option value="Rourkela"
      <?php
      if($row['centre']=='Rourkela')
       {
        
        echo "selected";
      }
      ?>
      
      >Rourkela</option>
      <option value="Angul"
      <?php
      if($row['centre']=='Angul')
       {
        
        echo "selected";
      }
      ?>
      >Angul</option>
      <option value="Keonjhar"
      <?php
      if($row['centre']=='Keonjhar')
       {
        
        echo "selected";
      }
      ?>
      >Keonjhar</option>
      <option value="Rampur"
      <?php
      if($row['centre']=='Rampur')
       {
        
        echo "selected";
      }
      ?>
      >Rampur</option>
  </select></div>
    <div class="inputfield">
  <input type="text" name="name" value="<?php echo $row['associate'];?>" placeholder="Associate Name" required>
  <input type="text" name="email" value="<?php echo $row['email'];?>"placeholder="Email" required>
</div>
  <div class="inputfield">
  <input type="text" name="phone" value="<?php echo $row['phoneno'];?>"placeholder="Phone no" required>
  <input type="text" name="add" value="<?php echo $row['address'];?>"placeholder="Address" required>
</div>
<div class="inputfield">
  <input type="text" name="username" value="<?php echo $row['username'];?>"placeholder="username" required>
  <input type="text" name="password" value="<?php echo $row['password'];?>"placeholder="password" required>
  
</div>
  <br>
  <div class="bcontent">
  Date of Registration: <input type="date" value="<?php echo $row['dor'];?>"name="dor" placeholder="Date of Registration" required><br><br>
  
    <br><br>
  <br><br>
  </div>
  <div class="btm">
  <input type="submit" name="update" value="Edit"> </input>
  </div>
  <button><a href="regviewcentre.php">View data</a></button>
  </div>
</div>
</form>
<?php
/*echo "<h2>Your Input:</h2>";
echo $state;
echo "<br>";
echo $centre;
echo"<br>";
echo $_REQUEST['course'];
echo "<br>";
echo $_REQUEST['gender'];
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
?>*/
?>
<?php
if(isset($_POST['update']))
{
/*$sql="insert into record(phoneno,centre,state,sname,pname,address,dob,occupation,gendre,mstattus,qualification,course,email)
    values('$phone','$cname','$state','$sname','$pname','$address','$dob','$occup','$gender','$mstatus','$quali','$course','$email')";
    $query=mysqli_query($con,$sql);*/
    $name=$_POST['name'];
    $state=$_POST['state'];
  $cname=$_POST['centre'];
  //$sname = $_POST["sname"];
  $email = $_POST['email'];
    $address = $_POST['add'];
  $dor = $_POST['dor'];
$user=$_POST['username'];
$pass=$_POST['password'];

  $phone = $_POST['phone'];
 

   
   
   $query="UPDATE centre SET associate='$name',phoneno='$phone',state='$state',centre='$cname',email='$email',address='$address',dor='$dor',username='$user',password='$pass' WHERE ID=$id";
    $data=mysqli_query($con,$query);
    if($data)
    {
      echo "record updated successfully";
      //echo $phone;
    }
    else
    {
  echo "Try again";
}
}
/*$phone=$comment=$rgdno=$occup=$sname = $email = $gender = $comment = $pname = $cname=$pname=$address=$dob=$mstatus=$state=$quali=$course="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $state=test_input($_POST["state"]);
  $cname=test_input($_POST["centre"]);
  $sname = test_input($_POST["sname"]);
  $email = test_input($_POST["email"]);
  $pname = test_input($_POST["pname"]);
  $address = test_input($_POST["add"]);
  $dob = test_input($_POST["dbt"]);
  $mstatus = test_input($_POST["m"]);
  $quali = test_input($_POST["qualification"]);
  $course = test_input($_POST["course"]);
  $gender = test_input($_POST["gendre"]);
  $phone = test_input($_POST["phone"]);
  $occup = test_input($_POST["occupation"]);
  $comment = test_input($_POST["comment"]);
  echo $gender;
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
}
echo $row['mstattus'];

/*

  $con=mysqli_connect("localhost","root","","reg");
$id=$_GET['uid'];
echo $id;
$select="SELECT * FROM record WHERE ID=$id";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);

   echo"You have pressed Update";
   // echo $id;
    echo $cname;
}*/
  /*$sql="insert into record(phoneno,centre,state,sname,pname,address,dob,occupation,gendre,mstattus,qualification,course,email)
    values('$phone','$cname','$state','$sname','$pname','$address','$dob','$occup','$gender','$mstatus','$quali','$course','$email')";
    $query=mysqli_query($con,$sql);*/
    //UPDATE record SET sname='$sname';

  
?>
<?php
   /*if($query)
{
  HEADER('location:regview.php');
    echo"successfull";
    echo$state;
    echo$cname;}

    else{
die(mysqli_error('$con'));
    }
    /*include "regview.php";*/
  
/*}
    else
    {
    echo"unsuccessful";
}
/*echo"Database connected";*/
?>
</body>
</html>