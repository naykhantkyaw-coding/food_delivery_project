let menu =document.querySelector('#menu-bar');
let nav =document.querySelector('.header .navbar');

menu.onclick=()=>{
    menu.classList.toggle('fa-times');
    nav.classList.toggle('active');
}
document.querySelector('#close-edit').onclick=()=>{
    document.querySelector('.testing').style.display='none';
}
