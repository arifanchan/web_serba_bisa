"use strict";

// FUngsi untuk scroll ke atas
function goToTop() {
  window.scrollTo(0, 0);
} // [END] Fungsi ke atas
// [START] Fungsi untuk tombol responsive navbar


var navToggler = document.querySelector("#nav-toggler"),
    navMenu = document.querySelector("#nav-menu");
navToggler.addEventListener("click", function () {
  navMenu.classList.toggle("active");

  if (navToggler.classList.value.includes("ri-menu-3-line")) {
    // Ketika default tampil responsisve
    navToggler.classList.replace("ri-menu-3-line", "ri-close-line");
  } else {
    //   Ketika di klik tombol navigasi responsive
    navToggler.classList.replace("ri-close-line", "ri-menu-3-line");
  }
}); // [START] responsive

window.addEventListener("click", function (e) {
  if (e.target != navToggler && e.target != navMenu) {
    navMenu.classList.remove("active");

    if (navToggler.classList.value.includes("ri-menu-3-line")) {
      navToggler.classList.replace("ri-menu-3-line", "ri-close-line");
    } else {
      navToggler.classList.replace("ri-close-line", "ri-menu-3-line");
    }
  }
}); // [END] responsive
// [START] Slide image produk menggunakan library swiper js

var page = window.location.pathname.split("/").pop();

if (page == "" || page == "index.html") {
  var _swiper = new Swiper("#swiper-container", {
    slidesPerView: 1,
    spaceBetween: 25,
    loop: true,
    centerSlide: true,
    fade: true,
    grabCursor: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullet: true
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetweenSlides: 30
      },
      1024: {
        slidesPerView: 3,
        spaceBetweenSlides: 30
      },
      1280: {
        slidesPerView: 4,
        spaceBetweenSlides: 60
      }
    }
  }); //  swiper tombol sebelumnya dan setelahnya


  document.addEventListener("DOMContentLoaded", function () {
    var prevBtn = document.querySelector(".swiper-button-prev"),
        nextBtn = document.querySelector(".swiper-button-next");

    if (window.innerWidth >= 320 && window.innerWidth < 360) {
      prevBtn.style.left = "2px";
      nextBtn.style.right = "2px";
    } else if (window.innerWidth >= 360 && window.innerWidth < 640) {
      prevBtn.style.left = "15px";
      nextBtn.style.right = "15px";
    } else if (window.innerWidth >= 640 && window.innerWidth < 1024) {
      prevBtn.style.left = "20px";
      nextBtn.style.right = "20px";
    } else if (window.innerWidth >= 1024) {
      prevBtn.style.left = "40px";
      nextBtn.style.right = "40px";
    }
  }); //  Tombol tambah jumlah barang di halaman cart

  var cartBtn = document.querySelectorAll(".addToCart");
  cartBtn.forEach(function (item) {
    item.addEventListener("click", function () {
      Swal.fire({
        title: "Product added to cart",
        text: "",
        icon: "success",
        showCancelButton: true,
        confirmButtonColor: "#236ad6",
        cancelButtonColor: "#d7415d",
        confirmButtonText: "Go to cart"
      }).then(function (result) {
        if (result.isConfirmed) {
          window.location.href = "cart.html";
        }
      });
    });
  });
} else if (page == "product-detail.html") {
  //   jumlah cart minimal 1
  var disabledBtn = function disabledBtn() {
    if (input.value == 1) {
      decreaseBtn.disabled = true;
    } else {
      decreaseBtn.disabled = false;
    }
  };

  var input = document.querySelector(".quantityInput"),
      decreaseBtn = document.querySelector(".decreaseBtn"),
      increaseBtn = document.querySelector(".increaseBtn");
  var number = 1;
  document.addEventListener("DOMContentLoaded", function () {
    disabledBtn();
  });
  increaseBtn.addEventListener("click", function () {
    number++;
    input.value = number;
    disabledBtn();
  });
  decreaseBtn.addEventListener("click", function () {
    number--;
    input.value = number;
    disabledBtn();
  });
} else if (page == "cart.html") {
  document.addEventListener("DOMContentLoaded", function () {
    var table = new DataTable("#table", {
      info: false,
      paging: false,
      scrollX: true,
      ordering: false,
      searching: false,
      lengthMenu: false,
      lengthChange: false
    });
  });
} // Slider


var swiper = new Swiper(".mySwiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  }
});
var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 25,
  loop: true,
  centerSlide: 'true',
  fade: 'true',
  grabCursor: 'true',
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  breakpoints: {
    0: {
      slidesPerView: 1
    },
    520: {
      slidesPerView: 2
    },
    950: {
      slidesPerView: 3
    }
  }
});

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

function copyLink() {
  navigator.clipboard.writeText("http://localhost/web_sekolah/detail-berita/detail_berita1.php");
} //Pass the id of the <input> element to be copied as a parameter to the copy()


var copy = function copy(textId) {
  //Selects the text in the <input> elemet
  document.getElementById(textId).select(); //Copies the selected text to clipboard

  document.execCommand("copy");
};

var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
var currentTheme = localStorage.getItem('theme');

if (currentTheme) {
  document.documentElement.setAttribute('data-theme', currentTheme);

  if (currentTheme === 'dark') {
    toggleSwitch.checked = true;
  }
}

function switchTheme(e) {
  if (e.target.checked) {
    document.documentElement.setAttribute('data-theme', 'dark');
    localStorage.setItem('theme', 'dark');
  } else {
    document.documentElement.setAttribute('data-theme', 'light');
    localStorage.setItem('theme', 'light');
  }
}

toggleSwitch.addEventListener('change', switchTheme, false);

function darkMode() {
  var element = document.body;
  element.classList.toggle("dark-mode"); // checkbox.addEventListener('change', function() {
  //     localStorage.setItem('dark-mode', this.checked);
  //     if (this.checked) {
  //         body.classList.add('dark-mode')
  //     } else {
  //         body.classList.remove('dark-mode')
  //     }
  // });
}