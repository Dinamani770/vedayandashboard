<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/User.php');
    include 'adminpanel.php';
	$user = new User();
?>
<?php 
 if (isset($_GET['dis'])) {
 	$disid = (int)$_GET['dis'];
 	$disuser = $user->disableUser($disid);
 }

 if (isset($_GET['ena'])) {
 	$enaid = (int)$_GET['ena'];
 	$enauser = $user->enaUser($enaid);
 }
  if (isset($_GET['del'])) {
 	$delid = (int)$_GET['del'];
 	$deluser = $user->delUser($delid);
 }
?>
<html>
    <Style>
.ucontainer{
background:;
width:100%;
margin-left:200px;
}


</style>



    <div class="ucontainer">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Manage Users</h1>
                <br/>
            </div>


            <div class="col-lg-12">
                <table style="border: 1px solid black;">
                    <thead style="border: 1px solid black;">
                    <tr style="border: 1px solid black;">
                        <th>#</th>
                        <th>NAME</th>
                        <th>USERNAME</th>
                        <th>EMAIL</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>
                <tbody>
                    <?php
                    $userData = $user->getUserData();
                    if ($userData) {
                        $i = 0;
                        while ($result = $userData->fetch_assoc()) {
                            $i++;

                            ?>
                            <tr>
                                <td><?php
                                    if ($result['status'] == '1') {
                                        echo "<span class='error'>".$i."</span>";
                                    }else{
                                        echo $i;
                                    }


                                    ?></td>
                                <td style="border: 1px solid black;"><?php echo $result['name']; ?></td>
                                <td style="border: 1px solid black;"><?php echo $result['userName']; ?></td>
                                <td style="border: 1px solid black;"><?php echo $result['email']; ?></td>
                                <td style="border: 1px solid black;"><?php echo $result['status']; ?></td>
                                <td style="border: 1px solid black;">
                                    <a class="btn btn-danger" onclick="return confirm('Are you sure to Delete?')" href="?del=<?php echo $result['userId']; ?>">Remove</a>
                                    <a class="btn btn-danger" onclick="return confirm('Are you sure to Disable?')" href="?dis=<?php echo $result['userId']; ?>">Disable user</a>
                                    <a class="btn btn-danger" onclick="return confirm('Are you sure to Enable?')" href="?ena=<?php echo $result['userId']; ?>">Enaable user</a>
                                </td>
                            </tr>
                        <?php } } ?>
                <tbody>
                </table>
                
            </div>
            <a href="index.php" >back</a>
        </div>
    </div>
    

</html>





