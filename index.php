<?php
$target = isset($_GET['t']) ? $_GET['t'] : null;
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
    <link rel="icon" href="./img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="./img/favicon-192x192.png" sizes="192x192">

    <title>Бесплатный пробный урок английского по Скайп | SAY YES!</title>

    <link rel="stylesheet" href="./css/index.css">

    <!-- Facebook Pixel -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1798029673849756');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1798029673849756&amp;ev=PageView&amp;noscript=1"></noscript>
    <!-- /Facebook Pixel -->

    <!-- Yandex.Metrika -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(50571868, "init", {
        id:50571868,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/50571868" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika -->

    <!-- Google.Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-47133492-2', 'sayes.ru');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');
    </script>
    <!-- /Google.Analytics -->
</head>

<body class="page<?= isset($target) ? ' target-'.$target : '' ?>">
    <header id="header" class="hero">
        <div class="hero-head">
            <div class="container">
                <img src="./img/sayyes-logo.png">

                <div class="buttons">
                    <a class="button phone is-text" href="tel:74996505347">+7 499 650-53-47</a>

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
                        <img class="image" src="./img/emoji/<?= $item['image'] ?>">
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
                        <img class="image" src="./img/emoji/<?= $item['image'] ?>">
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
                        <img class="image" src="./img/emoji/<?= $item['image'] ?>">
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
                        'text' => 'Обучаем в группах Москве и удаленно по всему миру по Скайп'
                    ],
                    [
                        'image' => 'thumbs-up-sign.png',
                        'text' => 'Доступная стоимость обучения по Скайп - от 650 руб. за урок'
                    ]
                ];
            ?>

            <?php foreach ($items as $item): ?>
                <div class="media">
                    <div class="media-left">
                        <img class="image" src="./img/emoji/<?= $item['image'] ?>">
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
                        <img class="image" src="./img/emoji/<?= $item['image'] ?>">
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
                        <img class="img-fluid" src="./img/photos/<?= $number ?>.jpg" alt="">
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
            <iframe src="https://player.vimeo.com/video/319753562" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
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
                        <img class="image" src="./img/emoji/<?= $item['image'] ?>">
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
        
        <form method="post" action="request.php">
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

        <div id="timer" class="has-text-centered">
            <p class="lead">До конца акции осталось</p>

            <span class="tag is-large is-rounded is-danger"></span>
        </div>
    </section>

    <footer id="footer" class="footer section">
        <h2 class="title">Остались вопросы?</h2>

        <p class="subtitle">Если вы хотите узнать более полную информацию о нас, просто позвоните нам!</p>

        <a class="button is-primary is-outlined is-inverted" href="tel:79250916416">
            <span class="icon">
                <i class="fa fa-phone"></i>
            </span>
            <span>8 (925) 091-64-16</span>
        </a>

        <br>или напишите нам<br>

        <a class="button is-primary is-outlined is-inverted" href="https://wa.me/79267371137" target="_blank">
            <span class="icon">
                <i class="fab fa-whatsapp"></i>
            </span>
            <span>WhatsApp</span>
        </a>

        <div><a href="https://sayes.ru/politika-konfidentsialnosti/">Политика конфиденциальности</a></div>
    </footer>
    
    <a class="button is-danger is-fullwidth call-to-action call-to-action--fixed" href="#form">Оставить заявку и<br>получить урок по Скайп в подарок</a>

    <script src="./js/vendor.js"></script>
    <script src="./js/crm.js"></script>
    <script src="./js/timer.js"></script>

    <script>
        fbq('track', 'InitiateCheckout');

        $('input[type=tel]').mask('+7 (999) 999-9999');

        document.querySelector('form').addEventListener('submit', function(event) {
            yaCounter50571868.reachGoal('sign_upland');
            fbq('track', 'CompleteRegistration');
            crm.addStudyRequest(this.elements.name.value, this.elements.phone.value, undefined, 'Заявка с мобильного лэнда на скайп');
        });

        var formElement = document.querySelector('#form');

        $('.call-to-action').on('click', function (event) {
            event.preventDefault();

            formElement.scrollIntoView({ behavior: 'smooth' });
        });

        $('#gallery .carousel-inner').slick({
            arrow: true,
            prevArrow: '<a class="slick-arrow slick-arrow-prev"><span class="fa fa-angle-left custom-handle"></span></a>',
            nextArrow: '<a class="slick-arrow slick-arrow-next"><span class="fa fa-angle-right custom-handle"></span></a>',
            dots: true
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
        }).start();</script>
</body>

</html>