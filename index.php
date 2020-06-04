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
        <meta name="description" content="Хочешь заговорить на английском, записывайся на бесплатный пробный урок в сеть школ английского SAY YES!">
        <meta name="yandex-verification" content="77618a975ea21450">

        <title>Бесплатный урок английского в Москве | SAY YES!</title>

        <link rel="icon" href="https://static.sayes.ru/images/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" href="https://static.sayes.ru/images/favicons/favicon-192x192.png" sizes="192x192">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
        <link rel="stylesheet" href="./css/index.css">

        <?php
            include './includes/yandex-metrika.php';
            include './includes/google-analytics.php';
            include './includes/facebook-pixel.php';
            include './includes/roistat.php';
        ?>
    </head>

    <body class="page">
        <header id="header" class="hero">
            <div class="hero-head">
                <div class="container">
                    <img class="logo" src="https://static.sayes.ru/images/logos/sayyes-school-chain-white.png">

                    <div class="buttons">
                        <a class="button phone-button is-text" href="tel:74996505347">
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

                <p class="typography subtitle">Начните говорить на английском с первого занятия</p>

                <a href="#form" class="button is-large is-danger call-to-action">Записаться на бесплатный урок</a>
            </div>
        </header>

        <main id="content">
            <section id="present" class="section section-dark section-cta">
                <h2 class="title">Запишитесь сейчас и получите инструкцию от коуча по произношению<br><strong>«Как быстро начать понимать речь носителя»</strong> в подарок!</h2>

                <img src="https://static.sayes.ru/images/emoji/wrapped-present.png" alt="">
            </section>

            <section id="persona" class="section has-text-centered">
                <h2 class="title">Узнаете себя?</h2>

                <div class="media-list">
                    <?php
                        $items = [
                            [
                                'image' => 'nerd-face.png',
                                'text' => 'Ваша самая длинная фраза, сказанная на английском – "London is the capital of Great Britain".'
                            ],
                            [
                                'image' => 'face-with-uneven-eyes-and-wavy-mouth.png',
                                'text' => 'Вам стыдно "объясняться на пальцах" и неприятно осознавать ограниченность в путешествиях.'
                            ],
                            // [
                            //     'image' => 'shocked-face-with-exploding-head.png',
                            //     'text' => 'Вы хотели бы наслаждаться фильмами и сериалами в оригинале, но не ничего не понимаете.'
                            // ],
                            [
                                'image' => 'money-mouth-face.png',
                                'text' => 'Ваша цель – высокооплачиваемая и интересная должность, но в резюме нет пункта «Свободный английский».'
                            ],
                            [
                                'image' => 'disappointed-face.png',
                                'text' => 'Вы думали над переездом заграницу или зимовкой на Бали, но останавливает отсутствие английского.'
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

                <p class="lead">Почему же мы учим язык годами, но так и не говорим свободно?</p>
            </section>

            <section id="problem" class="section">
                <div class="container">
                    <h2 class="title section-title">Что мы делаем не так, изучая язык:</h2>

                    <div class="columns">
                        <div class="column is-8">
                            <div class="media-list">
                                <?php
                                    $items = [
                                        [
                                            'image' => 'writing-hand.png',
                                            'text' => '<strong>Устаревшая методика.</strong> На уроке вас просят заполнять пропуски, «раскрывать скобочки», либо читать текст по очереди. Вы знаете теорию, но не можете применять ее на практике.'
                                        ],
                                        [
                                            'image' => 'zipper-mouth-face.png',
                                            'text' => '<strong>Мало практики говорения.</strong> БОльшую часть урока вещает преподаватель. Вы опять не учитесь говорить.'
                                        ],
                                        [
                                            'image' => 'disappointed-face.png',
                                            'text' => '<strong>Потеря мотивации.</strong> Вы только учите и учите, но реальный результат не ощущаете. Если нет ощущения прогресса, то и желание учиться дальше исчезает.'
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

                            <p class="lead">Что же делать, чтобы наконец заговорить?</p>
                        </div>

                        <div class="column is-4">
                            <img class="image" src="./img/confused-girl.png">
                        </div>
                    </div>
                </div>
            </section>

            <section id="solution" class="section">
                <div class="columns">
                    <div class="column background"></div>

                    <div class="column text">
                        <h2 class="title section-title">Запишитесь на бесплатный урок и вы узнаете:</h2>

                        <div class="media-list">
                            <?php
                                $items = [
                                    [
                                        'image' => 'female-teacher.png',
                                        'text' => 'Что такое метод Fluency drill и как он поможет вам <strong>заговорить «на автомате»</strong>.'
                                    ],
                                    [
                                        'image' => 'public-address-loudspeaker.png',
                                        'text' => 'Каким образом мы обеспечиваем вам <strong>80 % практики языка</strong> на уроке.'
                                    ],
                                    [
                                        'image' => 'flag-for-united-states.png',
                                        'text' => 'Как мы преодолеваем ваш барьер в говорении <strong>визитами носителей языка</strong>.'
                                    ],
                                    [
                                        'image' => 'house-with-garden.png',
                                        'text' => 'Почему нас называют <strong>«вторым домом»</strong>, а иногда «сектой».'
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

                        <div class="has-text-centered">
                            <a href="#form" class="button is-danger is-medium call-to-action">Записаться на бесплатный урок</a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="zoom-image">
                <img src="/img/lesson.jpg" alt="">
            </div>

            <section id="reasons" class="section">
                <div class="container">
                    <h2 class="title section-title">Почему вам стоит выбрать групповое обучение?</h2>

                    <div class="columns">
                        <div class="column is-4">
                            <img class="image" src="./img/happy-girl.png">
                        </div>

                        <div class="column is-8">
                            <div class="media-list">
                                <?php
                                    $items = [
                                        [
                                            'image' => 'thumbs-up-sign.png',
                                            'title' => 'Группы – это эффективно и весело',
                                            'description' => '- дух соперничества, которого нет в индивидуальном<br>- практика языка с разными людьми и акцентами'
                                        ],
                                        [
                                            'image' => 'thumbs-up-sign.png',
                                            'title' => 'Дешевле, чем индивидуально',
                                            'description' => 'Обучение в группе стоит в 2,5 раза дешевле индивидуального: 430 руб. против 1080 руб. за академ. час.'
                                        ],
                                        [
                                            'image' => 'thumbs-up-sign.png',
                                            'title' => 'Место, где встречают друзей',
                                            'description' => 'Обучение оффлайн в группах – прекрасная возможность познакомиться с интересными людьми и завести новые знакомства.'
                                        ]
                                    ];
                                ?>

                                <?php foreach($items as $item): ?>
                                    <div class="media">
                                        <div class="media-left">
                                            <img class="icon" src="https://static.sayes.ru/images/emoji/<?= $item['image'] ?>">
                                        </div>

                                        <div class="media-content">
                                            <h3><?= $item['title'] ?></h3>
                                            <p><?= $item['description'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="lesson" class="section">
                <div class="container">
                    <h2 class="title section-title">Что входит в групповое обучение в SAY YES?</h2>

                    <div class="media-list">
                        <?php
                            $items = [
                                [
                                    'title' => 'Занятия по удобному вам расписанию',
                                    'description' => 'Предлагаем уроки утром, днем, вечером или по выходным. Также есть очно-заочный курс с занятиями онлайн.'
                                ],
                                [
                                    'title' => 'Закрепление материала на онлайн платформе',
                                    'description' => 'Наша онлайн платформа позволяет вам выполнять домашку в удобном виде, интерактивно и эффективно.'
                                ],
                                [
                                    'title' => 'Безлимитное посещение разговорного клуба',
                                    'description' => 'Практика речи с носителями языка для преодоления барьера и пополнения словарного запаса.'
                                ],
                                [
                                    'title' => 'Гибкая система оплаты',
                                    'description' => 'Оплата обучения помесячно с возможность переноса занятий и заморозки.'
                                ]
                            ];
                        ?>

                        <?php foreach($items as $index => $item): ?>
                            <div class="media">
                                <div class="media-left">
                                    <span><?= $index + 1 ?></span>
                                </div>

                                <div class="media-content">
                                    <h3><?= $item['title'] ?></h3>
                                    <p><?= $item['description'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="has-text-centered">
                    <p class="lead has-text-weight-bold">А еще ваш ждет наша неповторимая атмосфера групповых занятий!</p>

                    <p class="lead">Посмотрите, что значит быть студентом SAY YES:</p>
                </div>

                <div class="box video">
                    <iframe src="https://player.vimeo.com/video/425984347" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
            </section>

            <section class="section section-dark section-cta">
                <h2 class="title">Запишитесь сейчас и получите инструкцию от коуча по произношению<br><strong>«Как быстро начать понимать речь носителя»</strong> в подарок!</h2>

                <a href="#form" class="button is-danger is-medium call-to-action">Записаться на бесплатный урок</a>
            </section>

            <section id="about" class="section">
                <h2 class="title">Кто мы?</h2>

                <p class="subtitle">SAY YES! – сеть школ английского языка в Москве</p>

                <div class="media-list about">
                    <?php
                        $items = [
                            [
                                'image' => 'thumbs-up-sign.png',
                                'text' => 'Имеем лицензию на образовательную деятельность'
                            ],
                            [
                                'image' => 'graduation-cap.png',
                                'text' => 'Обучили английскому более 4500 студентов за 7 лет'
                            ],
                            [
                                'image' => 'white-up-pointing-index.png',
                                'text' => 'Обучаем в группах, индивидуально: оффлайн и онлайн'
                            ]
                        ];
                    ?>

                    <?php foreach ($items as $item): ?>
                        <div class="media">
                            <img class="image" src="https://static.sayes.ru/images/emoji/<?= $item['image'] ?>">

                            <div class="media-content">
                                <p><?= $item['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="slider">
                    <?php
                        $images = [
                            'https://sayes.ru/wp-content/uploads/2019/12/Skype_Picture_2019_12_04T14_01_35_057Z.jpg',
                            'https://sayes.ru/wp-content/uploads/2019/09/belorusskaya-3-e1591097397827.jpg',
                            'https://sayes.ru/wp-content/uploads/2019/09/paveletskaya-3-e1591097341808.jpg',
                            'https://sayes.ru/wp-content/uploads/2018/12/IMG_2468-e1591098167634.jpg',
                            'https://sayes.ru/wp-content/uploads/2016/04/IMG_6221-e1591098356668.jpg'
                        ];
                    ?>

                    <?php foreach ($images as $image): ?>
                        <div class="box">
                            <img class="image" src="<?= $image ?>">
                        </div>
                    <?php endforeach; ?>
                </div>

                <p class="lead has-text-centered">Четыре раза становились победителями Премии <strong>«Эксперт Года»</strong> рейтинга курсов Schoolrate:</p>

                <div class="media-list awards">
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
                            <img class="image" src="https://static.sayes.ru/images/emoji/<?= $item['image'] ?>">

                            <div class="media-content">
                                <p><?= $item['text'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section id="teachers" class="section">
                <h2 class="title">Наши харизматичные преподаватели</h2>

                <p class="subtitle">Посмотрите их видео-приветствия</p>

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

            <section id="progress" class="section">
                <h2 class="title">Видео-прогресс студентов</h2>

                <p class="subtitle">А еще мы <strong>единственная школа</strong> в Москве, <strong>где снимают прогресс</strong> студентов на видео!</p>

                <p class="subtitle">Посмотрите не просто отзывы наших студентов, а то, как они <strong>говорят на английском</strong>:</p>

                <div class="box video">
                    <iframe src="https://player.vimeo.com/video/319753562" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
            </section>

            <section id="contacts" class="section">
                <h2 class="title">Хотите так же свободно говорить на английском?</h2>

                <p class="subtitle">Записывайтесь на бесплатный пробный урок в удобном вам месте:</p>

                <div class="media-list">
                    <div class="media">
                        <div class="media-left">
                            <span class="icon is-large">
                                <i class="fa fa-subway" style="color: forestgreen"></i>
                            </span>
                        </div>

                        <div class="media-content">
                            <p><strong>м. Павелецкая (5 мин.)</strong></p>
                            <p>ул. Кожевническая, д. 14к1с2</p>
                        </div>
                    </div>
                    
                    <div class="media">
                        <div class="media-left">
                            <span class="icon is-large">
                                <i class="fa fa-subway" style="color: saddlebrown"></i>
                            </span>
                        </div>

                        <div class="media-content">
                            <p><strong>м. Белорусская (5 мин.)</strong></p>
                            <p>ул. Большая Грузинская, д. 61c1</p>
                        </div>
                    </div>
                    
                    <div class="media">
                        <div class="media-left">
                            <span class="icon is-large">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="skype" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-skype fa-w-14 fa-3x"><path fill="currentColor" d="M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z" class=""></path></svg>
                            </span>
                        </div>

                        <div class="media-content">
                            <p><strong>Индивидуально по скайп</strong></p>
                            <p>Занятия из любой точки мира</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="signup" class="section">
                <div class="container">
                    <h2 class="title">Регистрация на бесплатный урок</h2>

                    <p class="subtitle">Оставьте заявку до конца дня <?= date("d.m") ?>, и вы получите инструкцию от коуча по произношению<br><span class="has-text-danger has-text-weight-bold">«Как быстро начать понимать речь носителя»</span><br>в подарок!</p>
                    
                    <div class="columns">
                        <div class="column">
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
                                        <label class="checkbox has-text-grey">
                                            <input type="checkbox" checked required>
                                            Я согласен на обработку персональных данных
                                        </label>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <button type="submit" class="button is-danger is-medium is-fullwidth">Оставить заявку</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div id="timer" class="has-text-centered">
                        <p>До конца акции осталось</p>

                        <span class="tag is-large is-rounded is-danger"></span>
                    </div>
                </div>
            </section>
        </main>

        <footer id="footer" class="footer section">
            <h2 class="title">Остались вопросы?</h2>

            <p class="subtitle">Если вы хотите узнать больше о нашей школе, просто позвоните нам!</p>

            <a class="button is-primary is-outlined is-inverted" href="tel:79250916416">
                <span class="icon">
                    <i class="fa fa-phone"></i>
                </span>
                <span>8 (925) 091-64-16</span>
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
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
        <script src="https://static.sayes.ru/js/crm.js"></script>
        <script src="https://static.sayes.ru/js/masked-input.js"></script>
        <script src="https://static.sayes.ru/js/timer.js"></script>

        <script>
            var signupSection = document.querySelector('#signup');
            var formElement = document.querySelector('#signup form');
            var dialogElement = document.querySelector('#dialog');
            
            $('input[type=tel]').mask('+7 (999) 999-9999');

            document.querySelector('form').addEventListener('submit', function(event) {
                event.preventDefault();

                ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'zayavka');
                gtag('event', 'click', { event_category: 'zayavka' });
                fbq('track', 'Lead_zoom');
                
                crm.addStudyRequest({
                    type: 'Заявка на пробный урок',
                    name: this.elements.name.value,
                    phone: this.elements.phone.value
                });
                
                $.post({
                    url: 'https://api.sayes.ru/request.php',
                    data: JSON.stringify({
                        name: this.elements.name.value,
                        phone: this.elements.phone.value,
                        subject: 'Заявка на пробный урок с мобильного лэнда (english.sayes.ru)',
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

            $('.call-to-action').on('click', function (event) {
                event.preventDefault();

                signupSection.scrollIntoView({ behavior: 'smooth' });
            });

            $('.whatsapp-button').click(function() {
                ym(YANDEX_METRIKA_COUNTER, 'reachGoal', 'click');
                gtag('event', 'click', { event_category: 'click' });
                fbq('track', 'InitiateCheckout');
                
                return true;
            });

            $('.slider').slick({
                arrow: true,
                prevArrow: '<a class="slick-arrow slick-arrow-prev"><span class="fa fa-angle-left custom-handle"></span></a>',
                nextArrow: '<a class="slick-arrow slick-arrow-next"><span class="fa fa-angle-right custom-handle"></span></a>',
                dots: true,
                autoplay: true
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
            }).start();</script>
    </body>
</html>