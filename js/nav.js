const humbager=document.querySelector(".humbager");
const navMenu=document.querySelector(".nav-menu");

humbager.addEventListener("click",()=>{
    humbager.classList.toggle("active");
    navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n=> n.addEventListener("click",()=>{
    humbager.classList.remove("active");
    navMenu.classList.remove("active");
}))