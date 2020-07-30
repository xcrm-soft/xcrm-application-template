<?php
/**
 * This file is a part of XCRM Core Package
 *
 * @link      https://webwizardry.ru/projects/xcrm
 * @license   https://webwizardry.ru/projects/xcrm/license/
 * @copyright Copyright (c) 2020, Web Wizardry (http://webwizardry.ru)
 */

namespace app\frontend;


class Theme extends \XCrm\Resource\Bootstrap4\Theme
{
    public function assets()
    {
        return [
            'theme' => ThemeAsset::class,
        ];
    }

    public function __construct($config = [])
    {
        $config['basePath'] = $config['basePath'] ?? __DIR__;
        parent::__construct($config);
    }
}