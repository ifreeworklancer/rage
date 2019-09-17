<?php
$app_title = 'Rage';
$phone = '+38 099 123 45 67';
$email = 'rage@gmail.com';
$address = 'г.Запорожье ул.Малая 3';
$address_link = 'https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%9C%D0%B0%D0%BB%D0%B0%D1%8F,+3,+%D0%97%D0%B0%D0%BF%D0%BE%D1%80%D0%BE%D0%B6%D1%8C%D0%B5,+%D0%97%D0%B0%D0%BF%D0%BE%D1%80%D0%BE%D0%B6%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+69000/@47.8564592,35.0921439,17z/data=!3m1!4b1!4m5!3m4!1s0x40dc66cc26139ca3:0x3ad3013bc2e9bc64!8m2!3d47.8564592!4d35.0943326';
$mapLong = '35.094279';
$mapLang = '47.856618';
$mapIcon = '../images/icon/map-icon.png';

$intro = [
    'title' => 'Приходите к нам!',
    'description' => 'Мы это один из самых популярных залов в Запорожье! С нами Вы поднимите свою боксерскую и борцовскую технику, получите духовный настрой и закалите характер.Приходите, становитесь сильнее вместе с нами!',
];

$about = [
    'title' => 'О нас',
    'description' => 'Мы это один из самых популярных залов в Запорожье! С нами Вы поднимите свою боксерскую и борцовскую технику, получите духовный настрой и закалите характер.Приходите, становитесь сильнее вместе с нами!',
    /* Фотография: (Прислал в телеге) */
    'image' => '../../images/content/about/about-item.jpg',
    'video_link' => 'https://www.youtube.com/watch?v=qfm8fSc90oY',
];

