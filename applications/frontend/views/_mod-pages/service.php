<?php
/**
 * This file is a part of XCRM Core Package
 *
 * @link      https://webwizardry.ru/projects/xcrm
 * @license   https://webwizardry.ru/projects/xcrm/license/
 * @copyright Copyright (c) 2020, Web Wizardry (http://webwizardry.ru)
 */


/**
 * Страница отображения сервисной информации без дополнительной логики
 *
 * @var $this XCrm\Frontend\PageView
 * @var $shortContentType null|string
 * @var $content string
 */


if (!in_array($shortContentType ?? null, ['info', 'warning', 'danger', 'success'])) $shortContentType = null;

if ($this->servicePage->content_short) echo $this->html::tag('div', $this->servicePage->content_short, [
    'class' => 'service-short-content' . ($shortContentType ? ' alert alert-' . $shortContentType : '')
]);

?><div class="row">
    <div class="col-12">
        <?= $this->servicePage->content_full ?>
        <?= $content ?? null ?>
    </div>
</div>