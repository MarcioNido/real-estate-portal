<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Apartamentos Brooklin - Encontre apartamentos a venda no Brooklin';
$this->params['breadcrumbs'][] = 'Venda';
$this->params['breadcrumbs'][] = 'SP';
$this->params['breadcrumbs'][] = 'Sao Paulo';
$this->params['breadcrumbs'][] = 'Brooklin';
$this->params['breadcrumbs'][] = 'Apartamentos';


?>

<div style="background-color: #6B88AE; width: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 style="color: #FAFAFA; font-weight: 300;"><b>18.996 </b>Casas &agrave; venda em Brooklin, S&atilde;o Paulo, SP</h3>
            </div>
            <div class="col-md-3" style="text-align: right; padding-right: 40px;">
                <form class="form-inline" style="margin-top: 10px;">
                    <div class="form-group">
                        <?= Html::dropDownList('orderSelect', '', ['Mais Recentes' => 'Mais Recentes', 'Menor Valor' => 'Menor Valor', 'Maior Valor' => 'Maior Valor'], ['class' => 'form-control guru-chosen-no-search']) ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #E1ECF8; width: 100%;">
    <div class="container" style="padding-top: 20px;">

        <div  id="ph_toggle_filtro" class="row hidden-lg" style="margin-bottom: 15px;">
                <div class="col-xs-12">
                    <button class="btn btn-primary" style="width: 100%" onclick="$('#ph_filtro').toggleClass('hidden-md hidden-sm hidden-xs');">FILTRAR RESULTADOS</button>
                </div>
        </div>
        
            <div class="row">
                
                <div id="ph_filtro" class="col-lg-3 hidden-md hidden-sm hidden-xs">

                    <div class="panel" style="background-color: #FFFFFF;">
                        <form class="form-group">

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary" style="width: 100%">Comprar</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default" style="width: 100%">Alugar</button>
                                            </div>                                        

                                        </div>

                                    </div>

                                </div>
                            </div>                            
                            <div class="panel-body" style="border-bottom: 1px solid #CCCCCC;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fLocal">Acrescentar Localiza&ccedil;&atilde;o</label>
                                            <input type="text" class="form-control" id="fLocal" placeholder="Bairro ou Cidade">
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-10">
                                                <p style="color: #98AED1">Brooklin, Sao Paulo</p>
                                            </div>
                                            <div class="col-xs-2" style="text-align: right;">
                                                <span class="fa fa-close"></span>
                                            </div>
                                        </div>

                                    </div>                                
                                </div>
                            </div>
                            <div class="panel-body" style="border-bottom: 1px solid #CCCCCC;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fTipoImovel">Tipo de Im&oacute;vel</label>
                                            <?= Html::dropDownList('fTipoImovel', 'Apartamento', ['Apartamento'=>'Apartamento', 'Casa'=>'Casa', 'Terreno'=>'Terreno','Comercial'=>'Comercial'], ['class'=>'guru-chosen-no-search']) ?>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            
                            <div class="panel-body" style="border-bottom: 1px solid #CCCCCC;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fValorMin">Valor M&iacute;nimo</label>
                                            <?= Html::textInput('fValorMin', '0,00', ['class'=>'form-control', 'style'=>'text-align: right;']) ?>
                                        </div>
                                    </div>                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fValorMax">Valor M&aacute;ximo</label>
                                            <?= Html::textInput('fValorMax', '5.000.000,00', ['class'=>'form-control', 'style'=>'text-align: right;']) ?>
                                        </div>
                                    </div>                                       
                                </div>
                            </div>     
                            
                            <div class="panel-body" style="border-bottom: 1px solid #CCCCCC;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Dormit&oacute;rios</label>
                                       <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default">1+</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default">2+</button>
                                            </div>                                        
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary">3+</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default">4+</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default">5+</button>
                                            </div>     
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            
                            <div class="panel-body" style="border-bottom: 1px solid #CCCCCC;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Vagas de Garagem</label>
                                       <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default">1+</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary">2+</button>
                                            </div>                                        
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default">3+</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default">4+</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default">5+</button>
                                            </div>     
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            
                            
                            <div class="panel-body" style="border-bottom: 1px solid #CCCCCC;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fValorMin">&Aacute;rea M&iacute;nima</label>
                                            <?= Html::textInput('fValorMin', '---', ['class'=>'form-control', 'style'=>'text-align: right;']) ?>
                                        </div>
                                    </div>                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fValorMax">&Aacute;rea M&aacute;xima</label>
                                            <?= Html::textInput('fValorMax', '---', ['class'=>'form-control', 'style'=>'text-align: right;']) ?>
                                        </div>
                                    </div>                                       
                                </div>
                            </div>  
                            
                        </form>

                    </div>
                    
                </div>

                <div class="col-lg-9">

                    
                    <?php for ($i=0; $i<10; $i++) { ?>
                    
                    <!-- linha imovel -->
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="panel">
                                
                                <div class="panel-body" style="padding: 2px;">

                                    
                                    <div class="col-md-4 col-sm-12" style="padding-left: 1px; padding-right: 1px;">
                                            <?= Html::a('<img src="images/imovel1.jpg" class="img-responsive" />', ['site/sejaFranqueado']); ?>

                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        
                                        <div class="row" style="margin-top: 5px;">
                                            
                                            <!--<div class="col-md-12 guru-special-line">&nbsp;</div>-->
                                            
                                            <div class="col-md-5">
                                                <h3 style="font-weight: 300; margin-top: 0; margin-bottom: 0;">Casa T&eacute;rrea</h3>
                                            </div>
                                            
                                            <div class="col-md-7">
                                                <h3 style="font-weight: 300; margin-top: 0; margin-bottom: 20px;">Brooklin, S&atilde;o Paulo, SP</h3>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h7 style="color: #333333; font-weight: 300">Pre&ccedil;o</h7>
                                                <h5 style="margin-top: 0; font-weight: 300">R$ 5.000.000,00</h5>
                                            </div>
                                            <div class="col-sm-3 hidden-xs">
                                                <h7 style="color: #333333; font-weight: 300">IPTU</h7>
                                                <h5 style="margin-top: 0; font-weight: 300">R$ 25.000,00</h5>
                                            </div>
                                            <div class="col-sm-6 hidden-xs">
                                                <h7 style="color: #333333; font-weight: 300">Condom&iacute;nio</h7>
                                                <h5 style="margin-top: 0; font-weight: 300">R$ 5.000,00</h5>
                                            </div>                                          
                                        </div>
                                        
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <div class="guru-result-text-placeholder">
                                                        <p style="color: #666666; font-weight: 300">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-xs-3 col-md-3">
                                                        <h7 style="color: #333333; font-weight: 300">&Aacute;rea (&#13217;)</h7>
                                                        <h5 style="margin-top: 0; font-weight: 300">250</h5>                                                        
                                                    </div>
                                                    <div class="col-xs-3 col-md-2">
                                                        <h7 style="color: #333333; font-weight: 300">Dorms.</h7>
                                                        <h5 style="margin-top: 0; font-weight: 300">4</h5>                                                        
                                                    </div>
                                                    <div class="col-xs-3 col-md-2">
                                                        <h7 style="color: #333333; font-weight: 300">Su&iacute;tes</h7>
                                                        <h5 style="margin-top: 0; font-weight: 300">3</h5>                                                        
                                                    </div>
                                                    <div class="col-xs-3 col-md-5">
                                                        <h7 style="color: #333333; font-weight: 300">Vagas</h7>
                                                        <h5 style="margin-top: 0; font-weight: 300">4</h5>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12" style="margin-top: 5px; padding-bottom: 10px;">
                                                <a href="index.php?r=site/detalhe&id=123456" class="btn btn-warning" style="width: 100%; font-weight: 300"><span class="glyphicon glyphicon-search"></span> Detalhes</a>
                                            </div>
                                        </div>
                                        

                                    </div>
                                    
                                    
                                </div>
                                
                                
                                
                            </div>
                            
                                
                        </div>
                    </div>
                    <!-- fim linha imovel -->
                    <?php } ?>
                    
                    
                    <div class="row">
                        <div class="col-lg-12" style="text-align: center;">
                            
                            <nav aria-label="Page navigation">
                              <ul class="pagination" style="margin: 0 0 20px 0">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>     
                            
                        </div>
                    </div>
                            
                    
                </div>
            </div>


    </div>
    
</div>


<div style="background-color: #6B88AE; width: 100%; padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-offset-1" style="text-align: left;">
                <h3 style="color: #FAFAFA; font-weight: 300">Receba novos im&oacute;veis e atualiza&ccedil;&otilde;es relacionadas &agrave; sua pesquisa direto em sua caixa de e-mail!</h3>
                <h5 style="color: #E7E7E7; font-weight: 300;"></h5>
            </div>

        </div>
        <div class="row">
            <div class="col-md-5 col-md-offset-1" >
                <h5 style="color: #CCCCCC"><span class="glyphicon glyphicon-check"></span> Comprar</h5>
                <h5 style="color: #CCCCCC"><span class="glyphicon glyphicon-check"></span> Apartamento</h5>
            </div>
            <div class="col-md-5">
                <h5 style="color: #CCCCCC"><span class="glyphicon glyphicon-check"></span> Brooklin, S&atilde;o Paulo, SP</h5>
                <h5 style="color: #CCCCCC"><span class="glyphicon glyphicon-check"></span> 3 Dormit&oacute;rios</h5>

            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-lg-10 col-md-offset-1">
                <button class="btn btn-warning">QUERO RECEBER AS OPORTUNIDADES!</button>
            </div>
        </div>
    </div>

</div>
