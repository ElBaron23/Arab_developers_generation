<?php
    include '../inc/init.php';
    include $cnx
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$register?>">
    <link rel="shortcut icon" href="file/image/logo.png" type="image/x-icon">
    <title>استعادة كلمة السر</title>
</head>
<body dir="rtl">
    
    <header>
        <?php
include $navIndex;
        ?>
    </header>
 
    <main>
        <div class="container">
        <form method="post">
        <h1> استرجاع كلمة السر</h1>
        <input type="email" name="email" placeholder="البريد الاكتروني">
        <button type="submit" name="login">  استعادة كلمة السر</button>
        </form>
        <div class="box">
            <div class="box_img"></div>
            <h5>الجيل البرمجي العربي بوابتك نحو رفع مستواك البرمجي
            مع احذت أساليب التعليم لتحقيق هذفك معنا</h5>
            <div class="for_login">
                <h3>ليس لديك حساب ؟</h3>
                <a href="/register">انشاء حساب </a>
            </div>
        </div>
        </div>
    </main>

    <?php
    include $footer;
    ?>
</body>
</html>