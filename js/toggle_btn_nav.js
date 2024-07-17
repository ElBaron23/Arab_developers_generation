let toggle_btn =document.getElementById('toggle_btn'),
    nav        =document.getElementById('nav');
toggle_btn.addEventListener('click',()=>{
toggle_btn.classList.toggle('toggle');
nav.classList.toggle('show_nav');


});