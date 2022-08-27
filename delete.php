<?php

include "config.php";

 session_start();
    if(isset($_SESSION['username']))
  {

    $_SESSION['username'];
  


}else{
    header('location:login.php');
}


error_reporting(0);

$order_id=$_GET['oi'];



    $query="DELETE FROM articles WHERE order_id='$order_id'";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>alert('record deleted')</script>";
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Record deleted');
    window.location.href='adminarticles.php';
    exit();
    </script>");
    }else{
        echo"failed ";
    }
?>
