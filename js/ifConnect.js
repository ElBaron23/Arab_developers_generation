let ifConnect=document.getElementById('connect'),
    noConnect=document.getElementById('noConnect');

//اذا كان المستخدم  متصل بالانتزنيت
let isOnline = navigator.onLine;
if(isOnline===true){
    noConnect.classList.add('active');
    setTimeout(()=>{
    ifConnect.classList.add('active');
},2*1000);
}else{
//اذا كان المستخدم غيز متصل بالانتزنيت
    noConnect.classList.remove('active');
    ifConnect.classList.add('active');
};