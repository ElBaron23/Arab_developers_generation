
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
    
<?php
include 'profile/_profile.php';
?>

 


    <div class="profile_nav">
     <ul>
        <li id="link_profile" class="profile_active">
    <img src="file/icons/profile/utilisateur.png" alt="">
            الملف الشخصي

        </li>
        <li id="profile_setting"> 
            <img src="file/icons/profile/profil.png" alt="">
        اعدادات الملف الشخصي
            
        </li>
        <li id="account_setting">
        <img src="file/icons/profile/parametres.png" alt="">
            
        اعدادات الحساب

        </li>
        <li id="notification">
        <img src="file/icons/profile/notification.png" alt="">
            
        الاشعارات

        </li>
        <li iid="project">
        <img src="file/icons/profile/gestion-de-projet.png" alt="">
            
        المشاريع

        </li>
        <li id="post">
        <img src="file/icons/profile/nouveau-poste.png" alt="">
            
        منشوراتي

        </li>
        <li id="static">
        <img src="file/icons/profile/roue-dentee.png" alt="">
            
        احصائياتي

        </li>
     </ul>   
    </div>
</div>    
<script src="js/profile_nav.js"></script>
</body>
</html>