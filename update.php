<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="sreg.css">
</head>
<body>  
  
<?php
 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/inc/header.php');
 include_once ($filepath.'/../lib/Database.php');
 $db= new Database();
$id=$_GET['$uid'];
//echo $id;
$select="SELECT * FROM admission WHERE id=$id";
$data=$db->select($select);
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
  <h2>Student Registration</h2>
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
  <input type="text" name="name" value="<?php echo $row['sname'];?>" placeholder="Student Name" required>
  <input type="text" name="email" value="<?php echo $row['email'];?>"placeholder="Email" required>
</div>
  <div class="inputfield">
  <input type="text" name="pname" value="<?php echo $row['pname'];?>"placeholder="Parents Name" required>
  <input type="text" name="add" value="<?php echo $row['address'];?>"placeholder="Address" required>
</div>
<div class="inputfield">
  <input type="text" name="occupation" value="<?php echo $row['occup'];?>"placeholder="Occupation" required>
  <input type="text" name="phone" value="<?php echo $row['phone'];?>"placeholder="Phone no" required>
</div>
  <br>
  <div class="bcontent">
  Date of Birth: <input type="date" value="<?php echo $row['dob'];?>"name="dbt" placeholder="Date of birtth" required><br><br>
  Marital Status: <input type="radio" name="m" value="Married"
  <?php
      if($row['mstatus']=='Married')
       {
        
        echo "checked";
      }
      ?>
  >Married
  <input type="radio" name="m" value="Unmarried"
  <?php
      if($row['mstatus']=='Unmarried')
       {
        
        echo "checked";
      }
      ?>
  
  
  >Unmarried
  <br><br>

  Educational Qualification:
    <select name="qualification" id="count">
      <option value="Matriculate"
      <?php
      if($row['qualification']=='Matriculate')
       {
        
        echo "selected";
      }
      ?>
      >Matriculate</option>
      <option value="HSC"
      <?php
      if($row['qualification']=='HSC')
       {
        
        echo "selected";
      }
      ?>
      >HSC</option>
      <option value="Diploma"
      <?php
      if($row['qualification']=='Diploma')
       {
        
        echo "selected";
      }
      ?>
      >Diploma</option>
      <option value="Graduate"
      <?php
      if($row['qualification']=='Graduate')
       {
        
        echo "selected";
      }
      ?>
      
      >Graduate</option>
  </select>
    <br><br>
    Course Interested:
    <select name="course" id="count" >
      <option value="CCA"
      <?php
      if($row['course']=='CCA')
       {
        
        echo "selected";
      }
      ?>
      
      >CCA</option>
      <option value="DCA"
      <?php
      if($row['course']=='DCA')
       {
        
        echo "selected";
      }
      ?>
      
      >DCA</option>
      <option value="CFA"
      <?php
      if($row['course']=='CFA')
       {
        
        echo "selected";
      }
      ?>
      >CFA</option>
      <option value="ADCA"
      <?php
      if($row['course']=='ADCA')
       {
        
        echo "selected";
      }
      ?>
      >ADCA</option>
  </select>
    <br><br>
  Gender:
  <input type="radio" name="gender" id="option1" value="female"
  <?php
      if($row['gendre']=='female')
       {
        
        echo "checked";
      }
      ?>
  
  >Female
  <input type="radio" name="gender" id="option1" value="male"
  <?php
      if($row['gendre']=='male')
       {
        
        echo "checked";
      }
      ?>
  
  
  >Male
  <input type="radio" name="gender" id="option1" value="other"
  <?php
      if($row['gendre']=='other')
       {
        
        echo "checked";
      }
      ?>

  >Other
  <br>
Comment:  <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  </div>
  <div class="btm">
  <input type="submit" name="update" value="Edit"> </input>
  </div>
  <button><a href="regview.php">View data</a></button>
  </div>
</div>
</form>
<?php

?>
<?php
if(isset($_POST['update']))
{

    $name=$_POST['name'];
    $state=$_POST['state'];
  $cname=$_POST['centre'];
  //$sname = $_POST["sname"];
  $email = $_POST['email'];
  $pname = $_POST['pname'];
  $address = $_POST['add'];
  $dob = $_POST['dbt'];
  $mstatus = $_POST['m'];
  $quali = $_POST['qualification'];
  $course = $_POST['course'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $occup = $_POST['occupation'];
  $comment = $_POST['comment'];
   
   
   $query="UPDATE admission SET sname='$name',phone='$phone',state='$state',centre='$cname',email='$email',pname='$pname',address='$address',dob='$dob',mstatus='$mstatus',
    qualification='$quali',course='$course',gendre='$gender',occup='$occup' WHERE id=$id";
    $data=$db->update($query);
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

?>
</body>
</html>