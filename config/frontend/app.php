<?php
/**
 * This file is a part of XCRM Core Package
 *
 * @link      https://webwizardry.ru/projects/xcrm
 * @license   https://webwizardry.ru/projects/xcrm/license/
 * @copyright Copyright (c) 2020, Web Wizardry (http://webwizardry.ru)
 */

return [
    'class' => \XCrm\Frontend\SiteApplication::class,
    'defaultModule' => 'website',
    'components' => [
        'view' => [
            'theme' => ['class' => \app\frontend\Theme::class]
        ],
        'urlManager' => [
            'rules' => [
                'legal/<url:[a-zA-Z-]+>' => 'legal/index'
            ]
        ],
    ],
    'controllerMap' => [
        'legal' => \XCrm\Modules\Website\Frontend\Controller\LegalController::class,
    ],
    'params' => [
        'legalInfoPageUrl' => 'docs'
    ],
];