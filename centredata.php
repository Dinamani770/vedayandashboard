<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Centre.php');
	$exam = new Centre();
?>

<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   	  $addQuestion = $exam->centreRegistion($_POST);
   }
   // Get Total
   $total = $exam->getTotalRows();
   $next = $total+1;
?>

<a href="index.php">Back</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Add Questions</h1>
               <?php
              if (isset($addQuestion)) {
                echo $addQuestion;}?>
                <br/>
            </div>


            <div class="col-lg-3">
                

            </div>

            <div class="col-lg-6">
                <form action="" method="post" name="tbl_centre">
                    <table>
                        <tr>
                            <td>
                                Registration
                            </td>
                            <td> : </td>
                            <td width="80%"><input class="form-control" readonly type="number" name="phone" value="phone">
                                

                                                                </td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td> : </td>
                            <td width="80%"><input class="form-control" type="text" name="address" placeholder="Enter Question" required></td>
                        </tr>
                        <tr>
                            <td>Associate name</td>
                            <td> : </td>
                            <td width="80%"><input class="form-control" type="text" name="aname" placeholder="Enter choice no 1"></td>
                        </tr>
                        <tr>
                            <td>User name</td>
                            <td> : </td>
                            <td width="80%"><input class="form-control" type="text" name="centreUser" placeholder="Enter choice no 2"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td> : </td>
                            <td width="80%"><input class="form-control" type="text" name="centrePass" placeholder="Enter choice no 3"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td> : </td>
                            <td width="80%"><input class="form-control" type="text" name="email" placeholder="Enter choice no 4"></td>
                        </tr>
                        <tr>
                            <td>Correct No</td>
                            <td> : </td>
                            <td width="80%"><input class="form-control" type="number" name="rightAns" min="1" max="4" required="1"></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="3"><input type="submit" class="btn btn-success" value="Submit Question"></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="col-lg-3">

            </div>
        </div>
    </div>

<?php include '../inc/footer.php'; ?>