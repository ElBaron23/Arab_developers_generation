<?php
include 'init.php';
//  تحقق من ادا كان المستخدم قد سجل الدخول

if(!isset($_SESSION['user_id'])){
// اذا لم يسجل الدخول قم باعادة توجيهه الى صفحة التسجيل

header("Location:$reg");

exit();

}
?>