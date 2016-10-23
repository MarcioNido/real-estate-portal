<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\web\JqueryAsset;
JqueryAsset::register($this);
$this->title = "Area do Cliente";
$this->params['breadcrumbs'][] = 'Area do Cliente';
?>

<div style="width: 100%; height: 100%; background-color: #E1ECF8;">
    <div class="container" style="padding-top: 40px; padding-bottom: 80px;">

            <div class="row">

                <div class="col-md-6">
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">PROPRIET&Aacute;RIOS</div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p>Av. Padre Antonio Jose dos Santos, 313 Und.: 161</p>
                                    <?= Html::a('Editar Dados', ['area-cliente/page', 'page'=>'imovel'], ['class'=>'btn btn-warning']); ?>
                                    <?= Html::a('Gerenciar Fotos', ['area-cliente/page', 'page'=>'imovel'], ['class'=>'btn btn-warning']); ?>                                    
                                    <?= Html::a('Cancelar/Suspender', ['area-cliente/page', 'page'=>'imovel'], ['class'=>'btn btn-default']); ?>
                                </li>
                            </ul>
                            <?= Html::a("Anunciar Im&oacute;vel", ['area-cliente/page', 'page'=>'imovel'], ['class'=>'btn btn-primary']); ?>
                            
                        </div>
                    </div>

                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">CLIENTES</div>
                        <div class="panel-body">
                            
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h4 class='list-group-item-heading'>Pesquisa Ativa</h4>
                                    <p>Comprar Apartamento no Brooklin de 3 Dorms.</p>
                                    <?= Html::a('Editar Pesquisa', ['area-cliente/page', 'page'=>'imovel'], ['class'=>'btn btn-warning']); ?>
                                    <?= Html::a('Cancelar/Suspender', ['area-cliente/page', 'page'=>'imovel'], ['class'=>'btn btn-default']); ?>
                                </li>
                            </ul>
                            
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h4 class='list-group-item-heading'>Atendimento Ativo</h4>
                                    <p>Unidade: Groenl&acirc;ndia - Corretor: Jos&eacute; da Silva </p>
                                    <?= Html::a('Enviar Mensagem', ['area-cliente/page', 'page'=>'imovel'], ['class'=>'btn btn-warning']); ?>
                                </li>
                            </ul>
                            
                            
                            
                        </div>
                    </div>                    

                    
                    
                </div>
                
                <div class="col-md-6">

                    <div class="panel panel-primary">
                        <div class="panel-heading">CONFIGURA&Ccedil;&Otilde;ES</div>
                        <div class="panel-body">
                            <p><?= Html::a("Alterar dados pessoais", ['imovel/cadastro'], ['class'=>'']); ?></p>
                            <p><?= Html::a("Alterar configura&ccedil;&otilde;es de recebimento de email", ['imovel/cadastro'], ['class'=>'']); ?></p>
                        </div>
                    </div>                    
                    
                    
                    <div class="panel panel-warning">
                        <div class="panel-heading">CORRETORES</div>
                        <div class="panel-body">
                            <p>Crie o seu perfil aqui e nossos franqueados entrar&atilde;o em contato</p>
                            <?= Html::a("Criar meu Perfil", ['imovel/cadastro'], ['class'=>'btn btn-warning']); ?>
                        </div>
                    </div>                    
                    
                    <div class="panel panel-warning">
                        <div class="panel-heading">FRANQUIAS</div>
                        <div class="panel-body">
                            <p>Interessado em ser um Franqueado Paulo Roberto Leardi? Cadastre-se e entraremos em contato!</p>
                            <?= Html::a("Quero Mais Informa&ccedil;&otilde;es", ['imovel/cadastro'], ['class'=>'btn btn-warning']); ?>
                        </div>
                    </div>                    
                    
                    
                    
                </div>                
                
            </div>


    </div>
    
</div>

