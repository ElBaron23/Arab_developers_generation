<?php 
include '../inc/init.php';
 ?>
<div id="navbar">
<h2>الجيل البرمجي العربي</h2>
<div id="toggle_btn" >
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div id="nav">
  
    <ul>
    <li> <a href="/profile" id="profile" class="active">الملف الشخصي</a></li>
        <li> <a href="<?=$profileS?>" id="edit_profile"> اعدادات الملف الشخصي</a></li>
        <li> <a href="<?=$accountS?>" id="edit_account">  الحساب</a></li>
        <li> <a href="<?=$notification?>" id="notification"> الاشعارات</a></li>
        <li> <a href="<?=$post?>" id="post">المنشورات</a></li>
        <li> <a href="<?=$project?>" id="project">المشاريع</a></li>
        <li> <a href="<?=$static?>" id="static">الاحصائيات</a></li>
        <li> <a href="<?=$homeP?>" id="logout"> العودة</a></li>
       
    </ul>
    </div>
</div>
<script src="<?=$toggleMenu?>">
</script>
<script src="<?=$toggleClassProfile?>">
</script>