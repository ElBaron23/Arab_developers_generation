
   <!-- footer start -->
<footer>
    <div class="part1">
    <div class="social">
       <div class="logo_footer">
       <?php
$url = __FILE__;  // يتم تعيين قيمة متغير $url بالمسار الكامل للملف الحالي
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
if (!strpos($url, 'index.php')){
echo '
  <a href="#"><img src='.$instagram2 .' alt="instagram"></a>
        <a href="#"><img src='.$facebook2 .' alt="facebook"></a>
        <a href="#"><img src='.$github2 .' alt="github"></a>
        <a href="#"><img src='.$youtube2 .' alt="youtube"></a>
        <a href="#"><img src='.$twitter2 .' alt="x"></a>
';

}else{
echo '
  <a href="#"><img src='.$instagram .' alt="instagram"></a>
        <a href="#"><img src='.$facebook .' alt="facebook"></a>
        <a href="#"><img src='.$github .' alt="github"></a>
        <a href="#"><img src='.$youtube .' alt="youtube"></a>
        <a href="#"><img src='.$twitter .' alt="x"></a>
';
}

?>


       </div>
    </div>  
     <div class="contact">
        <ul>
            <li><a href="other/contact_us.php">تواصل معنا</a></li>
            <li><a href="other/error.php"> شروط الاستخدام</a></li>
            <li><a href="other/error.php"> درب معنا</a></li>
        </ul>
     </div>
     <div class="contact">
        <ul>
            <li><a href="other/error.php"> اسئلة شائعة</a></li>
            <li><a href="other/error.php"> السياسة والخصوصية </a></li>
            <li><a href="other/error.php"> الدعم </a></li>
        </ul>
     </div>

    </div>
    <div class="part2">
        <h6>جميع الحقوق محفوظة لذا موقع الجيل البرمجي العربي</h6>
        <h6>2023-2024 تم تطوير الموقع من قبل مجموعة الشباب العربي</h6>

    </div>

</footer>
    <!-- footer end -->