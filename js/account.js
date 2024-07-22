const password_btn = document.getElementById('passbtn');
const email_btn = document.getElementById('emailbtn');

const passHiddenContent = document.querySelector('.password-head .hidden-content');
const emailHiddenContent = document.querySelector('.email-head .hidden-content');

const passForm     = document.getElementById('passform');
const emailForm    = document.getElementById('emailform')



password_btn.onclick = function () {
emailHiddenContent.classList.add('hidden');
emailHiddenContent.classList.remove('show');
passHiddenContent.classList.add('show');
passHiddenContent.classList.remove('hidden')
setTimeout(function() {
password_btn.name = 'savePass';
}, 0);
this.innerHTML = 'حفظ التغيرات'
email_btn.name = 'changeEmail';
email_btn.innerHTML = 'تغير البريد الاكتروني';
}
email_btn.onclick = function () {
emailHiddenContent.classList.add('show');
emailHiddenContent.classList.remove('hidden');
passHiddenContent.classList.add('hidden');
passHiddenContent.classList.remove('show');
password_btn.name = 'changePass';
setTimeout(function() {
emailbtn.name = 'saveEmail';
}, 0);
password_btn.innerHTML = 'تغير كلمه المرور';
this.innerHTML = 'حفظ التغيرات'
}


passform.onsubmit = function (e) {
if (password_btn.name !== 'savePass'){
return false;
}else{
return true;
}
}

emailform.onsubmit = function (e) {
if (email_btn.name !== 'saveEmail'){
return false;
}else{
return true;
}
}

