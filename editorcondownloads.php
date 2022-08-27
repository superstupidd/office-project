<?php
include 'config.php';
if (isset($_GET['cf'])) {
    $conf = $_GET['cf'];

  
                    
    $sql = "SELECT * FROM editorcfile WHERE confirm='$conf'" ;
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
            echo $row['confirm'];
                  $content_type = "application/force-download";
header("Content-Type: " . $content_type);
header("Content-Disposition: attachment; filename=\"" . basename($row['confirm']) . "\";");
readfile("confirm/" .$row['confirm']);
exit();
    
        }
    }
        
    
}
    ?>