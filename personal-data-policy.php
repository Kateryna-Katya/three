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
            <span class="badge">Privacy & Security</span>
            <h1 class="text-gradient">Политика обработки персональных данных</h1>

            <div class="legal-content">
                <div class="policy-section">
                    <div class="legal-block__indicator"></div>
                    <h2>1. Общие положения</h2>
                    <p>
                        Настоящая политика обработки персональных данных (далее — «Политика») определяет порядок и условия обработки данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и устанавливает меры по обеспечению безопасности этих данных в соответствии с международными стандартами защиты информации.
                    </p>
                    <p>
                        1.1. Важнейшей целью Оператора является соблюдение прав и свобод человека при обработке его персональных данных, включая защиту прав на неприкосновенность частной жизни.
                    </p>
                    <p>
                        1.2. Настоящая Политика применяется ко всей информации, которую Оператор может получить о пользователях веб-сайта <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="policy-section">
                    <h2>2. Основные понятия</h2>
                    <ul class="terminology-list">
                        <li>
                            <i class="fa-solid fa-globe"></i>
                            <div><strong>Веб-сайт</strong> — совокупность графических и информационных материалов <?= $fullDomain ?>.</div>
                        </li>
                        <li>
                            <i class="fa-solid fa-user-check"></i>
                            <div><strong>Пользователь</strong> — любой посетитель веб-сайта.</div>
                        </li>
                        <li>
                            <i class="fa-solid fa-fingerprint"></i>
                            <div><strong>Персональные данные</strong> — любая информация, относящаяся прямо или косвенно к Пользователю.</div>
                        </li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid">
                        <div class="data-item">
                            <i class="fas fa-user-shield"></i>
                            <div class="data-item__content">
                                <strong>Личные данные:</strong>
                                <span>ФИО, Email, номер телефона.</span>
                            </div>
                        </div>
                        <div class="data-item">
                            <i class="fas fa-microchip"></i>
                            <div class="data-item__content">
                                <strong>Технические данные:</strong>
                                <span>Cookies, IP-адрес, данные о браузере и ОС.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section">
                    <h2>4. Цели обработки данных</h2>
                    <ul class="legal-list">
                        <li>Идентификация Пользователя для предоставления персонализированных стратегий.</li>
                        <li>Установление обратной связи и экспертная поддержка.</li>
                        <li>Исполнение обязательств в рамках программ карьерного апгрейда.</li>
                        <li>Аналитика для улучшения пользовательского опыта в Великобритании и ЕС.</li>
                    </ul>
                </div>

                <div class="policy-section contact-footer-policy">
                    <div class="contact-info-block">
                        <h2 class="text-gradient">6. Вопросы и отзывы</h2>
                        <p>Если у вас возникли вопросы по защите ваших данных, наши специалисты в Лондоне всегда на связи:</p>
                        <ul class="contact-data">
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <a href="tel:+442040971365">+44 20 4097 1365</a>
                            </li>
                        </ul>
                    </div>
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