<?php
/*
Template Name: Страница авто
*/
get_header();
?>
<main>
    <h1 class="visually-hidden">Вектор ДВ</h1>

    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><span>&mdash;</span></li>
                <li><span><?php the_title(); ?></span></li>
            </ul>
        </div>
    </div>

    <section class="auto">
        <div class="container">
            <h1 class="title text-left js-car-name"><?php the_title(); ?></h1>
            <div class="auto__wrapper">
                <div class="auto__item">
                    <div class="sliders">
                        <div class="main-slider swiper mb-3">
                            <div class="swiper-wrapper">
                                <?php
                                $photos = get_field('галерея_авто');
                                if ($photos) {
                                    foreach ($photos as $photo) {
                                        echo '<div class="swiper-slide">';
                                        echo '<img class="object-cover" src="' . esc_url($photo['url']) . '" width="692" height="400" alt="auto">';
                                        echo '</div>';
                                    }
                                } else {
                                    echo 'No photos found2.';
                                }
                                ?>
                            </div>
                        </div>

                        <div class="thumb-slider swiper">
                            <div class="swiper-wrapper">

                                <?php
                                $photos = get_field('галерея_авто');
                                if ($photos) {
                                    foreach ($photos as $photo) {
                                        echo '<div class="swiper-slide">';
                                        echo '<img class="object-cover" src="' . esc_url($photo['url']) . '" width="692" height="400" alt="auto">';
                                        echo '</div>';
                                    }
                                } else {
                                    echo 'No photos found2.';
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="auto__item">
                    <h2 class="text-xl font-medium mb-5">Основные характеристики</h3>

                        <div class="flex gap-5 mb-4">
                            <span class="text-light-gray">Число пассажиров:</span>
                            <span class="text-default-black font-medium"><?= get_field("число_пассажиров"); ?></span>
                        </div>

                        <div class="flex gap-5 mb-4">
                            <span class="text-light-gray">КПП:</span>
                            <span class="text-default-black font-medium"><?= get_field("кпп"); ?></span>
                        </div>

                        <div class="flex gap-5 mb-4">
                            <span class="text-light-gray">Тип топлива:</span>
                            <span class="text-default-black font-medium"><?= get_field("тип_топлива"); ?></span>
                        </div>

                        <div class="flex gap-5 mb-6">
                            <span class="text-light-gray">Год выпуска:</span>
                            <span class="text-default-black font-medium"><?= get_field("год_выпуска"); ?></span>
                        </div>
                        <div class="flex gap-5 mb-6">
                            <span class="text-light-gray">Цена:</span>
                            <span class="text-default-black font-medium">
                                <?= number_format((int) get_field("цена"), 0, '.', ' '); ?>&nbsp;₽ &nbsp;/&nbsp;сутки
                            </span>
                        </div>

                        <p class="text-light-gray mb-6">Наши машины обслужены и&nbsp;ухожены, имеют все современные
                            ассистенты для комфортной и&nbsp;безопасной езды, оборудованы современным охранным
                            комплексом с&nbsp;автозапуском.</p>

                        <a class="default-button max-w-[300px] popup-link" href="#popup">Договориться об аренде</a>

                </div>

            </div>
        </div>
    </section>

    <section class="more-cars py-12  sm:mt-10">
        <div class="container">
            <h1 class="title text-left title--small">Посмотреть другие автомобили</h1>
            <ul class="grid gap-5 xs:grid-cols-2 md:grid-cols-3">

                <?php
                $my_posts = get_posts(
                    array(
                        'numberposts' => 3,
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
                                foreach ($photos as $photo) {
                                    echo '<img src="' . esc_url($photo['url']) . '"  width="387"
                                    height="258" alt="image"';
                                }
                            } else {
                                echo '<img src="' . get_template_directory_uri() . '/src/img/img-placeholder.jpg" width="387"
                                height="258" alt="image">';
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
                            <a class="link" href="https://wa.me/79147065403" target="_blank">+7 914 706 54 03</a>
                        </div>
                        <p>Владивостокское время +7 часов к&nbsp;московскому</p>
                        <address>Владивосток, ул. Руднева, 1</address>
                        <a class="link" href="mailto:vladgruz999@mail.ru">vladgruz999@mail.ru</a>
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