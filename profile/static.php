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
    <title>الاحصائيات</title>
</head>
<body dir="rtl">
<?php
    include $_nav;
?>  

<!-- start des additions des statics au profile  -->
    <div class="total">
        <div class="main">
            <img src="../upload/avatar/<?=$_SESSION['data']->photo_profile?>" alt="Mon image">
            <div>
            <h2 class="name"><?php echo  $firstname ." ". $lastname ?></h2>
            <p class="email"><?php  echo $email ?></p>
            </div>
        </div>
        <div class="static">
            <img src="../file/image/home/good_answ.png" alt="exercices">
            <div class="text">
                <p class="description">امتحان تم اجتيازه بنجاح</p>
                <p class="numero">00</p>
            </div>
        </div>
        <div class="static">
            <img src="../file/image/home/bon.png" alt="exams">
            <div class="text">
            <p class="description">تمارين تم حلها</p>
            <p class="numero">00</p>
            </div>
        </div>
    </div>
    <!-- end des additions des statics au profile -->

</body>
</html>