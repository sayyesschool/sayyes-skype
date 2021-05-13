<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Хочешь заговорить на английском, записывайся на пробный урок по скайп в школу английского SAY YES!">
        <meta name="yandex-verification" content="77618a975ea21450">

        <base href="/dev1/">

        <title>Бесплатный пробный урок английского по Скайп | SAY YES!</title>

        <link rel="icon" href="https://static.sayes.ru/images/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" href="https://static.sayes.ru/images/favicons/favicon-192x192.png" sizes="192x192">
        <link rel="stylesheet" href="css/index.css">

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
                    <img src="https://static.sayes.ru/images/logos/sayyes-school-chain-white.png" alt="Логотип Say Yes">

                    <div class="buttons">
                        <a class="button phone phone-alloka is-text" href="tel:74996505347">
                            <span class="roistat-phone">+7 499 650-53-47</span>
                        </a>

                        <a class="button whatsapp is-white is-outlined" href="https://wa.me/79267371137" target="_blank">
                            <span class="icon">
                                <i class="fab fa-whatsapp"></i>
                            </span>
                            <span>Написать в WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="hero-body">
                <h1 class="typography title">Бесплатный урок английского языка по Скайп</h1>

                <p class="typography">Воспользуйся шансом заговорить на английском по методу<br><span class="rounded">«Английский до автоматизма»</span></p>

                <a href="#form" class="button is-medium is-danger is-fullwidth call-to-action">Записаться на бесплатный урок</a>
            </div>
        </header>

        <main>
            <section id="signup" class="section has-text-centered">
                <h2 class="title">Наш бесплатный урок по Скайп однозначно для вас, если вы:</h2>

                <div class="media-list">
                    <?php
                        $items = [
                            [
                                'image' => 'zipper-mouth-face.png',
                                'text' => 'Не говорите на английском или говорите с ошибками'
                            ],
                            [
                                'image' => 'shocked-face-with-exploding-head.png',
                                'text' => 'С трудом понимаете речь носителей'
                            ],
                            [
                                'image' => 'grimacing-face.png',
                                'text' => 'Не знаете, как правильно строить предложения'
                            ],
                            [
                                'image' => 'face-without-mouth.png',
                                'text' => 'Понимаете, что говорят вам, но ответить не можете'
                            ]
                        ];
                    ?>

                    <?php foreach($items as $item): ?>
                        <div class="media">
                            <div class="media-left">
                                <img class="icon" src="https://static.sayes.ru/images/emoji/<?= $item['image'] ?>">
                            </div>

                            <div class="media-content">
                                <p><?= $item['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="background-image">
                    <p>А еще вы, возможно, учили английский годами: в школе, в институте, на курсах...<br>...но так и не владеете им свободно! =(</p>
                </div>
            </section>

            <section id="reasons" class="section">
                <h2 class="title section-title">Почему же мы учим английский со школы, но так и не говорим?</h2>

                <div class="media-list">
                    <?php
                        $items = [
                            [
                                'image' => 'open-book.png',
                                'text' => 'В школе нас учили читать и писать, но не говорить'
                            ],
                            [
                                'image' => 'female-student.png',
                                'text' => 'В институте нам чаще всего было не до английского =)'
                            ],
                            [
                                'image' => 'memo.png',
                                'text' => 'Большинство курсов и репетиторов учат по устаревшим методикам - вы выполняете множество письменных упражнений, а говорите мало'
                            ]
                        ];
                    ?>

                    <?php foreach($items as $item): ?>
                        <div class="media">
                            <div class="media-left">
                                <img class="icon" src="https://static.sayes.ru/images/emoji/<?= $item['image'] ?>">
                            </div>

                            <div class="media-content">
                                <p><?= $item['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <p class="lead has-text-centered">А чтобы свободно заговорить английском, нужна <strong class="text-uppercase">практика! говорить, много говорить</strong><br>пока вы не начнёте делать это не задумываясь, <br><strong class="text-uppercase">"на автомате"!</strong></p>
            </section>

            <section id="details" class="section section-dark">
                <h2 class="title">Именно на это направлена наша методика<br><span class="has-text-danger">«Английский до автоматизма»</span></h2>

                <div class="media-list">
                    <?php
                        $items = [
                            [
                                'image' => 'speech-balloon.png',
                                'text' => 'Вы практикуете английскую речь с преподавателем 80% урока.'
                            ],
                            [
                                'image' => 'speaking-head-in-silhouette.png',
                                'text' => 'Многократно повторяете конструкции и новые слова, чтобы они в нужный момент вылетали на автомате – и все это в игровой форме!'
                            ],
                            [
                                'image' => 'speak-no-evil-monkey.png',
                                'text' => 'Преодолеваете языковой барьер во время разговорных встреч с носителями языка по Скайп.'
                            ]
                        ];
                    ?>

                    <?php foreach($items as $item): ?>
                        <div class="media">
                            <div class="media-left">
                                <img class="icon" src="https://static.sayes.ru/images/emoji/<?= $item['image'] ?>">
                            </div>

                            <div class="media-content">
                                <p class="typography"><?= $item['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <p class="lead has-text-centered">Запишитесь на бесплатный урок и попробуйте нашу методику!</p>

                <a href="#form" class="button is-danger is-fullwidth call-to-action">Записаться на бесплатный урок</a>
            </section>

            <section id="about" class="section">
                <h2 class="title">Кто мы?</h2>

                <p class="subtitle">SAY YES! – сеть школ английского языка в Москве</p>

                <div class="media-list">
                    <?php
                        $items = [
                            [
                                'image' => 'graduation-cap.png',
                                'text' => 'Обучили английскому более 4500 студентов за 6 лет'
                            ],
                            [
                                'image' => 'white-up-pointing-index.png',
                                'text' => 'Обучаем в группах Москве и удаленно по всему миру по Скайп'
                            ],
                            [
                                'image' => 'thumbs-up-sign.png',
                                'text' => 'Доступная стоимость обучения по Скайп - от 800 руб. за урок'
                            ]
                        ];
                    ?>

                    <?php foreach ($items as $item): ?>
                        <div class="media">
                            <div class="media-left">
                                <img class="icon" src="https://static.sayes.ru/images/emoji/<?= $item['image'] ?>">
                            </div>

                            <div class="media-content">
                                <p><?= $item['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="team-background"></div>

                <p class="lead has-text-centered">Школа SAY YES! дважды становилась победителем Премии <strong>«Эксперт Года»</strong> рейтинга курсов Schoolrate:</p>

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
                            ]
                        ];
                    ?>

                    <?php foreach($items as $item): ?>
                        <div class="media">
                            <div class="media-left">
                                <img class="icon" src="https://static.sayes.ru/images/emoji/<?= $item['image'] ?>">
                            </div>

                            <div class="media-content">
                                <p><?= $item['text'] ?></p>
                            </div>
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
                                <img class="img-fluid" src="https://static.sayes.ru/images/instagram/<?= $number ?>.jpg" alt="">
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </section>

            <section id="video" class="section">
                <h2 class="title">Видео-прогресс студентов</h2>

                <p class="lead has-text-centered">А еще мы <strong>единственная школа</strong> в Москве, <strong>где снимают прогресс</strong> студентов на видео!</p>

                <p class="lead has-text-centered">Посмотрите не просто отзывы наших студентов, а то, как они <strong>говорят на английском</strong>:</p>

                <div class="video">
                    <iframe src="https://www.youtube-nocookie.com/embed/PnizC-6xOB8?controls=0&rel=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <h3 class="subtitle">Хотите так же свободно говорить на английском?</h3>

                <p class="typography lead has-text-centered">Записывайтесь на бесплатный пробный урок в удобное вам время.</p>

                <a href="#form" class="button is-danger is-fullwidth call-to-action">Записаться на бесплатный урок</a>
            </section>

            <section id="lesson" class="section section-dark">
                <h2 class="title">На бесплатном уроке по Скайп вы:</h2>

                <div class="media-list">
                    <?php
                        $items = [
                            [
                                'image' => 'white-heavy-check-mark.png',
                                'text' => 'Определите свой уровень и проблемные места'
                            ],
                            [
                                'image' => 'information-desk-person.png',
                                'text' => 'Познакомитесь с вашим потенциальным преподавателем'
                            ],
                            [
                                'image' => 'flag-for-united-kingdom.png',
                                'text' => 'Узнаете, как наша методика поможет вам заговорить'
                            ],
                            [
                                'image' => 'direct-hit.png',
                                'text' => 'Получите план изучения языка для достижения вашей цели'
                            ],
                            [
                                'image' => 'handshake.png',
                                'text' => 'Примите решение о продолжении обучения в нашей школе'
                            ]
                        ];
                    ?>

                    <?php foreach ($items as $item): ?>
                        <div class="media">
                            <div class="media-left">
                                <img class="icon" src="https://static.sayes.ru/images/emoji/<?= $item['image'] ?>">
                            </div>

                            <div class="media-content">
                                <p><?= $item['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>

            <section id="form" class="section">
                <h2 class="title">Регистрация на бесплатный урок</h2>

                <p class="subtitle">Оставьте заявку до конца дня <?= date("d.m") ?>, и мы <span class="text-danger font-weight-bold">подарим один урок</span> к вашему курсу!</p>
                
                <form method="post" action="https://api.sayes.ru/request.php">
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

                <div id="timer" class="has-text-centered">
                    <p class="lead">До конца акции осталось</p>

                    <span class="tag is-large is-rounded is-danger"></span>
                </div>
            </section>
        </main>

        <footer id="footer" class="footer section">
            <h2 class="title">Остались вопросы?</h2>

            <p class="subtitle">Если вы хотите узнать более полную информацию о нас, просто позвоните нам!</p>

            <a class="button phone phone-alloka is-primary is-outlined is-inverted" href="tel:79267371137">
                <span class="icon">
                    <i class="fa fa-phone"></i>
                </span>
                <span>+7 926 737-11-37</span>
            </a>

            <br>или напишите нам<br>

            <a class="button whatsapp is-primary is-outlined is-inverted" href="https://wa.me/79267371137" target="_blank">
                <span class="icon">
                    <i class="fab fa-whatsapp"></i>
                </span>
                <span>WhatsApp</span>
            </a>

            <div><a href="https://sayes.ru/politika-konfidentsialnosti/">Политика конфиденциальности</a></div>
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
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://static.sayes.ru/js/crm.js"></script>
        <script src="https://static.sayes.ru/js/masked-input.js"></script>
        <script src="https://static.sayes.ru/js/timer.js"></script>

        <script>
            var formSection = document.querySelector('#form');
            var formElement = document.querySelector('#form form');
            var dialogElement = document.querySelector('#dialog');

            $('input[type=tel]').mask('+7 (999) 999-9999');

            $('.call-to-action').on('click', function (event) {
                event.preventDefault();

                formSection.scrollIntoView({ behavior: 'smooth' });
            });

            document.querySelector('form').addEventListener('submit', function(event) {
                event.preventDefault();

                var data = {
                    type: '[СТАРЫЙ] Заявка на пробный урок по скайп',
                    name: this.elements.name.value,
                    phone: this.elements.phone.value
                };

                ym(55648915, 'reachGoal', 'zayavka');
                gtag('event', 'click', { event_category: 'zayavka' });
                fbq('track', 'Lead_skype');

                crm.addStudyRequest(data);

                $.post({
                    url: 'https://api.sayes.ru/request.php' + location.search,
                    data: data,
                    contentType: 'application/x-www-form-urlencoded'
                }).done(function() {
                    dialogElement.classList.add('is-active');
                    formElement.reset();
                });
            });

            $('.button.whatsapp').click(function(event) {
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

            var timerElement = document.querySelector('#timer .tag');

            var now = new Date();
            var end = new Date();

            end.setHours(23);
            end.setMinutes(59);
            end.setSeconds(59);

            var hours = end.getHours() - now.getHours();
            var minutes = end.getMinutes() - now.getMinutes();
            var seconds = end.getSeconds() - now.getSeconds();

            new Timer(hours, minutes, seconds, function (timer) {
                timerElement.textContent = timer.toString();
            }).start();
        </script>
    </body>

</html>