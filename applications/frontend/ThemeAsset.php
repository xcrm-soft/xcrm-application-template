<?php
/**
 * This file is a part of XCRM Core Package
 *
 * @link      https://webwizardry.ru/projects/xcrm
 * @license   https://webwizardry.ru/projects/xcrm/license/
 * @copyright Copyright (c) 2020, Web Wizardry (http://webwizardry.ru)
 */

namespace app\frontend;
use XCrm\Resource\Roboto\RobotoFontAsset;
use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets/dist';
    public $publishOptions = [
        'forceCopy' => YII_ENV_DEV
    ];

    public $css = [
        'css/xcrm.css'
    ];

    public $depends = [
        \XCrm\Resource\Bootstrap4\ThemeAsset::class,
        RobotoFontAsset::class,
    ];
}