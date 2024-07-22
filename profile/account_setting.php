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
    <title>اعدادات الحساب</title>
</head>
<body dir="rtl">
<?php
    include $_nav;
?>  

    <div class="text_head password-head">
       <div class="show-content">
            <h4>اعدادات كلمه المرور</h4>
            <form method="POST"  class="reset-pass" id="passform">
        <button type="submit" name="changepass" id="passbtn">تغير كلمه المرور</button>
       </div>
        <div class="hidden-content hidden">
        
                <div class="content">
                    <div class="old">
                    <label for="pass1">كلمه المرور القديمه</label>
<input type="password" id="pass" placeholder="كلمه المرور القديمه" id="pass1">
    
                    </div>
                    <div class="new">
                    <label for="pass2">كلمه المرور الجديده</label>
<input type="password" placeholder="كلمه المرور الجديده" id="pass2">
                    </div>
                    </div>
            </form>
        </div>  
        </div>
    </div>
<div class="text_head email-head">
        <div class="show-content">
        <h4>تغير البريد الالكتروني</h4>
    <form method="POST" class="reset-email" id="emailform">
        <div class="buttons">
        <button type="submit"  name="checkem">التحقق من البريد الالكتروني</button>
            <button type="submit" id="emailbtn" name="changeem">تغير البريد الاكتروني</button>
        </div>
        
        </div>
        <div class="hidden-content hidden">
                <div class="content">
                    <div class="new">
                    <label for="email">البريد الاكتروني الجديد</label>
<input type="email" placeholder="البريد الاكتروني الجديد" id="email">
    
                    </div>
            </form>
        </div>

    </div>


</body>
<script src="<?=$account?>"></script>
</html>

