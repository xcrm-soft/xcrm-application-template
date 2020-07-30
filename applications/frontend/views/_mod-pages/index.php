<?php
/**
 * This file is a part of XCRM Core Package
 *
 * @link      https://webwizardry.ru/projects/xcrm
 * @license   https://webwizardry.ru/projects/xcrm/license/
 * @copyright Copyright (c) 2020, Web Wizardry (http://webwizardry.ru)
 */

/**
 * @var $this  XCrm\Application\Web\View
 * @var $model XCrm\Modules\Website\Model\Page
 */
echo $this->render('blocks/main', ['page' => $model]);