/*
*****************************************************************
هدا script تمت برمجته من قبل 
     https://github.com/AHMED1CB
****************************************************************
*/
let passwordInput1 = document.getElementById('pass1');
let passwordInput2 = document.getElementById('pass2');
let errorPos =       document.getElementById('errs')
let register =       document.getElementById('reg');
let firstName=       document.getElementById('fn') ;
let lastName=        document.getElementById('ln') ;
let email =          document.getElementById('email');
passwordInput1.addEventListener('keyup' , (e)=>{
if (e.target.value.length <= 8){
passwordInput1.style.borderColor = '#87870e';
}else{
passwordInput1.style.borderColor = '#0ff';
}
})
//        
passwordInput1.addEventListener('focus' , (e)=>{
if (e.target.value.length !== 0){
if (e.target.value.length <= 8){
passwordInput1.style.borderColor = '#87870e';
}else{
passwordInput1.style.borderColor = '#0ff';
}
}
})
//      

passwordInput1.addEventListener('blur' , ()=>{
passwordInput1.style.borderColor = 'transparent';
})
//      
passwordInput2.addEventListener('keyup' , (e) =>{
if (e.target.value.length !== 0){
if (e.target.value.length >= 8 && e.target.value == passwordInput1.value){
passwordInput2.style.borderColor = '#0ff';
}else{
passwordInput2.style.borderColor = '#890e0e';
}


}
})
// 
passwordInput2.addEventListener('focus' , (e)=>{
if (e.target.value.length !== 0){


if (e.target.value.length >= 8){
if (e.target.value == passwordInput1.value){
passwordInput2.style.borderColor = '#0ff';
}else{
passwordInput2.style.borderColor = '#f00';
}
}else{
passwordInput2.style.borderColor = '#890e0e';
}
}
})     
passwordInput2.addEventListener('blur' , (e)=>{
passwordInput2.style.borderColor = 'transparent';
})   
register.addEventListener('submit' , (e) =>{
if (passwordInput1.value.trim() !== ''){
if (passwordInput1.value.length>=8 ){
if (passwordInput2.value == passwordInput1.value){
return true;
}else{
errorPos.innerHTML = '<h3 style="color:#f54a4a; margin-bottom:10px"> كلمات المرور غير متطابقه</h3>';
e.preventDefault();
}
}
else{
errorPos.innerHTML = '<h3 style="color:#f54a4a; margin-bottom:10px">يجب ان تتكون كلمه المرور من 8 احرف </h3>';
e.preventDefault();
}
}else{
errorPos.innerHTML = '<h3 style="color:#f54a4a; margin-bottom:10px">يرجي ادخال كلمه المرور </h3>';
e.preventDefault();
}
})