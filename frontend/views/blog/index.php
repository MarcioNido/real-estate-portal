<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\web\JqueryAsset;
JqueryAsset::register($this);
$this->title = 'Blog Paulo Roberto Leardi';
$this->params['breadcrumbs'][] = 'Blog';

?>


<div style="background-color: #6B88AE; width: 100%">
    <div class="container">
        <div class="row" style="padding: 20px 0;">
            <div class="col-sm-9">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default active">Geral</button>
                    <button type="button" class="btn btn-default">Franquias</button>
                    <button type="button" class="btn btn-default">Imobili&aacute;rias</button>
                    <button type="button" class="btn btn-default">Corretores</button>
                </div>
            </div>
            <div class="col-sm-3">
                <form action="" class="form-inline">
                    <div class="form-group">
                        <div class='input-group'>
                            <input type="text" class="form-control" placeholder="Procurar" />
                            <div class="input-group-btn"><button class='btn btn-primary'><span class="fa fa-search"></span></button></div>
                        </div>
                    </div>
                        
                </form>
            </div>
        </div>
    </div>
</div>


<div style="background-color: #E1ECF8; width: 100%; padding-top: 20px;">
    <div class="container">

            <div class="row">

                <div class="col-lg-9">
                    
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img class="img-responsive" style="width: 100%" src="http://www.leardi.com.br/blogleardi/wp-content/uploads/2016/10/Veja-porque-agora-%C3%A9-o-momento-de-investir-em-im%C3%B3veis-700x437.jpg" />
                                <div class="caption">
                                    <h3>Veja porque agora é o momento de investir em imóveis</h3>
                                    <p>Agora é o momento mais favorável para obter um investimento bastante lucrativo, pois o mercado imobiliário sofreu varias oscilações, e isso gerou uma baixa nos preços dos imóveis, o que torna o imóvel um excelente investimento para quem pode esperar para vender.</p>
                                    <p style='text-align: right;'><a href='index.php?r=blog/page&page=post'>Continuar lendo</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img class="img-responsive" style="width: 100%" src="http://www.leardi.com.br/blogleardi/wp-content/uploads/2016/09/A-mudan%C3%A7a-no-processo-de-compra-de-im%C3%B3veis-700x459.png" />
                                <div class="caption">
                                    <h3>A mudança no processo de compra de imóveis</h3>
                                    <p>As novas tecnologias digitais geram mudanças de comportamento em todos os setores, cada um a sua maneira. A comercialização e locação de imóveis passa por momentos de mudanças, pois a forma com a qual o cliente busca imóveis vem mudando com muita velocidade e cerca de 80% das compras de imóveis começam com uma pesquisa online.</p>
                                    <p style='text-align: right;'><a href=''>Continuar lendo</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img class="img-responsive" style="width: 100%" src="http://www.leardi.com.br/blogleardi/wp-content/uploads/2016/10/Veja-como-se-tornar-um-corretor-de-im%C3%B3veis-e-as-vantagens-da-profiss%C3%A3o.-700x397.jpg" />
                                <div class="caption">
                                    <h3>Veja como se tornar um corretor de imóveis e as vantagens da profissão</h3>
                                    <p>Para ser corretor de imóveis o primeiro passo é obter sua qualificação profissional, pois para poder exercer a profissão você precisa ter um curso que lhe permita obter seu registro profissional no CRECI (Conselho Regional de Corretores de Imóveis).</p>
                                    <p style='text-align: right;'><a href=''>Continuar lendo</a></p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img class="img-responsive" style="width: 100%" src="http://www.leardi.com.br/blogleardi/wp-content/uploads/2016/10/Veja-como-se-tornar-um-corretor-de-im%C3%B3veis-e-as-vantagens-da-profiss%C3%A3o.-700x397.jpg" />
                                <div class="caption">
                                    <h3>Veja como se tornar um corretor de imóveis e as vantagens da profissão</h3>
                                    <p>Para ser corretor de imóveis o primeiro passo é obter sua qualificação profissional, pois para poder exercer a profissão você precisa ter um curso que lhe permita obter seu registro profissional no CRECI (Conselho Regional de Corretores de Imóveis).</p>
                                    <p style='text-align: right;'><a href=''>Continuar lendo</a></p>
                                </div>
                            </div>
                        </div>                        

                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <a style='text-decoration: none;' href='#'>
                                <img class="img-responsive img-rounded" style="width: 100%" src="http://www.leardi.com.br/blogleardi/wp-content/uploads/2016/10/Veja-porque-agora-%C3%A9-o-momento-de-investir-em-im%C3%B3veis-700x437.jpg" />
                                </a>
                                <div class="caption">
                                    <a style='text-decoration: none;' href=''><h3 style='text-decoration: none;'>Veja porque agora é o momento de investir em imóveis</a></h3>
                                    <a style='text-decoration: none; color: #333;' href=''><p>Agora é o momento mais favorável para obter um investimento bastante lucrativo, pois o mercado imobiliário sofreu varias oscilações, e isso gerou uma baixa nos preços dos imóveis, o que torna o imóvel um excelente investimento para quem pode esperar para vender.</p></a>
                                    <p style='text-align: right;'><a href=''>Continuar lendo</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img class="img-responsive" style="width: 100%" src="http://www.leardi.com.br/blogleardi/wp-content/uploads/2016/09/A-mudan%C3%A7a-no-processo-de-compra-de-im%C3%B3veis-700x459.png" />
                                <div class="caption">
                                    <h3>A mudança no processo de compra de imóveis</h3>
                                    <p>As novas tecnologias digitais geram mudanças de comportamento em todos os setores, cada um a sua maneira. A comercialização e locação de imóveis passa por momentos de mudanças, pois a forma com a qual o cliente busca imóveis vem mudando com muita velocidade e cerca de 80% das compras de imóveis começam com uma pesquisa online.</p>
                                    <p style='text-align: right;'><a href=''>Continuar lendo</a></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
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
                
                
                <div class='col-lg-3'>
                    
                    <div class='panel panel-default'>
                        <div class='panel-body'>
                            <img class='img-responsive' src='http://www.leardi.com.br/blogleardi/wp-content/uploads/2014/10/Layout_Facebook.png' />
                        </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        
                        <div class="panel-heading">
                            <h3 class="panel-title">Receba Novidades</h3>
                        </div>
                        
                        <form class="form-group">
                            

                            <div class="panel-body">
                                
                                <p>Cadastre-se e receba as novidades do mercado imobili&aacute;rio em seu email.</p>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fLocal">Nome</label>
                                            <input type="text" class="form-control" id="fLocal" placeholder="Nome">
                                            
                                        </div>


                                    </div>   
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fLocal">Email</label>
                                            <input type="email" class="form-control" id="fLocal" placeholder="Email">
                                            
                                        </div>


                                    </div>   
                                </div>       
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button class="btn btn-warning" style="font-weight: 300; width: 100%;"><span class="fa fa-mail-forward"></span> QUERO RECEBER!</button>                                    
                                    </div>
                                </div>

                            </div>
                            
                        </form>

                    </div>
                    
                    <div class='panel panel-default'>
                        <div class='panel-body'>
                            <img class='img-responsive' src='http://www.leardi.com.br/blogleardi/wp-content/uploads/2016/10/Banner_Lateral.png' />
                        </div>
                    </div>                    
                    
                    
                </div>

            </div>

    </div>
    
</div>



