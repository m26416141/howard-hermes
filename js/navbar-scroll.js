var scroll1 = window.pageYOffset;
var nav = document.querySelector('nav');
window.onscroll = function(){
    var scroll2 = window.pageYOffset;
    if (scroll1 > scroll2) {
        document.querySelector('nav').style.top = "0";
        nav.classList.remove('bg-light');
        nav.style.backgroundColor = "white";
    } else {
        document.querySelector('nav').style.top = "-100px";
        nav.classList.add('bg-light');
        nav.style.backgroundColor = "white";
    }
    scroll1 = scroll2
}
// window.addEventListener('scroll', function () {
//     if (window.pageYOffset > 100) {
//         nav.classList.add('bg-light');
//         nav.style.top = "-100px";
//         nav.style.backgroundColor = "white";
//     } else {
//         nav.classList.remove('bg-light');
//         nav.style.top = "0";
//         nav.style.backgroundColor = "transparent";
//     }
// });