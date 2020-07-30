<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var XCrm\Application\Web\View             $this
 * @var XCrm\Modules\User\Frontend\Model\ConfirmationResendForm $model
 */

$this->title = $this->heading = Yii::t('usuario', 'Request new confirmation message');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row mt-3">
    <div class="col-md-6">
        Письмо для подтверждения аккаунта успешно отправлено.
    </div>
</div>
