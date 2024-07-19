<?php 
// بدء الجلسة، لتتمكن من الوصول إلى متغيرات الجلسة مثل $_SESSION['data'].
session_start();
// تضمين ملف التهيئة الذي قد يحتوي على إعدادات أساسية للتطبيق، مثل إعدادات الاتصال بقاعدة البيانات أو تهيئة متغيرات البيئة.
include '../inc/init.php';
// تضمين ملف التحقق من تسجيل الدخول للمستخدم. يتم التحقق مما إذا كان المستخدم مسجلًا أم لا، وعادةً ما يتم إعادة توجيه المستخدم إذا لم يكن مسجلًا.
include $if_not_reg;
// تضمين ملف الاتصال بقاعدة البيانات. يحدد تفاصيل الاتصال بقاعدة البيانات مثل اسم المستخدم وكلمة المرور واسم قاعدة البيانات
include $cnx;
// الحصول على الاسم الأول للمستخدم من بيانات الجلسة وتخزينه في متغير $firstname.
$firstname  = $_SESSION['data']->firstname;
// الحصول على اسم العائلة للمستخدم من بيانات الجلسة وتخزينه في متغير $lastname.
$lastname   = $_SESSION['data']->lastname;
// الحصول على عنوان البريد الإلكتروني للمستخدم من بيانات الجلسة وتخزينه في متغير $email
$email      = $_SESSION['data']->email;
// تحضير استعلام SQL لاختيار جميع البيانات من جدول المستخدمين بناءً على عنوان البريد الإلكتروني.
$data = $mydb->prepare("SELECT * FROM user WHERE email = :email");
// ربط معلمة الاستعلام :email بالمتغير $email.
$data->bindParam(":email", $email);
// تنفيذ الاستعلام الذي تم تحضيره، والذي يقوم بجلب بيانات المستخدم بناءً على البريد الإلكتروني.
$data->execute();
// استرداد نتيجة الاستعلام ككائن PHP يحتوي على جميع بيانات المستخدم.
$info = $data->fetchObject();
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
<body dir="rtl">
<!-- استدعاء ملف الناف بار هنا -->
<?php
    include $_nav;
