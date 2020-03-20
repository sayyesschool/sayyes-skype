<?php
$utm_source = isset($_GET['utm_source']) ? $_GET['utm_source'] : null;
$utm_medium = isset($_GET['utm_medium']) ? $_GET['utm_medium'] : null;
$utm_campaign = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : null;
$utm_content = isset($_GET['utm_content']) ? $_GET['utm_content'] : null;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Хочешь заговорить на английском, записывайся на пробный урок по скайп в школу английского SAY YES!">
    <meta name="yandex-verification" content="77618a975ea21450">
    <link rel="icon" href="../img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="../img/favicon-192x192.png" sizes="192x192">

    <title>Бесплатный пробный урок английского по Скайп | SAY YES!</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./dev/css/index.css">

    <?php
        include '../includes/yandex-metrika.php';
        include '../includes/google-analytics.php';
        include '../includes/facebook-pixel.php';
        include '../includes/roistat.php';
    ?>
</head>

<body class="page">
    <header id="header" class="hero">
        <div class="hero-head">
            <div class="container">
                <img src="../img/sayyes-logo.png">

                <div class="buttons">
                    <a class="button phone phone-alloka is-text" href="tel:74996505347">
                        <span class="roistat-phone">+7 499 650-53-47</span>
                    </a>

                    <a class="button whatsapp-button is-white is-outlined" href="https://wa.me/79267371137" target="_blank">
                        <span class="icon">
                            <i class="fab fa-whatsapp"></i>
                        </span>
                        <span>Написать в WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="hero-body">
            <h1 class="typography title">Записывайтесь на бесплатный вводный урок</h1>

            <p class="typography subtitle">Изучайте английский по скайп</p>
        </div>

        <div class="hero-foot">
            <a href="#form" class="button is-danger is-fullwidth call-to-action">Записаться на урок</a>
        </div>
    </header>

    <main>
        <section id="audience" class="section has-text-centered">
            <h2 class="title">Обучение английскому по скайп однозначно для вас, если:</h2>

            <div class="media-list">
                <?php
                    $items = [
                        [
                            'image' => 'grimacing-face.png',
                            'text' => 'Ваши знания ограничиваются фразой "London is the capital of Great Britain".'
                        ],
                        [
                            'image' => 'zipper-mouth-face.png',
                            'text' => 'Вы хотите перестать "объясняться на пальцах" в путешествиях.'
                        ],
                        [
                            'image' => 'shocked-face-with-exploding-head.png',
                            'text' => 'Можете сказать пару фраз на английском, но плохо понимаете беглую речь на слух.'
                        ],
                        [
                            'image' => 'unamused-face.png',
                            'text' => 'Ваша цель – высокооплачиваемая работа, но в резюме нет пункта «Свободный английский»'
                        ]
                    ];
                ?>

                <?php foreach($items as $item): ?>
                    <div class="media">
                        <div class="media-left">
                            <img class="image" src="../img/emoji/<?= $item['image'] ?>">
                        </div>

                        <div class="media-content">
                            <p><?= $item['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <p class="lead">Если вы учите язык годами, но так и не говорите СВОБОДНО – вам просто необходимо посетить наш бесплатный урок по скайп!</p>
        </section>

        <section id="lesson-how" class="section">
            <div class="container">
                <h2 class="title section-title">Как проходят занятия по скайп?</h2>

                <div class="media-list">
                    <?php
                        $items = [
                            [
                                'image' => 'speaking-head-in-silhouette.png',
                                'primary' => 'Практикуем общение',
                                'secondary' => 'Вы очень, очень много говорите с преподавателем, чтобы ваш английский стал по-настоящему свободным и непринужденным.'
                            ],
                            [
                                'image' => 'flag-for-united-kingdom.png',
                                'primary' => 'Преподаем Живой английский',
                                'secondary' => 'Вы занимаетесь по учебникам Touchstone (Кембридж), выполняете интерактивные задания и смотрите видео с субтитрами.'
                            ],
                            [
                                'image' => 'information-desk-person.png',
                                'primary' => 'Подбираем программу под вас',
                                'secondary' => 'Деловой английский или для путешествий? С русскоговорящем преподавателем или с носителем? Интенсив или курс выходного дня?  - Мы учтем все особенности.'
                            ],
                            [
                                'image' => 'memo.png',
                                'primary' => 'Используем авторскую методику',
                                'secondary' => 'Наша методика Fluency Drill гарантированно позволяет преодолеть языковой барьер и чувствовать себя свободно.'
                            ],
                            [
                                'image' => 'female-teacher.png',
                                'primary' => 'Проводим разговорные клубы',
                                'secondary' => 'Чтобы вы могли еще больше практиковать навыки общения, почувствовать уверенность в себе, и просто получить положительные эмоции.'
                            ],
                            [
                                'image' => 'money-bag.png',
                                'primary' => 'Предлагаем гибкую систему оплаты',
                                'secondary' => 'Для вашего удобства мы используем пакетную систему оплаты с возможностью переноса и заморозки занятий.'
                            ]
                        ];
                    ?>

                    <?php foreach($items as $item): ?>
                        <div class="media">
                            <div class="media-left">
                                <img class="image" src="../img/emoji/<?= $item['image'] ?>">
                            </div>

                            <div class="media-content">
                                <p><strong><?= $item['primary'] ?></strong></p>
                                <p><?= $item['secondary'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="lesson-what" class="section">
            <div class="container">
                <h2 class="title section-title">Что вас ждет на бесплатном уроке?</h2>

                <div class="background-image box"></div>

                <div class="media-list">
                    <?php
                        $items = [
                            [
                                'image' => 'female-student.png',
                                'text' => 'Определите свой уровень и поймете, почему вы до сих пор не заговорили на английском.'
                            ],
                            [
                                'image' => 'female-teacher.png',
                                'text' => 'Познакомитесь с вашим потенциальным преподавателем, учебными пособиями и инструментами.'
                            ],
                            [
                                'image' => 'memo.png',
                                'text' => 'Поймете, как метод Fluency Drill поможет вам строить предложения «на автомате».'
                            ],
                            [
                                'image' => 'flag-for-united-kingdom.png',
                                'text' => 'Узнаете 5 секретов изучения языка, без которых вы НЕ заговорите.'
                            ],
                            [
                                'image' => 'pencil.png',
                                'text' => 'Проверите свои силы на практике и увидите, как уже не первом уроке вы получите знания и навыки.'
                            ],
                            [
                                'image' => 'winking-face.png',
                                'text' => 'Убедитесь, что изучение английского может быть не только успешным, но и комфортным!'
                            ]
                        ];
                    ?>

                    <?php foreach($items as $item): ?>
                        <div class="media">
                            <div class="media-left">
                                <img class="image" src="../img/emoji/<?= $item['image'] ?>">
                            </div>

                            <div class="media-content">
                                <p><?= $item['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section section-dark">
            <h2 class="title">Записывайтесь на бесплатный урок по скайп</h2>
            <a href="#form" class="button is-danger is-fullwidth call-to-action">Записаться на урок</a>
        </section>

        <section id="about" class="section">
            <h2 class="title">Кто мы?</h2>

            <p class="subtitle has-text-weight-bold">SAY YES! – сеть школ английского языка в Москве</p>

            <div class="media-list">
                <?php
                    $items = [
                        [
                            'image' => 'graduation-cap.png',
                            'text' => 'Обучили английскому более 4500 студентов за 6 лет'
                        ],
                        [
                            'image' => 'white-up-pointing-index.png',
                            'text' => 'Обучаем в группах, индивидуально и по скайпу'
                        ],
                        [
                            'image' => 'thumbs-up-sign.png',
                            'text' => 'Доступная стоимость - от 6000 руб./мес.'
                        ]
                    ];
                ?>

                <?php foreach ($items as $item): ?>
                    <div class="media">
                        <div class="media-left">
                            <img class="image" src="../img/emoji/<?= $item['image'] ?>">
                        </div>

                        <div class="media-content">
                            <p><?= $item['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <p class="lead has-text-centered">Дважды становились победителями Премии <strong>«Эксперт Года»</strong> рейтинга курсов Schoolrate:</p>

            <div class="media-list">
                <?php
                    $items = [
                        [
                            'image' => 'trophy.png',
                            'text' => '<strong>Инноватор года</strong> за курс English Challenge (2017 г.)'
                        ],
                        [
                            'image' => 'trophy.png',
                            'text' => 'За <strong>лучшие языковые мероприятия</strong> для студентов (2018 г.)'
                        ],
                        [
                            'image' => 'trophy.png',
                            'text' => '<strong>Методика года</strong> за метод «Английский до автоматизма» (2019 г.)'
                        ],
                        [
                            'image' => 'trophy.png',
                            'text' => '<strong>WEB–доверие</strong> за самую лояльную публику в Интернет (2019 г.)'
                        ]
                    ];
                ?>

                <?php foreach($items as $item): ?>
                    <div class="media">
                        <div class="media-left">
                            <img class="image" src="../img/emoji/<?= $item['image'] ?>">
                        </div>

                        <div class="media-content">
                            <p><?= $item['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="teachers" class="section">
            <h2 class="title">Наши преподаватели</h2>

            <div class="media-list">
                <?php
                    $items = [
                        [
                            'first_name' => 'Марта',
                            'last_name' => 'Филипоненко',
                            'image_src' => 'https://sayes.ru/wp-content/uploads/2016/02/Филипоненко-мини.png',
                            'video_src' => 'https://www.youtube.com/watch?v=MG3tBxJmjZM'
                        ],
                        [
                            'first_name' => 'Роман',
                            'last_name' => 'Сорочук',
                            'image_src' => 'https://sayes.ru/wp-content/uploads/2016/02/sq-1.jpg',
                            'video_src' => 'https://www.youtube.com/watch?v=Tq0SC1ls_n0'
                        ],
                        [
                            'first_name' => 'Алиса',
                            'last_name' => 'Алиева',
                            'image_src' => 'https://sayes.ru/wp-content/uploads/2018/12/%D0%B0%D0%BB%D0%B8%D0%B5%D0%B2%D0%B0-%D0%BC%D0%B8%D0%BD%D0%B8-300x300.png',
                            'video_src' => 'https://www.youtube.com/watch?v=-z-JUCn1VB0'
                        ],
                        [
                            'first_name' => 'Сабина',
                            'last_name' => 'Шейхова',
                            'image_src' => 'https://sayes.ru/wp-content/uploads/2016/02/ae4C36OxL24-2.jpg',
                            'video_src' => 'https://www.youtube.com/watch?v=nbHaB0f1avc'
                        ],
                        [
                            'first_name' => 'Екатерина',
                            'last_name' => 'Иванова',
                            'image_src' => 'https://sayes.ru/wp-content/uploads/2019/04/%D0%98%D0%B2%D0%B0%D0%BD%D0%BE%D0%B2%D0%B0-%D0%BC%D0%B8%D0%BD%D0%B8-300x300.png',
                            'video_src' => 'https://www.youtube.com/watch?v=Asyra1y02hU'
                        ],
                        [
                            'first_name' => 'Полина',
                            'last_name' => 'Ангаткина',
                            'image_src' => 'https://sayes.ru/wp-content/uploads/2018/12/WhatsApp-Image-2018-12-06-at-17.18.23-e1562064170136-300x300.jpeg',
                            'video_src' => 'https://www.youtube.com/watch?v=mAk5aP2rFJw'
                        ],
                        [
                            'first_name' => 'Мария',
                            'last_name' => 'Наливайкина',
                            'image_src' => 'https://sayes.ru/wp-content/uploads/2017/09/%D0%9D%D0%B0%D0%BB%D0%B8%D0%B2%D0%B0%D0%B8%CC%86%D0%BA%D0%B8%D0%BD%D0%B0-%D0%BC%D0%B8%D0%BD%D0%B8-300x300.png',
                            'video_src' => 'https://www.youtube.com/watch?v=GErPVsS9vbA'
                        ],
                        [
                            'first_name' => 'Damjan',
                            'last_name' => 'Gogovski',
                            'image_src' => 'https://sayes.ru/wp-content/uploads/2019/04/%D0%94%D0%B0%D0%BC%D1%8C%D1%8F%D0%BD-%D0%BC%D0%B8%D0%BD%D0%B8-300x300.png',
                            'video_src' => 'https://www.youtube.com/watch?v=h0LmnaQT-KM'
                        ],
                        [
                            'first_name' => 'Лусине',
                            'last_name' => 'Гумашян',
                            'image_src' => 'https://sayes.ru/wp-content/uploads/2019/08/%D0%9B%D1%8E%D1%81%D0%B8-%D0%BC%D0%B8%D0%BD%D0%B8-300x300.png',
                            'video_src' => 'https://www.youtube.com/watch?v=xcpaDyu9qlk'
                        ]
                    ];
                ?>

                <?php foreach ($items as $item): ?>
                    <div class="media">
                        <a class="card" href="<?= $item['video_src'] ?>"  data-fancybox data-width="640" data-height="360">
                            <img class="card-image" src="<?= $item['image_src'] ?>" alt="Фото <?= $item['first_name'] . ' ' . $item['last_name'] ?>">

                            <div class="card-content">
                                <span class="title"><?= $item['first_name'] ?></span>
                                <span class="subtitle"><?= $item['last_name'] ?></span>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <section id="gallery" class="section">
            <h2 class="title">Несколько фото из нашего Инстаграма</h2>

            <div class="carousel">
                <div class="carousel-inner">
                    <?php foreach(range(1, 10) as $number): ?>
                        <div>
                            <img class="img-fluid" src="../img/photos/<?= $number ?>.jpg" alt="">
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>

        <section id="video" class="section">
            <p class="lead has-text-centered">А еще, мы <strong>единственная школа</strong> в Москве, <strong>где снимают прогресс</strong> студентов на видео!</p>

            <p class="lead has-text-centered">Посмотрите, как вы сможете говорить на английском:</p>

            <div class="video">
                <iframe src="https://player.vimeo.com/video/319753562" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
            </div>
        </section>

        <section id="form" class="section">
            <h2 class="title">Хотите также?</h2>

            <p class="subtitle">Записывайтесь на бесплатный урок по скайп!</p>
            
            <form method="post" action="../request.php">
                <?php if (isset($utm_source)): ?>
                    <input type="hidden" name="utm_source" value="<?= $utm_source ?>">
                <?php endif; ?>

                <?php if (isset($utm_medium)): ?>
                    <input type="hidden" name="utm_medium" value="<?= $utm_medium ?>">
                <?php endif; ?>

                <?php if (isset($utm_campaign)): ?>
                    <input type="hidden" name="utm_campaign" value="<?= $utm_campaign ?>">
                <?php endif; ?>

                <?php if (isset($utm_content)): ?>
                    <input type="hidden" name="utm_content" value="<?= $utm_content ?>">
                <?php endif; ?>

                <div class="field">
                    <div class="control">
                        <input class="input is-medium" type="text" name="name" placeholder="Имя" required>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-medium" type="tel" name="phone" placeholder="Телефон" required>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" checked required>
                            Я согласен на обработку своих персональных данных
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary is-fullwidth">Оставить заявку</button>
                    </div>
                </div>
            </form>
        </section>
    </main>

    <footer id="footer" class="footer section">
        <h2 class="title">Остались вопросы?</h2>

        <p class="subtitle">Если вы хотите узнать более полную информацию о нас, просто позвоните нам!</p>

        <a class="button phone phone-alloka is-primary is-outlined is-inverted" href="tel:79250916416">
            <span class="icon">
                <i class="fa fa-phone"></i>
            </span>
            <span>8 (925) 091-64-16</span>
        </a>

        <br>или напишите нам<br>

        <a class="button whatsapp is-primary is-outlined is-inverted" href="https://wa.me/79267371137" target="_blank">
            <span class="icon">
                <i class="fab fa-whatsapp"></i>
            </span>
            <span>WhatsApp</span>
        </a>

        <ul>
            <li>
                <a href="/kontakti/#paveletskaya">м. Павелецкая, ул. Кожевническая, д. 14к1ст2</a>
            </li>

            <li>
                <a href="/kontakti/#belorusskaya">м. Белорусская, ул. Б. Грузинская, д. 61</a>
            </li>
        </ul>

        <div>
            <a href="https://sayes.ru/politika-konfidentsialnosti/">Политика конфиденциальности</a>
        </div>
    </footer>

    <div id="dialog" class="modal">
        <div class="modal-background"></div>

        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Ваша заявка принята</p>
                <button class="delete" aria-label="close"></button>
            </header>

            <section class="modal-card-body">
                <p class="lead">Мы перезвоним Вам в ближайшее время, а пока что предлагаем подписаться на наш паблик в <a href="https://www.instagram.com/sayyes2english">Instagram</a> и начать учить живой английский с нашими преподавателями!</p>
                
                <iframe src="https://www.instagram.com/p/Btga3-IAHWT/embed/captioned/?cr=1&amp;v=12&amp;wp=500&amp;rd=https%3A%2F%2Fsayes.ru&amp;rp=%2Fthank-you%2F#%7B%22ci%22%3A0%2C%22os%22%3A4979.500000001281%7D" allowtransparency="true" allowfullscreen="true" frameborder="0" scrolling="no"></iframe>
            </section>

            <footer class="modal-card-foot">
                <a class="button is-success" href="https://wa.me/79250916416?text=Хочу%20подарок">Получить подарок</a>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
    <script src="https://static.sayes.ru/js/crm.js"></script>
    <script src="https://static.sayes.ru/js/masked-input.js"></script>
    <script src="https://static.sayes.ru/js/timer.js"></script>

    <script>
        var formElement = document.querySelector('#form');

        $('input[type=tel]').mask('+7 (999) 999-9999');

        $('.call-to-action').on('click', function (event) {
            event.preventDefault();

            formElement.scrollIntoView({ behavior: 'smooth' });
        });

        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault();

            ym(55648915, 'reachGoal', 'zayavka');
            gtag('event', 'click', { event_category: 'zayavka' });
            fbq('track', 'Lead');

            crm.addStudyRequest({
                type: 'Заявка на скайп с лэнда',
                name: this.elements.name.value,
                phone: this.elements.phone.value
            });

            $.post({
                url: '/dev/request.php',
                data: JSON.stringify({
                    name: this.elements.name.value,
                    phone: this.elements.phone.value,
                    utm_source: this.elements.utm_source && this.elements.utm_source.value,
                    utm_medium: this.elements.utm_medium && this.elements.utm_medium.value,
                    utm_campaign: this.elements.utm_campaign && this.elements.utm_campaign.value,
                    utm_content: this.elements.utm_content && this.elements.utm_content.value
                }),
                contentType: 'application/json'
            }).done(function(data) {
                dialogElement.classList.add('is-active');
                formElement.reset();
            });
        });

        $('.button.whatsapp-button').click(function(event) {
            ym(55648915, 'reachGoal', 'click');
            gtag('event', 'click', { event_category: 'click' });
            fbq('track', 'InitiateCheckout');
            
            return true;
        });

        $('#gallery .carousel-inner').slick({
            arrow: true,
            prevArrow: '<a class="slick-arrow slick-arrow-prev"><span class="fa fa-angle-left custom-handle"></span></a>',
            nextArrow: '<a class="slick-arrow slick-arrow-next"><span class="fa fa-angle-right custom-handle"></span></a>',
            dots: true
        });

        $('#dialog .delete').click(function() {
            dialogElement.classList.remove('is-active');
        });
    </script>
</body>

</html>