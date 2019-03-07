<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 17.04.2016
 */
namespace skeeks\cms\view;

use yii\base\Theme;
/**
 * Class ThemeComponent
 * @package skeeks\cms\view
 */
class ThemeComponent extends Theme
{
    public $name = "Theme name";

    public $themeConfig = [];
}