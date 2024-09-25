export const initSlider = () => {

    var swiper = new Swiper('.thumb-slider', {

        loop: true,
        spaceBetween: 16,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
        autoHeight: true,
        breakpoints: {
            320: {
                slidesPerView: 3,
                spaceBetween: 8
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 16
            },
        }

    });

    var swiper2 = new Swiper('.main-slider', {
        spaceBetween: 40,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        thumbs: {
            swiper: swiper
        }
    });

}