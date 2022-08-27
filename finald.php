<?php
include "config.php";
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
<body class='main'>
    
    <nav class="navbar navbar-expand-xl fixed-top  navbar-dark bg-primary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
    <div class="logo"> <img  style="width:180px;height:60px;margin-bottom:5px;margin-top:-3px;" src="logo.png" alt="image"></div>
        </li>
        <li class="nav-item2">
          <a class="nav-link active" aria-current="page" href="editorindex.php"><button class='btn btn-outline-light'>Home</button></a>
        </li>
</ul>
    </div>
  </div>
</nav>
<div class="lmain">
          <div class="heading">Submit Article For confirmation</div>


            <form  class="form" name = "csubmit" enctype="multipart/form-data" action="" method="POST" >
           
          
            
           
 <div class="mb-3">
                <label for="formFile" class="lable">Upload File</label><br>
                <input class="upload" name="file" type="file" accept=".doc,.docx" id="formFile">
           </div> 
          
				
                <button type="submit" name="submit" class="butnn" >submit</button>
            
                

        </form>


</div>

</body>

<?php



if (isset($_POST['submit'])){

 $order_id=$_GET['oi'];

$galley_new = date("dmy") . time() . $_FILES["file"]["name"]; // New and unique name of uploaded file

$file=($_FILES['file']['name']);
$file_size=($_FILES['file']['size']);
$file_temp=($_FILES['file']['tmp_name']);
$file_store='galley/';
$date= date("y-m-d");


$sql= "UPDATE  articles Set galley='$file' , galley_new='$galley_new',galley_date='$date' where order_id=$order_id";
$result=mysqli_query($con,$sql);
 move_uploaded_file($file_temp,$file_store . $galley_new);
if($result){
   echo ("<script LANGUAGE='JavaScript'>
			window.alert('your final article is submitted for publishing');
			 window.location.href='editorarticles.php';
			</script>");
    // echo "<script>alert('your final article is submitted for publishing')</script>";
   
    }else{
        "something went wrong";
    }
}


?>
<style>

    .btn-outline-success {
    color: #fff;
    border-color: white;
}
</style>