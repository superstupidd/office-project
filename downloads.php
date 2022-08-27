<?php
include 'config.php';
if (isset($_GET['oi'])) {
    $id = $_GET['oi'];

  
                    
    $sql = "SELECT * FROM articles WHERE order_id='$id'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
             $row['new_name'];
              if (($row['size']==0)) {
                echo ("<script LANGUAGE='JavaScript'>
			window.alert('sorry..! file not found');
			 window.location.href='editorarticles.php';
			</script>");
            }else{
    $content_type = "application/force-download";
header("Content-Type: " . $content_type);
header("Content-Disposition: attachment; filename=\"" . basename($row['new_name']) . "\";");
readfile("file/".$row['new_name']);
exit();
    
        }
        }
    }
}
    ?>