<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'../inc/header.php');
  include_once ('cadminpanel.php');
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 <style>
 {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 0px;
  background:rgb(248, 242, 215);
}
.jumbotron{
background:rgb(255, 178, 126);
}
</style>
</head>
</style>
    <div class="bcontainer">
        
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Welcome to Centre Control Panel</h1>
                </div>                
                </div>
                <br/>
                <br/>
                <div class="jumbotron" style="padding-left:250px;">
                    <h1>Controls</h1>
                    <a class="btn btn-outline-success btn-lg" href="index.php"><span class="fa fa-home"></span> Home</a>
                    <a class="btn btn-outline-info btn-lg" href="users.php"><span class="fa fa-user-circle"></span> Manage Users</a>
                    <a class="btn btn-outline-primary btn-lg" href="quesadd.php"><span class="fa fa-question-circle"></span> Add Question</a>
                    <a class="btn btn-outline-dark btn-lg" href="sregistration.php"><span class="fa fa-list"></span> Student Enrollment</a>
                    <a class="btn btn-outline-danger btn-lg" href="?action=logout"><span class="fa fa-sign-out"></span> Logout</a>
                </div>
                <p>Used on a button:</p>
<button style="font-size:24px">Button <i class="fa fa-home"></i></button>
       </html>     
        
    
