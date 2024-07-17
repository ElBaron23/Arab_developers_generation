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
 
    <main>
       
                    <h1 style="color:#fff; width:90%;"> حدث خطا  ما او ان الصفحة تحت تطوير يمكن الرجوع اليها في وقت لااحق
                        يعمل الفريق على انهائها
                    </h1>


    </main>

    <?php
    include $footer
    ?>
</body>
</html>