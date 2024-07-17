<?php
include '../inc/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$register?>">
    <link rel="shortcut icon" href="file/image/logo.png" type="image/x-icon">
    <title>صفحة غير موجودة حاليا</title>
</head>
<body dir="rtl">
    <?php
    include $cnx;
    ?>
    <header>
        <?php
include $navIndex
        ?>
    </header>
 
    <img id="img360" src="images/icon-white.png">
    <h1>نعتذر يتم تجهيز هذه الصفحة الان</h1>
    <h2>يمكنك الرجوع فيما بعد او العودة للصفحة الرئيسية
        <a href="<?=$indexP?>">الصفحة الرئيسية</a>
    </h2>

    <?php
    include $footer
    ?>
</body>
</html>