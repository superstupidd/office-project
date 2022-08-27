<?php


 session_start();
    if(isset($_SESSION['username']))
  {

    $_SESSION['username'];
  


}else{
    header('location:login.php');
}

include ("config.php");

error_reporting(0);

$order_id=$_GET['oi'];


?>


<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Edit</title>
<link href="style.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
    <body class="main">
      <nav class="navbar navbar-expand-xl fixed-top navbar-dark bg-primary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><button class='btn btn-outline-light'>Home </button></a>
        </li>
       
</ul>
    </div>
  </div>
</nav>

            <div class="lmain" >
        <h2 class="heading">Update</h2>
        
         
        <form action="" method="POST" >
         
             
            <div class="form-group">
    
                <label class="lable">Journal Name:</label><br>
                <input class="for"  type="text" placeholder="journal  name" name="journal_name" required>
            </div>
            
            
            
            <div class="form-group">
                <label class="lable">Article title:</label><br>
                <input class="for"  type="text" placeholder=" Article title" name="article_title" required>
            </div>
              
            <div class="form-group">
                <label class="lable">Volume</label><br>
                <input class="for"  type="text" placeholder=" volume" name="volume" required>
            </div>


				 <div class="form-group">
                <button type="submit" name="submit" class="butnn"  >Submit</button>
            </div>
                
               
        </form>
        

</div>
<?php 




if(isset($_POST['submit'])){
   
  
     $journal_name=($_POST['journal_name']);
    $article_title=($_POST['article_title']);
    $volume=($_POST['volume']);
   
    $query= ("UPDATE articles set journal_name ='$journal_name' , article_title='$article_title',volume='$volume' where order_id='$order_id' ");

    $updat =mysqli_query($con,$query);
    
    if($updat){

       
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='articles.php';
    </script>");
    }else{
        echo"<script>alert('failed to update')</script>";
    }
}
?>
<style>
   
    .form-group{
    margin-top: -30px;
    margin-bottom: 30px;
    margin-left:125px;
    

}
.btn-outline-success {
    color: white;
    border-color: white;
}
</style>
