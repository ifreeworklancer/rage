<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.1.1/mapbox-gl.css' rel='stylesheet'/>
    <link rel="stylesheet" href="../../fonts/fonts.css">
    <link rel="stylesheet" href="../../dist/app.css">
</head>

<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="facebook-icon" viewBox="0 0 15 15">
        <path d="M13.2422 0H1.75781C0.788555 0 0 0.788555 0 1.75781V13.2422C0 14.2114 0.788555 15 1.75781 15H13.2422C14.2114 15 15 14.2114 15 13.2422V1.75781C15 0.788555 14.2114 0 13.2422 0ZM13.8281 13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H9.90234V9.05273H11.7126L12.0117 7.23633H9.90234V5.97656C9.90234 5.47925 10.2839 5.09766 10.7812 5.09766H11.9824V3.28125H10.7812C9.28936 3.28125 8.08658 4.48975 8.08658 5.98166V7.23633H6.32812V9.05273H8.08658V13.8281H1.75781C1.43473 13.8281 1.17188 13.5653 1.17188 13.2422V1.75781C1.17188 1.43473 1.43473 1.17188 1.75781 1.17188H13.2422C13.5653 1.17188 13.8281 1.43473 13.8281 1.75781V13.2422Z"/>
    </symbol>
    <symbol id="instagram-icon" viewBox="0 0 15 15">
        <path d="M10.8604 0H4.13934C1.85691 0 0 1.857 0 4.13943V10.8605C0 13.143 1.85691 14.9999 4.13934 14.9999H10.8604C13.143 14.9999 14.9999 13.1429 14.9999 10.8605V4.13943C15 1.857 13.143 0 10.8604 0ZM13.6691 10.8605C13.6691 12.4092 12.4092 13.669 10.8605 13.669H4.13934C2.59075 13.6691 1.33086 12.4092 1.33086 10.8605V4.13943C1.33086 2.59084 2.59075 1.33086 4.13934 1.33086H10.8604C12.4091 1.33086 13.669 2.59084 13.669 4.13943V10.8605H13.6691Z"/>
        <path d="M7.49986 3.63504C5.36862 3.63504 3.63477 5.36889 3.63477 7.50014C3.63477 9.6313 5.36862 11.3651 7.49986 11.3651C9.63111 11.3651 11.365 9.6313 11.365 7.50014C11.365 5.36889 9.63111 3.63504 7.49986 3.63504ZM7.49986 10.0341C6.10254 10.0341 4.96563 8.89737 4.96563 7.50005C4.96563 6.10264 6.10245 4.96582 7.49986 4.96582C8.89727 4.96582 10.0341 6.10264 10.0341 7.50005C10.0341 8.89737 8.89718 10.0341 7.49986 10.0341Z"/>
        <path d="M11.5272 2.50653C11.2708 2.50653 11.0189 2.61034 10.8378 2.79222C10.6559 2.97322 10.5513 3.2252 10.5513 3.4825C10.5513 3.739 10.656 3.99089 10.8378 4.17277C11.0188 4.35377 11.2708 4.45847 11.5272 4.45847C11.7845 4.45847 12.0356 4.35377 12.2175 4.17277C12.3994 3.99089 12.5032 3.73891 12.5032 3.4825C12.5032 3.2252 12.3994 2.97322 12.2175 2.79222C12.0365 2.61034 11.7845 2.50653 11.5272 2.50653Z"/>
    </symbol>

    <symbol id="phone-icon" viewBox="0 0 20 20">
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M5.80747 12.3883C5.80747 12.3883 11.5825 19.8803 15.8586 18.6633C15.8586 18.6633 17.1016 18.001 17.3659 17.1706C17.6301 16.3403 16.8395 15.6016 16.5289 15.3427C15.7859 14.7208 15.0132 14.1263 14.2487 13.525C14.0072 13.3347 13.8311 12.9819 13.5001 13C12.852 13.1622 11.6581 13.5405 10.9635 13.6764C10.9635 13.6764 10.3392 13.364 8.28941 10.7113C6.11173 7.89258 6.62762 7.09347 6.62762 7.09347C7.0474 6.73313 7.44041 6.3472 7.78591 5.92766C7.93452 5.74679 8.12363 5.58071 8.22927 5.37326C8.33622 5.16502 8.23141 4.98181 8.15479 4.76686C7.98528 4.28661 7.79732 3.81112 7.59825 3.33869C7.25551 2.52251 6.90838 1.67362 6.41888 0.910095C6.36716 0.830446 6.25493 0.599559 6.13027 0.584378C4.75579 0.409583 3.19234 1.35326 3.19234 1.35326C0.453289 4.33988 5.80747 12.3883 5.80747 12.3883Z"/>
    </symbol>

    <symbol id="arrow-prev" viewBox="0 0 9 15">
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M9 1.75L7.2973 -1.48855e-07L6.55671e-07 7.5L7.2973 15L9 13.25L3.40541 7.5L9 1.75Z"/>
    </symbol>

    <symbol id="arrow-next" viewBox="0 0 9 15">
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M0 13.25L1.7027 15L9 7.5L1.7027 0L1.00536e-06 1.75L5.59459 7.5L0 13.25Z"/>
    </symbol>
</svg>

<!-- App-header -->
<header id="app-header">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <a href="/" class="logo">
                    <img src="../../images/icon/logo.png" alt="logo">
                </a>
            </div>
            <div class="col-auto">
                <div class="header-item">
                    <ul class="contacts-list d-none d-sm-block">
                        <li class="contacts-item">
                            <a href="tel:+<?= phone_link($phone); ?>">
                                <?= $phone; ?>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary d-none d-sm-inline-flex open-feedback">
                        связаться
                    </a>
                    <div class="burger-menu d-flex flex-column justify-content-center align-items-start">
                        <div class="line line--top"></div>
                        <div class="line line--middle d-flex justify-content-between align-items-start">
                            <div class="line line--small"></div>
                            <div class="line line--big"></div>
                        </div>
                        <div class="line line--bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-wrapper">
            <ul>
                <li>
                    <a href="#about" class="scroll-link">
                        О нас
                    </a>
                </li>
                <li>
                    <a href="#packages" class="scroll-link">
                        Расписание
                    </a>
                </li>
                <li>
                    <a href="#cooperation" class="scroll-link">
                        Спонсоры
                    </a>
                </li>
                <li>
                    <a href="#contacts" class="scroll-link">
                        Контакты
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>