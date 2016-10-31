<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->registerJs('$(".guru-chosen").chosen({ width: "100%" });');
$this->registerJs('$(".guru-chosen-no-search").chosen({ width: "100%", disable_search: true });');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">     
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logoleardi.png', ['alt'=>Yii::$app->name, 'class'=>'guru-brand']),
        'brandOptions' => ['class' => 'guru-brand'],
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Contato', 'url' => ['/site/contact']],
        ['label' => 'Agencias', 'url' => ['/site/agencias']],
        ['label' => 'Blog', 'url' => ['/blog/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => "<span class='fa fa-user' style='color: #6B88AE'></span> ENTRAR", 'url' => ['/site/login']];
    } else {
        $menuItems[] = ['label'=>"&Aacute;rea do Cliente", 'url'=>['/area-cliente/index']];        
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                "<span class='fa fa-user' style='color: #6B88AE'></span> SAIR",
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'encodeLabels'=>false,
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div style="background-color: #345C8C; width: 100%; padding-top: 70px;">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            
        </div>
    </div>
    
    <div style="width: 100%">
        
            <?= Alert::widget() ?>
            <?= $content ?>
       
    </div>
    
</div>

<footer class="footer" style="background-color: #345C8C;">
    <div class="container">
        <p class="pull-left" style="color: #FFFFFF;">&copy; Paulo Roberto Leardi <?= date('Y') ?></p>
        <p class="pull-right"><a href="#" style="color: #E7E7E7;"><?= "by <b>GREP</b>" ?></a></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
