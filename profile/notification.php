<?php 
    session_start();
include '../inc/init.php';
    include $if_not_reg;
     
    $firstname = $_SESSION['data']->firstname;
    $lastname  = $_SESSION['data']->lastname;
    $email = $_SESSION['data']->email;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=$profile?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الاشعارات</title>
</head>
<body dir="rtl">
<?php
    include $_nav;
?> 
</body>
</html>