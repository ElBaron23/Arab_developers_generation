
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/css/profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي</title>
</head>
<body dir="rtl">
<?php
    session_start();
    include 'inc/if_not_regi.php';
    include 'inc/navbar.php';

    $firstname = $_SESSION['data']->firstname;
    $lastname  = $_SESSION['data']->lastname;
    $email = $_SESSION['data']->email;
?>
<div class="container">
    <div class="user_profile">
       
        <div class="name">
        <h1><?php echo  $firstname ." ". $lastname ?></h1>
        <h4><?php  echo $email ?></h4>
        <button type="submit" id="edit_profile">تعديل الملف الشخصي</button>
        </div>
        <div id="photo_profile">
        </div>
      
    </div>
</div>    

</body>
</html>