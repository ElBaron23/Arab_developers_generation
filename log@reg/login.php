<!DOCTYPE html>
<html lang="en">
<?php
include '../inc/init.php';

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$register?>">
    <link rel="shortcut icon" href="../file/image/logo.png" type="image/x-icon">
    <title>انشاء حساب</title>
</head>
<body dir="rtl">
   
    <header>
        <?php
include $navIndex
        ?>
    </header>
 
    <main>
        <?php
session_start();
include  $cnx;
if(isset($_POST['login'])){
 $login = $mydb->prepare("SELECT * FROM user WHERE email =:email AND password=:password");
 $password=$_POST['password'];
 $email=$_POST['email'];
 $login->bindParam("email",$email);
 $login->bindParam("password",$password);
 $login->execute();
 if($login->rowCount() === 1){
   $data = $login->fetchObject();
    $_SESSION['user_id']=$data->user_id;
    $_SESSION['data']=$data;

    header("location:$homeP",true);
 }else{
    echo'<h4 style="color:rgb(245, 74, 74);">البريد الاكتروني او كلمة السر غير صحيحة</h4>';
 }
    
}

        ?>
        <div class="container">
        <form method="post">
        <h1>تسجيل الدخول</h1>
        <input type="email" name="email" placeholder="البريد الاكتروني">
        <input type="password" name="password" placeholder="كلمة السر">
        <div class="forgot">
            <a href="forgotpass.php">لقد نسيت كلمة السر</a>
        </div>
        <button type="submit" name="login">الدخول</button>
        </form>
        <div class="box">
            <div class="box_img"></div>
            <h5>الجيل البرمجي العربي بوابتك نحو رفع مستواك البرمجي
            مع احذت أساليب التعليم لتحقيق هذفك معنا</h5>
            <div class="for_login">
                <h3>ليس لديك حساب ؟</h3>
                <a href="register.php">انشاء حساب </a>
            </div>
        </div>
        </div>
    </main>

    <?php
    include $footer
    ?>
</body>
</html>