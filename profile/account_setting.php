<?php 
    session_start();
    include '../inc/init.php';
    include $if_not_reg;
    include $cnx;

    // استرجاع بيانات المستخدم من الجلسة
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
    <title>إعدادات الحساب</title>
</head>
<body dir="rtl">
    <?php include $_nav; ?>

    <div class="text_head password-head">
        <div class="show-content">
            <h4>إعدادات كلمة المرور</h4>

            <form method="POST" class="reset-pass" id="passform">
            <?php
if (isset($_POST['changepass'])){
$checkOldPass = $mydb->prepare('SELECT * FROM user WHERE user_id = :id');
$checkOldPass->bindParam('id' ,$_SESSION['user_id'] );
if($checkOldPass->execute()){
$checkOldPass = $checkOldPass->fetchObject();

if ($checkOldPass->password === $_POST['oldPass']){

if (strlen($_POST['newPass']) >= 8){
$setPass = $mydb->prepare('UPDATE  user SET password = :newPassW WHERE user_id = :id');
$setPass->bindParam('newPassW' , $_POST['newPass']);    
$setPass->bindParam('id' , $_SESSION['user_id']);    
if ($setPass->execute()){
echo("Password Reset Successfuly");
sleep(3);
header('Location:' . $profileP);
}
}else{
echo "<p style='margin:10px 0'>يجب ان تتكون كلمه المرور من 8 احرف  او اكثر</p>";
}

}else{
echo "<p style='color:red; margin:10px 0'>كلمه المرور غير صحيحه</p>";
}
}
}
?>

                <div class="old">
                    <label for="pass1">كلمة المرور القديمة</label>
                    <input type="password" placeholder="كلمة المرور القديمة" id="pass1" name="oldPass">
                </div>

                <div class="new">
                    <label for="pass2">كلمة المرور الجديدة</label>
                    <input type="password" placeholder="كلمة المرور الجديدة" id="pass2" name="newPass">
                </div>
                <button type="submit" name="changepass" id="passbtn">تغيير كلمة المرور</button>
            </form>
        </div>
    </div>





        <div class="text_head reset-email">
        <div class="show-content">
            <h4>اعاده تعين بريد الكتروني</h4>
            <form method="POST" class="reset-pass" id="passform">
                <div class="new">
                    <label for="pass2">البريد الاكتروني</label>
                    <input type="email" placeholder="البريد الاكتروني" id="pass2" name="newPass">
                </div>
                <button type="submit" name="changeemail" id="passbtn">تاكيد البريد الاكتروني</button>
            </form>
        </div>
    </div>











    <script src="<?=$account?>"></script>
</body>
</html>

