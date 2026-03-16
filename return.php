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
            <span class="badge">Payment & Refunds</span>
            <h1 class="text-gradient">Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent">
                    <p>
                        Мы стремимся к максимальной прозрачности во взаимоотношениях с нашими клиентами. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена четкая процедура возврата средств, 
                        основанная на качестве предоставляемых услуг и защите прав потребителей Великобритании и ЕС.
                    </p>
                </div>

                <h2 class="pages__h2">Условия для оформления возврата</h2>
                <div class="refund-grid">
                    <div class="refund-card">
                        <div class="refund-card__icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h3>Несоответствие программе</h3>
                        <p>Если содержание материалов существенно отличается от заявленного на платформе <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card">
                        <div class="refund-card__icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3>Технические проблемы</h3>
                        <p>Критические ошибки на <strong><?= $fullDomain ?></strong>, которые не были устранены нашей поддержкой в течение 72 часов.</p>
                    </div>
                    <div class="refund-card">
                        <div class="refund-card__icon">
                            <i class="fas fa-hourglass-half"></i>
                        </div>
                        <h3>Период охлаждения</h3>
                        <p>Право на отказ в течение <strong>14 дней</strong> с момента оплаты (Consumer Contracts Regulations) при минимальном доступе к контенту.</p>
                    </div>
                </div>

                <div class="procedure-block">
                    <h2 class="pages__h2">Процедура запроса на возврат</h2>
                    <p class="pages__p">Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    
                    <div class="steps-mini">
                        <div class="step-mini" data-aos="fade-left" data-aos-delay="100">
                            <span class="step-mini__num">01</span>
                            <p>Отправьте письмо на <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></p>
                        </div>
                        <div class="step-mini" data-aos="fade-left" data-aos-delay="200">
                            <span class="step-mini__num">02</span>
                            <p>Укажите тему: <strong>«Запрос на возврат средств»</strong></p>
                        </div>
                        <div class="step-mini" data-aos="fade-left" data-aos-delay="300">
                            <span class="step-mini__num">03</span>
                            <p>Приложите данные: ФИО, Email и детали транзакции</p>
                        </div>
                        <div class="step-mini" data-aos="fade-left" data-aos-delay="400">
                            <span class="step-mini__num">04</span>
                            <p>Опишите причину — это поможет нам стать лучше</p>
                        </div>
                    </div>
                </div>

                <h2 class="pages__h2">Сроки и способ возврата</h2>
                <p class="pages__p">
                    После одобрения вашего запроса, возврат денежных средств будет произведен в течение <strong>7–14 рабочих дней</strong>. 
                    Средства возвращаются тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления зависит от регламента вашего банка в <strong>Великобритании</strong> или стране вашего пребывания.
                </p>

                <div class="warning-block">
                    <div class="warning-block__header">
                        <i class="fas fa-exclamation-circle"></i>
                        <h2>Исключения и ограничения</h2>
                    </div>
                    <ul class="legal-list">
                        <li>Запрос подан по истечении 14 календарных дней с момента совершения покупки.</li>
                        <li>Пользователь уже просмотрел или скачал более 50% материалов программы «Апгрейд».</li>
                        <li>Технические проблемы вызваны оборудованием или интернет-соединением на стороне пользователя.</li>
                        <li>Нарушение правил сообщества или условий Пользовательского соглашения <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy">
                    <div class="contact-info-block">
                        <h2 class="text-gradient">Свяжитесь с нами</h2>
                        <p>По всем вопросам, связанным с платежами и возвратами, обращайтесь в финансовый отдел:</p>
                        <ul class="contact-data">
                            <li><i class="fas fa-envelope"></i> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                            <li><i class="fas fa-phone"></i> <a href="tel:+442040971365">+44 20 4097 1365</a></li>
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