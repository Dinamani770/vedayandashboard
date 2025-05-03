<?php
$filepath = realpath(dirname(__FILE__));
//include_once ($filepath.'/inc/header.php');
include_once ($filepath.'/../lib/Database.php');
$db= new Database();

?>
<button class"adddata my-5" ><a href="index.php" >Back</a></button>
<br><br>
<table border="1px" cellpadding="10px" cellspacing="0" action="update.php",method="get">
 <thead>
<tr>
<td>ID</td>
<td>Name</td>
<td>phone</td>
<td>centre</td>
<td>state</td>
<td>Date of Birth</td>
<td>Email</td>
<td>Gendre</td>
<td>Marital Status</td>
<td>Course</td>
<td>Qualification</td>
<td colspan="2">Action</td>
</tr>
</thead>
<tbody>
    <?php
    $query="SELECT * FROM admission";
    $data=$db->select($query);
    $result=mysqli_fetch_assoc($data);
    /*echo $result['sname'];*/
    while($result=mysqli_fetch_assoc($data))
    {
?>
<tr>
<td><?php echo $result['id'];?></td>
<td><?php echo $result['sname'];?></td>
<td><?php echo $result['phone'];?></td>
<td><?php echo $result['centre'];?></td>
<td><?php echo $result['state'];?></td>
<td><?php echo $result['dob'];?></td>
<td><?php echo $result['email'];?></td>
<td><?php echo $result['gendre'];?></td>
<td><?php echo $result['mstatus'];?></td>
<td><?php echo $result['course'];?></td>
<td><?php echo $result['qualification'];?></td>
<td><button name="update"><a href="update.php?$uid=<?php echo $result['id'];?>">Update</a></button>
<td><button name="delete"><a href="delete.php?$did=<?php echo $result['id'];?>">Delete</a></button>
</tr>
<?php
}
?>
<td>
</td>
</tbody>
</table>
<?php
/*$query="SELECT * FROM record";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
echo $result['sname'];*/
?>


    