<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 <?php 
session_start();

include '../inc/init.php';
include $cnx;

if (isset($_POST['sub'])) {
    $add_lang = $mydb->prepare('INSERT INTO user_lang (`lang_id`, `user_id`, `date`) VALUES (:lang_id, :user_id, NOW())');
    $add_lang->bindParam('lang_id', $_POST['sub']);
    $add_lang->bindParam('user_id', $_SESSION['user_id']);
    if ($add_lang->execute()) {
        header("Location: home.php");
        exit();
    }
}

function getLangs($state){
if ($state){
echo(' <form method="post">

<div class="languages_box">

    <figure>
        <img src="../file/image/home/html.png" alt="no image">
    </figure>
    <div class="content">
    <h3 >تعلم لغة HTML</h3>
    <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>

    <div class="progress">

             <div class="progress_chart"></div>
    </div>

    <button value="1" name="sub"> ابدا تعلم اللغة الان</button>
    </div>
</div>

<div class="languages_box">

    <figure class="fig"><img src="../file/image/home/css.png" alt="no image"></figure>
    <div class="content">
    <h3>تعلم لغة CSS</h3>
    <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
    <div class="progress">

<div class="progress_chart"></div>
</div>
    <button class="butt_css"name="sub" value="2"> ابدا تعلم اللغة الان</button>

    </div>
    
</div>

<div class="languages_box">

    <figure class="fig"><img src="../file/image/home/javascript.png" alt="no image"></figure>
    <div class="content">
    <h3> تعلم لغة JavaScript</h3>
    <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
    <div class="progress">

<div class="progress_chart"></div>
</div>
    <button value="3"name="sub" > ابدا تعلم اللغة الان</button>
    </div>
    

</div>

<div class="languages_box">

    <figure class="fig"><img src="../file/image/home/php.png" alt="no image"></figure>
    <div class="content">
    <h3> تعلم لغة PHP</h3>
    <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
    <div class="progress">

<div class="progress_chart"></div>
</div>
    <button class="butt_php"name="sub" value="4"> ابدا تعلم اللغة الان</button>
    </div>
   

</div>

<div class="languages_box">

    <figure class="fig"><img src="../file/image/home/C.png" alt="no image"></figure>
    <div class="content">
    <h3> تعلم لغة C</h3>
    <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
    <div class="progress">

<div class="progress_chart"></div>
</div>
    <button class="butt_c"name="sub" value="5"> ابدا تعلم اللغة الان</button>
    </div>
   

</div>

<div class="languages_box">

    <figure class="fig"><img src="../file/image/home/CPP.png" alt="no image"></figure>
    <div class="content">
    <h3> تعلم لغة ++C</h3>
    <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
    <div class="progress">

<div class="progress_chart"></div>
</div>
    <button class="butt_cpp"name="sub" value="6"> ابدا تعلم اللغة الان</button>
    </div>
    

</div>

<div class="languages_box">

    <figure class="fig"><img src="../file/image/home/C_char.png" alt="no image"></figure>
    <div class="content">
    <h3> تعلم لغة #C</h3>
    <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
    <div class="progress">

<div class="progress_chart"></div>
</div>
    <button class="butt_C_char"name="sub" value="7"> ابدا تعلم اللغة الان</button>
    </div>
    

</div>

<div class="languages_box">

    <figure class="fig"><img src="../file/image/home/sql.png" alt="no image"></figure>
    <div class="content">
    <h3> تعلم لغة SQL</h3>
    <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
    <div class="progress">

<div class="progress_chart"></div>
</div>
    <button class="butt_C_char" value=8 name="sub"> ابدا تعلم اللغة الان</button>
    </div>

</div>

<div class="languages_box">

    <figure class="fig"><img src="../file/image/home/python.png" alt="no image"></figure>
    <div class="content">
    <h3> تعلم لغة PYTHON</h3>
    <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
    <div class="progress">

<div class="progress_chart"></div>
</div>
    <button class="butt_C_char" name="sub"value="9"> ابدا تعلم اللغة الان</button>
    </div>

</div>

<div class="languages_box">

    <figure class="fig"><img src="../file/image/home/java1.png" alt="no image"></figure>
    <div class="content">
    <h3>تعلم لغة JAVA</h3>
    <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
    <div class="progress">

<div class="progress_chart"></div>
</div>
    <button class="butt_C_char"name="sub" value="10"> ابدا تعلم اللغة الان</button>
    </div>

</div>

<div class="languages_box">

    <figure class="fig"><img src="../file/image/home/ruby.png" alt="no image"></figure>
    <div class="content">
    <h3>تعلم لغة RUBY</h3>
    <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
    <div class="progress">

<div class="progress_chart btn toggle active"></div>
</div>
    <button class="butt_C_char"name="sub" value="11"> ابدا تعلم اللغة الان</button>
    </div>

</div>
</form>
');
}else{

    echo('
    <div class="languages_box">
    
        <figure>
            <img src="../file/image/home/html.png" alt="no image">
        </figure>
        <div class="content">
        <h3 >تعلم لغة HTML</h3>
        <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
    
        <div class="progress">
    
                 <div class="progress_chart"></div>
        </div>
    <button> 
    عليك انهاء اللغه اللتي اخترتها اولا
    </button> 
        </div>
    </div>
    
    <div class="languages_box">
    
        <figure class="fig"><img src="../file/image/home/css.png" alt="no image"></figure>
        <div class="content">
        <h3>تعلم لغة CSS</h3>
        <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <div class="progress">
    
    <div class="progress_chart"></div>
    </div>
    <button> 
    عليك انهاء اللغه اللتي اخترتها اولا
    </button> 
        </div>
        
    </div>
    
    <div class="languages_box">
    
        <figure class="fig"><img src="../file/image/home/javascript.png" alt="no image"></figure>
        <div class="content">
        <h3> تعلم لغة JavaScript</h3>
        <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <div class="progress">
    
    <div class="progress_chart"></div>
    </div>
    <button> 
    عليك انهاء اللغه اللتي اخترتها اولا
    </button> 
        </div>
        
    
    </div>
    
    <div class="languages_box">
    
        <figure class="fig"><img src="../file/image/home/php.png" alt="no image"></figure>
        <div class="content">
        <h3> تعلم لغة PHP</h3>
        <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <div class="progress">
    
    <div class="progress_chart"></div>
    </div>
    <button> 
    عليك انهاء اللغه اللتي اخترتها اولا
    </button> 
        </div>
       
    
    </div>
    
    <div class="languages_box">
    
        <figure class="fig"><img src="../file/image/home/C.png" alt="no image"></figure>
        <div class="content">
        <h3> تعلم لغة C</h3>
        <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <div class="progress">
    
    <div class="progress_chart"></div>
    </div>
    <button> 
    عليك انهاء اللغه اللتي اخترتها اولا
    </button> 
        </div>
       
    
    </div>
    
    <div class="languages_box">
    
        <figure class="fig"><img src="../file/image/home/CPP.png" alt="no image"></figure>
        <div class="content">
        <h3> تعلم لغة ++C</h3>
        <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <div class="progress">
    
    <div class="progress_chart"></div>
    </div>
    <button> 
    عليك انهاء اللغه اللتي اخترتها اولا
    </button> 
        </div>
        
    
    </div>
    
    <div class="languages_box">
    
        <figure class="fig"><img src="../file/image/home/C_char.png" alt="no image"></figure>
        <div class="content">
        <h3> تعلم لغة #C</h3>
        <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <div class="progress">
    
    <div class="progress_chart"></div>
    </div>
    <button> 
    عليك انهاء اللغه اللتي اخترتها اولا
    </button> 
        </div>
        
    
    </div>
    
    <div class="languages_box">
    
        <figure class="fig"><img src="../file/image/home/sql.png" alt="no image"></figure>
        <div class="content">
        <h3> تعلم لغة SQL</h3>
        <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <div class="progress">
    
    <div class="progress_chart"></div>
    </div>
    <button> 
    عليك انهاء اللغه اللتي اخترتها اولا
    </button> 
        </div>
    
    </div>
    
    <div class="languages_box">
    
        <figure class="fig"><img src="../file/image/home/python.png" alt="no image"></figure>
        <div class="content">
        <h3> تعلم لغة PYTHON</h3>
        <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <div class="progress">
    
    <div class="progress_chart"></div>
    </div>
    <button> 
    عليك انهاء اللغه اللتي اخترتها اولا
    </button> 
        </div>
    
    </div>
    
    <div class="languages_box">
    
        <figure class="fig"><img src="../file/image/home/java1.png" alt="no image"></figure>
        <div class="content">
        <h3>تعلم لغة JAVA</h3>
        <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <div class="progress">
    
    <div class="progress_chart"></div>
    </div>
    <button> 
    عليك انهاء اللغه اللتي اخترتها اولا
    </button> 
        </div>
    
    </div>
    
    <div class="languages_box">
    
        <figure class="fig"><img src="../file/image/home/ruby.png" alt="no image"></figure>
        <div class="content">
        <h3>تعلم لغة RUBY</h3>
        <p>هذد اللغة هي اساس بناء هيكل المظهر الخارجي لاي  مشروع تصادفه</p>
        <div class="progress">
    
    <div class="progress_chart btn toggle active"></div>
    </div>
    <button> 
    عليك انهاء اللغه اللتي اخترتها اولا
    </button> 
        </div>
    
    </div>
    ');
}
}
?>
    <link rel="shortcut icon" href="file/image/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$home?>">
    <title>الجيل البرمجي</title>
</head>
<body dir="rtl">
<?php
      // بدء جلسة PHP، وهذا يعني أنه سيتم استخدام متغيرات الجلسة في هذا الملف

      // تضمين ملف يحتوي على تعريفات أو متغيرات أخرى، افترض أن $if_not_reg يحتوي على اسم الملف المناسب
      include $if_not_reg;
  
      // تضمين ملف الشريط العلوي (النافبار) من أجل عرض التنقل في الصفحة، افترض أن $navbar يحتوي على اسم الملف المناسب
      include $navbar;
  
      // الحصول على اسم المستخدم من بيانات الجلسة وتخزينه في متغير $firstname
      $firstname = $_SESSION['data']->firstname;
  
      // الحصول على لقب المستخدم من بيانات الجلسة وتخزينه في متغير $lastname
      $lastname  = $_SESSION['data']->lastname;
?>
<!-- 
 ******************************
 start hello section 
 ******************************-->
   <section id="hello">
<div class="hello_text">

<h1> مرحبا <?php echo $firstname." ".$lastname  ?> </h1>
<p>نحن في فريق الجيل البرمجي العربي نرحب بك بشدة في مجتمعنا. نحن نقدر انضمامك إلينا ونتطلع إلى تجربتك معنا.

بمجرد تسجيلك، فقد فتحت بابًا للعديد من الفرص والمزايا التي يقدمها موقعنا. سواء كنت تبحث عن المعلومات، أو حتى توسيع دائرة معارفك، نحن هنا لنجعل تجربتك سهلة وممتعة.
لا تتردد في استكشاف ما يمكن أن تقدمه لك خدماتنا ومواردنا المتنوعة. كما يمكنك دائمًا التواصل مع فريق الدعم الفني لدينا إذا كانت لديك أي أسئلة أو استفسارات.

نأمل أن تجد الجيل البرمجي العربي مفيدًا وملهمًا بالنسبة لك كما هو الحال بالنسبة لنا. نحن نتطلع إلى مستقبل مشرق معكم ونأمل أن تكون تجربتك معنا ممتعة ومثمرة.

مرة أخرى، أهلاً ومرحبًا بك في الجيل البرمجي العربي</p>
</div>
<div class="hello_img">
    <img src="../file/image/hellping.jpg" alt="helping">
</div>
   </section>
<!-- end hello section -->

  <!--
****************************
 start section roadmap 
 ***************************
 -->
 <div id="road" >
<div class="info">

    <h1>اختر المسار البرمجي الذي ترغب به
</h1>
    <p>قم باختيار المسار البرمجي الذي ترغب في تعلمه وسيتم اضافة
        ذالك الى ملفك الشخصي مع تتبع مسارك ومشاهدة تقدمك قم 
        بجتياز التمارين والاختبارات بنجاح لترتقي لمستويات اعلى بالتوفيق
    
</p>

</div>
<div class="road1">
    <img src="../file/image/home/road.jpg" alt="المسار المتاح">
    <div class="description">
        <h1>مسار التاسيس في البرمجة</h1>
       <p>
من هنا تنطلق الخطوة الاولى في التاسيس البرمجي لن تحتاج الى اي خبرة مسبقة سنبدا من الصفر خطوة خطوة ان شاء الله
       </p>
       <button type="submit" value="1" id="foundation">ابدا الان</button>
    </div>
</div>
<div class="road1">
    <img src="../file/image/home/webdes.jpg" alt="تصميم المواقع">
    <div class="description">
        <h1>تصميم واجهة المواقع</h1>
        <p>من خلال اختيارك لهذا المسار ستمكن من تعلم كيف تصمم واجهات مواقع 
            جذابة مع احدث التقنيات المتاحة 
        </p>
        <button type="submit" value="2" id="web_designe">ابدا الان</button>
    </div>
</div>
<div class="road1">
    <img src="../file/image/home/webdev.jpg" alt="تصميم المواقع">
    <div class="description">
        <h1>  برمجة وتطوير المواقع</h1>
      <p>من خلال اختيارك لهذا المسار ستتكمن من تنمية قدرتك
        على برمجة المواقع وجعل الموقع قابل للتفاعل مع المستخدم
      </p>
        <button type="submit" value="3" id="web_designe">ابدا الان</button>
    </div>
</div>
<div class="road1">
    <img src="../file/image/home/server.jpg" alt="تصميم المواقع">
    <div class="description">
        <h1>    برمجة خلفية المواقع</h1>
<p>من خلال هدا المسار ستتمكن من ربط موقعك مع قاعدة البيانات وادارة 
    بيانات المستخدمين والتعامل مع قواعد البيانات بشكل احترافي
</p>
        <button type="submit" value="4" id="web_designe">ابدا الان</button>
    </div>
</div>
 </div>
  <!-- 
 ***************************
 end section roadmap 
 ***************************-->



<!-- 
  **************************
  start Select Road 
  ***************************--> 
<section class="select-road">

    <div class="content1">
        <div class="image">
            <img src="../file/image/home/road_home.jpg">
        </div>
        
        <div class="text">
            <h1 class="title" >هل انت محتار في اختيار مسارك</h1>
            <p class="desc">
                يمكننا تقديم لك المساعده من خلال المقال اللذي اعددناه. نشرح فيه كل التخصصات المتاحه لدينا لمساعدتك في اتخاذ قرارك المناسب
            </p>
            <button class="btn btn-moreInf">معرفه المزيد</button>
        </div>
    </div>
</section>
<!--
******************************
 End Select Road
 ****************************--> 





  
  <!--
*******************************
 add section for avaibal languages 
 **********************************-->

<section class="languages">
<?php


    

    $query = $mydb->prepare('SELECT * FROM  user_lang WHERE user_id = :id ');
    $query->bindParam('id' , $_SESSION['user_id']);
    $query->execute();
    if ($query->rowCount() <= 0){
    getLangs(true);
    }else{
    getLangs(false);
    }

?>
  </section>
<!-- 
  **********************************
  --end section  for avaibal languages
  *************************************
-->



<!-- 
*************************************
        - start FEATURES
************************************
-->

      <section  id="features" aria-label="features">
      <h1 class="h_section_title">احدث الميزات</h1>
          <p class="section_subtitle">تمتع بالعديد من الميزات التي يوفرها موقع 
            الجيل البرمجي العربي
          </p>
        <div class="container">
         <div class="_box">
            

         </div>
         <div class="_box">
            
         </div>
         <div class="_box">
            <p>نوفر ميزة تجربة اكوادك مباشرة على الموقع داخل محرر جاهز</p>
            <div class="terminal-loader">
                <div class="terminal-header">
                  
                     <div class="terminal-controls">
                       <div class="control close"></div>
                       <div class="control minimize"></div>
                       <div class="control maximize"></div>
                     </div>
                     <div class="terminal-title">تحرير مباشرة</div>
                </div>
            <div class="text">الجيل البرمجي  </div>
        </div>

         </div>
         

        
       

        </div>
      </section>
      <!-- 
        - end FEATURES
-->

</body>
</html>
