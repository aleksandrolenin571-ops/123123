<?php include 'includes/header.php'; ?>

<section class="page-hero">
    <div class="container">
        <div class="page-hero-box">
            <div class="eyebrow">Советы и материалы</div>
            <h1 class="section-title" style="color: #ffffff;">Практические рекомендации по цифровой безопасности</h1>
            <p>
                В этом разделе собраны короткие и понятные материалы о защите аккаунтов, устройств,
                личных данных и безопасном поведении в интернете.
            </p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="text-center">
            <div class="eyebrow">Подборка тем</div>
            <h2 class="section-title">Полезные статьи и чеклисты</h2>
            <p class="section-subtitle">
                Это статичный раздел с красивой подачей карточек. Полноценный функционал блога не требуется,
                поэтому здесь только визуальная часть и структура будущего раздела.
            </p>
        </div>

        <div class="blog-filter">
            <span class="filter-chip active">Все материалы</span>
            <span class="filter-chip">Пароли</span>
            <span class="filter-chip">Фишинг</span>
            <span class="filter-chip">Устройства</span>
            <span class="filter-chip">Семья</span>
            <span class="filter-chip">Приватность</span>
        </div>

        <div class="grid-3" style="margin-top: 24px;">
            <article class="card article-card">
                <div class="article-badge">Пароли</div>
                <h3>Как создать надежный пароль и не запутаться в аккаунтах</h3>
                <p>
                    Разбираем, почему повторяющиеся пароли опасны, как выстроить безопасную систему
                    входа в сервисы и на что обращать внимание при защите учетных записей.
                </p>
                <a href="#" class="article-link">Читать материал</a>
            </article>

            <article class="card article-card">
                <div class="article-badge">Фишинг</div>
                <h3>Как распознать поддельное письмо до того, как станет поздно</h3>
                <p>
                    Подозрительный адрес отправителя, давление на срочность, странные ссылки
                    и вложения — основные маркеры фишинговых сообщений.
                </p>
                <a href="#" class="article-link">Читать материал</a>
            </article>

            <article class="card article-card">
                <div class="article-badge">Устройства</div>
                <h3>5 обязательных правил безопасности для ноутбука и смартфона</h3>
                <p>
                    Обновления, проверенные приложения, защита экрана блокировки и резервные копии —
                    минимальный набор, который должен быть у каждого пользователя.
                </p>
                <a href="#" class="article-link">Читать материал</a>
            </article>

            <article class="card article-card">
                <div class="article-badge">Приватность</div>
                <h3>Что не стоит публиковать о себе в открытом доступе</h3>
                <p>
                    Избыточная информация в сети может использоваться для мошенничества,
                    социальной инженерии и сбора цифрового профиля пользователя.
                </p>
                <a href="#" class="article-link">Читать материал</a>
            </article>

            <article class="card article-card">
                <div class="article-badge">Семья</div>
                <h3>Как объяснить ребенку правила безопасности в интернете</h3>
                <p>
                    Вместо сложных запретов полезнее выстраивать простые и понятные правила,
                    которые ребенок сможет применять ежедневно.
                </p>
                <a href="#" class="article-link">Читать материал</a>
            </article>

            <article class="card article-card">
                <div class="article-badge">Wi‑Fi</div>
                <h3>Когда публичная сеть становится риском для ваших данных</h3>
                <p>
                    Рассказываем, почему в открытых сетях нужно избегать передачи чувствительной
                    информации и как снизить риск компрометации.
                </p>
                <a href="#" class="article-link">Читать материал</a>
            </article>
        </div>
    </div>
</section>

<section class="section-sm">
    <div class="container">
        <div class="cta-box">
            <div>
                <h2>Создайте аккаунт для доступа к личному кабинету</h2>
                <p>
                    В проекте предусмотрены регистрация и вход через PHP и MySQL.
                    После авторизации пользователь попадает в личный кабинет.
                </p>
            </div>
            <div>
                <a href="auth.php?tab=register" class="btn btn-primary">Создать аккаунт</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>