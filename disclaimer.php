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
            <span class="badge">Risk Disclosure</span>
            
            <div class="legal-header">
                <div class="warning-icon-wrapper">
                    <i class="fas fa-exclamation-triangle warning-icon"></i>
                </div>
                <h1 class="text-gradient">Отказ от ответственности</h1>
            </div>

            <div class="legal-content">
                <div class="legal-block">
                    <div class="legal-block__indicator"></div>
                    <p>
                        <strong>Общая информация:</strong> Все материалы, статьи и сведения,
                        опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно
                        информационно-ознакомительный характер. Они не являются и не должны
                        рассматриваться как персональная инвестиционная рекомендация,
                        профессиональный юридический или финансовый совет, публичная оферта или призыв к совершению
                        каких-либо финансовых операций в Великобритании или ЕС.
                    </p>
                </div>

                <div class="legal-block">
                    <div class="legal-block__indicator"></div>
                    <p>
                        <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                        относительно точности, полноты или актуальности представленной в блоге
                        информации. Любые упоминания потенциального карьерного роста, пассивного дохода или прошлых
                        результатов наших клиентов не гарантируют аналогичных результатов в будущем.
                        Индивидуальные итоги вашей деятельности зависят от множества факторов и могут существенно
                        отличаться от приведенных примеров.
                    </p>
                </div>

                <div class="legal-block">
                    <div class="legal-block__indicator"></div>
                    <p>
                        <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>,
                        его владельцы и аффилированные лица не несут ответственности за
                        любые прямые или косвенные убытки, решения или действия,
                        предпринятые вами на основе информации с этого ресурса. Вся
                        ответственность за использование методологий и возможные последствия
                        лежит исключительно на пользователе.
                    </p>
                </div>

                <div class="legal-block risk-warning-box">
                    <div class="risk-warning-box__content">
                        <p>
                            <strong>Предупреждение о рисках:</strong> Любая деятельность, направленная на
                            изменение профессионального статуса или инвестиции в новые навыки, сопряжена с
                            определенным уровнем риска. Перед принятием
                            любых важных решений мы настоятельно рекомендуем провести
                            собственное исследование и проконсультироваться с квалифицированным
                            независимым специалистом.
                        </p>
                    </div>
                </div>

                <div class="legal-block agreement-box">
                    <p>
                        <strong>Подтверждение пользователя:</strong> Продолжая использовать
                        сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                        действуете по собственной воле, полностью осознаете и принимаете все
                        упомянутые риски и условия данного отказа от ответственности.
                    </p>
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