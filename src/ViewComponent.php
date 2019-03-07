<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 17.04.2016
 */
namespace skeeks\cms\view;

use yii\helpers\ArrayHelper;
use yii\web\View;

/**
 * Class ViewComponent
 * @package skeeks\cms\view
 */
class ViewComponent extends View
{
    public $isEnabled = true;
    /**
     * @var array Availables app themes
     */
    public $themes = [
        /*'one' =>
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
        ]*/
    ];

    public function init()
    {
        if (!$this->isEnabled)
        {
            return parent::init();
        }

        if (!$this->themes)
        {
            return parent::init();
        }

        if (!\Yii::$app->viewSettings->theme)
        {
            return parent::init();
        }

        if (!$themeData = ArrayHelper::getValue($this->themes, \Yii::$app->viewSettings->theme))
        {
            return parent::init();
        }

        /*if (!isset($themeData['class']))
        {
            $themeData['class'] = 'skeeks\cms\view\ThemeComponent';
        }*/

        if (!isset($themeData['themeConfig'])) {
            return parent::init();
        }

        $this->theme = $themeData['themeConfig'];

        return parent::init();
    }
}