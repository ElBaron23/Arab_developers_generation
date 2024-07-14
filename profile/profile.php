
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
    include '../inc/if_not_regi.php';
     
    $firstname = $_SESSION['data']->firstname;
    $lastname  = $_SESSION['data']->lastname;
    $email = $_SESSION['data']->email;
    ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/css/profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../file/image/mypic.png" type="image/x-icon">
    <title><?php echo  $firstname ." ". $lastname ?></title>
</head>
<body dir="rtl">
<?php
    include '_navbar.php';
?>
<div class="container">
<div id="profile">
   <div class="user_profile">
       
       <div class="name">
       <h1><?php echo  $firstname ." ". $lastname ?></h1>
       <h4><?php  echo $email ?></h4>

       <div class="btn">
       <button type="submit" id="downloaadcv">  تحميل CV</button>
       <div class="follow">
               <img src="../file/icons/star.png" alt="">
               <span>45</span>
       </div>
       </div>
       </div>
       <div id="photo_profile">
       </div>
     
   </div>
</div>

</div>    
</body>
</html>