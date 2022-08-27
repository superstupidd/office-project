<?php
include 'config.php';
if (isset($_GET['oi'])) {
    $id = $_GET['oi'];

  
                    
    $sql = "SELECT * FROM articles WHERE order_id='$id'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
             $row['published'];
              if (($row['galley_new']==NULL)) {
                echo ("<script LANGUAGE='JavaScript'>
			window.alert('sorry..! file not found');
			 window.location.href='articles.php';
			</script>");
            }else{
    $content_type = "application/force-download";
        ob_end_clean();

header("Content-Type: " . $content_type);
header("Content-Disposition: attachment; filename=\"" . basename($row['published']) . "\";");
readfile( "galley/".$row['admingalley']);
exit();
        ;

        }
    }
    }
}
    ?>