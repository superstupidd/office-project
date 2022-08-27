<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
            <title>Editor Articles</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>
<body>
    
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
        

       
        
        
      <form class="d-flex" method="POST" role="search" name="search" action="editorsearch.php">
        <input class="form-control me-2" type="text" name="article" placeholder='order id,article,journal,status' aria-label="Search">
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

<!--<h1 style=" margin-left:40%; margin-bottom:3%">ARTICLES </h1>-->

<?php


include ("config.php");


$sql=" SELECT * FROM articles order by order_id DESC LIMIT 0,50 ";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data); 
  // output data of each row
  if($total!=0){
   ?><div class='tabl'><?php echo"<table >

    <tr>		
                 <th><b>ID</b></th>
                 <th><b>Username</b></th>
                <th><b>Journal</b></th>
                <th><b>Article</b></th>
                <th><b>Volume</b></th>
                <th><b> Editor File</b></th>
                <th><b>User File</b></th>
                                <th><b>User Confirm File</b></th>

                <th><b>Comments</b></th>
                               <th><b>Galley Proof</b></th>
                               
                               <th><b>Uploads</b></th>

               
                
            </tr>";
            
  }
  while($result=mysqli_fetch_assoc($data)){
  
  echo" 
   <tr>
			<td> ".$result['order_id']." </td>
            <td> ".$result['username']." </td>
			<td> ".$result['journal_name']."</td>
            <td> ".$result['article_title']."</td>
            <td> ".$result['volume']."</td>
                        <td> ".$result['confirm']." <br> <a href='editorcfile.php?oi=$result[order_id]' style='color:green'>Previous Files</a></td>
            <td><a href='downloads.php?oi= $result[order_id]' style='color:black' > ".$result['file']."<br> ".$result['Date']." </a></td>
                        <td><a  href='condownloads.php?oi= $result[order_id]' style='color:black' > ".$result['usercfile']."<br> ".$result['condate']." </a><br> <a href='allcfiles.php?oi=$result[order_id]' style='color:green'>Previous Files</a></td>


            <td> ".$result['comments']." <br><p>".$result['comdate']."</p> </td>
                                  <td><a href='downgalley.php?oi= $result[order_id]' style='color:black'> ".$result['galley']."<br> <p style='color:red'>".$result['galley_date']."</p></a></td>

          <td><a href='confirmd.php?oi= $result[order_id]'><button id='uploadbtn' type='upload' name='button' >upload</button></a><span>
                    <a href='finald.php?oi= $result[order_id]'><button id='uploadbtn' type='upload' name='button' >galley upload</button></a></td>

          
 
        
			
		</tr>";
        
}
echo"</table>";


?>
</div>
</div>

</body>

<style>
  .navbar{
    width:155%;
              /*padding-bottom:3.5rem;*/

}
.btn-outline-success {
    color: white;
    border-color: white;
}
th{
    background-color:#89cffd;
}

</style>

