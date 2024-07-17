<?php 
    session_start();
include '../inc/init.php';
    include $if_not_reg;
     
    $firstname = $_SESSION['data']->firstname;
    $lastname  = $_SESSION['data']->lastname;
    $email = $_SESSION['data']->email;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=$profile?>">
    <link rel="shortcut icon" href="../file/image/support.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اعدادات الملف الشخصي</title>
</head>
<body  dir="rtl">
<!-- استدعاء ملف الناف بار هنا -->
<?php
    include '_navbar.php';
?>
<!-- //هنا حقول تعديل الملف الشخصي -->
<form  method="post" id="edit_profile2">
<!-- //تخصيص زر حفض الغيرات -->
<div class="text_head">
   <h4>حسابي:</h4>
    <button type="submit" name="SaveChange">حفظ التغيرات</button>
</div>
<!-- هنا مكان رفع الصورة الشخصية -->
 <div class="upload_photo">
    <div id="yourPhoto"></div>

    <div class="input_photo">
        <label for="inputFile" class="custom_upload_file">اختر الصورة</label>
        <input type="file" id="inputFile" accept="image/*">
        <button id="delete_photo">حذف الصورة</button>
        <script>
            let output =document.getElementById('yourPhoto');
            let   input  =document.getElementById('inputFile');
             let   delete_photo=document.getElementById('delete_photo');
                //اضافة دالة استماع لحذت التغيير
                input.addEventListener('change',function(event){
                    //الحصول على الملف المرفوع
                    const file = event.target.files[0];
                    if(file){//تحقق من وجود الملف

                        //انشاء كائن لقرائة محتوى الملف
                        const reader = new FileReader();
                        //تحديد ما يحدث عند اكتمال القرائة
                        reader.onload = function(e){
                            //انشاء عنصر لعرض الصورة
                            const img = document.createElement('img');
                            img.src = e.target.result;//ضبط مصدر الصورة على نتيجة القرائة
                            img.style.maxWidth ='100%';//لتعديل حجم الصورة
                            img.style.heigth ='100%';//لتعديل حجم الصورة
                            output.innerHTML ='';//ازالة الصورة السابقة
                            output.appendChild(img);//عرض الصورة
                        };
                        reader.readAsDataURL(file);//قرائة الملف كاداتا url
                    };
                })
                //دالة استماع الى حذت النقر 
                delete_photo.addEventListener('click',()=>{
                    //عند النقر على الزر يقوم بحذف الصورة
                    output.innerHTML='';
                })
        </script>
    </div>
    <h4 class="h4_edit_profile">
    تعديل البيانات الشخصية:
 </h4>
 <div class="edit_container">
   <div class="edit_box">
     <h5>الاسم الشخصي</h5>
     <input type="text" name="new_firstName" placeholder="الاسم الشخصي" class="edit_input">
   </div>
   <div class="edit_box">
     <h5>الاسم العائلي</h5>
     <input type="text" name="new_firstName" placeholder="الاسم العائلي" class="edit_input">
   </div>
   <div class="edit_box">
     <h5> الجنس</h5>
    <select name="gender" id="gender">
        <option value="">غير محدد</option>
        <option value="male">ذكر</option>
        <option value="female">انثى</option>
    </select>
   </div>
 </div>
 <div class="edit_container">
   <div class="edit_box">
     <h5> تاريخ الازدياد</h5>
     <input type="date" name="newDateBirdth" placeholder="الاسم الشخصي" class="edit_input">
   </div>
   <div class="edit_box">
     <h5> رقم الهاتف</h5>
     <input type="number" name="new_PhoneNumber" placeholder=" رقم الهاتف" class="edit_input">
   </div>
   <div class="edit_box">
     <h5> موقعك الشخصي</h5>
     <input type="text" name="new_PhoneNumber" placeholder="   موقعك الشخصي" class="edit_input">
   
   </div>
 </div>
 </div>
</form>
</body>
</html>