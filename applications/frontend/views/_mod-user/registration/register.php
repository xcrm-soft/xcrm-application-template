<?php
/**
 * This file is a part of XCRM Core Package
 *
 * @link      https://webwizardry.ru/projects/xcrm
 * @license   https://webwizardry.ru/projects/xcrm/license/
 * @copyright Copyright (c) 2020, Web Wizardry (http://webwizardry.ru)
 */

/**
 * @var $this   XCrm\Frontend\PageView
 * @var $model  XCrm\Modules\User\Frontend\Model\RegistrationForm
 * @var $user   XCrm\Modules\User\Model\User
 * @var $module XCrm\Modules\User\Frontend\Module
 */


echo $this->html::tag('div', $this->servicePage->content_short, ['class' => 'mb-2']);
$form = $this->beginForm([
    'enableClientValidation' => false,
    'enableAjaxValidation' => true,
]);
?>
    <div class="row">
        <div class="col-md-4"><?=$form->field($model, 'username')?></div>
        <div class="col-md-4"><?=$form->field($model, 'password_repeat')->passwordInput()?></div>
        <div class="col-md-4"><?=$form->field($model, 'password')->passwordInput()?></div>
    </div>

    <div class="row">
        <div class="col-md-4"><?=$form->field($model, 'email')?></div>
        <div class="col-md-4"><?=$form->field($model, 'phone')?></div>
    </div>

    <div class="row mt-2">
        <div class="col-md-4"><?=$form->field($model, 'name_last')?></div>
        <div class="col-md-4"><?=$form->field($model, 'name_first')?></div>
        <div class="col-md-4"><?=$form->field($model, 'name_middle')?></div>
    </div>

    <div class="row">
        <div class="col-md-4"><?=$form->field($model, 'birth_date')?></div>
    </div>

<?php if ($module->enableReCaptchaRegistration): ?>
    <div class="row">
        <div class="col-md-4"><?=$form->field($model, 'reCaptcha')->widget('reCaptcha')->label(false)?></div>
    </div>
<?php endif ?>

<?php if ($module->enableGdprCompliance): ?>
    <div class="mt-2">
        <?= $form->field($model, 'gdpr_consent')->checkbox(['value' => 1])->label($module->getConsentMessage()) ?>
    </div>
<?php endif ?>

    <div class="row">
        <div class="col-12 my-3">
            <?=$this->html::submitButton('Зарегистрироваться', ['class' => 'btn btn-lg btn-primary'])?>
            <p class="mt-3">
                <?= $this->t('Если вы уже зарегистрированы, Вы можете ')?>
                <?= $this->html::a($this->t('войти в аккаунт'), ['/user/security/login']) ?>
                <?=$this->t('или')?>
                <?= $this->html::a($this->t('восстановить пароль'), ['/user/forgot']) ?>
            </p>
        </div>
    </div>
<?php
$this->endForm();
echo $this->html::tag('div', $this->servicePage->content_full, ['class' => 'mt-2']);