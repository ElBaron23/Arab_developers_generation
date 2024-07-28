<?php
include 'inc/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="file/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$index?>">
    <link rel="stylesheet" href="<?=$nav2?>">
    <title>الجيل البرمجي العربي</title>
</head>
<body dir="rtl">
<!-- start header  -->
<header>
        <?php
            include $navIndex2;
        ?>
         
           <!-- start hero  -->
        <div class="hero">
            <h1>
            الجيل البرمجي العربي
            </h1>
            <h4>
            منصة عربية لتعلم 
            البرمجة نوفرلكم مجموعة ضخمة من
             الموارد لشق مسارك كمبرمج محترف
             انضم الينا الان مع 
             مجموعة من المتدربين نوفر مجموعة 
            من المشاريع الجاهزة في مختلف لغات 
            البرمجة وايضا تمارين وامتحانات
             في مختلف لغات البرمجية .
            </h4>
            <a href="<?=$reg?>" class="btn_hero">
                انضم الينا
            </a>
        </div>
        <!-- end hero -->
    </header>
<!-- end header  -->
<!-- start section of brunch -->
 <section id="brunch">
<h2>العديد من التخصصات متاحة الان</h2>
<div class="brunch_box">
    <div class="brunch_container">
    <div class="div_img">
        <img src="file/icons/webdiv.png">
        </div>
        <h5>برمجة وتطوير المواقع الاكترونية</h5>
    </div>
    <div class="brunch_container">
    <div class="div_img">
        <img src="file/icons/ui.jpg">
        </div>
        <h5>تصميم المواقع الاكترونية</h5>
    </div>
    <div class="brunch_container">
        <div class="div_img">
        <img src="file/icons/app.png">
        </div>
        <h5> برمجة تطبيقات الهاتف</h5>
    </div>
</div>
<div class="brunch_box">
    <div class="brunch_container">
    <div class="div_img">
        <img src="file/icons/desktop.png">
        </div>
        <h5>برمجة برامج الحاسوب</h5>
    </div>
    <div class="brunch_container">
    <div class="div_img">
        <img src="file/icons/game.png">
        </div>
        <h5>برمجة الا لعاب</h5>
    </div>
</div>
 </section>
<!-- end section of brunch -->
<!-- start section exam  -->
<section id="exam">
<h2>مجموعة من تمارين والاختبارات</h2>
<div class="exam_box">
    <div class="container_exam">
        <h4>الاختبار</h4>
        <p>من خلال مجموع نقاط تمارين التي قمت بها 
يمكنك الولوج الى امتحانات نهائية التي تحدد 
ترقية مستواك حيت نتبع معك نضام مستويات 
لضمان تعلمك بشكل افضل وسلس .</p>
    </div>
    <div class="container_exam">
        <h4>تمارين</h4>
        <p>نوفر لكل مجال تختاره مجموعة من التمارين 
التي تساعدك في بناء أساس قوي في مسارك 
التعليمي يمكنك تتبع نقاط اختبارتك والاجتهاد
 اكثر للحصول على ناتج اكبر.</p>
    </div>
</div>
</section>

 <!-- end section exam  -->
  <!-- start section apk -->
   <section id="apk">
    <div class="mobile">
        <div class="phone">
            <img src="file/image/phone.png" alt="phone">
       <img src="file/image/scren.png" alt="scren" id="scren">
        </div>
    </div>
    <div class="text">
        <h1>استمتع بتجربة اكثر  مع تطبيقنا </h1>
        <h4>تطبيق موقعنا يتوفر الان على منصة
        جوجل بلاي واب ستور</h4>
        <img src="file/image/gp.png" alt="download">
    </div>
   </section>
  <!-- end section apk -->

  <!-- start section faq -->
   <section id="faq">
    <h2>لماذا تختار موقعنا </h2>
    <div class="box1">
        <div class="box1_img">          
            <img src="file/image/arabe.png" alt="arabic">
        </div>
        <h3>نوفر محتوا شامل لمسارك التعليمي
 بالغة العربية مع شرح سلسل ومبسط

 </h3>
    </div>
    <span class="span_left"></span>
    <div class="box1">
        <h3>نقوم بتحديث المحتوى بشكل مستمر 
        مع احدت التقنيات المتاحة بشكل مجاني </h3>
        <div class="box1_img">          
            <img src="file/image/actualise.png" alt="refrache">
        </div>
    </div>
    <span class="span_right"></span>
    <div class="box1">
        <div class="box1_img">          
            <img src="file/image/support.png" alt="support">
        </div>
    <h3>نوفر دعم مباشر لاجابة عن كافة استفساراتكم
    ومساعدتكم في التوجيه مع فريق من المبرمجين</h3>
    </div>
    <span class="span_left"></span>
    <div class="box1">
    <h3>هل تحتار من اين تبدا تعلم البرمجة ؟ 
    نوفر خريطة متسلسلة في مختلف المجالات البرمجية</h3>
        <div class="box1_img">          
            <img src="file/image/road.png" alt="roadmap">
        </div>

    </div>
   </section>
  <!-- end section faq -->
 <!-- start section all lang -->
 <section id="all_lang">
 <div class="strok_lang">
        <div class="lang_icon position1">
            <img src="file/icons/lang_pr/php.png" alt="">
        </div>
        <div class="lang_icon position2">
            <img src="file/icons/lang_pr/html.png" alt="">
        </div>
        <div class="lang_icon position3">
            <img src="file/icons/lang_pr/python.png" alt="">
        </div>
        <div class="lang_icon position4">
            <img src="file/icons/lang_pr/java.png" alt="">
        </div>
        <div class="lang_icon position5">
            <img src="file/icons/lang_pr/sql.png" alt="">
        </div>
        <div class="lang_icon position6">
            <img src="file/icons/lang_pr/js.png" alt="">
        </div>
        <div class="lang_icon position7">
            <img src="file/icons/lang_pr/mysql.png" alt="">
        </div>
        <div class="lang_icon2 position8">
        </div>
        <div class="lang_icon2 position9">
        </div>
</div>
    <div class="all_lang_text">
        <p>يوفر موقع الجيل البرمجي العربي الموجه للشباب
العربي مجموعة من الدروس التعليمية في لغات البرمجة 
يمكنك اختيار لغة البرمجة التي تحبها تجد معها مجموعة 
من التمارين والاختبارات مع الحلول لمساعدتك على
تطوير مستواك في لغتك البرمجية</p>
    </div>
 </section>
 <!-- end section all lang -->
<?php
include $footer2;
?>

</body>
</html>