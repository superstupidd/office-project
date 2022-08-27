<?php
include "config.php";

 session_start();
    if(isset($_SESSION['username']))
  {

    $_SESSION['username'];
  


}else{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Signup</title>
<link href="style.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>
<body class="main">

     <nav class="navbar navbar-expand-xl fixed-top navbar-dark bg-primary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
    <div class="logo"> <img  style="width:180px;height:60px;margin-bottom:5px;margin-top:-3px;" src="logo.png" alt="image"></div>
        </li>
        <li class="nav-item1">
          <a class="nav-link active" aria-current="page" href="admin.php"><button class='btn btn-outline-light'>Home</button></a>
        </li>
        <li class="nav-item2">
          <a class="nav-link active" href="adminarticles.php"><button class='btn btn-outline-light'>Articles</button></a>
        </li>
        
        <li class="nav-item4">
          <a class="nav-link active" href="allusers.php"><button class='btn btn-outline-light'>Users</button></a>
        </li>

       
        
    
      <li class="nav-item3">
          <a class="nav-link active" href="logout.php"><button class='btn btn-outline-danger'>Logout</button></a>
        </li>
</ul>
    </div>
  </div>
</nav>

<div class="lmain">
          <div class="heading">Sign Up</div>

         
            <form class="form" action="" method="POST" >

                <label class="lable">Userame:</label><br>
                <input class="for" type="username" placeholder=" username" name="username"><br>

                <label class="lable">Email:</label><br>
                <input class="for" type="email" placeholder=" email" name="email"><br>

                <label class="lable">Password:</label><br>
                <input class="for" type="password" placeholder=" password" name="password"><br>

			<label class="lable">User type</label><br>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
					<option value="editor">Editor</option>
			</select>
			
                <button type="signup" name="signup" class="butnn">Sign Up</button>
            
             

        </form>
        </div>

</div>


<?php

if (isset($_POST['signup'])){
$username=($_POST['username']);
$email=($_POST['email']);
$password=($_POST['password']);
$user_type=($_POST['user_type']);
$user_check = "SELECT * FROM users WHERE username = '$username' ";
    $res = mysqli_query($con, $user_check);
    if(mysqli_num_rows($res) > 0){
       echo '<script> alert( "Username  that you have entered is already exist!")</script>';
    }else{
        $user_check1 = "SELECT * FROM users WHERE email='$email'";
        $res1 = mysqli_query($con, $user_check1);
    if(mysqli_num_rows($res1) > 0){
        echo '<script> alert( "Email  that you have entered is already exist!")</script>';
   }else{
    
    $sql= "INSERT INTO users(username,email,password,user_type) VALUES ('$username','$email','$password','$user_type')";
    $result=mysqli_query($con,$sql);
    if($result){
        $_SESSION['username'] = $username;
      echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login Now');
        window.location.href='admin.php';
        </script>");
    }else{
        echo"something went wrong";
}
    }
}
}

?>
<style>
    .lmain{
width:500px;
height:500px;

box-shadow: black 12px 12px 7px ;
margin-left:35% ;
margin-top: 10%;
margin-bottom:10px;
/*background-color:#cfd2cf;*/
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(255,255,255,1) 0%, rgba(0,150,255,0.5184574073770133) 100%);
padding:1px;
    
}
.btn-outline-success {
    color: #fff;
    border-color: white;
}
</style>
