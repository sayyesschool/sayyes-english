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
        <meta name="description" content="Хочешь заговорить на английском, записывайся на бесплатный пробный урок в сеть школ английского SAY YES!">
        <meta name="yandex-verification" content="77618a975ea21450">

        <title>Бесплатный урок английского в Москве | SAY YES!</title>

        <link rel="icon" href="./img/favicon-32x32.png" sizes="32x32">
        <link rel="icon" href="./img/favicon-192x192.png" sizes="192x192">
        <link rel="stylesheet" href="./css/index.css">

        <?php include './includes/yandex-metrika.php' ?>
        <?php include './includes/google-analytics.php' ?>
        <?php include './includes/facebook-pixel.php' ?>
        <?php include './includes/roistat.php' ?>
    </head>

    <body class="page<?= isset($target) ? ' target-'.$target : '' ?>">
        <header id="header" class="hero">
            <div class="hero-head">
                <div class="container">
                    <img src="./img/sayyes-logo.png">

                    <div class="buttons">
                        <a class="button phone is-text" href="tel:74996505347">
                            <span class="roistat-phone">+7 499 650-53-47</span>
                        </a>

                        <a class="button whatsapp-button is-white is-outlined" href="https://wa.me/79250916416" target="_blank">
                            <span class="icon">
                                <i class="fab fa-whatsapp"></i>
                            </span>
                            <span>Написать в WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="hero-body">
                <h1 class="typography title">Бесплатный урок английского в Москве</h1>

                <p class="typography subtitle">Начните говорить на английском<br>с первого занятия</p>
            </div>

            <div class="hero-foot">
                <a href="#form" class="button is-danger is-fullwidth call-to-action">Записаться на урок</a>
            </div>
        </header>

        <main>
            <section id="signup" class="section has-text-centered">
                <h2 class="title">Вам стоит посетить наш урок, если:</h2>

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
                                <img class="image" src="./img/emoji/<?= $item['image'] ?>">
                            </div>

                            <div class="media-content">
                                <p><?= $item['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <p class="lead">Если вы учите язык годами, но так и не говорите СВОБОДНО – вам просто необходимо посетить наш открытый урок!</p>
            </section>

            <section id="lesson" class="section">
                <div class="container">
                    <h2 class="title section-title">Что вас ждет на уроке?</h2>

                    <div class="background-image"></div>

                    <div class="media-list">
                        <?php
                            $items = [
                                [
                                    'image' => 'speaking-head-in-silhouette.png',
                                    'text' => 'Поймете, почему вы до сих пор не заговорили на английском.'
                                ],
                                [
                                    'image' => 'white-up-pointing-index.png',
                                    'text' => 'Узнаете 5 секретов изучения языка, без которых вы НЕ заговорите.'
                                ],
                                [
                                    'image' => 'flag-for-united-kingdom.png',
                                    'text' => 'Выясните, как начать понимать носителей языка в два раза быстрее.'
                                ],
                                [
                                    'image' => 'memo.png',
                                    'text' => 'Узнаете, почему учить десятки отдельных слов – пустая трата времени.'
                                ],
                                [
                                    'image' => 'female-teacher.png',
                                    'text' => 'Познакомитесь с методом Fluency Drill, который поможет вам строить предложения «на автомате».'
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
                </div>
            </section>

            <section id="details" class="section section-dark">
                <h2 class="title">За два часа урока, вы:</h2>

                <div class="media-list">
                    <?php
                        $items = [
                            [
                                'image' => 'speech-balloon.png',
                                'text' => 'Запомните выражения на тему «Свободное время»'
                            ],
                            [
                                'image' => 'speaking-head-in-silhouette.png',
                                'text' => 'Научитесь выражать на английском свои планы на будущее'
                            ],
                            [
                                'image' => 'speak-no-evil-monkey.png',
                                'text' => 'Сразу будете говорить на английском с напарником'
                            ],
                            [
                                'image' => 'speak-no-evil-monkey.png',
                                'text' => 'Поймете, что, следуя нашим правилам, вы точно ЗАГОВОРИТЕ НА АНГЛИЙСКОМ СВОБОДНО'
                            ]
                        ];
                    ?>

                    <?php foreach($items as $item): ?>
                        <div class="media">
                            <div class="media-left">
                                <span class="checkmark">&check;</span>
                            </div>

                            <div class="media-content">
                                <p class="typography"><?= $item['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

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
                                <img class="image" src="./img/emoji/<?= $item['image'] ?>">
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
                <p class="lead has-text-centered">А еще, мы <strong>единственная школа</strong> в Москве, <strong>где снимают прогресс</strong> студентов на видео!</p>

                <p class="lead has-text-centered">Посмотрите, как вы сможете говорить на английском:</p>

                <div class="video">
                    <iframe src="https://player.vimeo.com/video/319753562" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
            </section>

            <section id="contacts" class="section">
                <h2 class="title">Хотите также?</h2>

                <p class="subtitle">Записывайтесь на бесплатный урок в нашем уютном офисе в центре Москвы!</p>

                <div class="media-list">
                    <?php
                        $items = [
                            [
                                'icon' => 'fa fa-subway',
                                'primary' => 'м. Павелецкая (5 мин.)',
                                'secondary' => 'ул. Кожевническая, д. 14к1с2',
                                'color' => 'forestgreen'
                            ],
                            [
                                'icon' => 'fa fa-subway',
                                'primary' => 'м. Белорусская (5 мин.)',
                                'secondary' => 'ул. Большая Грузинская, д. 61c1',
                                'color' => 'saddlebrown'
                            ]
                        ];
                    ?>

                    <h3 class="title">Где?</h3>

                    <?php foreach ($items as $item): ?>
                        <div class="media">
                            <div class="media-left">
                                <span class="icon is-large">
                                    <img class="image" src="./img/emoji/round-pushpin.png">
                                </span>
                            </div>

                            <div class="media-content">
                                <p><strong><?= $item['primary'] ?></strong></p>
                                <p><?= $item['secondary'] ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>

                <h3 class="title">Когда?</h3>

                <div class="media-list">
                    <div class="media">
                        <div class="media-left">
                            <span class="icon is-large">
                                <img class="image" src="./img/emoji/watch.png">
                            </span>
                        </div>

                        <div class="media-content">
                            <p><strong>Будний день в 19:00</strong></p>
                            <p>Во время звонка запишем на удобный вам день.</p>
                        </div>
                    </div>
                </div>

                <h3 class="title">Продолжительность:</h3>

                <div class="media-list">
                    <div class="media">
                        <div class="media-left">
                            <span class="icon is-large">
                                <img class="image" src="./img/emoji/hourglass-with-flowing-sand.png">
                            </span>
                        </div>

                        <div class="media-content">
                            <p><strong>2 часа</strong></p>
                            <p>Посвятите себе это время, и ваш английский уже не будет прежним.</p>
                        </div>
                    </div>
                </div>

                <!--<h3 class="title">Стоимость:</h3>

                <div class="media-list">
                    <div class="media">
                        <div class="media-left">
                            <span class="icon is-large">
                                <img class="image" src="./img/emoji/squared-free.png">
                            </span>
                        </div>

                        <div class="media-content">
                            <p><strong>Бесплатно</strong></p>
                            <p>Вы ничем не рискуете!</p>
                        </div>
                    </div>
                </div>

                <h3 class="title">Бонус!</h3>

                <div class="media-list">
                    <div class="media">
                        <div class="media-left">
                            <span class="icon is-large">
                                <img class="image" src="./img/emoji/wrapped-present.png">
                            </span>
                        </div>

                        <div class="media-content">
                            <p><strong>«Как быстро начать понимать носителей языка»</strong></p>
                            <p>Всем зарегистрировавшимся на урок мы подарим видео-инструкцию от тренера по произношению.</p>
                        </div>
                    </div>
                </div> -->

                <a href="#form" class="button is-danger is-fullwidth call-to-action">Записаться на бесплатный урок</a>
            </section>

            <section id="form" class="section">
                <h2 class="title">Регистрация на открытый урок</h2>

                <p class="subtitle">Оставьте заявку до конца дня <?= date('d.m') ?>, и мы бесплатно определим ваш уровень английского языка.</p>

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
            </section>
        </main>

        <footer id="footer" class="footer section">
            <h2 class="title">Хотите узнать больше об открытом уроке?</h2>

            <p>Позвоните нам</p>

            <a class="button is-primary is-outlined is-inverted" href="tel:74996505347">
                <span class="icon">
                    <i class="fa fa-phone"></i>
                </span>
                <span class="roistat-phone">+7 499 650-53-47</span>
            </a>

            <br>или напишите нам<br>

            <a class="button whatsapp-button is-primary is-outlined is-inverted" href="https://wa.me/79250916416" target="_blank">
                <span class="icon">
                    <i class="fab fa-whatsapp"></i>
                </span>
                <span>WhatsApp</span>
            </a>

            <div><a href="https://sayes.ru/politika-konfidentsialnosti/">Политика конфиденциальности</a></div>
        </footer>
        
        <!-- <a class="button is-danger is-fullwidth call-to-action call-to-action--fixed" href="#form">Записаться на урок</a> -->
        
        <script src="./js/vendor.js"></script>
        <script src="https://static.sayes.ru/js/crm.js"></script>

        <script>
            var formElement = document.querySelector('#form');

            $('input[type=tel]').mask('+7 (999) 999-9999');

            $('.call-to-action').on('click', function(event) {
                event.preventDefault();

                formElement.scrollIntoView({ behavior: 'smooth' });
            });

            document.querySelector('form').addEventListener('submit', function(event) {
                ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'zayavka');
                gtag('event', 'click', { event_category: 'zayavka' });
                fbq('track', 'Lead');
                
                crm.addStudyRequest({
                    type: 'Заявка на открытый урок с мобильного лэнда',
                    name: this.elements.name.value,
                    phone: this.elements.phone.value
                });
            });

            $('.whatsapp-button').click(function() {
                ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'click');
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
        </script>
    </body>
</html>