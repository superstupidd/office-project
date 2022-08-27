<?php
include ("config.php");

error_reporting(0);

$id=$_GET['oi'];



    $query="DELETE FROM users WHERE id='$id'";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>alert('User deleted successfully')</script>";
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Record deleted');
    window.location.href='allusers.php';
    </script>");
    }else{
        echo"failed ";
    }

?>