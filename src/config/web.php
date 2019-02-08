<?php
return [
    'components' =>
    [
        'view' =>
        [
            'class' => 'skeeks\cms\view\ViewComponent',
            /*'themes' =>
            [
                'one' =>
                [
                    'class' => 'skeeks\cms\view\ThemeComponent',
                    'name'  => 'Default',
                    'pathMap'       =>
                    [
                        '@app/views' =>
                        [
                            '@app/templates/one',
                            '@app/templates/default',
                        ],
                    ]
                ],
                'two' => []
                //...
            ]*/
        ],

        'viewSettings' =>
        [
            'class' => 'skeeks\cms\view\ViewComponentSettings',
            /*'theme' => 'one'*/
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