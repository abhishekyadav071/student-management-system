 
<?php
/*Including connection file*/
include("connect.php");
/*Getting rid from previous page*/
$id=$_REQUEST['id'];
/*SQL query of delete*/
$qry="delete from reg where id='$id'";
/*Executing SQL query*/
$sql=mysqli_query($con,$qry);
if($sql)
/*calling display page*/
header("location:viewdel.php");
?>
