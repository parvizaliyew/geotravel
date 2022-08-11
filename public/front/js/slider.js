$(document).ready(function () {
    $('.slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        autoplay:true,
        autoplayTimeout:3000,
        navText: ["<img src='/front/img/left-icon.svg'>", "<img src='/front/img/right-icon.svg'>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    /// manshet slider ///
    var galleryThumbs = new Swiper('div.manshet_appartment .gallery-thumbs', {
        spaceBetween: 16,
        slidesPerView: 4,
        loop: true,
        allowTouchMove: true,
        freeMode: false,
        loopedSlides: 40, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: 'div.manshet_appartment .swiper-button-next',
            prevEl: 'div.manshet_appartment .swiper-button-prev',
        },
        autoplay: {
            delay: 3000,
            slideSpeed: 3000,
            disableOnInteraction: false,
        },
    });
    var galleryTop = new Swiper('div.manshet_appartment .gallery-top', {
        spaceBetween: 16,
        loop: true,
        loopedSlides: 40, //looped slides should be the same
        thumbs: {
            swiper: galleryThumbs,
        },
        effect: 'fade',
    });
    $('div.manshet_appartment .swiper-slide').on('click', function (e) {
        e.preventDefault();
        galleryTop.slideTo($(this).index());
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;
    /// end manshet slider ///
});