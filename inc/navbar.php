<?php
include "init.php";

?>
    <link rel="stylesheet" href="<?=$animation?>">
    <link rel="stylesheet" href="<?=$nav?>">
<div id="navbar">

            <div class="logo">
                <div class="logo_img">
                    <a href="<?=$idexP?>"></a>
                </div>
                <h1>
                <a href="<?=$indexP?>">
                    الجيل البرمجي العربي
                </a>
                </h1>
               
            </div>
<div id="toggle_btn" >
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div id="nav" >
  
    <ul>

    <li> <a href="<?=$homeP?>" id="home" class="active">الرئيسية</a></li>
        <li> <a href="<?=$langs?>" id="roadmap">المسارات التعليمية</a></li>
        <li> <a href="<?=$langs?>" id="lang_programing">لغات البرمجة</a></li>
        <li> <a href="<?=$profileP?>" id="profile">الملف الشخصي</a></li>
        <li> <a href="<?=$communitie?>" id="communitie">المجتمع</a></li>
        <li> <a href="<?=$blogger?>" id="blogger">المدونة</a></li>
       <li><a href="<?=$logout?>" class="lo">تسجيل الخروج</a></li>
    </ul>
    </div>
</div>
<script src="<?=$toggleClass?>">
</script>
<script src="<?=$toggleMenu?>">
</script>

