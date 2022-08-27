<?php
include 'config.php';
if (isset($_GET['oi'])) {
    $order_id= $_GET['oi'];

       $sql = "SELECT * FROM articles WHERE order_id='$order_id'" ;
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
            echo $row['usercfile'];
    
                    
$content_type = "application/force-download";
    ob_end_clean();

header("Content-Type: " . $content_type);
header("Content-Disposition: attachment; filename=\"" . basename($row['usercfile']) . "\";");

readfile("confirm/". ($row['usercfile']));
exit();
    
        }
    }
    
}
    ?>