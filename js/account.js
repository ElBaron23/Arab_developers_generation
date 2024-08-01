// // الحصول على عنصر الزر المخصص لكلمة المرور بناءً على معرّف العنصر 'passbtn'
// const password_btn = document.getElementById('passbtn');

// // الحصول على عنصر الزر المخصص للبريد الإلكتروني بناءً على معرّف العنصر 'emailbtn'
// const email_btn = document.getElementById('emailbtn');

// // الحصول على العنصر الذي يحتوي على محتوى كلمة المرور المخفي داخل العنصر الذي يحتوي على الفئة 'password-head'
// const passHiddenContent = document.querySelector('.password-head .hidden-content');

// // الحصول على العنصر الذي يحتوي على محتوى البريد الإلكتروني المخفي داخل العنصر الذي يحتوي على الفئة 'email-head'
// const emailHiddenContent = document.querySelector('.email-head .hidden-content');

// // الحصول على نموذج كلمة المرور بناءً على معرّف العنصر 'passform'
// const passForm = document.getElementById('passform');

// // الحصول على نموذج البريد الإلكتروني بناءً على معرّف العنصر 'emailform'
// const emailForm = document.getElementById('emailform');


// // تعيين دالة عند النقر على زر كلمة المرور
// password_btn.onclick = function () {
//     // إخفاء محتوى البريد الإلكتروني
//     emailHiddenContent.classList.add('hidden');
//     emailHiddenContent.classList.remove('show');

//     // عرض محتوى كلمة المرور
//     passHiddenContent.classList.add('show');
//     passHiddenContent.classList.remove('hidden');

//     // تأخير تعيين اسم الزر إلى 'savePass' حتى يتم تحديث المحتوى
//     setTimeout(function() {
//         password_btn.name = 'savePass';
//     }, 0);

//     // تغيير النص داخل زر كلمة المرور إلى 'حفظ التغيرات'
//     this.innerHTML = 'حفظ التغيرات';

//     // تغيير اسم الزر الخاص بالبريد الإلكتروني إلى 'changeEmail'
//     email_btn.name = 'changeEmail';

//     // تغيير النص داخل زر البريد الإلكتروني إلى 'تغير البريد الاكتروني'
//     email_btn.innerHTML = 'تغير البريد الاكتروني';
// }

// // تعيين دالة عند النقر على زر البريد الإلكتروني
// email_btn.onclick = function () {
//     // عرض محتوى البريد الإلكتروني
//     emailHiddenContent.classList.add('show');
//     emailHiddenContent.classList.remove('hidden');

//     // إخفاء محتوى كلمة المرور
//     passHiddenContent.classList.add('hidden');
//     passHiddenContent.classList.remove('show');

//     // تغيير اسم الزر الخاص بكلمة المرور إلى 'changePass'
//     password_btn.name = 'changePass';

//     // تأخير تعيين اسم الزر إلى 'saveEmail' حتى يتم تحديث المحتوى
//     setTimeout(function() {
//         email_btn.name = 'saveEmail';
//     }, 0);

//     // تغيير النص داخل زر كلمة المرور إلى 'تغير كلمه المرور'
//     password_btn.innerHTML = 'تغير كلمه المرور';

//     // تغيير النص داخل زر البريد الإلكتروني إلى 'حفظ التغيرات'
//     this.innerHTML = 'حفظ التغيرات';
// }


// // تعيين دالة عند إرسال نموذج كلمة المرور
// passForm.onsubmit = function (e) {
//     // التحقق مما إذا كان اسم زر كلمة المرور هو 'savePass'
//     if (password_btn.name !== 'savePass') {
//         // إلغاء إرسال النموذج إذا لم يكن الاسم هو 'savePass'
//         return false;
//     } else {
//         // السماح بإرسال النموذج إذا كان الاسم هو 'savePass'
//         return true;
//     }
// }

// // تعيين دالة عند إرسال نموذج البريد الإلكتروني
// emailForm.onsubmit = function (e) {
//     // التحقق مما إذا كان اسم زر البريد الإلكتروني هو 'saveEmail'
//     if (email_btn.name !== 'saveEmail') {
//         // إلغاء إرسال النموذج إذا لم يكن الاسم هو 'saveEmail'
//         return false;
//     } else {
//         // السماح بإرسال النموذج إذا كان الاسم هو 'saveEmail'
//         return true;
//     }
// }

