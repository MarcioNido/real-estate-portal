<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Entrar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-login">
        
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-6 col-md-offset-3">
                <h3>Entre com seu e-mail e senha.</h3>
                <h4>Ainda n&atilde;o &eacute; cadastrado? <?= Html::a('crie sua conta.', ['site/signup'], []); ?></h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-darkblue">
                    <div class="panel-heading">
                        Entrar
                    </div>
                    <div class="panel-body">

                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>

                            <?= $form->field($model, 'rememberMe')->checkbox() ?>

                            <div style="color:#999;margin:1em 0">
                                Esqueceu sua senha? <?= Html::a('clique aqui', ['site/request-password-reset']) ?>.
                            </div>

                            <div class="form-group">
                                <?= Html::submitButton('Entrar', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>

                        <?php ActiveForm::end(); ?>

                    </div>
                </div>
                    
            </div>
            
            
        </div>
    </div>
    
</div>
