<footer class="py-12 footer">
    <div class="container">
        <p>© <span class="data-span"></span> ООО Вектор ДВ. Все права защищены</p>
    </div>
    <section id="popup" class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                        <path d="M4 1.45508L19.9099 17.365" stroke="#333" />
                        <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#333" />
                    </svg>
                </button>
                <h2 class="text-start text-dark-green z-10  md:text-4xl text-xl pb-7 font-bold">Напишите нам</h2>
                <p class="mb-4">Оставьте свои контакты и наш менеджер свяжется с вами для подтверждения</p>
                <p class="js-popup-car-name"></p>

                <div class="form-wrapper">
                    <input type="text" class="form__input" placeholder="Введите Ваше имя" />

                    <input type="tel" class="form__input" placeholder="Введите номер телефона">

                    <input class="default-button" type="submit" value="Отправить">
                </div>
            </div>
        </div>
    </section>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>