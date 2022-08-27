<?php
session_start();

 if(isset($_SESSION['username']))
  {

   $_SESSION['username'] ;
  }else{
      header('location:login.php');
  }
 

$order_id=$_GET['oi'];
?>
<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Add comment</title>
<link href="style.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="main">
 <nav class="navbar navbar-expand-xl fixed-top  navbar-dark bg-primary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
    <div class="logo"> <img  style="width:180px;height:60px;margin-bottom:5px;margin-top:-3px;" src="logo.png" alt="image"></div>
        </li>
        <li class="nav-item2">
          <a class="nav-link active" aria-current="page" href="articles.php"><button class='btn btn-outline-light'>Home</button></a>
        </li>
</ul>
    </div>
  </div>
</nav>
<div class='lmain'>
          <div class="heading"><h2 class="ssign">Add Comment</h2></div>

         
            <form  class="form" name = "submit" enctype="multipart/form-data" action="" method="POST" >
           
            <div class="form-group">
    
                <label class="lable">Comment</label><br>
                <input class="for" id="comment" type="text" placeholder="comment " name="comment">
            </div>
            
            <div class="mb-3">
                <label for="formFile" class="lable">Upload File</label><br>
                <input class="upload" name="file" type="file" id="formFile" required>
           </div> 
           
          <p class='info' style="color:blue">If you think article is Ready to Publish.<br>Check this Box </p>
          <div class="formm">
  <input id="check" class="  option-input checkbox form-check-input" type="checkbox" name="check" value="Final"  onclick="EnableDisableTextBox(this)" checked=''>
 
</div>
				
                <button type="submit" name="add" class="butnn" >Add</button>
            
                

        </form>


</div>

</body>
	

<?php
    
// $order_id=$_GET['oi'];

include "config.php";



if (isset($_POST['add'])){

$comment=($_POST['comment']);
 $check=($_POST['check']);
 $file_new_name = date("dmy") . time() . $_FILES["file"]["name"]; // New and unique name of uploaded file

$file=($_FILES['file']['name']);
$file_size=($_FILES['file']['size']);
$file_temp=($_FILES['file']['tmp_name']);
$file_store='confirm/';
$date= date("y-m-d");
move_uploaded_file($file_temp,$file_store . $file);

if(!empty($comment)){

        $sql= "UPDATE articles set comments='$comment', usercfile='$file', comdate='$date' where order_id='$order_id' ";

        $result=mysqli_query($con,$sql);
         if($result){
           $sql1="INSERT into confirm(order_id,comments,comdate,cfile) values ('$order_id','$comment','$date','$file') ";
        $resultt=mysqli_query($con,$sql1);
         if($resultt){

          echo ("<script LANGUAGE='JavaScript'>
        window.alert('Your comment is added');
        window.location.href='articles.php';
        </script>");
         }
         }
         }elseif(!empty($check)){
               $sql2= "UPDATE articles set comments='$check', usercfile='$file',comdate='$date' where order_id='$order_id' ";
        $result1=mysqli_query($con,$sql2);
        if($result1){
        
           $sql3="INSERT into confirm(order_id,comments,comdate,cfile) values ('$order_id','$check','$date','$file') ";
        $resulttt=mysqli_query($con,$sql3);
         if($resulttt){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Your comment is added');
        window.location.href='articles.php';
        </script>");
         }
            
            }
           }else{
                  "something went wrongg";
            }
}



?>
<script type="text/javascript">
    function EnableDisableTextBox(check) {
        var comment = document.getElementById("comment");
        comment.disabled = check.checked ?  true : false;
        if (!comment.disabled) {
        comment.focus();
        }
    }
</script>
<script type=text/javascript>
  document.getElementById("check").checked = false;
</script>

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

.form-group{
    margin-top: 20px;
    margin-bottom: 10px;
    

}
.info{
    margin-left:-80px;
}
.option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 13.33333px;
  right: 0;
  bottom: 0;
  left: 0;
  height: 40px;
  width: 40px;
  transition: all 0.15s ease-out 0s;
  background: #cbd1d8;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  margin-right: 0.5rem;
  outline: none;
  position: relative;
  z-index: 1000;
}
.option-input:hover {
  background: #9faab7;
}
.option-input:checked {
  background: #0d6efd;
}
.option-input:checked::before {
  width: 40px;
  height: 40px;
  display:flex;
  /*content: '\f00c';*/
  font-size: 25px;
  font-weight:bold;
  position: absolute;
  align-items:center;
  justify-content:center;
  font-family:'Font Awesome 5 Free';
}
.formm{
   


margin-top: -10px;
margin-bottom: 15px;
margin-left:-28%;


}
/*.inputfile {*/
/*	width: 0.1px;*/
/*	height: 0.1px;*/
/*	opacity: 0;*/
/*	overflow:visible;*/
/*	position: absolute;*/
/*	z-index: -1;*/
/*}*/
</style>