<?php
/**
 * This file is a part of XCRM Core Package
 *
 * @link      https://webwizardry.ru/projects/xcrm
 * @license   https://webwizardry.ru/projects/xcrm/license/
 * @copyright Copyright (c) 2020, Web Wizardry (http://webwizardry.ru)
 */

use SideKit\Config\ConfigKit;

return [
    'language' => 'ru',
    'aliases' => [
        '@media/public' => dirname(__DIR__) . '/web/media',
        '@XCrm'         => dirname(__DIR__) . '/vendor-xcrm/xcrm-core/src',
        '@XCrmResource' => dirname(__DIR__) . '/vendor-xcrm/xcrm-core/resource',
        '@bower'        => '@vendor/bower-asset',
        '@npm'          => '@vendor/npm-asset',
    ],
    'components' => [
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
        'i18n' => [
            'class' => \XCrm\I18N\Components\I18N::class,
            'translator' => ['class' => \XCrm\Integrations\Yandex\YaTranslate::class],
        ],
        'formatter' => [
            'dateFormat'=>'yyyy-mm-dd',
            'datetimeFormat' => 'yyyy-mm-dd HH:mm:ss',
        ],
        'reCaptcha' => [
            'class' => 'himiklab\yii2\recaptcha\ReCaptchaConfig',
            'siteKeyV2' => ConfigKit::env()->get('GOOGLE_RECAPTCHA_KEY'),
            'secretV2' => ConfigKit::env()->get('GOOGLE_RECAPTCHA_SECRET'),
        ],
    ],
    'params' => [
        'datePickerDateFormat' => 'dd.mm.yyyy',
        'datePickerMaskOptions' => [
            'alias' => 'dd.mm.yyyy',
            'placeholder' => '__.__.____',
        ],
    ],
];