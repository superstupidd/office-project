<?php
session_start();

if(isset($_SESSION['username']))
{

$_SESSION['username'] ;
}else{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Submit Article</title>
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
          <a class="nav-link active" aria-current="page" href="index.php"><button class='btn btn-outline-light'>Home </button></a>
        </li>
       
       <li class="nav-item2">
          <a class="nav-link active" href="articles.php"><button class='btn btn-outline-light'>Articles</button></a>
        </li>

       <li class="nav-item3">
          <a class="nav-link active" href="logout.php"><button class='btn btn-outline-danger'>Logout</button></a>
        </li>
</ul>
    </div>
  </div>
</nav>
    


<div class="lmain">
          <div class="heading"><b>Submit Article</b></div>

         
            <form  class="form" name = "submit" enctype="multipart/form-data" action="" method="POST" >
           
            <div class="form-group">
    
                <label class="lable">Journal Name:</label><br>
                <input class="for" type="text" placeholder="journal  name" name="journal_name" required>
            </div>
            
            <div class="form-group">
                <label class="lable">Backdate/volume/issue:</label><br>
                <input class="for" type="text" placeholder=" Backdate/volume/issue" name="volume"required >
            </div>
            
            <div class="form-group">
                <label class="lable">Article Title:</label><br>
                <input class="for" type="text" placeholder=" Article title" name="article_title" required>
            </div>

            <div class="mb-3">
                <label for="formFile" class="lable">Upload File</label><br>
                <input class="upload" name="file" type="file" accept=".doc,.docx" id="formFile">
           </div> 
           <input class="upload" name="status" type="hidden" id="status" value="PENDING">
				
                <button type="submit" name="submit" class="butnn" >Submit</button>
            
                

        </form>


</div>

</body>
	

    <?php
include "config.php";



if (isset($_POST['submit'])){
$username= $_SESSION['username']; 
$journal_name=($_POST['journal_name']);
$volume=($_POST['volume']);
$article_title=($_POST['article_title']);
$status=($_POST['status']);

$file_new_name = $_FILES["file"]["name"]; // New and unique name of uploaded file
$file=($_FILES['file']['name']);
// $file_type=($_FILES['file']['type']);
$file_size=($_FILES['file']['size']);
$file_temp=($_FILES['file']['tmp_name']);
$file_store='file/';
$date= date("y-m-d");


 move_uploaded_file($file_temp,$file_store . $file_new_name);


$sql= "INSERT INTO articles (username,journal_name,volume,article_title,file,Date,new_name,size,status) VALUES ('$username','$journal_name','$volume','$article_title','$file','$date','$file_new_name','$file_size','$status')";
$result=mysqli_query($con,$sql);
if($result){
   
   
    
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('your article is submitted');
               window.location.href='articles.php';

        </script>");
   
    }else{
        "something went wrong";
    }

}

?>
<style>
    .lmain{
width:500px;
height:630px;

box-shadow: black 12px 12px 7px ;
margin-left:35% ;
margin-top: 10%;
margin-bottom:10px;
/*background-color:#cfd2cf;*/
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(255,255,255,1) 0%, rgba(0,150,255,0.5184574073770133) 100%);
padding:1px;
 box-shadow: black 12px 12px 7px ;
    /*margin:10% 40% 20% 20% ;*/
    
}
 .btn-outline-success {
    color: #fff;
    border-color: white;
}

 .navbar{
        width:118%;
          overflow: hidden;
          /*padding-bottom:3.5rem;*/
/**/
    }
    .lable{
color:grey;
margin-top:0px;
font-style: bold;
margin-left:-28%;

}

</style>