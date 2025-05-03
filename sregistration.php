<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/centre.php');
  include_once ($filepath.'/../lib/Database.php');
  include 'cadminpanel.php';
	$user = new Centre();
?>
<?php
  //Session::checkSession();
?>
<!DOCTYPE HTML>  
<html>
<head>

  <link rel="stylesheet" href="sreg.css">
  
</head>
<body>  
  <h1></h1>
<?php
// define variables and set to empty values
$uname=$pword=$id=$roll=$phone=$comment=$rgdno=$occup=$sname = $email = $gender = $dor=$comment = $scode=$ccode=$rmonth=$ryear=$pname = $cname=$pname=$address=$dob=$mstatus=$state=$quali=$course="";
$dor = date("d-m-Y");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $state=test_input($_POST["state"]);
  $cname=test_input($_POST["centre"]);
  $sname = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $pname = test_input($_POST["pname"]);
  $address = test_input($_POST["add"]);
  $dob = test_input($_POST["dbt"]);
  $dor = test_input($_POST["dor"]);
  $mstatus = test_input($_POST["m"]);
  //$mstatus = test_input($_POST["um"]);
  $quali = test_input($_POST["qualification"]);
  $course = test_input($_POST["course"]);
  $gender = test_input($_POST["gender"]);
  $phone = test_input($_POST["phone"]);
  $occup = test_input($_POST["occupation"]);
  $comment = test_input($_POST["comment"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="" >
<?php /*echo htmlspecialchars($_SERVER["PHP_SELF"]);*/?>  
  <div class="inputbox">
  <h2>Student Registration</h2>
  <div class="head"> 
    State Name:<select name="state" id="count">
      <option value="Odisha">Odisha</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Wbengal">Westbengal</option>
      <option value="Assam">Assam</option>
      <option value="Manipur">Manipur</option>
      <option value="Tripura">Tripura</option>
</select>
    Centre Name:<select name="centre" id="count">
      <option value="Rourkela">Rourkela</option>
      <option value="Angul">Angul</option>
      <option value="Keonjhar">Keonjhar</option>
      <option value="Rampur">Rampur</option>
  </select>
  
</div>
  
    <div class="inputfield">
  <input type="text" name="name" placeholder="Student Name" required>
  <input type="text" name="email" placeholder="Email" required>
</div>
  <div class="inputfield">
  <input type="text" name="pname"placeholder="Parents Name" required>
  <input type="text" name="add"placeholder="Address" required>
</div>
<div class="inputfield">
  <input type="text" name="occupation"placeholder="Occupation" required>
  <input type="text" name="phone"placeholder="Phone no" required>
</div>
  <br>
  <div class="bcontent">
  Date of Birth: <input type="date" name="dbt"placeholder=" Date of birtth" required>
  Date of Registration: <input type="date" name="dor"placeholder=" Date of Registration" required><br><br>
  Marital Status:
   <input type="radio" name="m" value=" Married"> Married
  <input type="radio" name="m" value=" Unmarried"> Unmarried
  <br><br>
  Educational Qualification:
    <select name="qualification" id="count">
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
  <input type="radio" name="gender" id="option1" value="female"> Female
  <input type="radio" name="gender" id="option1" value="male"> Male
  <input type="radio" name="gender" id="option1" value="other"> Other
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
$con=mysqli_connect("localhost","root","","reg");
$sql = "SELECT ID FROM record";
$result = $con->query($sql);
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      //echo "<option value='" . $row['ID'] . "'>" . $row['sname'] . "</option>";
      $id=$row['ID'];
  
  }
} else {
  echo "<option value=''>No options available</option>";
}

if(isset($_POST['submit']))
{
  //echo "Its nothing";
/*  <?php
$name = "Dinamani"; // Example name
$firstThreeChars = substr($name, 0, 3);
echo "First three characters: " . $firstThreeChars;
?>
<?php
$date = "25-06-2025"; // Example date (YYYY-MM-DD format)
$month = date("m", strtotime($date)); // Numeric month (e.g., 04)
$year = date("Y", strtotime($date)); // Numeric year (e.g., 2025)

echo "Month: " . $month . "<br>";
echo "Year: " . $year;
?>

<?php
// Assign current date to a variable
$currentDate = date("d-m-Y"); // Format: YYYY-MM-DD
echo "Today's date is: " . $currentDate;
?>*/

// Fetch data

  $scode=substr($state, 0, 3);
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
  
  $sql="insert into record(phoneno,centre,state,sname,pname,address,dob,occupation,gendre,mstattus,qualification,course,email,rollno,username,password)
    values('$phone','$cname','$state','$sname','$pname','$address','$dob','$occup','$gender','$mstatus','$quali','$course','$email','$roll','$uname','$pword')";
    $query=mysqli_query($con,$sql);
}?>
<?php
//echo $rmonth;
//echo $ryear;
//echo $scode;
//echo $id;
//echo $roll;
//echo $id;

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