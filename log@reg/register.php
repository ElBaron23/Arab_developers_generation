<?php
    include '../inc/init.php';
    include $cnx;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$register?>">
    <link rel="shortcut icon" href="file/image/logo.png" type="image/x-icon">
    <title>انشاء حساب</title>
</head>
<body dir="rtl">
    
    <header>
        <?php
include $navIndex
        ?>
    </header>
 <?php
 session_start();
?>
    <main><?php      
if(isset($_POST['register'])){
$checkEmail= $mydb->prepare("SELECT * FROM user WHERE email =:EMAIL");
$new_email=$_POST['new_email'];
$checkEmail->bindParam("EMAIL",$new_email);
$checkEmail->execute();

if($checkEmail->rowCount() > 0){
echo' <h4 class="email_repp" >هذا البريد الاكتروني مسجل لدينا بالفعل</h4>
';

}else{
    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    
    $new_password=$_POST['new_password'];
    if(strlen($new_password)>= 8){
       $password = $new_password;
    }else{
        echo"<h3>يجب ان تحتوي كلمة المرور على 8 احرف عالاقل</h3>";
    }
    $new_email=$_POST['new_email'];

    $adduser= $mydb->prepare("INSERT INTO user(firstname,lastname,email,password)
                                     VAlUES(:firstname,:lastname,:email,:password)");
    $adduser->bindParam("firstname",$firstname);                                 
    $adduser->bindParam("lastname",$lastname);                                 
    $adduser->bindParam("email",$new_email);                               
    $adduser->bindParam("password",$password);
   
    if($adduser->execute()){
     header("location:login.php",true);
    }else{
        echo"probleme";
    }
 }
}
?>
 <h3 class="errs" id="errs">
</h3>
        <div class="container">

        <form method="post" id="reg">
        <h1>انشاءحساب</h1>
        <div class="nam">
            <input type="text" name="firstname" id="fn" placeholder="الاسم" required>
            <input type="text" name="lastname" id ="ln"placeholder="النسب" required>
        </div>
        <input type="email" name="new_email" id="email" placeholder="البريد الاكتروني" required>
        <input type="password" id="pass1" placeholder="كلمة السر"  required>
        <input type="password" name="new_password" id="pass2" placeholder=" تحقق من كلمة السر"required >
        <button type="submit" name="register">تسجيل</button>
        </form>
        <div class="box">
            <div class="box_img"></div>
            <h5>الجيل البرمجي العربي بوابتك نحو رفع مستواك البرمجي
            مع احذت أساليب التعليم لتحقيق هذفك معنا</h5>
            <div class="for_login">
                <h3>لدي حساب بالفعل؟</h3>
                <a href="login.php">تسجيل الدخول</a>
            </div>
        </div>
        </div>
    </main>
    <?php
    include $footer;
    ?>
    <!-- هدا script تمت برمجته من قبل 
     https://github.com/AHMED1CB
    -->
    <script src="<?=$passwordV?>"></script>
</body>
</html>