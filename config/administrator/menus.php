<?php
/**
 * Created by PhpStorm.
 * User: Nevrex
 * Date: 29.02.2016
 * Time: 19:04
 */
return [
    'title' => 'Меню',
    'single' => 'элемент',
    'model' => 'App\Menu',
    'columns' => [
        'id',
        'active',
        'title',
        'position'
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
        ],
        'weight' => [
            'type' => 'number',
        ],
        'title' => [
            'type' => 'text',
        ],
        'url' => [
            'type' => 'text',
        ],
        'position' => [
            'type' => 'enum',
            'options' => [
                'left',
                'right',
            ],
        ],
    ],
    'filters' => [
        'active' => [
            'type' => 'bool',
        ],
        'title' => [
            'type' => 'text',
        ],
        'position' => [
            'type' => 'enum',
            'options' => [
                'left',
                'right',
            ],
        ],
    ],
];