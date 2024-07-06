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
    $new_email=$_POST['new_email'];

    $adduser= $mydb->prepare("INSERT INTO user(firstname,lastname,email,password)
                                     VAlUES(:firstname,:lastname,:email,:password)");
    $adduser->bindParam("firstname",$firstname);                                 
    $adduser->bindParam("lastname",$lastname);                                 
    $adduser->bindParam("email",$new_email);                               
    $adduser->bindParam("password",$new_password);
   
    if($adduser->execute()){
     header("location:login.php",true);
    }else{
        echo"probleme";
    }
 }
}
?>
        <div class="container">

        <form method="post">
        <h1>انشاءحساب</h1>
        <div class="nam">
            <input type="text" name="firstname" placeholder="الاسم">
            <input type="text" name="lastname" placeholder="النسب">
        </div>
        <input type="email" name="new_email" placeholder="البريد الاكتروني">
        <input type="password" id="pass1" placeholder="كلمة السر" >
        <input type="password" name="new_password" id="pass2" placeholder=" تحقق من كلمة السر">
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
    include 'inc/_footer.php'
    ?>
    <script src="js/password_verefication.js"></script>
</body>
</html>