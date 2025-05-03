<?php
include 'wadminpanel.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="container mt-3">
    
  <h1 style="text-align: center;">Wel Come to Admin Panel</h1>
  <im src="background.jpg" height="400px" width=auto>
  <h2 style="text-align: center;">Lets Enter to Admin Panel</h2>
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" style="display: block;
    margin: auto;">
     Login to Start Working
    
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="index.php">Student Exam Panel</a></li>
      <li><a class="dropdown-item" href="sregd/index.php">Centre Panel</a></li>
      <li><a class="dropdown-item" href="Admin/">Admin Panel</a></li>
    </ul>
  </div>
  
</div>
</body>
</html>
