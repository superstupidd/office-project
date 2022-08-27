<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Articles</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>
<body>

<nav class="navbar navbar-expand-xl  navbar-dark bg-primary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item2">
          <a class="nav-link active" aria-current="page" href="signuponlyadmin.php"><button class='btn btn-outline-light'>Add User</button></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php"><button class='btn btn-outline-light'>Home</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="submit.php"><button class='btn btn-outline-light'>Submit</button></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="adminarticles.php"><button class='btn btn-outline-light'>Articles</button></a>
        </li>

        

        
        
      <li class="nav-item3">
          <a class="nav-link active" href="logout.php"><button class='btn btn-outline-danger'>Logout</button></a>
        </li>
</ul>
    </div>
  </div>
</nav>
    <div class='list'>

     <?php
 

     include "config.php";

     $query= "SELECT * from users" ; 
     $data =mysqli_query($con,$query);
     $total=mysqli_num_rows($data); 
  // output data of each row
      if($total!=0){
    echo"<table>

    	
     <tr>
     <th><h4> ID</h4></th>
     <th><h4>Username</h4></th>
    <th><h4>Email</h4></th>
        <th><h4>User_Type</h4></th>

    <th><h4>Operations</h4></th>

         
    </tr>";
            
}
while($result=mysqli_fetch_assoc($data)){

echo" 
 <tr>
          <td> ".$result['id']." </td>
          <td> ".$result['username']." </td>
          <td> ".$result['email']."</td>
                    <td> ".$result['user_type']."</td>

          <td> <a href='adminuseredit.php?oi=$result[id]'><button id='editbtn' type='edit' name='Edit'  >Edit</button></a>
           <span><a href='adminuserdelete.php?oi= $result[id]' ><button id='deletebtn' type='delete' name='delete' value='delete' >Delete</button></a></td>
           </tr>";
        
        }
        echo"</table>";
        ?>
        </div>
        <style>
table, th, td {
    border: 1px solid white;
    margin:auto;
    padding:5px;
 
}
th{
    background:#89cffd;
     text-align: center;
    font-weight: bold;
padding:5px;
    
}
table{
    margin-top:1px;
}
.navbar{
    width:100%;
}

     .btn-outline-success {
    color: #fff;
    border-color: white;
}

.nav-item2{
    position:fixed;
    left:80%;
    font-size:20px;
        margin-bottom:10px;

}


</style>