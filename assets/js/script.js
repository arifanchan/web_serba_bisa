// FUngsi untuk scroll ke atas
function goToTop() {
    window.scrollTo(0, 0);
}
// [END] Fungsi ke atas

// [START] Fungsi untuk tombol responsive navbar
const navToggler = document.querySelector("#nav-toggler"),
    navMenu = document.querySelector("#nav-menu");

navToggler.addEventListener("click", () => {
    navMenu.classList.toggle("active");

    if (navToggler.classList.value.includes("ri-menu-3-line")) {
        // Ketika default tampil responsisve
        navToggler.classList.replace("ri-menu-3-line", "ri-close-line");
    } else {
        //   Ketika di klik tombol navigasi responsive
        navToggler.classList.replace("ri-close-line", "ri-menu-3-line");
    }
});

// [START] responsive
window.addEventListener("click", function(e) {
    if (e.target != navToggler && e.target != navMenu) {
        navMenu.classList.remove("active");
        if (navToggler.classList.value.includes("ri-menu-3-line")) {
            navToggler.classList.replace("ri-menu-3-line", "ri-close-line");
        } else {
            navToggler.classList.replace("ri-close-line", "ri-menu-3-line");
        }
    }
});
// [END] responsive


// [START] Slide image produk menggunakan library swiper js
const page = window.location.pathname.split("/").pop();

if (page == "" || page == "index.html") {
    const swiper = new Swiper("#swiper-container", {
        slidesPerView: 1,
        spaceBetween: 25,
        loop: true,
        centerSlide: true,
        fade: true,
        grabCursor: false,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullet: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetweenSlides: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetweenSlides: 30,
            },
            1280: {
                slidesPerView: 4,
                spaceBetweenSlides: 60,
            },
        },
    });


    //  swiper tombol sebelumnya dan setelahnya
    document.addEventListener("DOMContentLoaded", () => {
        const prevBtn = document.querySelector(".swiper-button-prev"),
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
    });
}
// Slider
var swiper = new Swiper(".mySwiper", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
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
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
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
}

//Pass the id of the <input> element to be copied as a parameter to the copy()
let copy = (textId) => {
    //Selects the text in the <input> elemet
    document.getElementById(textId).select();
    //Copies the selected text to clipboard
    document.execCommand("copy");
};

const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const currentTheme = localStorage.getItem('theme');

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
    element.classList.toggle("dark-mode");

    // checkbox.addEventListener('change', function() {
    //     localStorage.setItem('dark-mode', this.checked);
    //     if (this.checked) {
    //         body.classList.add('dark-mode')
    //     } else {
    //         body.classList.remove('dark-mode')
    //     }
    // });
}