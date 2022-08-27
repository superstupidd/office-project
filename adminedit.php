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


?>


<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Admin Edit</title>
<link href="style.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
    <body class="main">
 <nav class="navbar navbar-expand-xl fixed-top navbar-dark bg-primary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php"><button class='btn btn-outline-light'>Home </button></a>
        </li>
       
</ul>
    </div>
  </div>
</nav>
        
            <div class="lmain" >
        <h2 class="heading">Update</h2>
        
         
        <form action=""  class="form" method="POST" >
            
              
                <label class="lable">Link</label><br>
                <input class="for"  type="link" placeholder=" link" name="link" required><br>

           

                <label class="lable">Remark</label><br>
                <input class="for"  type="remark" placeholder=" remark" name="remark" required>

                <button type="submit" name="submit" class="butnn"  >Submit</button>
            
                
               
        </form>
        

</div>
<?php 



 
                
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])){
     
    $link=($_POST['link']);
    $date= date("y-m-d");

    $remark=($_POST['remark']); 
    $status='PUBLISHED';
    
    $query= ("UPDATE articles set link ='$link' ,status ='$status',linkd='$date', remark='$remark' where order_id='$order_id' ");
    $update =mysqli_query($con,$query);
    
   if($update){
         $query2=("SELECT username from articles where order_id='$order_id' LIMIT 1");
         $update2=mysqli_query($con,$query2);
         $result=mysqli_fetch_assoc($update2);
          if($result){
            echo $result['username']  ;
   }
   
    if($update2){
       $query3=("SELECT email from users where username ='" . $result['username'] . "' LIMIT 1");
         $update3=mysqli_query($con,$query3);
         $resultt=mysqli_fetch_assoc($update3);
          if($resultt){
            echo $resultt['email']  ;
          
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->SMTPDebug =3;
    $mail->Host = "mklik.org";
    $mail->SMTPAuth = true;
    $mail->Username = "info@mklik.org";
    $mail->Password = "119888978@1a";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings

    $mail->isHTML(true);
    $mail->setFrom("info@mklik.org", "IJRDO");
    $mail->addAddress( $resultt['email']);
    $mail->Subject = "Article Published";
    $mail->Body = "your article is Published . order id : $order_id is published and link : <a>$link</a>";
                  

    if($mail->send()){
    
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Succesfully Updated');
        window.location.href='adminarticles.php';
        </script>");
     
    
    }else{
       echo "failed";
        
        }
     
             
     }
     
  
    
    
        
   
       
      
}else{
             
       echo 'something went wrong';
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