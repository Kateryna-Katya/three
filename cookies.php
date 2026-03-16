<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Карьерный апгрейд и инновации</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Cpath d='M16 2L28 9v14l-12 7L4 23V9l12-7z' fill='none' stroke='%2300F2FF' stroke-width='2'/%3E%3Cpath d='M10 20l5-5 3 3 6-8' stroke='%237000FF' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M18 10h5v5' stroke='%2300F2FF' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body class="dark-theme">

    <header class="header">
        <div class="container header__container">
            <a href="./#home" class="logo">
                <div class="logo__icon"></div>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#home" class="nav__link">Главная</a></li>
                    <li><a href="./#strategy" class="nav__link">Стратегия</a></li>
                    <li><a href="./#experience" class="nav__link">Методология</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#expert" class="nav__link">Экспертиза</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--primary header__cta">
                <span>Связаться</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container" data-aos="fade-up">
            <span class="badge">Legal Infrastructure</span>
            <h1 class="text-gradient">Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="pages__lead">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии.
                </p>

                <div class="legal-section">
                    <h2>Что такое файлы cookie?</h2>
                    <p>
                        Файл cookie — это небольшой фрагмент данных (текстовый файл),
                        который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. Это позволяет платформе 
                        <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                        (язык, регион Англия и другие параметры) для оптимизации вашего карьерного апгрейда.
                    </p>
                </div>

                <div class="legal-section">
                    <h2>Какие типы файлов cookie мы используем?</h2>
                    <p>
                        Мы классифицируем файлы cookie на сайте <strong><?= $fullDomain ?></strong> по следующим категориям:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <strong>Строго необходимые:</strong> Обеспечивают базовую безопасность и навигацию по страницам <strong><?= $domainTitle ?></strong>.
                        </li>
                        <li>
                            <strong>Аналитические:</strong> Помогают нам понять, какие разделы стратегии роста наиболее популярны у пользователей.
                        </li>
                        <li>
                            <strong>Функциональные:</strong> Позволяют персонализировать контент в рамках ваших консультаций.
                        </li>
                        <li>
                            <strong>Маркетинговые:</strong> Используются для показа релевантных предложений по карьерному росту в странах ЕС.
                        </li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2>Зачем мы их используем?</h2>
                    <ul class="legal-list">
                        <li>Обеспечение стабильной работы платформы в режиме 24/7.</li>
                        <li>Анализ поведения для улучшения методологий обучения.</li>
                        <li>Персонализация контента для аудитории в Великобритании и Европе.</li>
                        <li>Предоставление экспертной поддержки через интерактивные формы.</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2>Ваш выбор и управление</h2>
                    <p>
                        Вы имеете полный контроль. Вы можете изменить настройки в браузере в любой момент. 
                        Обратите внимание: ограничение файлов cookie может повлиять на доступность некоторых функций платформы.
                    </p>
                </div>

                <div class="contact-info-block">
                    <h2 class="text-gradient">Свяжитесь с нами</h2>
                    <p>Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>:</p>
                    <ul class="contact-data">
                        <li>
                            <i class="fas fa-envelope"></i>
                            <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <strong>Телефон:</strong> <a href="tel:+442040971365">+44 20 4097 1365</a>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <strong>Адрес:</strong> 40 Bank St, Canary Wharf, London E14 5NR, UK
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#home" class="logo footer__logo">
                    <div class="logo__icon"></div>
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__description">
                    Инновационная технология вашего профессионального роста. Решения, которые меняют правила игры в индустрии карьеры.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#home">Главная</a></li>
                    <li><a href="./#strategy">Стратегия</a></li>
                    <li><a href="./#experience">Методология</a></li>
                    <li><a href="./#cases">Кейсы</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-info">
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+442040971365">+44 20 4097 1365</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>40 Bank St, London E14 5NR, United Kingdom</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; <?= date('Y') ?> <?= $domainTitle ?>. Все права защищены. Предложение активно в странах ЕС.</p>
        </div>
    </footer>
    <div class="menu-overlay" id="menu-overlay">
        <nav class="mobile-nav">
            <ul class="mobile-nav__list">
                <li><a href="./#home" class="mobile-nav__link">Главная</a></li>
                <li><a href="./#strategy" class="mobile-nav__link">Стратегия</a></li>
                <li><a href="./#experience" class="mobile-nav__link">Методология</a></li>
                <li><a href="./#cases" class="mobile-nav__link">Кейсы</a></li>
                <li><a href="./#expert" class="mobile-nav__link">Экспертиза</a></li>
                <li><a href="./#contact" class="btn btn--primary">Связаться</a></li>
            </ul>
        </nav>
    </div>
    
    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <i class="fa-solid fa-cookie-bite"></i>
            <p class="cookie-popup__text">
                Этот сайт использует cookies для улучшения работы. Подробнее — в нашей 
                <a href="./cookies.php">Cookie политике</a>.
            </p>
            <button class="btn btn--primary btn--sm" id="cookie-accept">Принять</button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>