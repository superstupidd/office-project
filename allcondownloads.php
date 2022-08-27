<?php
include 'config.php';
if (isset($_GET['cf'])) {
    $conf= $_GET['cf'];

      $sql = "SELECT * FROM confirm WHERE cfile='$conf'" ;
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
             $row['cfile'];
    
                    
$content_type = "application/force-download";
    ob_end_clean();

header("Content-Type: " . $content_type);
header("Content-Disposition: attachment; filename=\"" . basename($row['cfile']) . "\";");

readfile("confirm/". $row['cfile']);
exit();
    
        }
    }
    
}
    ?>