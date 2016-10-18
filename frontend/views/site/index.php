<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Paulo Roberto Leardi';

?>
<div class="site-index">

    <div class="container-fluid" style="background: #ddd url(images/bg_site1.png) top no-repeat; height: 490px; overflow: hidden">
        <div class="">
            <div class="row">
                <div class="col-lg-8 guru-home-panel-container" style="">
                    <div class="panel panel-info guru-home-panel" style="">
                        <div class="panel-heading guru-home-panel-heading">Encontre aqui o seu futuro im&oacute;vel</div>
                        <div class="panel-body guru-home-panel-body">
                            <form class="form-group">
                                <div class="row">

                                    <div class="col-sm-3 col-xs-6 guru-home-search">
                                        <?= Html::dropDownList("tipo_negocio", "Comprar", ['Comprar' => 'Comprar', 'Alugar' => 'Alugar'], ['class' => 'form-control guru-chosen-no-search']) ?>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 guru-home-search">
                                        <?= Html::dropDownList("tipo_negocio", "Apartamento", ['Apartamento' => 'Apartamento', 'Casa' => 'Casa', 'Terreno' => 'Terreno'], ['class' => 'form-control guru-chosen-no-search']) ?>
                                    </div>
                                    <div class="col-sm-5 col-xs-12 guru-home-search">
                                        <input type="text" class="form-control" placeholder="Digite um bairro ou cidade ...">
                                    </div>
                                    <div class="col-sm-1 col-xs-12 guru-home-search">
                                        <?= Html::a('<span class="glyphicon glyphicon-search"></span>', ['site/resultado'], ['class' => 'btn btn-warning guru-home-button', 'role' => 'button']); ?>
                                        
                                    </div>
                  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!--    
    <div style="background-color: #E1ECF8; width: 100%; padding: 40px 0;">

        <div class="container">

            <div class="body-content">

                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <?= Html::a('<img src="images/imovel1.jpg" />', ['site/sejaFranqueado'], ['style'=>'width:100%;']); ?>
                            <div class="caption">
                                <h3>Vila Nova Conceicao</h3>
                                <p><?= Html::a('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. </p>', ['site/sejaFranqueado']); ?></p>
                            </div>                            
                            
                        </div>



                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <?= Html::a('<img src="images/imovel2.jpg" />', ['site/sejaFranqueado'], ['style'=>'width:100%;']); ?>                            

                            <div class="caption">
                                <h3>Jardim America</h3>
                                <?= Html::a('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. </p>', ['site/sejaFranqueado']); ?>
                            </div>                            
                            
                        </div>


                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <?= Html::a('<img src="images/imovel3.jpg" />', ['site/sejaFranqueado'], ['style'=>'width:100%;']); ?>

                            <div class="caption">
                               <h3>Vila Luzitania</h3>
                               <?= Html::a('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                   dolore magna aliqua. </p>', ['site/sejaFranqueado']); ?>
                           </div>

                           
                        </div>

                    </div>

                </div>

            </div>        

        </div>
        
        
        
    </div>
    
