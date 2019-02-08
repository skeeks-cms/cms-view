View for SkeekS CMS
===================================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist skeeks/cms-view "*"
```

or add

```
"skeeks/cms-view": "*"
```

Configuration app
----------

```php

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

```


___

> [![skeeks!](https://skeeks.com/img/logo/logo-no-title-80px.png)](https://skeeks.com)  
<i>SkeekS CMS (Yii2) — quickly, easily and effectively!</i>  
[skeeks.com](https://skeeks.com) | [cms.skeeks.com](https://cms.skeeks.com)


