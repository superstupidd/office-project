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
<style>
table, th, td {
    border: 1px solid white;
}
th{
    background-color:coral;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="style.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Home</title>
    
</head>
<body class="main">
   <nav class="navbar navbar-expand-xl fixed-top navbar-dark bg-primary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
    <div class="logo"> <img  style="width:180px;height:60px;margin-bottom:5px;margin-top:-3px;" src="logo.png" alt="image"></div>
        </li>
         <li class="nav-item0">
          <?php   echo'Hello ,' .$_SESSION['username']; ?>
        </li>
        <!--<li class="nav-item1">-->
        <!--  <a class="nav-link active" aria-current="page" href="#"><button class='btn btn-outline-success'>Home </button></a>-->
        <!--</li>-->
          <li class="nav-item1">
          <a class="nav-link active" href="adminarticles.php"><button class='btn btn-outline-light'>Articles</button></a>
        </li>
        <li class="nav-item2">
          <a class="nav-link active" href="adminsubmit.php"><button class='btn btn-outline-light'>Submit</button></a>
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
    <div class="adminmain"> <img  style="width:800px;height:400px;" src="welcomed.jpg" alt="image"></div>
 
</body>
</html>
<style>
.divlink{
        margin-top:20px;
        margin-bottom:20px;
        /* margin-left:10px; */
}
.link{
        border:1px solid black;
        border-radius:2rem;
        padding:2px;
        background-color:white;
        color:black;
        text-decoration:none;
    }
    .link:hover{
        color:white;
        background-color:blue;
    }

     .btn-outline-success {
    color: #fff;
    border-color: white;
}
.nav-item0{
    position:fixed;
    font-family:"Comic Sans MS ","Comic Sans", cursive;
    left:60%;
    margin-top:14px;
    color:#fff;
    font-size:20px;
        /*align-items:centre;*/

}

</style>