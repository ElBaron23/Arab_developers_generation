  //this script for remove and add class active for element in navbar
  /*
هنا مجموعة من الطرق التي مررنا بها للوصول الى النتيجة التي نريدها 
باقل عدد من الاسطر

  */

//   let home        = document.getElementById('home'),
//       roadmap     = document.getElementById('roadmap'),
//       lang_prog   = document.getElementById('lang_programing'),
//       profile     = document.getElementById('profile'),
//       communitie  = document.getElementById('communitie'),
//       blogger     = document.getElementById('blogger');
//استخدمنا هذه الطريقة لاكن بيها مشكلة منطقية عند ضغط على العنصر يفتح صفحة جديدة ولا يضل التحديد
//  let  url = window.location.href;
//  if(url.includes('profile.php')){
// profile.classList.add('active');
// lang_prog.classList.remove('active');
// roadmap.classList.remove('active');
// home.classList.remove('active');
// communitie.classList.remove('active');
// blogger.classList.remove('active');
//  }else if(url.includes('roadmap.php')){
// roadmap.classList.add('active');
// home.classList.remove('active');
// lang_prog.classList.remove('active');
// profile.classList.remove('active');
// communitie.classList.remove('active');
// blogger.classList.remove('active');

//  }else if(url.includes('lang_prog.php')){
// lang_prog.classList.add('active');
// roadmap.classList.remove('active');
// home.classList.remove('active');
// profile.classList.remove('active');
// communitie.classList.remove('active');
// blogger.classList.remove('active');
//  }else if(url.includes('communitie.php')){
// communitie.classList.add('active');
// profile.classList.remove('active');
// lang_prog.classList.remove('active');
// roadmap.classList.remove('active');
// home.classList.remove('active');
// blogger.classList.remove('active');
//  }else if(url.includes('blogger.php')){
//  blogger.classList.add('active');
//  communitie.classList.remove('active');
//  profile.classList.remove('active');
//  lang_prog.classList.remove('active');
//  roadmap.classList.remove('active');
//  home.classList.remove('active');
//  }

  //            ###
 //            ###
 //            ###
 //        ##########
 //         ########
 //          ######
 //           ####
 //            ##
 //             shurted with array
 let elements = [
  'home',
  'roadmap',
  'lang_programing',
  'profile',
  'communitie',
  'blogger'
].map(id => document.getElementById(id));

let url = window.location.href;
elements.forEach(element => element.classList.remove('active'));

if (url.includes('profile.php')) {
  elements[3].classList.add('active');
} else if (url.includes('roadmap.php')) {
  elements[1].classList.add('active');
} else if (url.includes('lang_prog.php')) {
  elements[2].classList.add('active');
} else if (url.includes('communitie.php')) {
  elements[4].classList.add('active');
} else if (url.includes('blogger.php')) {
  elements[5].classList.add('active');
}else if (url.includes('home.php')) {
  elements[0].classList.add('active');
}

 


 
// home.addEventListener('click',()=>{
// home.classList.add('active');
// roadmap.classList.remove('active');
// lang_prog.classList.remove('active');
// profile.classList.remove('active');
// communitie.classList.remove('active');
// blogger.classList.remove('active');
// });

// roadmap.addEventListener('click',()=>{
// roadmap.classList.add('active');
// home.classList.remove('active');
// lang_prog.classList.remove('active');
// profile.classList.remove('active');
// communitie.classList.remove('active');
// blogger.classList.remove('active');
// });

// lang_prog.addEventListener('click',()=>{
// lang_prog.classList.add('active');
// roadmap.classList.remove('active');
// home.classList.remove('active');
// profile.classList.remove('active');
// communitie.classList.remove('active');
// blogger.classList.remove('active');

// });

// profile.addEventListener('click',()=>{
// profile.classList.add('active');
// lang_prog.classList.remove('active');
// roadmap.classList.remove('active');
// home.classList.remove('active');
// communitie.classList.remove('active');
// blogger.classList.remove('active');
// });

// communitie.addEventListener('click',()=>{
// communitie.classList.add('active');
// profile.classList.remove('active');
// lang_prog.classList.remove('active');
// roadmap.classList.remove('active');
// home.classList.remove('active');
// blogger.classList.remove('active');
// });

// blogger.addEventListener('click',()=>{
// blogger.classList.add('active');
// communitie.classList.remove('active');
// profile.classList.remove('active');
// lang_prog.classList.remove('active');
// roadmap.classList.remove('active');
// home.classList.remove('active');
// });

 //            ###
 //            ###
 //            ###
 //        ##########
 //         ########
 //          ######
 //           ####
 //            ##
 //             shurted with foreach




//  let  links = document.querySelectorAll('#nav ul li a');
//  links.forEach((e)=>{
//    e.onclick = function(){
//      links.forEach(el =>
//        el.classList.remove('active'));
//        e.classList.add('active')
//    }
//  });





