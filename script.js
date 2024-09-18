
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
   navbar.classList.toggle('active');
   menu.classList.toggle('fa-times');
};

window.onscroll = () => {
    navbar.classList.remove('active');
    menu.classList.remove('fa-times');
 };

var swiper = new Swiper(".home-slider", { 
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".reviews-slider", { 
   spaceBetween: 20,
   autoHeight: true,
   grabCursor: true,
   breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
});
