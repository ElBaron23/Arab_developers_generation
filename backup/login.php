<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/register.css">
    <link rel="shortcut icon" href="file/image/logo.png" type="image/x-icon">
    <title>انشاء حساب</title>
</head>
<body dir="rtl">
    <?php
    include 'inc/cnx.php'
    ?>
    <header>
        <?php
include 'inc/_navIndex.inc'
        ?>
    </header>
 
    <main>
        <?php
session_start();
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

    header("location:home.php",true);
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
    include 'inc/_footer.php'
    ?>
</body>
</html>