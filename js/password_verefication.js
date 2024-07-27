/*
*****************************************************************
هدا script تمت برمجته من قبل 
     https://github.com/AHMED1CB
****************************************************************
*/

// الحصول على العنصر الأول لحقل كلمة المرور
let passwordInput1 = document.getElementById('pass1');

// الحصول على العنصر الثاني لحقل كلمة المرور
let passwordInput2 = document.getElementById('pass2');

// الحصول على العنصر الذي سيعرض الأخطاء
let errorPos = document.getElementById('errs');

// الحصول على العنصر الخاص بزر التسجيل
let register = document.getElementById('reg');

// الحصول على العنصر الخاص بحقل الاسم الأول
let firstName = document.getElementById('fn');

// الحصول على العنصر الخاص بحقل الاسم الأخير
let lastName = document.getElementById('ln');

// الحصول على العنصر الخاص بحقل البريد الإلكتروني
let email = document.getElementById('email');

// إضافة مستمع للحدث عند الكتابة في حقل كلمة المرور الأول
passwordInput1.addEventListener('keyup', (e) => {
  // إذا كان طول كلمة المرور أقل من أو يساوي 8
  if (e.target.value.length <= 8) {
    // تغيير لون حافة الحقل إلى لون محدد
    passwordInput1.style.borderColor = '#87870e';
  } else {
    // تغيير لون حافة الحقل إلى لون آخر
    passwordInput1.style.borderColor = '#0ff';
  }
});

// إضافة مستمع للحدث عند التركيز على حقل كلمة المرور الأول
passwordInput1.addEventListener('focus', (e) => {
  // إذا كان طول كلمة المرور لا يساوي 0
  if (e.target.value.length !== 0) {
    // إذا كان طول كلمة المرور أقل من أو يساوي 8
    if (e.target.value.length <= 8) {
      // تغيير لون حافة الحقل إلى لون محدد
      passwordInput1.style.borderColor = '#87870e';
    } else {
      // تغيير لون حافة الحقل إلى لون آخر
      passwordInput1.style.borderColor = '#0ff';
    }
  }
});

// إضافة مستمع للحدث عند فقدان التركيز على حقل كلمة المرور الأول
passwordInput1.addEventListener('blur', () => {
  // تغيير لون حافة الحقل إلى شفاف
  passwordInput1.style.borderColor = 'transparent';
});

// إضافة مستمع للحدث عند الكتابة في حقل كلمة المرور الثاني
passwordInput2.addEventListener('keyup', (e) => {
  // إذا كان طول كلمة المرور لا يساوي 0
  if (e.target.value.length !== 0) {
    // إذا كان طول كلمة المرور أكبر من أو يساوي 8 وكانت الكلمتان متطابقتين
    if (e.target.value.length >= 8 && e.target.value == passwordInput1.value) {
      // تغيير لون حافة الحقل إلى لون محدد
      passwordInput2.style.borderColor = '#0ff';
    } else {
      // تغيير لون حافة الحقل إلى لون آخر
      passwordInput2.style.borderColor = '#890e0e';
    }
  }
});

// إضافة مستمع للحدث عند التركيز على حقل كلمة المرور الثاني
passwordInput2.addEventListener('focus', (e) => {
  // إذا كان طول كلمة المرور لا يساوي 0
  if (e.target.value.length !== 0) {
    // إذا كان طول كلمة المرور أكبر من أو يساوي 8
    if (e.target.value.length >= 8) {
      // إذا كانت الكلمتان متطابقتين
      if (e.target.value == passwordInput1.value) {
        // تغيير لون حافة الحقل إلى لون محدد
        passwordInput2.style.borderColor = '#0ff';
      } else {
        // تغيير لون حافة الحقل إلى لون آخر
        passwordInput2.style.borderColor = '#f00';
      }
    } else {
      // تغيير لون حافة الحقل إلى لون آخر
      passwordInput2.style.borderColor = '#890e0e';
    }
  }
});

// إضافة مستمع للحدث عند فقدان التركيز على حقل كلمة المرور الثاني
passwordInput2.addEventListener('blur', (e) => {
  // تغيير لون حافة الحقل إلى شفاف
  passwordInput2.style.borderColor = 'transparent';
});

// إضافة مستمع للحدث عند محاولة التسجيل
register.addEventListener('submit', (e) => {
  // إذا لم تكن كلمة المرور الأولى فارغة
  if (passwordInput1.value.trim() !== '') {
    // إذا كان طول كلمة المرور الأولى أكبر من أو يساوي 8
    if (passwordInput1.value.length >= 8) {
      // إذا كانت الكلمتان متطابقتين
      if (passwordInput2.value == passwordInput1.value) {
        return true; // السماح بالتسجيل
      } else {
        // عرض رسالة خطأ إذا كانت كلمتا المرور غير متطابقتين
        errorPos.innerHTML = '<h3 style="color:#f54a4a; margin-bottom:10px"> كلمات المرور غير متطابقه</h3>';
        e.preventDefault(); // منع التسجيل
      }
    } else {
      // عرض رسالة خطأ إذا كانت كلمة المرور أقل من 8 أحرف
      errorPos.innerHTML = '<h3 style="color:#f54a4a; margin-bottom:10px">يجب ان تتكون كلمه المرور من 8 احرف </h3>';
      e.preventDefault(); // منع التسجيل
    }
  } else {
    // عرض رسالة خطأ إذا كانت كلمة المرور الأولى فارغة
    errorPos.innerHTML = '<h3 style="color:#f54a4a; margin-bottom:10px">يرجي ادخال كلمه المرور </h3>';
    e.preventDefault(); // منع التسجيل
  }
});
