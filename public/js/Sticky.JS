const header = document.querySelector("header");

window.addEventListener ("scroll", function() {
    header.classList.toggle ("sticky", window.scrollY > 0);
});

const xa = document.querySelector(".ticks");
window.addEventListener ("scroll", function() {
    xa.classList.toggle ("stickys", window.scrollY > 0);
});

const xa1 = document.querySelector(".ticks1");
window.addEventListener ("scroll", function() {
    xa1.classList.toggle ("stickys1", window.scrollY > 0);
});

const xa2 = document.querySelector(".ticks2");
window.addEventListener ("scroll", function() {
    xa2.classList.toggle ("stickys2", window.scrollY > 0);
});

// let isNotAtTheTop = header.scrollTop;
// // alert(isNotAtTheTop);
// if(isNotAtTheTop.toFixed() != 0){
//     header.classList.toggle("sticky");
// }


/* --------------------------------------------- */

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('open');
};


// Reset scroll top
history.scrollRestoration = "manual";
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}


