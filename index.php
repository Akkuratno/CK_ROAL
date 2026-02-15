<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>ООО "СК РОЯЛ" — Строительная компания</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <!-- Шапка -->
    <header class="header" id="header">
        <div class="container header__inner">
            <a href="#" class="logo">
                <span class="logo__icon"><i class="fas fa-gem"></i></span>
                <div class="logo__text">
                    <span class="logo__name">СК РОЯЛ</span>
                    <span class="logo__sub">строительная компания</span>
                </div>
            </a>
            <nav class="nav" id="nav">
                <a href="#about" class="nav__link">О нас</a>
                <a href="#services" class="nav__link">Услуги</a>
                <a href="#projects" class="nav__link">Проекты</a>
                <a href="#advantages" class="nav__link">Преимущества</a>
                <a href="#contacts" class="nav__link">Контакты</a>
            </nav>
            <a href="tel:+79670999797" class="header__phone"><i class="fas fa-phone"></i> +7 (967) 099-97-97</a>
            <button class="burger" id="burger" aria-label="Меню">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>

    <!-- Главный экран -->
    <section class="hero">
        <div class="hero__bg"></div>
        <div class="container hero__inner">
            <div class="hero__content">
                <p class="hero__tag">Надёжность. Качество. Опыт.</p>
                <h1 class="hero__title">Строим будущее<br><span>вместе с вами</span></h1>
                <p class="hero__desc">ООО «СК РОЯЛ» — ваш надёжный партнёр в сфере строительства. Мы возводим жилые и коммерческие объекты любой сложности с гарантией качества.</p>
                <div class="hero__actions">
                    <a href="#contacts" class="btn btn--primary">Оставить заявку</a>
                    <a href="#projects" class="btn btn--outline">Наши проекты</a>
                </div>
            </div>
            <div class="hero__stats">
                <div class="stat">
                    <span class="stat__num" data-target="5">0</span>
                    <span class="stat__label">лет на рынке</span>
                </div>
                <div class="stat">
                    <span class="stat__num" data-target="14">0</span>
                    <span class="stat__label">специалистов</span>
                </div>
                <div class="stat">
                    <span class="stat__num" data-target="60">0</span><span class="stat__plus"> млн</span>
                    <span class="stat__label">выручка 2024</span>
                </div>
            </div>
        </div>
    </section>

    <!-- О нас -->
    <section class="about section" id="about">
        <div class="container">
            <div class="section__header">
                <p class="section__tag">О компании</p>
                <h2 class="section__title">Почему выбирают <span>СК РОЯЛ</span></h2>
            </div>
            <div class="about__grid">
                <div class="about__card fade-in">
                    <div class="about__icon"><i class="fas fa-hard-hat"></i></div>
                    <h3>Профессионализм</h3>
                    <p>Команда квалифицированных инженеров, архитекторов и строителей с многолетним опытом работы.</p>
                </div>
                <div class="about__card fade-in">
                    <div class="about__icon"><i class="fas fa-star"></i></div>
                    <h3>Качество</h3>
                    <p>Используем только сертифицированные материалы и современные технологии строительства.</p>
                </div>
                <div class="about__card fade-in">
                    <div class="about__icon"><i class="fas fa-clock"></i></div>
                    <h3>Сроки</h3>
                    <p>Строго соблюдаем сроки выполнения работ, прописанные в договоре.</p>
                </div>
                <div class="about__card fade-in">
                    <div class="about__icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Гарантия</h3>
                    <p>Предоставляем гарантию на все выполненные работы сроком до 5 лет.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Услуги -->
    <section class="services section" id="services">
        <div class="container">
            <div class="section__header">
                <p class="section__tag">Наши услуги</p>
                <h2 class="section__title">Полный спектр <span>строительных услуг</span></h2>
            </div>
            <div class="services__grid">
                <div class="service-card fade-in">
                    <div class="service-card__number">01</div>
                    <h3 class="service-card__title">Жилое строительство</h3>
                    <p class="service-card__desc">Строительство многоквартирных домов, таунхаусов и коттеджных посёлков под ключ.</p>
                    <div class="service-card__line"></div>
                </div>
                <div class="service-card fade-in">
                    <div class="service-card__number">02</div>
                    <h3 class="service-card__title">Коммерческие объекты</h3>
                    <p class="service-card__desc">Возведение офисных зданий, торговых центров и складских комплексов.</p>
                    <div class="service-card__line"></div>
                </div>
                <div class="service-card fade-in">
                    <div class="service-card__number">03</div>
                    <h3 class="service-card__title">Проектирование</h3>
                    <p class="service-card__desc">Разработка проектной документации, 3D-визуализация и авторский надзор.</p>
                    <div class="service-card__line"></div>
                </div>
                <div class="service-card fade-in">
                    <div class="service-card__number">04</div>
                    <h3 class="service-card__title">Ремонт и отделка</h3>
                    <p class="service-card__desc">Капитальный и косметический ремонт помещений любого назначения.</p>
                    <div class="service-card__line"></div>
                </div>
                <div class="service-card fade-in">
                    <div class="service-card__number">05</div>
                    <h3 class="service-card__title">Инженерные сети</h3>
                    <p class="service-card__desc">Проектирование и монтаж систем водоснабжения, отопления, вентиляции и электрики.</p>
                    <div class="service-card__line"></div>
                </div>
                <div class="service-card fade-in">
                    <div class="service-card__number">06</div>
                    <h3 class="service-card__title">Ландшафтный дизайн</h3>
                    <p class="service-card__desc">Благоустройство территорий, озеленение и создание ландшафтных композиций.</p>
                    <div class="service-card__line"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Проекты -->
    <section class="projects section" id="projects">
        <div class="container">
            <div class="section__header">
                <p class="section__tag">Портфолио</p>
                <h2 class="section__title">Реализованные <span>проекты</span></h2>
            </div>
            <div class="projects__grid">
                <div class="project-card fade-in">
                    <div class="project-card__img" style="background-image: url('images/proekt/cor.png'); background-size: cover; background-position: center;">
                        <div class="project-card__overlay">
                            <span class="project-card__tag">Жилой комплекс</span>
                        </div>
                    </div>
                    <div class="project-card__info">
                        <h3>ЖК «Королевский»</h3>
                        <p>12-этажный жилой комплекс премиум-класса, 240 квартир</p>
                        <span class="project-card__year">2024</span>
                    </div>
                </div>
                <div class="project-card fade-in">
                    <div class="project-card__img" style="background-image: url('images/proekt/olimp.jpg'); background-size: cover; background-position: center;">
                        <div class="project-card__overlay">
                            <span class="project-card__tag">Коммерческий</span>
                        </div>
                    </div>
                    <div class="project-card__info">
                        <h3>БЦ «Олимп»</h3>
                        <p>Бизнес-центр класса А, 15 000 м² офисных площадей</p>
                        <span class="project-card__year">2023</span>
                    </div>
                </div>
                <div class="project-card fade-in">
                    <div class="project-card__img" style="background-image: url('images/proekt/roal-park.jpe'); background-size: cover; background-position: center;">
                        <div class="project-card__overlay">
                            <span class="project-card__tag">Коттеджный посёлок</span>
                        </div>
                    </div>
                    <div class="project-card__info">
                        <h3>КП «Роял Парк»</h3>
                        <p>Коттеджный посёлок из 45 домов с инфраструктурой</p>
                        <span class="project-card__year">2023</span>
                    </div>
                </div>
                <div class="project-card fade-in">
                    <div class="project-card__img" style="background-image: url('images/proekt/monax.jpg'); background-size: cover; background-position: center;">
                        <div class="project-card__overlay">
                            <span class="project-card__tag">Торговый центр</span>
                        </div>
                    </div>
                    <div class="project-card__info">
                        <h3>ТЦ «Монарх»</h3>
                        <p>Торговый комплекс на 120 магазинов, 25 000 м²</p>
                        <span class="project-card__year">2022</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section class="advantages section" id="advantages">
        <div class="container">
            <div class="section__header">
                <p class="section__tag">Наши преимущества</p>
                <h2 class="section__title">Работаем на <span>результат</span></h2>
            </div>
            <div class="advantages__grid">
                <div class="advantage fade-in">
                    <div class="advantage__num">01</div>
                    <h3>Собственная техника</h3>
                    <p>Парк строительной техники и спецтранспорта позволяет выполнять работы без привлечения сторонних подрядчиков.</p>
                </div>
                <div class="advantage fade-in">
                    <div class="advantage__num">02</div>
                    <h3>Фиксированные цены</h3>
                    <p>Стоимость работ фиксируется в договоре и не меняется в процессе строительства.</p>
                </div>
                <div class="advantage fade-in">
                    <div class="advantage__num">03</div>
                    <h3>Полный цикл</h3>
                    <p>От проектирования до сдачи объекта — всё в одних руках. Вам не нужно искать субподрядчиков.</p>
                </div>
                <div class="advantage fade-in">
                    <div class="advantage__num">04</div>
                    <h3>Прозрачная отчётность</h3>
                    <p>Регулярные фотоотчёты, доступ к камерам на объекте и еженедельные отчёты о ходе работ.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Призыв к действию -->
    <section class="cta section">
        <div class="container cta__inner">
            <h2 class="cta__title">Готовы начать строительство?</h2>
            <p class="cta__desc">Оставьте заявку, и наш специалист свяжется с вами в течение 30 минут для бесплатной консультации.</p>
            <a href="#contacts" class="btn btn--primary btn--lg">Получить консультацию</a>
        </div>
    </section>

    <!-- Контакты -->
    <section class="contacts section" id="contacts">
        <div class="container">
            <div class="section__header">
                <p class="section__tag">Связаться с нами</p>
                <h2 class="section__title">Контактная <span>информация</span></h2>
            </div>
            <div class="contacts__grid">
                <div class="contacts__info fade-in">
                    <div class="contact-item">
                        <div class="contact-item__icon"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <h4>Телефон</h4>
                            <a href="tel:+79670999797">+7 (967) 099-97-97</a>
                            
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item__icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4>Email</h4>
                            <a href="mailto:info@sk-royal.ru">hertvvv@mail.ru</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item__icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Юридический адрес</h4>
                            <p>119002, г. Москва, ул. Арбат, д. 54/2, стр. 1, помещ. 1/п</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item__icon"><i class="fas fa-business-time"></i></div>
                        <div>
                            <h4>Режим работы</h4>
                            <p>Пн-Пт: 9:00 — 20:00</p>

                        </div>
                    </div>
                </div>
                <form class="contact-form fade-in" id="contactForm" action="contact.php" method="POST">
                    <h3 class="contact-form__title">Оставить заявку</h3>
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Ваше имя" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" id="phone" placeholder="+7 (___) ___-__-__" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" placeholder="Опишите ваш проект" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn--primary btn--full">Отправить заявку</button>
                    <p class="contact-form__note">Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности</p>
                    <div class="form-status" id="formStatus"></div>
                </form>
            </div>
        </div>
    </section>

    <!-- Подвал -->
    <footer class="footer">
        <div class="container footer__inner">
            <div class="footer__top">
                <div class="footer__brand">
                    <a href="#" class="logo logo--light">
                        <span class="logo__icon"><i class="fas fa-gem"></i></span>
                        <div class="logo__text">
                            <span class="logo__name">СК РОЯЛ</span>
                            <span class="logo__sub">строительная компания</span>
                        </div>
                    </a>
                    <p class="footer__desc">Строим надёжно, качественно и в срок. Ваш проект — наша ответственность.</p>
                </div>
                <div class="footer__links">
                    <h4>Навигация</h4>
                    <a href="#about">О нас</a>
                    <a href="#services">Услуги</a>
                    <a href="#projects">Проекты</a>
                    <a href="#contacts">Контакты</a>
                </div>
                <div class="footer__links">
                    <h4>Услуги</h4>
                    <a href="#services">Жилое строительство</a>
                    <a href="#services">Коммерческие объекты</a>
                    <a href="#services">Проектирование</a>
                    <a href="#services">Ремонт и отделка</a>
                </div>
            </div>
            <div class="footer__bottom">
                <p>&copy; 2025 ООО «СК Роял». ОГРН 1205000042554, ИНН 5074064079. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>

