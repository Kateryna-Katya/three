document.addEventListener('DOMContentLoaded', () => {
    // === 1. Инициализация библиотек ===
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    const swiper = new Swiper('.cases-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        breakpoints: {
            768: { slidesPerView: 2 },
            1100: { slidesPerView: 3 }
        }
    });

    // === 2. Хедер и Навигация ===
    const header = document.querySelector('.header');
    const burger = document.querySelector('.burger');
    const menuOverlay = document.getElementById('menu-overlay');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '12px 0';
            header.style.background = 'rgba(10, 10, 12, 0.95)';
        } else {
            header.style.padding = '20px 0';
            header.style.background = 'rgba(10, 10, 12, 0.8)';
        }
    });

    const toggleMenu = () => {
        burger.classList.toggle('active');
        menuOverlay.classList.toggle('active');
        document.body.style.overflow = menuOverlay.classList.contains('active') ? 'hidden' : '';
    };

    burger?.addEventListener('click', toggleMenu);
    mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // === 3. Hero Анимации и Параллакс ===
    const heroTl = gsap.timeline();
    heroTl.to('.chart-line', { strokeDashoffset: 0, duration: 2.5, ease: "power2.out", delay: 0.5 })
          .from('.floating-node', { y: 30, opacity: 0, stagger: 0.3, ease: "back.out(1.7)" }, "-=1.5")
          .from('.arrow-element, .particle', { scale: 0, opacity: 0, stagger: 0.2 }, "-=1");

    document.addEventListener('mousemove', (e) => {
        const x = (window.innerWidth - e.pageX * 2) / 100;
        const y = (window.innerHeight - e.pageY * 2) / 100;
        document.querySelectorAll('.visual__layer').forEach(layer => {
            const depth = layer.getAttribute('data-depth');
            gsap.to(layer, { x: x * depth * 20, y: y * depth * 20, duration: 1, ease: "power1.out" });
        });
    });

    // === 4. Сфера Знаний и Экспертиза ===
    document.querySelectorAll('.knowledge-node').forEach((node, i) => {
        gsap.to(node, {
            y: "random(-15, 15)", x: "random(-15, 15)",
            duration: 2 * (node.getAttribute('data-speed') || 1),
            repeat: -1, yoyo: true, ease: "sine.inOut", delay: i * 0.5
        });
    });

    document.querySelectorAll('.expert__side').forEach(side => {
        side.addEventListener('mousemove', (e) => {
            const icon = side.querySelector('.expert__side-icon');
            const rect = side.getBoundingClientRect();
            gsap.to(icon, {
                x: (e.clientX - rect.left - rect.width / 2) / 10,
                y: (e.clientY - rect.top - rect.height / 2) / 10,
                duration: 0.5, ease: "power2.out"
            });
        });
        side.addEventListener('mouseleave', () => {
            gsap.to(side.querySelector('.expert__side-icon'), { x: 0, y: 0, duration: 0.5 });
        });
    });

    // === 5. Контактная Форма и Капча ===
    const form = document.getElementById('career-form');
    let captchaResult;

    function generateCaptcha() {
        const a = Math.floor(Math.random() * 10) + 1;
        const b = Math.floor(Math.random() * 10) + 1;
        captchaResult = a + b;
        const taskElement = document.getElementById('captcha-task');
        if (taskElement) taskElement.innerText = `${a} + ${b} = ?`;
    }
    generateCaptcha();

    document.getElementById('phone-input')?.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '');
    });

    form?.addEventListener('submit', (e) => {
        e.preventDefault();
        const captchaInput = document.getElementById('captcha-input');
        if (parseInt(captchaInput.value) !== captchaResult) {
            alert('Неверный ответ капчи!');
            generateCaptcha();
            captchaInput.value = '';
            return;
        }

        const submitBtn = form.querySelector('.form-submit');
        submitBtn.innerHTML = '<span>Отправка...</span>';
        submitBtn.style.pointerEvents = 'none';

        setTimeout(() => {
            document.getElementById('form-success').classList.add('active');
        }, 1500);
    });

    // === 6. Cookie Popup ===
    const cookiePopup = document.getElementById('cookie-popup');
    if (!localStorage.getItem('cookieAccepted')) {
        setTimeout(() => cookiePopup?.classList.add('show'), 2000);
    }
    document.getElementById('cookie-accept')?.addEventListener('click', () => {
        localStorage.setItem('cookieAccepted', 'true');
        cookiePopup?.classList.remove('show');
    });
});