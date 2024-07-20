<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
    include '../inc/init.php';
     include $if_not_reg;
    $firstname = $_SESSION['data']->firstname;
    $lastname  = $_SESSION['data']->lastname;
    $email = $_SESSION['data']->email;
    // الحصول على اسم الصورة من الجلسة وحفضها في المتغير 
    $photo = $_SESSION['data']->photo_profile 
    ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/css/profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../file/icon/logo.jpg>" type="image/x-icon">
    <title><?php echo  $firstname ." ". $lastname ?></title>
</head>
<body dir="rtl">
<?php
    include $_nav;
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
      <img src="../upload/avatar/<?=$photo?>">
  </div>
</div>
</div>
<div class="about">
<div class="title">
    <h4>معلومات اكثر:</h4>
</div>
<div class="data">

<div class="desc">
<h4>الوصف</h4>
<p>
<?=$_SESSION['data']->description?>
</p>
</div>

<div class="country">
<h4>البلد</h4>
<span><?=$_SESSION['data']->country?></span>
</div>


<div class="birthDate">
<h4>تاريخ الميلاد</h4>
<p><?=$_SESSION['data']->datebirdth?></p>
</div>

<div class="gender">
<h4>الجنس</h4>
<span> 
<?= $_SESSION['data']->gender?>
</span>
</div>
</div>
<div class="title">
  <h4>الروابط</h4>
</div>
<div class="links">
<div class="instagram">
<div class="image"><img src="../file/icons/instagram.png" alt=""></div>
<div class="text">
<h4>رابط الانستجرام</h4>
<span><?=$_SESSION['data']->instagram ? $_SESSION['data']->instagram  : 'غير محدد' ?></span>
</div>
</div>

<div class="facebook">
<div class="image"><img src="../file/icons/facebook.png" alt=""></div>
<div class="text">
<h4>رابط الفيسبوك</h4>
<span><?=$_SESSION['data']->facebook ? $_SESSION['data']->facebook  : 'غير محدد' ?></span>
</div>
</div>

<div class="linkedin">
<div class="image"><img src="../file/icons/linkedin.png" alt=""></div>
<div class="text">
<h4>رابط لينكدان</h4>
<span><?=$_SESSION['data']->linkedin ? $_SESSION['data']->linkedin  : 'غير محدد' ?></span>
</div>
</div>


<div class="twitter">
<div class="image"><img src="../file/icons/twitter.png" alt=""></div>
<div class="text">
<h4>رابط اكس</h4>
<span><?=$_SESSION['data']->twitter ? $_SESSION['data']->twitter  : 'غير محدد' ?></span>
</div>
</div>



</div>
</div>
<div class="skills">
    <h4>المصارات التي تتابعها:</h4>
<div class="skill">
   لايوجد مسارات الان
</div>
<div class="skills">
    <h4>اللغات البرمجية التي تتابعها:</h4>
<div class="skill">
   لايوجد لغات الان
</div>
</div>
</div>    
</body>
</html>