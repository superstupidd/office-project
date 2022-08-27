<?php


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
            <title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>

<body class="edashbody">
<div class="wrapper">
        <!--Top menu -->
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>

        </div>
        <div class="sidebar">
         
            <!--menu item-->
            <ul>
               
            <li>
                    <a href="editorindex.php">
                        <span class="icon"><i class="fa fa-home"></i></span>
                        <span class="item"> Home</span>
                    </a>
                </li>
                
                 <li>
                    <a href="editorarticles.php">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">My article</span>
                    </a> 
                </li>
                <li>
                    <a href="logout.php" name="login">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item" >Logout</span>
                    </a>
                </li>
               
            </ul>
        </div>
    <!--  -->

  <!-- <div class="dashmain"> -->
  <div class="innerr">
  <h1 class="edashhead" >Submit Your Article Here..!!</h1>

 
   <!--<div class="uploadbox">-->
   <!-- <section id="featured-list">-->
   <!--     <li class="leadership">-->
   <!--         <a href="confirmd.php" title="confirmation Draft">-->
   <!--             <div class="innerr">-->
   <!--                      <div class="round-icon"><i class="fa fa-upload icons" style='color: yellow' aria-hidden="true"></i></div>-->
   <!--             </div>-->
   <!--             <h6>Upload confirmation Draft </h6>-->
   <!--         </a>-->
   <!--     </li>-->
   <!-- </section>-->
   <!--</div>-->
   

   <div class="uploadbox2">
    <section id="featured-list">
    <li class="leadership">
        <a href="finald.php" title="Final Draft">
            <div class="inner">
                     <div class="round-icon"><i class="fa fa-paper-plane" style='color: #7868E6' aria-hidden="true"></i></div>
            </div>
            <h6>Upload Final Draft </h6>
        </a>
    </li>
</section>
</div>

</div>

<script>
 var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
  </script>
</body>

<style>

.edashbody{
    background-color: #0E185F;
}

.edashhead{
margin-left: 35%;
color:white;
text-transform:uppercase;
}
/*.uploadbox{*/
    
/*    width:310px;*/
/*    height: 200px;*/
/*    margin-left: 35%;*/
/*    margin-top: 15%;*/
/*    background-color: white;*/
/*    box-shadow: 10px 10px 5px #000;*/
/*}*/
.uploadbox2{
   
    width:310px;
    height: 200px;
    margin-left:34%;
    margin-top:10%;
    background-color: white;
    box-shadow: 10px 10px 5px #000;

}
#featured-list { background-color:black; padding:40px 0px; position:relative; text-align:center;}

#featured-list  li { display:inline-block; padding:0px 1px; }

#featured-list  li .inner { width:100px; height:100px; border-radius:50%; border: 5px solid #eaeaea; display:table; margin:0px auto 15px auto; transition:-webkit-transform 0.25s ease-out,border-color 0.25s ease-out;transition:transform 0.25s ease-out,border-color 0.25s ease-out }

#featured-list  li:hover .inner { border-color:#7868E6; -webkit-transform:scale(1.1);transform:scale(1.1) }


#featured-list  li .inner .fa { font-size:48px; line-height:90px; }
#featured-list  li .innernew .fa { font-size:60px; line-height:90px; }

#featured-list  li .inner a { display:block; text-decoration:none; }

#featured-list  li .inner figure img { max-height:48px; }
#featured-list  li h6 { color:#000; margin:0px; text-transform:uppercase; font-size:12px; }

/* upload box 1 */

#featured-list { background:#fff; padding:40px 0px; position:relative; text-align:center;}
#featured-list  li { display:inline-block; padding:0px 1px; }

#featured-list  li .innerr { width:100px; height:100px; border-radius:50%; border: 5px solid #eaeaea; display:table; margin:0px auto 15px auto; transition:-webkit-transform 0.25s ease-out,border-color 0.25s ease-out;transition:transform 0.25s ease-out,border-color 0.25s ease-out }
#featured-list  li:hover .innerr { border-color:yellow; -webkit-transform:scale(1.1);transform:scale(1.1) }

#featured-list  li .innerr .fa { font-size:48px; line-height:90px; }
#featured-list  li .innernew .fa { font-size:60px; line-height:90px; }

#featured-list  li .innerr a { display:block; text-decoration:none; }

#featured-list  li .innerr figure img { max-height:48px; }
#featured-list  li h6 { color:#000; margin:0px; text-transform:uppercase; font-size:12px; }
</style>