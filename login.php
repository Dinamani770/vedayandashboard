<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/inc/loginheader.php');
include_once ($filepath.'/../classes/asso.php');
include_once ('cadminpanel.php');
$ad = new Associate();
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $centreData = $ad->getcentreData($_POST);
}
?>
<hrml>
<head>
    <style>
.container .col-lg-6{
    background-color: rgb(123, 198, 240);
	display: flex;             /* Enables Flexbox */
            justify-content: center;   /* Centers items horizontally */
            align-items: center;  
  text-align: center;
  height:450px;
  width:500px;
  margin:auto;
  margin-top:10px;
  border:5px;
}

.container .col-lg-6 .form-group label{
    //background:blue;
    color: white;
padding:10px;
display: block; /* Makes labels appear on separate lines */
            margin-bottom: 10px;
}
.container .col-lg-6 .form-group input{
    background:white;
    color: black;
padding:10px;
display: block; /* Makes labels appear on separate lines */
            margin-bottom: 10px;
            margin: 0 auto;    /* Centers it horizontally */
            width: 400px;
}
.container .col-lg-6 button{
    background:orange;
    color: black;
padding:10px;
font-size: 20px;
display: block; /* Makes labels appear on separate lines */
            margin-bottom: 10px;
            margin: 0 auto;    /* Centers it horizontally */
            width: 200px;
}
</style>
<head>

    <div class="container">
        
            <div class="col-lg-6">
                <form action="" method="post">
                <h1 class="mt-5">Centre - Administration Panel</h1> <br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" name="centreUser" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="centrePass" class="form-control" placeholder="Enter Password">
                    </div><br><br>
                    <button type="submit" name="entreLogin" value="Login" class="btn btn-danger">Log In</button><br><br>
                    <button type="submit" name="Home" value="Home" class="btn btn-danger"><a href="../welcome.php">Home</button>
                </form>
                <br/>
                <span class="empty" style="display: none;">Fields must not be empty</span>
					<span class="disable" style="display: none;">User ID Disable!</span>
					<span class="error" style="display: none;">Email or Password did not match.</span>
                <?php/*
                if (isset($adminData)) {
                    echo $adminData;
                }
                */
                ?>
            </div>

            
        </div>
    </div>
</html>