
   <!-- footer start -->
<footer>
    <div class="part1">
    <div class="social">
       <div class="logo_footer">
       <?php
$url = $_SERVER['REQUEST_URI'];  // يتم تعيين قيمة متغير $url بالمسار الكامل للملف الحالي
if (!strpos($url, 'index.php')){  // إذا كان الملف الحالي لا يحتوي على النص "index.php"
    echo('<img src='.$logo2.' alt="logo">');  // يتم عرض صورة تحمل مصدرها متغير $logo2
} else {
    echo('<img src='.$logo.' alt="logo">');  // في حالة أخرى، يتم عرض صورة تحمل مصدرها متغير $logo
}
?>
      

        <h3>الجيل البرمجي العربي</h3> 
       </div>
       <h4>تابعنا على:</h4>
       <div class="img_social">
       <?php
if (!strpos($url, '/')){
echo '
  <a href="#"><img loading="lazy" src='.$instagram2 .' alt="instagram"></a>
        <a href="#"><img loading="lazy" src='.$facebook2 .' alt="facebook"></a>
        <a href="#"><img loading="lazy" src='.$github2 .' alt="github"></a>
        <a href="#"><img loading="lazy" src='.$youtube2 .' alt="youtube"></a>
        <a href="#"><img loading="lazy" src='.$twitter2 .' alt="x"></a>
';

}else{
echo '
  <a href="#"><img loading="lazy" src='.$instagram .' alt="instagram"></a>
        <a href="#"><img loading="lazy" src='.$facebook .' alt="facebook"></a>
        <a href="#"><img loading="lazy" loading="lazy" src='.$github .' alt="github"></a>
        <a href="#"><img loading="lazy" src='.$youtube .' alt="youtube"></a>
        <a href="#"><img loading="lazy" src='.$twitter .' alt="x"></a>
';
}

?>


       </div>
    </div>  
     <div class="contact">
        <ul>
            <li><a href="<?=$contact?>">تواصل معنا</a></li>
            <li><a href="<?=$errorPage?>"> شروط الاستخدام</a></li>
            <li><a href="<?=$errorPage?>"> درب معنا</a></li>
        </ul>
     </div>
     <div class="contact">
        <ul>
            <li><a href="<?=$errorPage?>"> اسئلة شائعة</a></li>
            <li><a href="<?=$errorPage?>"> السياسة والخصوصية </a></li>
            <li><a href="<?=$errorPage?>"> الدعم </a></li>
        </ul>
     </div>

    </div>
    <div class="part2">
        <h6>جميع الحقوق محفوظة لذا موقع الجيل البرمجي العربي</h6>
        <h6>2023-2024 تم تطوير الموقع من قبل مجموعة الشباب العربي</h6>

    </div>

</footer>
    <!-- footer end -->