?>
<!-- //هنا حقول تعديل الملف الشخصي -->
<?php
// استدعاء الحقول الادخال
if (isset($_POST['SaveChange'])) {
    $new_firstname   = $_POST['new_firstName'];
    $new_lastname    = $_POST['new_lastName'];
    $new_gender      = $_POST['gender'];
    $newDateBirdth   = $_POST['newDateBirdth'];
    $new_PhoneNumber = $_POST['new_PhoneNumber'];
    $new_country     = $_POST['new_country'];
    $new_description = $_POST['description'];
    $link_instagram  = $_POST['link_instagram'];
    $link_facebook   = $_POST['link_facebook'];
    $link_linkedin   = $_POST['link_linkedin'];
    $link_x          = $_POST['link_x'];

    $newData = $mydb->prepare("UPDATE user SET firstname=:firstname,
                                            lastname=:lastname,
                                            phone=:phone,
                                            gender=:gender,
                                            datebirdth=:datebirdth,
                                            country=:country,
                                            description=:description,
                                            instagram=:instagram,
                                            facebook=:facebook,
                                            twitter=:twitter,
                                            linkedin=:linkedin
                                            WHERE email=:email"
    );

    $newData->bindParam(":firstname", $new_firstname);
    $newData->bindParam(":lastname", $new_lastname);
    $newData->bindParam(":phone", $new_PhoneNumber);
    $newData->bindParam(":gender", $new_gender);
    $newData->bindParam(":datebirdth", $newDateBirdth);
    $newData->bindParam(":country", $new_country);
    $newData->bindParam(":description", $new_description);
    $newData->bindParam(":instagram", $link_instagram);
    $newData->bindParam(":facebook", $link_facebook);
    $newData->bindParam(":twitter", $link_x);
    $newData->bindParam(":linkedin", $link_linkedin);
    $newData->bindParam(":email", $email);

    if ($newData->execute()) {
      $newInfo = $mydb->prepare("SELECT * FROM user WHERE email = :email");
      $newInfo->bindParam("email",$email);
      $newInfo->execute();
      $new_info= $newInfo->fetchObject();
      $_SESSION['data']=$new_info;
        echo "تم تعديل البيانات بنجاح";
    } else {
        echo "فشل تحديث البيانات";
    }
}
?>
<form method="POST" id="edit_profile2" enctype="multipart/form-data">
    <!-- //تخصيص زر حفظ التغيرات -->
    <div class="text_head">
        <h4>حسابي:</h4>
        <button type="submit" name="SaveChange">حفظ التغيرات</button>
    </div>
    <!-- هنا مكان رفع الصورة الشخصية -->
    <div class="upload_photo">
        <div id="yourPhoto"></div>

        <div class="input_photo">
            <label for="inputFile" style="margin: 0" class="custom_upload_file">اختر الصورة</label>
            <input type="file" id="inputFile" accept="image/*">
            <button id="delete_photo" style="margin: 0 5px">حذف الصورة</button>
            <script>
                let output = document.getElementById('yourPhoto');
                let input = document.getElementById('inputFile');
                let delete_photo = document.getElementById('delete_photo');
                // إضافة دالة استماع لحظة التغيير
                input.addEventListener('change', function(event) {
                    // الحصول على الملف المرفوع
                    const file = event.target.files[0];
                    if (file) { // تحقق من وجود الملف

                        // إنشاء كائن لقراءة محتوى الملف
                        const reader = new FileReader();
                        // تحديد ما يحدث عند اكتمال القراءة
                        reader.onload = function(e) {
                            // إنشاء عنصر لعرض الصورة
                            const img = document.createElement('img');
                            img.src = e.target.result; // ضبط مصدر الصورة على نتيجة القراءة
                            img.style.maxWidth = '100%'; // لتعديل حجم الصورة
                            img.style.height = '100%'; // لتعديل حجم الصورة
                            output.innerHTML = ''; // إزالة الصورة السابقة
                            output.appendChild(img); // عرض الصورة
                        };
                        reader.readAsDataURL(file); // قراءة الملف كـ data URL
                    }
                });
                // دالة استماع إلى حدث النقر
                delete_photo.addEventListener('click', () => {
                    // عند النقر على الزر يقوم بحذف الصورة
                    output.innerHTML = '';
                });
            </script>
        </div>
        <h4 class="h4_edit_profile">
            تعديل البيانات الشخصية:
        </h4>
        <div class="edit_all">
            <div class="edit_container">
                <div class="edit_box">
                    <h5>الاسم الاول</h5>
                    <input type="text" name="new_firstName" value="<?=$info->firstname?>" placeholder="الاسم الشخصي" class="edit_input">
                </div>
                <div class="edit_box">
                    <h5>اسم العائلة</h5>
                    <input type="text" name="new_lastName" value="<?=$info->lastname?>" placeholder="الاسم العائلي" class="edit_input">
                </div>
                <div class="edit_box">
                    <h5> الجنس</h5>
                    <select name="gender" id="gender">
                        <option value="">غير محدد</option>
                        <option value="male" <?= ($info->gender === 'male') ? 'selected' : '' ?>>ذكر</option>
                        <option value="female" <?= ($info->gender === 'female') ? 'selected' : '' ?>>أنثى</option>
                    </select>
                </div>
            </div>
            <div class="edit_container">
                <div class="edit_box">
                    <h5>تاريخ الميلاد</h5>
                    <input type="date" name="newDateBirdth" value="<?=$info->datebirdth?>" placeholder="تاريخ الميلاد" class="edit_input">
                </div>
                <div class="edit_box">
                    <h5> رقم الهاتف</h5>
                    <input type="number" name="new_PhoneNumber" value="<?=$info->phone?>" placeholder="رقم الهاتف" class="edit_input">
                </div>
                <div class="edit_box">
                    <h5>البلد</h5>
                    <input type="text" name="new_country" placeholder="البلد" value="<?=$info->country?>" class="edit_input">
                </div>
            </div>
            <div class="edit_container">
                <div class="edit_box2">
                    <h5>نبذة عنك</h5>
                    <input type="text" name="description" value="<?=$info->description?>" id="description" placeholder="ملخص قصير عن سيرتك الذاتية يتضمن معلومات أساسية عن مجال تخصصك">
                </div>
            </div>
            <div class="edit_container">
                <div class="social_box">
                    <div class="social_box_icon">
                        <img src="../file/icons/instagram.png" alt="instagram">
                        رابط حسابك على الانستاجرام:
                    </div>
                    <input type="text" name="link_instagram" value="<?=$info->instagram?>" placeholder="www.instagram.com/arabic_generation_developer">
                </div>
            </div>
            <div class="edit_container">
                <div class="social_box">
                    <div class="social_box_icon">
                        <img src="../file/icons/facebook.png" alt="facebook">
                        رابط حسابك على الفايسبوك:
                    </div>
                    <input type="text" name="link_facebook" value="<?=$info->facebook?>" placeholder="www.facebook.com/arabic_generation_developer">
                </div>
            </div>
            <div class="edit_container">
                <div class="social_box">
                    <div class="social_box_icon">
                        <img src="../file/icons/linkedin.png" alt="linkedin">
                        رابط حسابك على لينكدن:
                    </div>
                    <input type="text" name="link_linkedin" value="<?=$info->linkedin?>" placeholder="www.linkedin.com/arabic_generation_developer">
                </div>
            </div>
            <div class="edit_container">
                <div class="social_box">
                    <div class="social_box_icon">
                        <img src="../file/icons/twitter.png" alt="x">
                        رابط حسابك على إكس:
                    </div>
                    <input type="text" name="link_x" value="<?=$info->twitter?>" placeholder="www.x.com/arabic_generation_developer">
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>