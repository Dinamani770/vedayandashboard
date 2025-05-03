<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'../inc/header.php');
  include_once ('adminpanel.php');
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="">
<style>
 {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 0px;
  background:rgb(255, 252, 214);
}
.bcontainer h1{
  color:rgb(138, 31, 7);
}
.jumbotron a{
  background-color:rgb(137, 20, 16); /* Green */
  border: none;
  color: white;
  padding: 15px 48px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
</head>
</style>
    <div class="bcontainer" style="padding-left:50px;padding-top:120px;">
        
            
                <h1 >Welcome to Admin Control Panel</h1>
                                
                </div>
                <br/>
                <br/>

                <div class="jumbotron" style="padding-left:250px;padding-top:120px;">
                    <h1>Controls</h1>
                    
                    <a class="btn btn-outline-success btn-lg" href="index.php"><span class="fa fa-home"></span> Home</a>
                    <a class="btn btn-outline-info btn-lg" href="users.php"><span class="fa fa-user-circle"></span> Manage Users</a>
                    <a class="btn btn-outline-primary btn-lg" href="quesadd.php"><span class="fa fa-question-circle"></span> Add Question</a>
                    <a class="btn btn-outline-dark btn-lg" href="queslist.php"><span class="fa fa-list"></span> Manage Question</a>
                    <a class="btn btn-outline-danger btn-lg" href="?action=logout"><span class="fa fa-sign-out"></span> Logout</a>
                </div>

       </html>     
        
    
