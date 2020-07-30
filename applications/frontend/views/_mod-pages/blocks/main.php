<?php
/**
 * This file is a part of XCRM Core Package
 *
 * @link      https://webwizardry.ru/projects/xcrm
 * @license   https://webwizardry.ru/projects/xcrm/license/
 * @copyright Copyright (c) 2020, Web Wizardry (http://webwizardry.ru)
 */

/**
 * @var $this XCrm\Application\Web\View
 * @var $page XCrm\Modules\Website\Model\Page
 * @var $i18n XCrm\Data\Localization
 */

$i18n = $page->localize();

if ($image = $page->getJacketUrl()) {
    $textColumnWidth = 9;
    $imageColumn = '<div class="col-12 col-md-3">'
        . $this->html::img($image, ['alt' => $i18n->jacket_image_alt ?? $i18n->name, 'class' => 'w-100'])
        . '</div>';
} else $textColumnWidth = 12;

?><div class="row">
    <div class="col-12 col-md-<?=$textColumnWidth?>">
        <?= $i18n->content_full ?>
    </div>
    <?= $imageColumn ?>
</div>