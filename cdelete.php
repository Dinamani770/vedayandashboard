<?php
$con=mysqli_connect("localhost","root","","reg");
$id=$_GET['$did'];
echo $id;
$select="DELETE FROM centre WHERE ID=$id";
$data=mysqli_query($con,$select);
//$row=mysqli_fetch_array($data);
if($data)
{
echo "success";

}
else
{
    echo "Not success";
}
?>