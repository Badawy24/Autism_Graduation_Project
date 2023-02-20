// if (document.getElementsByClassName('homepage')) {
//     var navbarHomepage = document.getElementById('navbar');
//     navbarHomepage.classList.add('after-login');
//     document.getElementById('spanAfterLogin').classList.add('color-white');
//     // document.querySelector('.active').classList.add('color-57ccc3');
//     // document.querySelector('.user-profile').classList.add('color-57ccc3');
//     (function () {
//         'use strict'
//         var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
//         tooltipTriggerList.forEach(function (tooltipTriggerEl) {
//             new bootstrap.Tooltip(tooltipTriggerEl)
//         })
//     })()
// }
// window.onscroll = function () {
//     if (window.scrollY > 100) {
//         navbarHomepage.classList.remove('after-login');
//         document.getElementById('spanAfterLogin').classList.remove('color-white');
//         // document.querySelector('.active').classList.remove('color-57ccc3');
//         // document.querySelector('.user-profile').classList.remove('color-57ccc3');

//         let nav_after = document.getElementByClassName('navbar-after');
//         console.log(nav_after); 
//     } else {
//         navbarHomepage.classList.add('after-login');
//         document.getElementById('spanAfterLogin').classList.add('color-white');
//         // document.querySelector('.active').classList.add('color-57ccc3');
//         // document.querySelector('.user-profile').classList.add('color-57ccc3');
//     }

    
// }


window.onscroll = function(){
    nav = document.getElementsByClassName('log-nav');
    if(window.scrollY > 100){
        nav[0].classList.remove("navbar-after");
    } else {
        nav[0].classList.add('navbar-after');
    }
    if (window.scrollY > 500) {
        document.querySelector(".to-top").style.display = "block";
    } else {
        document.querySelector(".to-top").style.display = "none";
    }
}