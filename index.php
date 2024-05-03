
<?php include "inc/init.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $font ?>
    <link rel="stylesheet" href="<?php echo $style?>index.css">
    <?php echo $favicon ?>
    <title>الجيل المبرمج العربي</title>
</head>
<body>
    <!-- استدعاء ملف header -->
    <?php include "inc/header.php" ?>
    <!-- استدعاء ملف تحقق من اتصال المستخدم بالانترنيت -->
    <?php include "inc/ifConnect.php" ?>
    <!-- القسم الاول من الصفحة -->
    <div class="head">
        <h1>انضم الان الى اكبر تجمع عربي للبرمجة</h1>
        <p>مجموعة 
            واسعة من الموارد التعليمية، 
            وتمارين تطبيقية في مختلف لغات البرمجة</p>
        <a href="login.php">  { انضم النا الان }</a>
    </div>
    <!-- القسم الثاني من الصفحة -->
    <section id="info">
    <div class="mainImage"></div>
    <div class="inf1">
        <h1>
            تمارين تطبيقية
        </h1>
        <p>
            نوفر مجموعة ضخمة من التمارين التطبيقية  في مختلف لغات البرمجة
        </p>
    </div>
    </section>
    
    <!-- استدعاء ملف footer -->
    <?php include 'inc/footer.php' ?>
    <!-- استدعاء ملف تحقق من اتصال المستخدم بالانترنيت -->
    <script src="<?php echo $script?>ifConnect.js"></script>
</body>
</html>