<?php include 'inc/header.php'; 
 include 'madminpanel.php';
?>
<?php
  Session::checkSession();
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="vendor/bootstrap/css/bootstrap.mi.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="apanel.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="apanel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.container{
    background-color: rgb(255, 255, 255);
	display: flex;             /* Enables Flexbox */
            justify-content: center;   /* Centers items horizontally */
            align-items: center;  
  text-align: center;
  height:650px;
  width:500px;
  margin:auto;
  margin-top:10px;
}

    </style>


       

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">You can start your exam</h1>
                <p class="lead">Take your time. Click Start Exam when you are ready.</p>
                <img src="img/takeTest.png" height="200" width="200"/>
                <br/>
                <br/>

                <a href="starttest.php" class="btn btn-success btn-lg">
                    <span class="fa fa-arrow-right"></span> Start Exam Now!
                </a>
                <br/>
                <br/>
                
            </div>
        </div>
    </div>
             </body>
    </html>
    
    <?php 

?>
</body>
</html>
