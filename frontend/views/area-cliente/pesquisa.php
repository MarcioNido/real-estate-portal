<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\web\JqueryAsset;
JqueryAsset::register($this);
$this->title = "Pesquisa Ativa";
$this->params['breadcrumbs'][] = ['label' => 'Area do Cliente', 'url' => ['area-cliente/index']];
$this->params['breadcrumbs'][] = 'Pesquisa Ativa';
?>

<div style="width: 100%; background-color: #E1ECF8;">
    <div class="container" style="padding-top: 40px; padding-bottom: 80px;">

        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-primary">
                    <div class="panel-heading">Pesquisa Ativa</div>
                    
                    <div class="panel-body">
                                                
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tipo_imovel">Tipo Neg&oacute;cio</label>
                                    <?= Html::dropDownList("tipo_negocio", "Comprar", ['Comprar' => 'Comprar', 'Alugar' => 'Alugar'], ['class' => 'form-control guru-chosen-no-search']) ?>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="tipo_imovel">Tipo Im&oacute;vel</label>
                                    <?= Html::dropDownList("tipo_imovel", "Apartamento", ['Apartamento' => 'Apartamento', 'Casa' => 'Casa', 'Terreno' => 'Terreno'], ['class' => 'form-control guru-chosen-no-search']) ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3>Localiza&ccedil;&atilde;o</h3>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-xs-12">
                                <p style="color: #337ab7"><span class="fa fa-close"></span> Brooklin, Sao Paulo</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="localidade">Acrescentar Localiza&ccedil;&atilde;o</label>
                                    <?= Html::textInput("localizacao", "", ['class'=>'form-control']); ?>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        
                        
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
                    <div class="panel-heading">Envio de Email desta Pesquisa</div>
                    <div class="panel-body">
                        <div class="radio">
                            <label>
                                <?= Html::radio('email_periodo', 1); ?>
                                Sempre que houver uma nova oferta ou atualiza&ccedil;&atilde;o
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <?= Html::radio('email_periodo', 0); ?>
                                Uma vez por semana
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <?= Html::radio('email_periodo', 0); ?>
                                A cada 15 dias
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <?= Html::radio('email_periodo', 0); ?>
                                Uma vez por m&ecirc;s
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <?= Html::radio('email_periodo', 0); ?>
                                N&atilde;o enviar emails desta pesquisa
                            </label>
                        </div>



                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>

