<?php
use Da\User\Widget\ConnectWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var \XCrm\Frontend\PageView            $this
 * @var \Da\User\Form\LoginForm            $model
 * @var \XCrm\Modules\User\Frontend\Module $module
 */

?>

<div class="row mt-3">
    <div class="col-md-6">
                <?php $form = $this->beginForm(
                    [
                        'id' => $model->formName(),
                        'enableAjaxValidation' => true,
                        'enableClientValidation' => false,
                        'validateOnBlur' => false,
                        'validateOnType' => false,
                        'validateOnChange' => false,
                    ]
                ) ?>

                <?= $form->field(
                    $model,
                    'login',
                    ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control', 'tabindex' => '1']]
                ) ?>

                <?= $form
                    ->field(
                        $model,
                        'password',
                        ['inputOptions' => ['class' => 'form-control', 'tabindex' => '2']]
                    )
                    ->passwordInput()
                    ->label(
                        Yii::t('usuario', 'Password')
                        . ($module->allowPasswordRecovery ?
                            ' (' . Html::a(
                                Yii::t('usuario', 'Forgot password?'),
                                ['/user/recovery/request'],
                                ['tabindex' => '5']
                            )
                            . ')' : '')
                    ) ?>

                <?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '4']) ?>

                <?= $this->html::submitButton(
                    Yii::t('usuario', 'Sign in'),
                    ['class' => 'btn btn-primary', 'tabindex' => '3']
                ) ?>

                <?php $this->endForm(); ?>


        <?php if ($module->enableEmailConfirmation): ?>
            <p class="text-left mt-3">
                <?= $this->html::a(
                    Yii::t('usuario', 'Didn\'t receive confirmation message?'),
                    ['/user/registration/resend']
                ) ?>
            </p>
        <?php endif ?>
        <?php if ($module->enableRegistration): ?>
            <p class="text-left">
                <?= $this->html::a(Yii::t('usuario', 'Don\'t have an account? Sign up!'), ['/user/registration/register']) ?>
            </p>
        <?php endif ?>
        <?= ConnectWidget::widget(
            [
                'baseAuthUrl' => ['/user/security/auth'],
            ]
        ) ?>
    </div>
    <div class="col-md-6 pt-2">
        <?= $this->servicePage->content_full ?>
    </div>
</div>
