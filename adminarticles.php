<?php
include "config.php";

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
        <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
            <title>Admin Articles</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>

     <nav class="navbar navbar-expand-xl fixed-top navbar-dark bg-primary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
    <div class="logo"> <img  style="width:180px;height:60px;margin-bottom:5px;margin-top:-3px;" src="logo.png" alt="image"></div>
        </li>
        <li class="nav-item1">
          <a class="nav-link active" aria-current="page" href="admin.php"><button class='btn btn-outline-light'>Home</button></a>
        </li>
        <li class="nav-item2">
          <a class="nav-link active" href="adminsubmit.php"><button class='btn btn-outline-light'>Submit</button></a>
        </li>
        
     

       
        
        
      <form class="d-flex" method="POST" role="search" name="search" action="adminsearch.php">
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

<body>

<?php
$sql=" SELECT * FROM articles order by order_id DESC LIMIT 0,50 ";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data); 
  // output data of each row
  if($total!=0){
  ?><div class='tabl'><?php  echo"<table >

    <tr>		
                 <th><b>ID</b></th>
                 <th><b>Username</b></th>
                <th><b>Journal</b></th>
                <th><b>Article Title</b></th>
                <th><b>Volume</b></th>
                <th><b>Galley Proof</b></th>
                <th><b>Link</b></th>
                <th><b>Status</b></th>
                <th><b>Remark</b></th>
                <th><b>Operations</b></th>
               
                
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
        
                       <td><a href='downgalley.php?oi= $result[order_id]' style='color:black' > ".$result['galley']."<br> <p style='color:red'>".$result['galley_date']."</p></a></td>

           <td><a href=".$result['link']." target='_blank' style='color:black' > ".$result['link']." </a><br> <p style='color:red'> ".$result['linkd']."</p></td>

            <td> ".$result['status']."</td>
            <td> ".$result['remark']." </td>
          
           <td> <a href='adminedit.php?oi=$result[order_id]'><button id='editbtn' type='edit' name='Edit'  >Edit</button></a>
         <span><a  href='delete.php?oi= $result[order_id]'  onClick=\"javascript: return confirm('Please confirm deletion');\"><button id='deletebtn' type='delete' name='delete' value='Delete' >Delete</button></a></td>
                //   <span><a  href='admingalleyup.php?oi= $result[order_id]' ><button id='uploadbtn' type='upload' name='upload' value='upload' >Upload</button></a>



			
		</tr>";
        
}
echo"</table>";

?>



</div>
</body>
 
<style>
.navbar{
    width:132%;
    position:fixed;
    top:0px;
              /*padding-bottom:3.5rem;*/

}
.nav-item1{
    position:fixed;
    left:70%;
    font-size:20px;
        margin-bottom:10px;

}
.nav-item2{
    position:fixed;
    left:77%;
    font-size:20px;
        margin-bottom:10px;

    
}
.nav-item3{
    position:fixed;
    left:92%;
    font-size:20px;
        margin-bottom:10px;

}
.nav-item4{
    position:fixed;
    left:84%;
    font-size:20px;
        margin-bottom:10px;

}
.btn-outline-success {
    color: white;
    border-color: white;
}
th{
    background-color:#89cffd;;
}
    </style>

