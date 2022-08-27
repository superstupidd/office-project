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
     use PHPMailer\PHPMailer\PHPMailer;
 $order_id=$_GET['oi'];

if (isset($_POST['submit'])){

$file_new_name = $_FILES["file"]["name"]; // New and unique name of uploaded file

$file=($_FILES['file']['name']);
$file_size=($_FILES['file']['size']);
$file_temp=($_FILES['file']['tmp_name']);
$file_store='confirm/';
$date= date("y-m-d");

   

$sql= "UPDATE  articles Set confirm='$file',cdate='$date' where order_id=$order_id";
$result=mysqli_query($con,$sql);
move_uploaded_file($file_temp,$file_store . $file);
if($result){
 $sqll="INSERT into editorcfile (order_id,confirm,cdate) VALUES ('$order_id','$file','$date')";
$resultt=mysqli_query($con,$sqll);
if($resultt){
      $query1=("SELECT username from articles where order_id ='$order_id' LIMIT 1");
         $update=mysqli_query($con,$query1);
         $result1=mysqli_fetch_assoc($update);
          if($result1){
             $result1['username'];
            // $update1;
        //   }
   
    // echo "<script>alert('your article is submitted for user confirmation')</script>";
    
         $query=("SELECT email from users where username ='" . $result1['username']. "' LIMIT 1");
         $update1=mysqli_query($con,$query);
         $result2=mysqli_fetch_assoc($update1);
          if($result2){
            //  $update['email']  ;
           $result2['email'];
        //   }

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    // $mail->SMTPDebug =3;
    $mail->Host = "mklik.org";
    $mail->SMTPAuth = true;
    $mail->Username = "info@mklik.org";
    $mail->Password = "119888978@1a";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings

    $mail->isHTML(true);
    $mail->setFrom("info@mklik.org", "IJRDO");
    $mail->addAddress(   $result2['email'] );
    $mail->Subject = "Ready for Recheck";
    $mail->Body = ("your article order id: $order_id.<br> file name:$file <br>Ready for Recheck.  Please check and Add comments here <br>http://mklik.org/admin/  ");
                  

    if($mail->send()){
    
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Succesfully Updated');
        window.location.href='editorindex.php';
        </script>");
     
    
    }
          }
    else{
      echo "Mailer Error: " . $mail->ErrorInfo;
        
    }
     
          
          
}else{
    echo "something went wrong";
    }
   
}else{
echo "something went wrong";
}
}

}


?>
<style>

    .btn-outline-success {
    color: #fff;
    border-color: white;
}
</style>