<?php
/*
Template Name: Главная страница
*/
get_header();
?>
<main>
    <h1 class="visually-hidden">Вектор ДВ</h1>
    <section class="video relative">
        <video id="myVideo" class="video__item video__item--desktop" autoplay preload muted loop
            poster="<?php echo get_template_directory_uri() ?>/src/video/poster.jpg">
            <source id="videoSrc" src="<?php echo get_template_directory_uri() ?>/src/video/timelapse1.mp4"
                type="video/mp4" />
            Ваш браузер не поддерживает встроенные видео
        </video>

        <div class="video__wrapper">
            <h2 class="video__title">Добро пожаловать на&nbsp;дороги Владивостока</h2>
            <p class="video__sub-title">Комфортные авто с&nbsp;левым рулем в&nbsp;идеальном состоянии</p>
        </div>
    </section>

    <section class="catalog" id="catalog">
        <div class="container">
            <h2 class="title">От хорошего к лучшему!</h2>

            <ul class="catalog__list">
                <?php
                $my_posts = get_posts(
                    array(
                        'numberposts' => -1,
                        'orderby' => 'rand',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                    )
                );

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                    ?>

                    <li class="card">
                        <div class="image-wrapper">
                            <?php
                            $photos = get_field('галерея_авто');
                            if ($photos) {
                                $first_photo = $photos[0]; // Get the first photo
                                echo '<img src="' . esc_url($first_photo['url']) . '" width="387" height="258" alt="image">';
                            } else {
                                echo '<img src="' . get_template_directory_uri() . '/src/img/img-placeholder.jpg" width="387" height="258" alt="image">';
                            }
                            ?>

                        </div>
                        <h3 class="card__title"><?php the_title(); ?></h3>
                        <div class="card__wrapper">
                            <p class="card__price">
                                <?= number_format((int) get_field("цена"), 0, '.', ' '); ?>&nbsp;₽ &nbsp;/&nbsp;сутки
                            </p>
                            <a href="<?php the_permalink(); ?>" class="default-button">Подробнее</a>
                        </div>
                    </li>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </section>

    <section class="conditions" id="conditions">
        <div class="container">
            <h2 class="title">Все детальные условия 100%&nbsp;предоплаты обсуждаются отдельно</h2>

            <ul class="conditions__list">
                <li> Стаж вождения арендатора минимум 3&nbsp;года.
                    Перед подписанием договора мы&nbsp;проводим проверку благонадёжности клиента.
                </li>
                <li>Залог за&nbsp;автомобиль 10&nbsp;тысяч рублей, из&nbsp;него
                    вычитается 1&nbsp;тысяча рублей на&nbsp;автомойку. Мы
                    берём несколько дней для того, чтобы
                    убедиться, что с&nbsp;автомобилем все в&nbsp;порядке,
                    после этого возвращаем залог.</li>
                <li>Уровень топлива регистрируется в&nbsp;момент
                    передачи автомобиля клиенту. Мы&nbsp;ожидаем
                    такой&nbsp;же уровень топлива при сдаче
                    автомобиля по&nbsp;окончании аренды</li>
                <li>К&nbsp;сожалению, на&nbsp;наших автомобилях нельзя
                    ездить в&nbsp;Зарубино, Терней и&nbsp;бухту Витязь.</li>
                <li>Подача автомобиля в&nbsp;аэропорт стоит 2&nbsp;тысячи
                    рублей, в&nbsp;черте города 500&nbsp;рублей.</li>
                <li>В&nbsp;случае повреждений автомобиля в&nbsp;течение
                    срока аренды мы&nbsp;прилагаем все возможные
                    усилия для минимизации платежей</li>

            </ul>
        </div>
    </section>

    <section class="rent" id="rent">
        <div class="container">
            <h2 class="title">Платите за аренду автомобиля с НДС</h2>
            <ul class="rent__wrapper">
                <li class="rent__item">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/rent-1.svg" width="80"
                        height="80" alt="icon">
                    <p>Получите специальные условия на долгосрочную аренду</p>
                </li>
                <li class="rent__item">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/rent-2.svg" width="80"
                        height="80" alt="icon">
                    <p>Получите специальные условия на долгосрочную аренду</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="contacts">
        <div class="container">
            <div class="contacts__wrapper">
                <div class="contacts__info">
                    <img class="contacts__logo" src="<?php echo get_template_directory_uri() ?>/src/img/logo.png"
                        width="260" height="95" alt="logo">

                    <div>
                        <div class="flex items-center gap-5 mb-5">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/whatsapp.svg" width="40"
                                height="40" alt="whatsApp">
                            <a href="https://wa.me/<?= get_field("whatsapp", "option"); ?>" target="_blank">+7 914 706
                                54 03</a>
                        </div>
                        <p>Владивостокское время +7 часов к&nbsp;московскому</p>
                        <address><?= get_field("адрес", "option"); ?></address>
                        <a href="mailto:<?= get_field("email", "option"); ?>"><?= get_field("email", "option"); ?></a>
                    </div>
                </div>

                <div class="contacts__map">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad9669e1d9c342395db1c17deb766a890c4d4586fde64411097a8002d3b0affff&amp;source=constructor"
                        width="100%" height="100%"></iframe>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>