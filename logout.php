
<?php   

if (! empty($_SESSION['username']))
{
    
    //to ensure you are using same session
session_destroy(); //destroy the session
header('location:login.php');
}else
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Now you have to login first');
    window.location.href='login.php';
    </script>");
exit();
?>

