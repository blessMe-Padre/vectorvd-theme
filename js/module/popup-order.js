export const initPopupOrders = () => {
    // Работа с продуктом и попапом

    const carName = document.querySelector('.js-car-name');
    if (carName) {

        const popupCarName = document.querySelector('.js-popup-car-name');
        const name = carName.innerText;

        popupCarName.innerText = name;
        // orderHiddenInput.value = name;
    }
}