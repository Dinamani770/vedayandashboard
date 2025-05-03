<?php include 'inc/header.php';
include '../classes/centre.php';
include 'cadminpanel.php';
?>
<?php
 // Session::checkcentreSession();
 $user= new Centre();
  $studentId = Session::get("89");
  echo $studentId;
?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$studentProfile = $user->getstudentPData($studentId, $_POST);
}
?>


    <div class="container" style="margin-left:400px;">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Update student Profile</h1>
                <?php
                echo $studentId;
                ?>
                <?php
                if (isset($studentProfile)) {
                    echo $studentProfile;
                }
                ?>
                <br/>
            </div>


            <div class="col-lg-4">

                
                
            </div>

            <div class="col-lg-4">
                <form action="" method="post">
                    <?php
                    $getData = $user->getstudentProfile($studentId);
                    if ($getData) {
                        while ($result = $getData->fetch_assoc()) {
                            ?>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" class="form-control" name="name" value="<?php echo $result['sname']; ?>" id="sname"></td>
                                </tr>
                                <tr>
                                    <td>Address </td>
                                    <td><input type="text" class="form-control" name="address" value="<?php echo $result['address']; ?>" id="address"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input name="email" class="form-control" type="email" value="<?php echo $result['email']; ?>" id="email"></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    
                                    <td><input type="submit" id="profileUpdate" class="btn btn-info" value="Update Info">
                                    </td>
                                </tr>
                            </table>
                        <?php }  } ?>
                        
                </form>
            </div>

            <div class="col-lg-4">

            </div>
        </div>
    </div>

<?php include 'inc/footer.php'; ?>