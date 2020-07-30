<?php
/**
 * @var $this XCrm\Application\Web\View
 */
?><nav class="navbar navbar-expand-md navbar-dark  fixed-top">
    <div class="container">
    <?= $this->html::a($this->html::img($this->params['asset']['theme']->baseUrl . '/img/xcrm-logo.svg', ['style' => 'height: 50px']), ['/'], ['class' => 'navbar-brand']) ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <?php if ($this->app->user->isGuest): ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Личный кабинет</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <?= $this->html::a('Войти', ['/user/security/login'], ['class' => 'dropdown-item']) ?>
                    <?= $this->html::a('Зарегистрироваться', ['/user/register'], ['class' => 'dropdown-item']) ?>
                </div>
            </li>
            <?php else: ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="user-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@<?=$this->app->user->identity->username?></a>
                <div class="dropdown-menu" aria-labelledby="user-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <?= $this->html::a('Выйти', ['/user/security/logout'], ['class' => 'dropdown-item', 'data-method' => 'post']) ?>
                </div>
            </li>
            <?php endif ?>
        </ul>
    </div>
    </div>
</nav>
