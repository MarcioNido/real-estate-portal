<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\web\JqueryAsset;
JqueryAsset::register($this);
$this->title = "Area do Cliente";
$this->params['breadcrumbs'][] = ['label' => 'Area do Cliente', 'url' => ['area-cliente/index']];
$this->params['breadcrumbs'][] = 'Edita Imovel';
?>

<div style="width: 100%; background-color: #E1ECF8;">
    <div class="container" style="padding-top: 40px; padding-bottom: 80px;">

        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        
                        
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tipo_imovel">Tipo Im&oacute;vel</label>
                                    <?= Html::dropDownList("tipo_imovel", "Apartamento", ['Apartamento' => 'Apartamento', 'Casa' => 'Casa', 'Terreno' => 'Terreno'], ['class' => 'form-control guru-chosen-no-search']) ?>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="subtipo">Subtipo</label>
                                    <?= Html::dropDownList("subtipo", "Apartamento", ['Apartamento' => 'Apartamento', 'Cobertura' => 'Cobertura', 'Duplex' => 'Duplex'], ['class' => 'form-control guru-chosen-no-search']) ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="cep">CEP</label>
                                    <?= Html::textInput("cep", '04563010', ['class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="tipo_logradouro">Tipo</label>
                                    <?= Html::textInput("tipo_logradouro", 'AV', ['class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="endereco">Endere&ccedil;o</label>
                                    <?= Html::textInput("endereco", 'PADRE ANTONIO JOSE DOS SANTOS', ['class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="endereco">N&uacute;mero</label>
                                    <?= Html::textInput("numero", '313', ['class'=>'form-control']); ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="unidade">Unidade</label>
                                    <?= Html::textInput("unidade", "161", ['class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="bloco">Bloco</label>
                                    <?= Html::textInput("bloco", "Torre Unica", ['class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="complemento">Complemento</label>
                                    <?= Html::textInput("complemento", "", ['class' => 'form-control']); ?>
                                </div>

                            </div>

                        </div>

                        
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        
                        <div class="row">
                            <div class="col-lg-12" style='text-align: right;'>
                                <button class='btn btn-primary'>Confirma</button>
                                <button class='btn btn-default'>Cancela</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="panel panel-warning">
                    <div class="panel-heading">Autoriza&ccedil;&otilde;es deste Im&oacute;vel</div>
                    <div class="panel-body">
                        <div class="checkbox">
                            <label>
                                <?= Html::checkbox('autorizacao', 1); ?>
                                Autorizo a publicidade deste im&oacute;vel no site da Paulo Roberto Leardi e portais imobili&aacute;rios, sem a divulga&ccedil;&atilde;o do endere&ccedil;o completo.
                            </label>
                        </div>
                        <br />
                        <div class="checkbox">
                            <label>
                                <?= Html::checkbox('placa', 1); ?>
                                Autorizo a instala&ccedil;&atilde;o de placa no im&oacute;vel
                            </label>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>

