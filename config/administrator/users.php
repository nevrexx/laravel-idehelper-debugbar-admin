<?php
/**
 * Created by PhpStorm.
 * User: Nevrex
 * Date: 28.02.2016
 * Time: 21:17
 */

return [
    'title' => 'users',
    'single' => 'user',
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