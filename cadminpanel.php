<?php
$filepath = realpath(dirname(__FILE__));
include_once ('../lib/Session.php');
?>


<!DOCTYPE html>
<html>
<title>Centre Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="apanel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<div class="sidebar" style="width:120px">
    <p>Centre  Zone</P>
    <?php if(isset($_SESSION['centreLogin'])): ?>     
  <a href="../welcome.php" class="w3-bar-item w3-button"><i class="fa fa-hom"></i> Home</a> 
  <a href="" class="w3-bar-item w3-button"><i class="fa fa-searc"></i> Signup</a> 
  <a href="" class="w3-bar-item w3-button"><i class="fa fa-envelop"></i> Exam</a> 
  <a href="pdfcreation.php" class="w3-bar-item w3-button"><i class="fa fa-glob"></i>Certificate</a>
  <a href="regview.php" class="w3-bar-item w3-button"><i class="fa fa-tras"></i> Report</a> 
  <a href="sadmission.php" class="w3-bar-item w3-button"><i class="fa fa-tras"></i> Admission</a> 
  <?php else: ?>

    <a href="" class="w3-bar-item w3-button"><i class="fa fa-glob"></i>Feedback</a>


    <?php endif; ?>
</div>
<div style="margin-left:70px">

<div class="header">
  <img src="vedayan(white).png"height='50px' width=auto>
    <div class="header-right">
    <?php if(isset($_SESSION['centreLogin'])): ?>
            <a class="ctive">Welcome, <?php echo htmlspecialchars($_SESSION['aname']); ?></a>
            <a href="?action=logout">Logout</a>
        <?php else: ?>
            <a href="index.php">Login</a>
        <?php endif; ?>
    
    <a href="../index.php">Student Zone</a>
    <a href="../admin">Admin</a>
    <a href=""></a>
  </div>
</div>

<div class="b1" style="padding-left:20px">
  
</div>

</div>
      
</body>
</html>


    </div>
</body>
</html>