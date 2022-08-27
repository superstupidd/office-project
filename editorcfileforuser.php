<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
            <title>Prev Articles</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>
<body>
      <a href='articles.php' ><button id='back' type='bck' name='back'  >Home</button></a>

<?php

session_start();
if (isset($_SESSION['username'])) {
    $_SESSION['username'] ;
}else{
    header('location:login.php');
}

include ("config.php");
$order_id=$_GET['oi'];

$sql=" SELECT * FROM editorcfile where order_id='$order_id'  ";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data); 
  // output data of each row
  if($total!=0){
   ?><div class='tabl'><?php echo"<table >

    <tr>		
                 <th><h4>Id</h4></th>
                <th><h4>date</h4></th>
                <th><h4>File</h4></th>
               
               
                
            </tr>";
            
  }
  while($result=mysqli_fetch_assoc($data)){
  
  echo" 
   <tr>
			<td> ".$result['order_id']." </td>
			<td> ".$result['cdate']."</td>
            <td><a href='editorcondownloads.php?cf=$result[confirm]'> ".$result['confirm']."</a></td>

           
          
          
 
        
			
		</tr>";
        
}
echo"</table>";


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
</style>