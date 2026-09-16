<?php
return [
    'name' => 'calculate',
    'title' => 'Рассчитать стоимость',
    'form' => [
        'name' => [
            'type' => 'input',
            'label' => 'Имя',
            'placeholder' => 'Ваше имя',
            'rules' => 'required|string|max:250',
        ],
//        'email' => [
//            'type' => 'input',
//            'label' => 'Email',
//            'placeholder' => 'Ваш email',
//            'rules' => 'required|email',
//        ],
        'phone' => [
            'type' => 'phone',
            'label' => 'Телефон',
            'placeholder' => 'Номер телефона',
            'rules' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
        ],
        'text' => [
            'type' => 'textarea',
            'label' => 'Комментарий',
            'placeholder' => 'Комментарий',
            'rules' => 'nullable|string|max:550',
        ],
        'policy' => [
            'type' => 'policy',
            'label' => 'Вы должны согласиться с политикой конфиденциальность',
            'rules' => 'accepted',
        ]
    ],
    'button' => 'Отправить',
];