$packages = [
    'image_bg' => '../images/bg/packages-bg.jpg',
    'title' => 'Расписание тренировок',
    'description' => 'Оплата происходит с 1-5 числа текущего месяца.Если спортсмен пришел в середине месяца, то ему пересчитывается по абонементу _грн которую он платит в следующем месяце. В этом же месяце, спортсмен оплачивает всю сумму абонемента _грн,.К примеру, если спортсмен пришел в середине августа, то он платит полную стоимость абонемента за сентябрь. В сентябре же, спортсмен платит за половину августа, в котором он пришел на тренировки. Это называется реверсной оплатой. С Уважением, администрация Rage Gym',
    'item' => [
        [
            'title' => 'Взрослые группы',
            'data' => [
                [
                    [
                        'title' => 'Время:',
                        'description' => '<p>понедельник, среда, пятница на 19.30-21.00</p>'
                    ],
                    [
                        'title' => 'Цена:',
                        'description' => '<p> разовая тренировка 70грн, абонемент на месяц 450грн</p>'
                    ],
                ],
            ],
            'description' => 'Что нужно иметь на первое время: Боксерские перчатки 10oz 12oz, шлепки , каппу, шорты , футболка без карманов и молний, боксерские перчатки, банные принадлежности и справку от врача подтверждающую что вы здоровы и можете посещать спортивную секцию.',
        ],
        [
            'title' => 'Взрослые группы',
            'data' => [
                [
                    [
                        'title' => 'Время:',
                        'description' => '<p>Вторник, четверг на 19.30-21.00 <br> суббота на 10.00-11.30</p>'
                    ],
                    [
                        'title' => 'Цена:',
                        'description' => '<p> разовая тренировка 70грн, абонемент на месяц 450грн</p>'
                    ],
                ],
            ],
            'description' => 'Что нужно иметь на первое время: Боксерские перчатки 10oz 12oz, шлепки , каппу, шорты , футболка без карманов и молний, боксерские перчатки, банные принадлежности и справку от врача подтверждающую что вы здоровы и можете посещать спортивную секцию.',
        ],
        [
            'title' => 'Взрослые группы',
            'data' => [
                [
                    [
                        'title' => 'Время:',
                        'description' => '<p> Понедельник, среда, пятница на 8.30-10.00</p>'
                    ],
                    [
                        'title' => 'Цена:',
                        'description' => '<p> разовая тренировка 70грн, абонемент на месяц 450грн</p>'
                    ],
                ],
            ],
            'description' => 'Что нужно иметь на первое время: Боксерские перчатки 10oz 12oz, шлепки , каппу, шорты , футболка без карманов и молний, боксерские перчатки, банные принадлежности и справку от врача подтверждающую что вы здоровы и можете посещать спортивную секцию.',
        ],
        [
            'title' => 'Детские группы',
            'data' => [
                [
                    [
                        'title' => 'Время:',
                        'description' => '<p>понедельник, среда, пятница на 17.00-18.00</p>'
                    ],
                    [
                        'title' => 'Возраст:',
                        'description' => '<p>4-7 лет</p>'
                    ],
                    [
                        'title' => 'Цена:',
                        'description' => '<p> разовая тренировка 70грн, абонемент на месяц 450грн</p>'
                    ],
                ],
            ],
            'description' => 'Что нужно иметь на первое время: шлепки , каппу, шорты , футболка, без карманов и молний, водичку и справку от врача подтверждающую что вы здоровы и можете посещать спортивную секцию.',
        ],
        [
            'title' => 'Подростковые группы',
            'data' => [
                [
                    [
                        'title' => 'Время:',
                        'description' => '<p>понедельник, среда, пятница на 18.00-19.30</p>'
                    ],
                    [
                        'title' => 'Возраст:',
                        'description' => '<p>8-12 лет</p>'
                    ],
                    [
                        'title' => 'Цена:',
                        'description' => '<p> разовая тренировка 70грн, абонемент на месяц 450грн</p>'
                    ],
                ],
            ],
            'description' => 'Что нужно иметь на первое время: Боксерские перчатки 10oz 12oz, шлепки , каппу, шорты , футболка, без карманов и молний, боксерские перчатки банные принадлежности и справку от врача подтверждающую что вы здоровы и можете посещать спортивную секцию.',
        ],
        [
            'title' => 'Персональные тренировки',
            'data' => [
                [
                    [
                        'title' => 'Время:',
                        'description' => '<p>60 мин</p>'
                    ],
                    [
                        'title' => 'Цена:',
                        'description' => '<p>200 грн</p>'
                    ],
                ],
                [
                    [
                        'title' => 'Время:',
                        'description' => '<p>90 мин</p>'
                    ],
                    [
                        'title' => 'Цена:',
                        'description' => '<p>300 грн</p>'
                    ],
                ],
            ],
            'description' => 'Нужны ли персональные тренировки? Безусловно нужны, тренер полностью подбирает индивидуальную программу под спортсмена, улучшая его сильные стороны и работает над слабыми.',
        ],
    ],
];

$cooperation = [
  'title' => 'Партнеры',
  'item' => [
      [
          'link' => 'https://instagram.com/muskul.shop?igshid=v4aotmb3n4uo',
          'image' => '../images/content/cooperation/cooperation-item.jpg',
      ],
      /*[ Добавить будущих партнеров
          'link' => 'http://google.com',
          'image' => '../images/content/cooperation/cooperation-item.png',
      ],
      [
          'link' => 'http://google.com',
          'image' => '../images/content/cooperation/cooperation-item.png',
      ],
      [
          'link' => 'http://google.com',
          'image' => '../images/content/cooperation/cooperation-item.png',
      ],
      [
          'link' => 'http://google.com',
          'image' => '../images/content/cooperation/cooperation-item.png',
      ], */
  ]
];

$trainer = [
    'subtitle' => 'О тренере',
    'title' => 'Виталий Шостак',
    'advantages' => [
        [
            'title' => '5 лет',
            'description' => 'работаю тренером',
        ],
        [
            'title' => '2 мая 2018 года',
            'description' => 'основал спортивный зал Rage',
        ],
    ],
    'description' => 'многократный чемпион областей по разным видам единоборств, 3-х кратный чемпион Украины по фри-файту, чемпион Украины по военно-спортивному многоборью, чемпион Европы по боевому самбо мастер спорта Украины по фри-файту',
    'image' => '../images/content/trainer/trainer-item.jpg'
];

$page_secondary = [
  'image_bg' => '../images/bg/thanks-bg.jpg'
];