-->

    <div style="background-color: #FFFFFF; width: 100%; padding: 40px 0;">
        <div class="container">
            
            <div class="row">
                <div class="col-md-3" style="text-align: right;">
                    <div class="thumbnail">
                        <img class="img-responsive" src="images/home-seja-um-franqueado.jpg" />
                    </div>
                </div>
                
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 style="margin-top:5px;">Seja um Franqueado Paulo Roberto Leardi</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h5><span class="glyphicon glyphicon-check"></span> Metodologia de trabalho consolidada</h5>
                            <h5><span class="glyphicon glyphicon-check"></span> Investimentos em publicidade online</h5>
                            <h5><span class="glyphicon glyphicon-check"></span> Site e redes sociais com ampla audiencia</h5>
                            <h5><span class="glyphicon glyphicon-check"></span> Revista com tiragem de mais de 80 mil</h5>                            
                            <h5><span class="glyphicon glyphicon-check"></span> Capacitacao e manuais de implantacao e gestao</h5>
                            <h5><span class="glyphicon glyphicon-check"></span> Sistema completo de gestao online</h5>
                            <h5><span class="glyphicon glyphicon-check"></span> Universidade Leardi com mais de 90 cursos e tutoriais</h5>
                            <h5><span class="glyphicon glyphicon-check"></span> Associada a ABF - Associacao Brasileira de Franchising</h5>       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-warning">VENHA FAZER PARTE DO NOSSO TIME !</button>
                        </div>
                    </div>
               </div>
                
            </div>
            
        </div>
        
    </div>
    
    <div style="background-color: #E1ECF8; width: 100%; padding: 40px 0;">
        <div class="container">
            
            <div class="row">
                <div class="col-md-8" style="text-align: right;">
                    <h3 style="margin-top: 5px;">Trabalhe Conosco! Seja um corretor Paulo Roberto Leardi.</h3>
                    <h4>Imagine uma imobili&aacute;ria:</h4>
                     <h5> Onde você trabalha diretamente com o dono, com decisões descentralizadas <span class="glyphicon glyphicon-check"></span></h5>
                     <h5> Que o dono, franqueado, possui total apoio e autonomia jurídica e financeira <span class="glyphicon glyphicon-check"></span></h5>
                     <h5> Que o sistema de gestão seja simples e totalmente construído para auxiliar o corretor fechar negócios <span class="glyphicon glyphicon-check"></span></h5>
                     <h5> Que possui a maior cobertura de marketing e mídia do mercado <span class="glyphicon glyphicon-check"></span></h5>
                     <h5> Que tem uma marca forte reconhecida por clientes e concorrentes de todos os níveis <span class="glyphicon glyphicon-check"></span></h5>
                     <h5> Com um banco de dados completo de todas as regiões <span class="glyphicon glyphicon-check"></span></h5>
                     <h5> Que possui agilidade no processo de fechamento sem burocracia <span class="glyphicon glyphicon-check"></span></h5>
                     <h5> Que, mesmo com toda esta estrutura, consegue praticar as melhores remunerações do mercado <span class="glyphicon glyphicon-check"></span></h5>
                     <h5> Associada a ABF - Associacao Brasileira de Franchising <span class="glyphicon glyphicon-check"></span></h5>
                     <h5> E que o plano de carreira vai até o ponto onde você abre sua própria imobiliária, sem perder o que construiu <span class="glyphicon glyphicon-check"></span></h5>
                    <button class="btn btn-warning">SEJA UM CORRETOR LEARDI !</button>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive" src="images/home-trabalhe-conosco.jpg" />
                    </div>
                </div>
            </div>
            

        </div>
        
    </div>
    
    
    <div style="background-color: #6B88AE; width: 100%; padding: 40px 0;">
        
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <h2 style="color: #FFFFFF;">Blog Leardi</h2>
                    <p style="color: #FAFAFA;">Fique por dentro das novidades do mercado imobiliario e de franquias. Oportunidades, dicas, informacao.</p>

                </div>

            </div>
            
            <div class="row">

                <div class="col-md-4">
                    
                    <div class="thumbnail">
                        <img src="images/blog1.jpg" />
                        <div class="caption">
                            <h3>Dicas para prospectar clientes e vender imóveis nas redes sociais</h3>
                            <p>Prospecção de clientes significa a estratégia utilizada para procurar e conquistar clientes. A maioria dos corretores de imóveis já utilizou a internet com objetivo é procurar, encontrar e conquistar clientes novos através da sua participação nas Redes Sociais.</p>
                            <p><a href="#" class="btn btn-warning" role="button">Continuar Lendo</a></p>
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-4">
                    
                    <div class="thumbnail">
                        <img src="images/blog2.jpg" />
                        <div class="caption">
                            <h3>10 dicas para tirar boas fotos de imóveis em Goiás</h3>
                            <p>Existem diversos itens que podem ajudar a potencializar a venda de imóveis em Goiás e em outras cidades. Uma das formas de se destacar é utilizar a internet e todo seu potencial para atrair pessoas interessadas em comprar empreendimentos. Anúncios otimizados costumam trazer melhores resultados e um item importante é a galeria de imagens da casa ou apartamento à venda.</p>
                            <p><a href="#" class="btn btn-warning" role="button">Continuar Lendo</a></p>
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-4">
                    
                    <div class="thumbnail">
                        <img src="images/blog3.jpg" />
                        <div class="caption">
                            <h3>O cliente mudou!! – Dicas para ofertar imóveis</h3>
                            <p>As técnicas de ofertar imóveis não são tão eficazes como costumavam ser. Por isso Separamos algumas novas dicas para você colocar mais inteligência em seus processos de vendas.</p>
                            <p><a href="#" class="btn btn-warning" role="button">Continuar Lendo</a></p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>

    <div style="background-color: #FFFFFF; width: 100%; padding: 20px 0 40px;">
        
        <div class="container" style="text-align: left;">
            
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #286090">Pesquisas mais populares</h3>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <h6 style="color: #286090"><a style="color: #286090">Apartamento a Venda no Morumbi</a></h6>
                    <h6 style="color: #286090"><a style="color: #286090">Apartamento para Alugar no Brooklin</a></h6>
                    <h6 style="color: #286090"><a style="color: #286090">Casa a Venda em Brasilia</a></h6>
                    <h6 style="color: #286090"><a style="color: #286090">Apartamento a Venda em Aruja</a></h6>
                </div>
                <div class="col-md-4">
                    <h6 style="color: #286090"><a style="color: #286090">Terreno a Venda em Indaiatuba</a></h6>
                    <h6 style="color: #286090"><a style="color: #286090">Casa a Venda em Cidade Jardim</a></h6>
                    <h6 style="color: #286090"><a style="color: #286090">Imovel Comercial para Alugar na Paulista</a></h6>
                    <h6 style="color: #286090"><a style="color: #286090">Flat para Alugar no Jardim America</a></h6>
                </div>
                <div class="col-md-4">
                    <h6 style="color: #286090"><a style="color: #286090">Apartamento a Venda no Morumbi</a></h6>
                    <h6 style="color: #286090"><a style="color: #286090">Apartamento para Alugar no Brooklin</a></h6>
                    <h6 style="color: #286090"><a style="color: #286090">Casa a Venda em Brasilia</a></h6>
                    <h6 style="color: #286090"><a style="color: #286090">Apartamento a Venda em Aruja</a></h6>
                </div>
            </div>
            
            <br />
            
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: #286090">Redes Sociais</h3>
                </div>
            </div>
            
            <div class="row" style="text-align: center;">
                <div class="col-xs-3">
                    <h1><a href="#" style="color: #286090"><span class="fa fa-facebook-square"></span></a></h1>
                    <h5 style="color: #286090">Facebook</h5>
                </div>
                <div class="col-xs-3">
                    <h1><a href="#" style="color: #286090"><span class="fa fa-rss-square"></span></a></h1>
                    <h5 style="color: #286090">Blog</h5>
                </div>                
                <div class="col-xs-3">
                    <h1><a href="#" style="color: #286090"><span class="fa fa-youtube-square"></span></a></h1>
                    <h5 style="color: #286090">Youtube</h5>
                </div>   
                <div class="col-xs-3">
                    <h1><a href="#" style="color: #286090"><span class="fa fa-linkedin-square"></span></a></h1>
                    <h5 style="color: #286090">LinkedIn</h5>
                </div>                
                
            </div>
        
            
            
            
        </div>
        
        
        
    </div> 
    
    
    
</div>
