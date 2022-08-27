<?php

error_reporting(0);




?>

<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
            <title>Articles</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>
<body class='main'>

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
          <a class="nav-link active" href="submit.php"><button class='btn btn-outline-light'>Submit</button></a>
        </li>

       
        
        
      <form class="d-flex" method="POST" role="search" name="search" action="usersearch.php">
        <input class=" form-control  me-2" type="text" name="article" placeholder='order id,article,journal,status' aria-label="Search">
        <button class="btn btn-outline-light"  name="search" type="search">Search</button>
      </form>
      <li class="nav-item3">
          <a class="nav-link active" href="logout.php"><button class='btn btn-outline-danger'>Logout</button></a>
        </li>
</ul>
    </div>
  </div>
</nav>
<div class="list">



        

<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}
include ("config.php");



$uploaduser = $_SESSION['username'];
// $sql=" SELECT order_id,username,journal_name,article_title,link,volume,confirm,cdate,comments,status,galley,galley_date,remark,file FROM articles WHERE  username ='$uploaduser' order by 'order_id' DESC LIMIT 0,50";
$sql="SELECT * FROM articles where username='$uploaduser' order by order_id DESC LIMIT 0,50";

$resultt =mysqli_query($con,$sql);
$total=mysqli_num_rows($resultt);
if($total!=0){
    ?><div class='tabl'><?php echo"<table>
    <tr>
			
             <th ><b>ID</b></th>
			<th><b>Journal</b></th>
            <th><b>Article</b></th>
            <th><b>Volume</b></th>
            <th><b>Link</b></th>
            <th><b>Status</b></th>
            <th><b>Remark</b></th>
            <th><b>User file </b></th>
            <th><b>Editor file </b></th>
            <th><b>comments</b></th>
                            <th><b>Galley Proof</b></th>

            <th><b>Operation</b></th>
            



			
		</tr>";
}
while($result=mysqli_fetch_assoc($resultt)){
echo" 
     <tr>
          <td> ".$result['order_id']." </td>
          
          <td > ".$result['journal_name']."</td>
          <td > ".$result['article_title']." </td>
          <td> ".$result['volume']." </td>
           <td><a  href=".$result['link']." style='color:black'> ".$result['link']." </a><br> <p style='color:red'> ".$result['linkd']."</p></td>

          <td> ".$result['status']."</td>
          <td> ".$result['remark']." </td>
                <td> ".$result['file']." <br><a href='allcfileforuser.php?oi=$result[order_id]' style='color:green'>prev files</a></td>

        <td><a href='userdown.php?oi= $result[order_id]' style='color:black'> ".$result['confirm']."<br> <p style='color:red'>".$result['cdate']."</p><br> <a href='editorcfileforuser.php?oi=$result[order_id]' style='color:green' >prevfile</a></a></td>

         <td> ".$result['comments']." <br> <p>".$result['comdate']."</p></td>
                                <td><a href='downgalley.php?oi= $result[order_id]' style='color:black'> ".$result['galley']."<br> <p style='color:red'>".$result['galley_date']."</p></a></td>


          <td><a  href='edituser.php?oi= $result[order_id]' ><button id='editbtn' type='edit' name='edit' value='edit' >edit</button></a> 
         <span><a href='comment.php?oi= $result[order_id]' ><button id='cmntbtn' type='comment' name='comment' value='comment'>Add</button></a> </td>

         </tr>";
      
       } 
       echo "</table>";


?>
</div>
 </div>

</table>
</div>
</body>
<style>
    .navbar{
        width:118%;
          overflow: hidden;
          /*padding-bottom:3.5rem;*/
/**/
    }
   .btn-outline-success {
    color: #fff;
    border-color: white;
}

th{
    background-color:#89cffd;
    /*margin-top:10px;*/
}
</style>
 

