// إنشاء مصفوفة تحتوي على معرّفات العناصر التي نريد التعامل معها، ثم تحويل هذه المعرّفات إلى عناصر DOM باستخدام document.getElementById
let elements = [
  'home',            // معرّف العنصر الخاص بالصفحة الرئيسية
  'roadmap',         // معرّف العنصر الخاص بخريطة الطريق
  'lang_programing', // معرّف العنصر الخاص ببرمجة اللغات
  'profile',         // معرّف العنصر الخاص بالملف الشخصي
  'communitie',      // معرّف العنصر الخاص بالمجتمع
  'blogger'          // معرّف العنصر الخاص بالمدونين
].map(id => document.getElementById(id)); // تحويل معرّفات العناصر إلى عناصر DOM

// الحصول على عنوان URL الحالي من نافذة المتصفح
let url = window.location.href;

// إزالة فئة 'active' من جميع العناصر في المصفوفة لتأكيد أن جميع العناصر غير نشطة في البداية
elements.forEach(element => element.classList.remove('active'));

// التحقق مما إذا كان عنوان URL يحتوي على 'profile.php'، وإذا كان الأمر كذلك، إضافة فئة 'active' إلى العنصر المقابل (الملف الشخصي)
if (url.includes('profile.php')) {
  elements[3].classList.add('active'); // تعيين العنصر الرابع (الملف الشخصي) كنشط

// التحقق مما إذا كان عنوان URL يحتوي على 'roadmap.php'، وإذا كان الأمر كذلك، إضافة فئة 'active' إلى العنصر المقابل (خريطة الطريق)
} else if (url.includes('roadmap.php')) {
  elements[1].classList.add('active'); // تعيين العنصر الثاني (خريطة الطريق) كنشط

// التحقق مما إذا كان عنوان URL يحتوي على 'lang_prog.php'، وإذا كان الأمر كذلك، إضافة فئة 'active' إلى العنصر المقابل (برمجة اللغات)
} else if (url.includes('lang_prog.php')) {
  elements[2].classList.add('active'); // تعيين العنصر الثالث (برمجة اللغات) كنشط

// التحقق مما إذا كان عنوان URL يحتوي على 'communitie.php'، وإذا كان الأمر كذلك، إضافة فئة 'active' إلى العنصر المقابل (المجتمع)
} else if (url.includes('communitie.php')) {
  elements[4].classList.add('active'); // تعيين العنصر الخامس (المجتمع) كنشط

// التحقق مما إذا كان عنوان URL يحتوي على 'blogger.php'، وإذا كان الأمر كذلك، إضافة فئة 'active' إلى العنصر المقابل (المدونين)
} else if (url.includes('blogger.php')) {
  elements[5].classList.add('active'); // تعيين العنصر السادس (المدونين) كنشط

// التحقق مما إذا كان عنوان URL يحتوي على 'home.php'، وإذا كان الأمر كذلك، إضافة فئة 'active' إلى العنصر المقابل (الصفحة الرئيسية)
} else if (url.includes('home.php')) {
  elements[0].classList.add('active'); // تعيين العنصر الأول (الصفحة الرئيسية) كنشط
}
