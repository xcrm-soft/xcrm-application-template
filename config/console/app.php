<?php
/**
 * This file is a part of XCRM Core Package
 *
 * @link      https://webwizardry.ru/projects/xcrm
 * @license   https://webwizardry.ru/projects/xcrm/license/
 * @copyright Copyright (c) 2020, Web Wizardry (http://webwizardry.ru)
 */

return [
    'controllerMap' => [
        'migrate' => [
            'class' => \yii\console\controllers\MigrateController::class,
            'migrationPath' => [
                '@yii/rbac/migrations',
            ],
            'migrationNamespaces' => [
                'Da\User\Migration',
                'XCrm\Modules\User\Migration',
                'XCrm\Modules\Reference\Migration',
                'XCrm\Modules\I18N\Migration',
                'XCrm\Modules\Website\Migration',
                'XCrm\Modules\Smarty\Migration',
                'XCrm\Modules\Email\Migration',
            ],
        ],
    ],
];