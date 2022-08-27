<?php
session_start();
    if(isset($_SESSION['username']))
  {

    $user=$_SESSION['username'];
  }else{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>search results</title>
<style>
/*table, th, td {*/
/*    border: 1px solid black;*/
/*}*/
</style>
<link href="style.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body class="main">
   <nav class="navbar navbar-expand-xl fixed-top navbar-dark bg-primary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><button class='btn btn-outline-success'>Home </button></a>
        </li>
       
</ul>
    </div>
  </div>
</nav>

<?php
include 'config.php';

if(isset($_POST['search'])) {
   
    $search= $_POST['article']; 
 
$sql=" SELECT * FROM articles WHERE username = '$user' AND (article_title = '$search' OR journal_name = '$search' OR order_id= '$search' OR confirm= '$search'  OR status= '$search')";
    $data =mysqli_query($con,$sql);
    $total=mysqli_num_rows($data); 
      // output data of each row
      if($total!=0){
        echo"<table class='table'>
    
        <tr>		
                  
              <th><h4>Id</h4></th>
 			<th><h4>Journal</h4></th>
            <th><h4>Article</h4></th>
             <th><h4>Volume</h4></th>
             <th><h4>File</h4></th>
            <th><h4>Link</h4></th>
             <th><h4>Status</h4></th>
             <th><h4>Remark</h4></th>
             <th><h4>Check </h4></th>
            <th><h4>Comments</h4></th>
             <th><h4>Operations</h4></th>
           <th><h4>Downloads</h4></th>
                    
                </tr>";
                
      }
      while($result=mysqli_fetch_assoc($data)){
      
      echo" 
       <tr>
          <td> ".$result['order_id']." </td>
          
           <td> ".$result['journal_name']."</td>
           <td> ".$result['article_title']."</td>
           <td> ".$result['volume']." </td>
                      <td> ".$result['journal_name']."</td>

           <td><a href=".$result['link']."> ".$result['link']." </a></td>
           <td> ".$result['status']."</td>
           <td> ".$result['remark']." </td>
            <td> ".$result['confirm']." </td>
          <td> ".$result['comments']."  </td>
         
           <td><a  href='comment.php?oi= $result[order_id]' ><button id='cmntbtn' type='edit' name='add' value='edit' >ADD</button></a> 
           <span><a  href='edituser.php?oi= $result[order_id]' ><button id='editbtn' type='edit' name='edit' value='edit' >edit</button></a> </td>
           
           <td><a href='userdown.php?oi= $result[order_id]' ><button id='downloadbtn' type='download' name='download' value='download' >Downloads</button></a></td>
     
            
          
        </tr>";
            
    }
    echo"</table>";
    
    
}
?>
</body>
 
<style>
    th {
    background-color:white ;
    border: 1px solid black;
     width:400px; 
    padding:8px;
      margin-left:10%;
    
}
td {
    background-color: #fff;
    border: 1px solid black;
   width:300px; 
  font-weight: bold;
    padding: 8px;
    text-align: center; 
          margin-left:10%;

    
}

     .btn-outline-success {
    color: #fff;
    border-color: white;
}

</style>