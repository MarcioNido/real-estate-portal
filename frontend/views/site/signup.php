<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-signup">
        
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-6 col-md-offset-3">
                <h3>Entre com seu nome, e-mail e senha.</h3>
                <h4>J&aacute; possui cadastro? <?= Html::a('Clique aqui para entrar.', ['site/login'], []); ?></h4>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-darkblue">
                    <div class="panel-heading">
                        Entrar
                    </div>
                    <div class="panel-body">
                    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <div class="form-group">
                            <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
