<!DOCTYPE html>
<html>
<head>
<title> search results</title>
<style>
/*table, th, td {*/
/*    border: 1px solid black;*/
/*}*/
</style>
<link href="style.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body class='main'>
 <nav class="navbar navbar-expand-xl fixed-top navbar-dark bg-primary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="editorindex.php"><button class='btn btn-outline-success'>Home </button></a>
        </li>
       
</ul>
    </div>
  </div>
</nav>
     
  
<?php
include 'config.php';

if(isset($_POST['search'])) {
   
    $search= $_POST['article']; 
   $search;
    $sql="SELECT * from articles where(`article_title` LIKE '%".$search."%') OR (`journal_name` LIKE '%".$search."%') OR (`order_id` LIKE '%".$search."%') OR (`file` LIKE '%".$search."%') " ; 
 
    $data =mysqli_query($con,$sql);
    $total=mysqli_num_rows($data); 
      // output data of each row
      if($total!=0){
        echo"<table class='table'>
    
        <tr>		
                     <th><h4>ID</h4></th>
                     <th><h4>Username</h4></th>
                    <th><h4>Journal</h4></th>
                    <th><h4>Article</h4></th>
                    <th><h4>Volume</h4></th>
                    <th><h4>File</h4></th>
                    <th><h4>Comments</h4></th>
                    <th><h4>Operation</h4></th>
                   
                    
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
                <td> ".$result['file']."</td>
                <td> ".$result['comments']."</td>
               
              
               <td> <a href='download.php?oi= $result[order_id]' ><button id='downloadbtn' type='download' name='download' value='download' >Download</button></a></td>
               
     
            
          
        </tr>";
            
    }
    echo"</table>";
    
    
}else{
    echo 'not found';
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
    background-color: #495C83;
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
  