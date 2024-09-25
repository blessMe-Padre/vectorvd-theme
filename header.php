<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Вектор ДВ | <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body class="wrapper">
    <div class="h-screen grid grid-rows-[auto_1fr_auto] relative">
        <header class="z-10 w-full md-28 transition-colors absolute">
            <div class="container gap-5 items-center justify-between hidden md:flex md:pt-2">
                <a href="/">
                    <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/src/img/logo.png" width="232"
                        height="86" alt="лого">
                </a>
                <ul class="flex gap-2 flex-wrap text-main-black">
                    <li class="mr-4"><a class="link" href="/#catalog">Каталог авто</a></li>
                    <li class="mr-4"><a class="link" href="/#conditions">Условия аренды</a></li>
                    <li class="mr-4"><a class="link" href="/#rent">Для корпоративных клиентов</a></li>
                </ul>
                <div class="flex gap-5">
                    <a class="wa-link" href="https://wa.me/79147065403" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/whatsapp.svg" width="48"
                            height="48" alt="whatsApp">
                    </a>
                </div>
            </div>

            <!-- мобильное меню -->
            <div class="flex flex-col items-start justify-between pt-20 overflow-hidden md:hidden">
                <img loading="lazy" class="absolute top-4 left-5 z-[31]"
                    src="<?php echo get_template_directory_uri() ?>/src/img/logo.png" width="147" height="46"
                    alt="лого">
                <div class="mobile-menu bg-green">
                    <ul class="flex flex-col pb-11 text-main-black pt-4">
                        <li class="px-4 mb-4"><a class="link" href="#" data-goto=".page-section-1">Каталог авто</a>
                        </li>
                        <li class="px-4 mb-4"><a class="link" href="#" data-goto=".page-section-2">Условия аренды</a>
                        </li>
                        <li class="px-4 mb-4"><a class="link" href="#" data-goto=".page-section-3">Для корпоративных
                                клиентов</a>
                        </li>
                    </ul>
                    <div class="flex gap-5 pl-4">
                        <a href="https://wa.me/79147040414" target="_blank">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/whatsapp.svg" width="48"
                                height="48" alt="whatsApp">
                        </a>
                    </div>
                </div>

                <div class="flex md:hidden absolute top-[28px] right-[70px] z-[31]">
                    <a href="https://wa.me/79147040414">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/whatsapp.svg" width="30"
                            height="30" alt="whatsApp">
                    </a>
                </div>

                <button class="btn-close-menu md:hidden absolute top-[26px] right-5 z-[31]">
                    <svg viewBox="0 0 64 48">
                        <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                        <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                        <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                    </svg>
                </button>
            </div>
        </header>