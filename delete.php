<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/inc/header.php');
include_once ($filepath.'/../lib/Database.php');
$db= new Database();

$con=mysqli_connect("localhost","root","","reg");
$id=$_GET['$did'];
echo $id;
$select="DELETE FROM admission WHERE id=$id";
$data=$db->delete($select);
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