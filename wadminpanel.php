<?php

//$filepath = realpath(dirname(__FILE__));
//include_once ($filepath.'/lib/Session.php');
//Session::init();

//include_once ($filepath.'/../lib/Database.php');
//include_once ($filepath.'/../helpers/Format.php');
//spl_autoload_register(function($class){
//include_once "classes/".$class.".php";
//});

/*$db   = new Database();
$fm   = new Format();
$exam = new Exam();
$user = new User();
$pro  = new Process();*/
/*
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<?php

  if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  	     Session::destroy();
  	     header("Location:index.php");
  	     exit();
        
         //echo "you are offline";
  }
  else
{
  //echo "try out to login";
  
}
?>*/
?>
<!DOCTYPE html>
<html>
<title>Wel Come Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="apanel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    background-image: url('background.jpg');
    background-size: cover;
    background-position: center;
}
</style>
<body>

               
<div class="sidebar" style="width:120px">
    <p>Admin Panel</P>
       
  <a href="../index.html" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Home</a> 
  <a href="" class="w3-bar-item w3-button"><i class="fa fa-search"></i> About AdminPanel</a> 
  <a href="" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Help</a> 
  <a href="" class="w3-bar-item w3-button"><i class="fa fa-globe"></i>Gallery</a>
  <a href="" class="w3-bar-item w3-button"><i class="fa fa-trash"></i> About</a> 
  <a href="sprofile.php" class="w3-bar-item w3-button"><i class="fa fa-trash"></i> Student Profile</a> 
  
</div>
<div style="margin-left:70px">

<div class="header">
  <img src="vedayan(white).png"height='50px' width=auto>
    <div class="header-right">
    <a class="ctive" href="sprofile.php">Verify Student Profile</a>
    <a class="ctive" href="index.php">Student Login</a>
    <a class="ctive" href="sregd/index.php">Centre Login</a>
    <a href="admin/">Admin Login</a>
  </div>
</div>

<div class="b1" style="padding-left:20px">

 
</div>

</div>
      
</body>
</html>


    