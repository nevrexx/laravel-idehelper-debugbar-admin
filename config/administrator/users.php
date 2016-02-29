<?php
/**
 * Created by PhpStorm.
 * User: Nevrex
 * Date: 28.02.2016
 * Time: 21:17
 */

return [
    'title' => 'Пользователи',
    'single' => 'пользователь',
    'model' => 'App\User',
    'columns' => [
        'id',
        'email'
    ],
    'edit_fields' => [
        'email' => [
            'type' => 'text',
        ]
    ],
];