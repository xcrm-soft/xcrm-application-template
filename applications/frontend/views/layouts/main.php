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
 * @var $content string
 */

$this->beginPage() ?><!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= $this->html::encode($this->title) ?></title>
        <?= $this->head() ?>
    </head>
    <body class="h-100">
    <?php $this->beginBody() ?>
        <div id="app" class="h-100 d-flex flex-column">
            <?= $this->render('components/nav') ?>
            <?= $this->render('components/header') ?>
            <main class="container flex-grow-1">
                <?=$this->widget('breadcrumbs', [
                    'links' => $this->params['breadcrumbs'] ?? []
                ])?>

                <h1><?= $this->heading ?? 'Untitled Page Header'?></h1>

                <?=$content?>
            </main>

            <footer class="bg-dark text-white-50">
                <div class="container my-2">
                    Created by WebWizardry
                </div>
            </footer>
        </div>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage();
