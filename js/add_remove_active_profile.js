// إنشاء مصفوفة تحتوي على معرّفات العناصر التي نريد التعامل معها، ثم تحويل هذه المعرّفات إلى عناصر DOM باستخدام document.getElementById
let elements = [
  'profile',
  'edit_profile',
  'edit_account',
  'notification',
  'post',
  'project',
  'static'
].map(id => document.getElementById(id));

// الحصول على عنوان URL الحالي من نافذة المتصفح
let url = window.location.href;

// إزالة فئة 'active' من جميع العناصر في المصفوفة لتأكيد أن جميع العناصر غير نشطة في البداية
elements.forEach(element => element.classList.remove('active'));

// التحقق مما إذا كان عنوان URL يحتوي على 'profile.php'، وإذا كان الأمر كذلك، إضافة فئة 'active' إلى العنصر المقابل
if (url.includes('profile.php')) {
  elements[0].classList.add('active');

// التحقق مما إذا كان عنوان URL يحتوي على 'profile_setting.php'، وإذا كان الأمر كذلك، إضافة فئة 'active' إلى العنصر المقابل
} else if (url.includes('profile_setting.php')) {
  elements[1].classList.add('active');

// التحقق مما إذا كان عنوان URL يحتوي على 'account_setting.php'، وإذا كان الأمر كذلك، إضافة فئة 'active' إلى العنصر المقابل
} else if (url.includes('account_setting.php')) {
  elements[2].classList.add('active');

// التحقق مما إذا كان عنوان URL يحتوي على 'notification.php'، وإذا كان الأمر كذلك، إضافة فئة 'active' إلى العنصر المقابل
} else if (url.includes('notification.php')) {
  elements[3].classList.add('active');

// التحقق مما إذا كان عنوان URL يحتوي على 'post.php'، وإذا كان الأمر كذلك، إضافة فئة 'active' إلى العنصر المقابل
} else if (url.includes('post.php')) {
  elements[4].classList.add('active');

// التحقق مما إذا كان عنوان URL يحتوي على 'project.php'، وإذا كان الأمر كذلك، إضافة فئة 'active' إلى العنصر المقابل
} else if (url.includes('project.php')) {
  elements[5].classList.add('active');

// التحقق مما إذا كان عنوان URL يحتوي على 'static.php'، وإذا كان الأمر كذلك، إضافة فئة 'active' إلى العنصر المقابل
} else if (url.includes('static.php')){
 elements[6].classList.add('active');
}

