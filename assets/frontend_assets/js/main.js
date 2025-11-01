// Swipper Slider

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 2000,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 4000,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1025: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
    1400: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  }
  });

  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 2,
    spaceBetween: 20,
    speed: 2000,
     autoplay: {
    delay: 4000,
  },
  breakpoints: {
    769: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    992: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
    1025: {
      slidesPerView: 5,
      spaceBetween: 30,
    },
  }
  });

  var swiper = new Swiper(".mySwiper3", {
    slidesPerView: 1,
    spaceBetween: 30,
    speed:2000,
     autoplay: {
    delay: 4000,
  },
    breakpoints: {
      992: {
        slidesPerView: 1.8,
        spaceBetween: 30,
      },
    }
  });

  // Js for menu bar toggle
  let menu = document.getElementById('menu');
  let closeBtn = document.querySelector('#nav-close');
  function showMenu(){
    menu.classList.add('show');
  }
  closeBtn.addEventListener('click', () => {
    menu.classList.remove('show');
})

  // Animation
  AOS.init();