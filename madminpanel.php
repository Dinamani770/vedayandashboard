<?php

$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/lib/Session.php');
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
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="apanel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

               
<div class="sidebar" style="width:120px">
    <p>Admin Panel</P>
    <?php if(isset($_SESSION['login'])): ?> 
  <a href="welcome.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Home</a> 
  <a href="final.php" class="w3-bar-item w3-button"><i class="fa fa-globe"></i>Result</a>
  <a href="exam.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Exam</a> 
  
  
  <?php else: ?>
    <a href="welcome.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Home</a> 
    <a href="register.php" class="w3-bar-item w3-button"><i class="fa fa-search"></i> Signup</a>
    <a href="Profile.php" class="w3-bar-item w3-button"><i class="fa fa-trash"></i> Profile</a> 
  <a href="" class="w3-bar-item w3-button"><i class="fa fa-trash"></i> Gallery</a> 
    <?php endif; ?>

</div>
<div style="margin-left:70px">

<div class="header">
  <img src="vedayan(white).png"height='50px' width=auto>
    <div class="header-right">
    
    
        
       
        <?php if(isset($_SESSION['login'])): ?>
            <a class="ctive">Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?></a>
            <a href="?action=logout">Logout</a>
        <?php else: ?>
            <a href="index.php">Login</a>
        <?php endif; ?>
    <a class="ctive" href="sregd">Centre</a>
    <a href="admin/">Admin</a>
    <a href=""></a>
  </div>
</div>


<div class="b1" style="padding-left:20px">

  

  
</div>

</div>
      
</body>
</html>


    