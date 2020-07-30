<?php
/**
 * This file is a part of XCRM Core Package
 *
 * @link      https://webwizardry.ru/projects/xcrm
 * @license   https://webwizardry.ru/projects/xcrm/license/
 * @copyright Copyright (c) 2020, Web Wizardry (http://webwizardry.ru)
 */

/**
 * @var XCrm\Application\Web\View                     $this
 * @var XCrm\Form\ActiveForm                          $form
 * @var XCrm\Modules\User\Frontend\Model\RecoveryForm $model
 */
?>
<div class="row mt-3">
    <div class="col-md-6">

        <?php $form = $this->beginForm(
            [
                'id' => $model->formName(),
                'enableAjaxValidation' => true,
                'enableClientValidation' => false,
            ]
        ); ?>

        <?= $form->field($model, 'password_repeat')->passwordInput() ?>
        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $this->html::submitButton(Yii::t('usuario', 'Finish'), ['class' => 'btn btn-success']) ?><br>

        <?php $this->endForm(); ?>
    </div>
    <div class="col-md-6">
        <?= $this->servicePage->content_full ?>
    </div>
</div>
