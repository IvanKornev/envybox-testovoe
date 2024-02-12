<?php

return [
    "(and :count more error)" => "(оставшееся количество ошибок: 1)",
    "(and :count more errors)" => "(оставшееся количество ошибок: 1)",
    'string' => 'Поле ":attribute" должно быть строкой',
    'numeric' => 'Поле ":attribute" должно быть числом',
    'integer' => 'Поле ":attribute" должно иметь тип integer',
    'required_with' => 'Поле ":attribute" обязательно, когда присутствует ":values"',

    'required' => 'Поле ":attribute" - обязательное',
    'email' => 'В поле ":attribute" должна быть корректная электронная почта',
    'phone' => 'В поле ":attribute" должен быть корректный номер телефона',
    'gte' => [
        'numeric' => 'Значение поля ":attribute" должно быть больше или равно :value',
    ],
    'attributes' => [
        'name' => 'Имя',
        'appeal' => 'Обращение',
    ],
];
