<?php
/**
 * @var XCrm\Frontend\PageView  $this
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

        <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
        <?= $this->html::submitButton(Yii::t('usuario', 'Continue'), ['class' => 'btn btn-primary']) ?><br>
        <?php $this->endForm(); ?>
    </div>
    <div class="col-md-6">
        <?= $this->servicePage->content_full ?>
    </div>
</div>
