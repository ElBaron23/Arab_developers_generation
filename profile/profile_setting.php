<?php 
    session_start();
    include '../inc/if_not_regi.php';
     
    $firstname = $_SESSION['data']->firstname;
    $lastname  = $_SESSION['data']->lastname;
    $email = $_SESSION['data']->email;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/css/profile.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اعدادات الملف الشخصي</title>
</head>
<body  dir="rtl">
<?php
    include '_navbar.php';
?>  
</body>
</html>