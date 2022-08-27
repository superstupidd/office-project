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
          <div class="heading">Submit Published Article</div>


            <form  class="form" name = "csubmit" enctype="multipart/form-data" action="" method="POST" >
           
          
            
           
 <div class="mb-3">
                <label for="formFile" class="lable">Upload File</label><br>
                <input class="upload" name="file" type="file" accept=".doc,.docx" id="formFile">
           </div> 
            <br>
                <label class="lable">Remark</label><br>
                <input class="for"  type="remark" placeholder=" remark" name="remark" required>
            
          
				
                <button type="submit" name="submit" class="butnn" >submit</button>
            
                

        </form>


</div>

</body>
<?php 



 
                
// use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])){
     
$galley_new = date("dmy") . $_FILES["file"]["name"]; // New and unique name of uploaded file

$file=($_FILES['file']['name']);
$file_size=($_FILES['file']['size']);
$file_temp=($_FILES['file']['tmp_name']);
$file_store='galley/';

$date= date("y-m-d");
$remark=($_POST['remark']); 
$status='PUBLISHED';


    $query= ("UPDATE articles set published='$file',published_new='$galley_new',linkd='$date',status='$status',remark='$remark' where order_id='$order_id' ");
    $update =mysqli_query($con,$query);
 move_uploaded_file($file_temp,$file_store . $galley_new);

   if($update){
       echo ("<script LANGUAGE='JavaScript'>
                window.alert('Succesfully Updated');
            window.location.href='adminarticles.php';
			</script>");
        //  $query2=("SELECT username from articles where order_id='$order_id' LIMIT 1");
//          $update2=mysqli_query($con,$query2);
//          $result=mysqli_fetch_assoc($update2);
//           if($result){
//              $result['username']  ;
//   }
   
//     if($update2){
//       $query3=("SELECT email from users where username ='" . $result['username'] . "' LIMIT 1");
//          $update3=mysqli_query($con,$query3);
//          $resultt=mysqli_fetch_assoc($update3);
//           if($resultt){
//              $resultt['email']  ;
          
//     require_once "PHPMailer/PHPMailer.php";
//     require_once "PHPMailer/SMTP.php";
//     require_once "PHPMailer/Exception.php";

//     $mail = new PHPMailer();

//     //smtp settings
//     $mail->isSMTP();
//     $mail->SMTPDebug =3;
//     $mail->Host = "mklik.org";
//     $mail->SMTPAuth = true;
//     $mail->Username = "info@mklik.org";
//     $mail->Password = "119888978@1a";
//     $mail->Port = 465;
//     $mail->SMTPSecure = "ssl";

//     //email settings

//     $mail->isHTML(true);
//     $mail->setFrom("info@mklik.org", "IJRDO");
//     $mail->addAddress( $resultt['email']);
//     $mail->Subject = "Article Published";
//     $mail->Body = "your article is Published . order id : $order_id is published and link : <a>$link</a>";
                  

//     if($mail->send()){
    
//         echo ("<script LANGUAGE='JavaScript'>
//         window.alert('Succesfully Updated');
//         window.location.href='adminarticles.php';
//         </script>");
     
    
//     }else{
//       echo "failed";
        
//         }
        
//           }
     
  }else{
             
       echo 'something went wrong';
     }  

}

// }
?>
<style>

.btn-outline-success {
    color: #fff;
    border-color: white;
}
</style>
