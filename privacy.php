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
            <span class="badge">Data Protection</span>
            <h1 class="text-gradient">Политика конфиденциальности</h1>

            <div class="legal-content">
                <div class="policy-hero-card">
                    <p>
                        Политика конфиденциальности распространяется на персональные данные,
                        предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания услуг по карьерному консультированию, так и для других взаимодействий в электронном формате на территории Великобритании и ЕС.
                    </p>
                </div>

                <div class="policy-notice">
                    <i class="fa-solid fa-circle-info"></i>
                    <p>
                        <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в положения Политики. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц. Предоставляя свои данные, вы даете полное согласие на их обработку способами, предусмотренными настоящей Политикой.
                    </p>
                </div>

                <h2 class="pages__h2">Порядок сбора, хранения и уничтожения</h2>
                <div class="storage-info">
                    <div class="storage-item">
                        <div class="storage-item__icon">
                            <i class="fas fa-history"></i>
                        </div>
                        <div class="storage-item__text">
                            <span>Срок хранения</span>
                            <strong>До 75 лет</strong>
                        </div>
                    </div>
                    <div class="storage-item">
                        <div class="storage-item__icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div class="storage-item__text">
                            <span>Принцип сбора</span>
                            <strong>Только с согласия</strong>
                        </div>
                    </div>
                </div>
                
                <p class="pages__p">
                    Для предотвращения утечки данных мы используем полный комплекс мер информационной безопасности, включая сквозное шифрование. Уничтожение или блокирование данных осуществляется по запросу клиента или при достижении целей сбора.
                </p>

                <div class="data-collection-grid">
                    <div class="data-box">
                        <div class="data-box__header">
                            <i class="fas fa-microchip"></i>
                            <h3>Техническая информация</h3>
                        </div>
                        <ul class="legal-list">
                            <li>IP-адрес и точное время доступа</li>
                            <li>Источники перехода на <strong><?= $fullDomain ?></strong></li>
                            <li>Данные браузера и глубина просмотра блоков</li>
                        </ul>
                    </div>
                    <div class="data-box">
                        <div class="data-box__header">
                            <i class="fas fa-id-card"></i>
                            <h3>Персонализация</h3>
                        </div>
                        <ul class="legal-list">
                            <li>Имя и фамилия пользователя</li>
                            <li>E-mail и контактный номер телефона</li>
                            <li>История контрактов и выбранных услуг</li>
                        </ul>
                    </div>
                </div>

                <h2 class="pages__h2">Цели обработки персональных данных</h2>
                <ul class="legal-list">
                    <li>Предоставление доступа к инновационной платформе обучения.</li>
                    <li>Учет индивидуальных пожеланий при разработке стратегий роста.</li>
                    <li>Информирование об эксклюзивных акциях и материалах блога.</li>
                    <li>Обеспечение оперативной и качественной обратной связи.</li>
                </ul>

                <h2 class="pages__h2">Использование Cookies</h2>
                <p class="pages__p">
                    Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Англия), чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. Вы можете в любой момент отключить их в настройках вашего браузера.
                </p>

                <div class="rights-block">
                    <div class="rights-block__content">
                        <h2>Ваши права</h2>
                        <p>
                            Вы имеете право на доступ, исправление или удаление ваших данных. Чтобы отредактировать информацию или прекратить её обработку, свяжитесь с отделом безопасности <strong><?= $domainTitle ?></strong>:
                        </p>
                        <a href="mailto:hello@<?= $fullDomain ?>" class="btn btn--primary">
                            <span>hello@<?= $fullDomain ?></span>
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


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