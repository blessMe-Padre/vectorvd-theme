import { initNav } from "./module/nav.js";
import { initSlider } from "./module/sliders.js";
import { initCurrentYear } from "./module/current-year.js";
import { initScroll } from "./module/scroll.js";
// import { initVideo } from "./module/video.js";
import { initPopup } from "./module/popup.js";
import { initPhoneMask } from "./module/phone-mask.js";
import { initPopupOrders } from "./module/popup-order.js";

window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

    initNav();
    initSlider();
    initCurrentYear();
    initScroll();
    baguetteBox.run('.gallery-wrapper');
    // initVideo();
    initPopup();
    initPopupOrders();
    initPhoneMask();

    // DOMContentLoaded
});
