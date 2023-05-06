var swiper = new Swiper(".banner-section", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    speed: 1600,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true,
    }
});

/*PRODUCTS SLIDER*/ 
var swiper = new Swiper(".products-slider", {
    loop: true,
    slidesPerView: 4,
    speed: 1600,
    spaceBetween: 24,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true,
    },
    autoplay: false,
    breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        480: {
          slidesPerView: 2,
          spaceBetween: 24,
        },
        576: {
          slidesPerView: 2,
          spaceBetween: 24,
        },
        640: {
          slidesPerView: 3,
          spaceBetween: 24,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 24,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 24,
        },
        1280: {
          slidesPerView: 4,
          spaceBetween: 24,
        },
    },
});

/*TESTIMONIAL SLIDER*/ 
var swiper = new Swiper(".testimonial-slider", {
    loop: true,
    slidesPerView: 2,
    speed: 1600,
    spaceBetween: 24,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
          slidesPerView: 1,
          
        },
        480: {
          slidesPerView: 1,
          
        },
        576: {
          slidesPerView: 1,
          
        },
        640: {
          slidesPerView: 1,
          
        },
        768: {
          slidesPerView: 2,
          
        },
        1024: {
          slidesPerView: 2,
          
        },
        1280: {
          slidesPerView: 2,
          
        },
    },
});


/*LISTING SIDEBAR*/ 
$(".sidebar-block-header").click(function(){
    $(this).parent(".sidebar-block").toggleClass("isOpen");
    $(this).siblings(".sidebar-body").slideToggle('slow');
});


/*DETAIL PAGE SLIDER*/
/*NEWS SLIDER*/
var swiper = new Swiper(".product-list-small", {
    loop: false,
    speed: 1200,
    autoplay: false,
    pagination: false,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});

var swiper2 = new Swiper(".product-block-lg", {
    loop: false,
    speed: 1200,
    autoplay: false,
    pagination: false,
    spaceBetween: 0,
    navigation: false,
    thumbs: {
        swiper: swiper,
    },
});




























