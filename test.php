

<?php 

include_once 'lib/Database.php';
include_once 'inc/header.php';
include_once 'classes/centre.php';
?>
<?php

$db= new Database();
 
?>
<?php 
?>
    <div class="container" style="margin-left:400px;">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Enter Roll No</h1>
                <form action="test.php" method="post">
                <Input type="text" name="studentroll">
                <input type="submit" name="submit" value="submit">
                </form>
                
              <?php  
              $roll=$_POST["studentroll"];
              
              $sql = "SELECT * FROM admission WHERE rollno = '$roll'";
              $data = $db->select($sql); // Example tabl
              

                if (!empty($data)) {
                    foreach ($data as $row) {
                        //echo "User: " . $row['sname'] . "<br>";
                    }
                } else {
                    echo "No records found.";
                }
                
                ?>
                <br/>
            </div>


            <div class="col-lg-4">

                
                
            </div>

            <div class="col-lg-4">
                <form action="" method="pst">
                    <?php ?>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" class="form-control" name="sname" value="<?php echo $row['sname']; ?>" id="name"></td>
                                </tr>
                                <tr>
                                    <td>Parents Name </td>
                                    <td><input type="text" class="form-control" name="pname" value="<?php echo $row['pname']; ?>" id="userName"></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>State </td>
                                    <td><input type="text" class="form-control" name="pname" value="<?php echo $row['state']; ?>" id="userName"></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td> Centre </td>
                                    <td><input type="text" class="form-control" name="pname" value="<?php echo $row['centre']; ?>" id="userName"></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Course </td>
                                    <td><input type="text" class="form-control" name="pname" value="<?php echo $row['course']; ?>" id="userName"></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Address </td>
                                    <td><input type="text" class="form-control" name="pname" value="<?php echo $row['address']; ?>" id="userName"></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Date of Registration </td>
                                    <td><input type="text" class="form-control" name="pname" value="<?php echo $row['dor']; ?>" id="userName"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input name="email" class="form-control" type="email" value="<?php echo $row['email']; ?>" id="email"></td>
                                </tr>
<Br><br>
                                <tr>
                                    <td></td>
                                    
                                    <td><a href="welcome.php"> Back
                                    </td>
                                </tr>
                            </table>
                        <?php  ?>
                        
                </form>
            </div>

            <div class="col-lg-4">

            </div>
        </div>
    </div>

