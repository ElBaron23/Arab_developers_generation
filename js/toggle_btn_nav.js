// الحصول على العنصر الخاص بزر التبديل
let toggle_btn = document.getElementById('toggle_btn');

// الحصول على العنصر الخاص بشريط التنقل
let nav = document.getElementById('nav');

// إضافة مستمع للحدث عند النقر على زر التبديل
toggle_btn.addEventListener('click', () => {
  // تبديل فئة 'toggle' على زر التبديل لتغيير شكله أو حالته
  toggle_btn.classList.toggle('toggle');
  
  // تبديل فئة 'show_nav' على شريط التنقل لإظهاره أو إخفائه
  nav.classList.toggle('show_nav');
});
