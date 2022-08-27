<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}
include ("config.php");

error_reporting(0);

$id=$_GET['oi'];


?>


<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title> Edit user</title>
<link href="style.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
    <body class="main">
           <nav class="navbar navbar-expand-xl fixed-top navbar-dark bg-primary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php"><button class='btn btn-outline-light'>Home</button></a>
        </li>
</ul>
    </div>
  </div>
</nav>
        
            <div class="lmain" style="margin-left:40%">
        <h2 class='heading'>Change username & password </h2>
        
         
        <form action="" method="POST" >
            
              
            <div class="form-group">
                <label class="lable">Username</label><br>
                <input class="for"  type="Username" placeholder=" Username" name="username" >
            </div>

           

           <div class="form-group">
                <label class="lable">New password</label><br>
                <input class="for"  type="password" placeholder=" password" name="password" required>
            </div>
 <div class="form-group">
				
                <button type="submit" name="submit" class="butnn"  >Submit</button>
            
                            </div>

               
        </form>
        

</div>
<?php 


if (isset($_POST['submit'])){
    $username= ($_POST['username']); 
    $new_pass=($_POST['password']);
     $query=("UPDATE users set username='$username',password='$new_pass' where id='$id'");
         $update=mysqli_query($con,$query);
        if($update){
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('User updated successfully');
    window.location.href='allusers.php';
    </script>");
        }else{
            echo"failed to update";
        }
}
?>
<style>
    
    .btn-outline-success {
    color: white;
    border-color: white;
}

.form-group{
    margin-bottom:30px;
    margin-left:135px;
    margin-top:10px;
}
</style>
