<?php
return [
    'components' =>
    [
        'view' =>
        [
            'class' => 'skeeks\cms\view\ViewComponent'
        ],

        'viewSettings' =>
        [
            'class' => 'skeeks\cms\view\ViewComponentSettings'
        ],

        'i18n' => [
            'translations' =>
            [
                'skeeks/view' => [
                    'class'             => 'yii\i18n\PhpMessageSource',
                    'basePath'          => '@skeeks/cms/view/messages',
                    'fileMap' => [
                        'skeeks/view' => 'main.php',
                    ],
                ]
            ]
        ],
    ]
];