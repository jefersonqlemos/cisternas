<!DOCTYPE html>
<html>
@extends('layouts.app')

@section('content')

  <body>
    <!-- =========home banner start============-->
    <div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel slide carousel-fade shop-slider full_width ver_new_1_slider">
      <!-- Wrapper for slides-->
      <div role="listbox" class="carousel-inner">
        <div style="background-image: url(images/slider/homepage/cisternas3.jpg);" class="item active">
          <div class="carousel-caption">
            <div class="thm-container">
              <div class="box valign-top">
                <div class="content text-left pull-right">
                  <h1 data-animation="animated fadeInLeft" class="bnrfnt40">Instalação de Cisternas<br></h1>
                  <p data-animation="animated fadeInRight" class="pln_he">Cisterna é um reservatório econômico e sustentável <br>que faz a captação e armazenamento da água da chuva, <br>que pode ser usada para diversas atividades domésticas.</p><a data-animation="animated fadeInUp" href="about_us.html" class="view-all hvr-bounce-to-right slide_learn_btn btn btn0">Ler Mais</a><a data-animation="animated fadeInUp" href="about_us.html" class="view-all hvr-bounce-to-right slide_learn_btn btn">Contratar Serviço</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="background-image: url(images/slider/homepage/calhas2.jpg);" class="item">
          <div class="carousel-caption">
            <div class="thm-container">
              <div class="box valign-top">
                <div class="content text-left pull-right">
                  <h1 data-animation="animated fadeInLeft" class="bnrfnt40">Instalação de Calhas<br></h1>
                  <p data-animation="animated fadeInRight" class="pln_he">As calhas tem a função de coletar as águas da chuva que caem no telhado<br>e direcioná-las para a rede pública de águas pluviais ou para o reservatório<br>inferior do sistema de reuso de água, que está se tornando cada vez mais comum.</p><a data-animation="animated fadeInUp" href="about_us.html" class="view-all hvr-bounce-to-right slide_learn_btn btn btn0">Ler Mais</a><a data-animation="animated fadeInUp" href="about_us.html" class="view-all hvr-bounce-to-right slide_learn_btn btn">Contratar Serviço</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="background-image: url(images/slider/homepage/telhas2.jpg);" class="item">
          <div class="carousel-caption">
            <div class="thm-container">
              <div class="box valign-top">
                <div class="content text-left pull-right">
                  <h1 data-animation="animated fadeInUp" class="bnrfnt40">Lavação de telhados e calhas<br></h1>
                  <p data-animation="animated fadeInDown" class="pln_he">Seja com jato de água, limpeza de telhado a seco, usando<br>produtos de limpeza especializados ou apenas água sanitária, é <br>importante garantir uma limpeza cuidadosa e correta da sua cobertura.</p><a data-animation="animated fadeInUp" href="about_us.html" class="view-all hvr-bounce-to-right slide_learn_btn btn btn0">ler mais</a><a data-animation="animated fadeInUp" href="about_us.html" class="view-all hvr-bounce-to-right slide_learn_btn btn">Contratar Serviço</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Controls--><a href="#minimal-bootstrap-carousel" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
    </div>
    <!-- =========home banner end============-->
    <!-- We offer Different Services-->
    <section class="diff-offer-wrapper">
      <div class="container">
        <div class="row diff-offer">
          <ul>
            <li class="we-offer-cont">
              <h2>Oferecemos<span>Diferente Serviços</span></h2>
            </li>
            <li class="we-offer-cont2">
              <p>Desde de instação de diversos tipos de cisternas como horizontal e vertical, realizamos a instalação completa de calhas como também oferemos o serviço de limpeza de telhados ou calhas já instaladas.</p>
            </li>
          </ul>
        </div>
        <div class="row">
          <div class="col-sm-4 service-info">
            <div class="item"><a href="agricultural.html" class="post-image view image_hover">			<img src="images/services/cisternas.jpg" alt="" class="img-responsive zoom_img_effect"></a><a href="agricultural.html">
                <h4>Instalação de Cisternas</h4></a>
              <p>Além de reutilizar a água para afazeres domesticos estaremos 
                ajudando o meio ambiente, pois é uma fonte de água renovavel. 
                Atualmente gastamos...</p>
              <h6><a href="mechanical.html">Ver Mais</a></h6>
            </div>
          </div>
          <div class="col-sm-4 service-info">
            <div class="item"><a href="agricultural.html" class="post-image view image_hover"><img src="images/services/calhas.jpg" alt="" class="img-responsive zoom_img_effect"></a><a href="agricultural.html">
                <h4>Instalação de Calhas</h4></a>
              <p>As calhas sao utilizadas para direcionar o fluxo de água para a 
                tubulacao da cisterna, tambem sao responsaveis por auxiliar em dias de chuva não 
                deixando criar...
                </p>
              <h6><a href="agricultural.html">Ver Mais</a></h6>
            </div>
          </div>
          <div class="col-sm-4 service-info">
            <div class="item"><a href="oil.html" class="post-image view image_hover">		<img src="images/services/telhas.jpg" alt="" class="img-responsive zoom_img_effect"></a><a href="oil.html">
                <h4>Lavação de Calhas e Telhas</h4></a>
              <p>Atualmente no seculo 21 a maioria das residencias 
                possuem telhados convencionais e calhas instaladas sendo que as mesmas precisam 
                de limpezas periodicas...</p>
              <h6><a href="oil.html">Ver Mais</a></h6>
            </div>
          </div>
        </div>
        <!--<div class="row">
          <div class="col-sm-4 service-info">
            <div class="item"><a href="power.html" class="post-image view image_hover"><img src="images/services/ser-img4.jpg" alt="" class="img-responsive zoom_img_effect"></a><a href="power.html">
                <h4>power and engery</h4></a>
              <p>Neque porro quisquam est, qui dolorem ipsum quira dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
              <h6><a href="power.html">Read more</a></h6>
            </div>
          </div>
          <div class="col-sm-4 service-info">
            <div class="item"><a href="chemical.html" class="post-image view image_hover"><img src="images/services/ser-img5.jpg" alt="" class="img-responsive zoom_img_effect"></a><a href="chemical.html">
                <h4>chemical research</h4></a>
              <p>Neque porro quisquam est, qui dolorem ipsum quira dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
              <h6><a href="chemical.html">Read more</a></h6>
            </div>
          </div>
          <div class="col-sm-4 service-info">
            <div class="item"><a href="meterial.html" class="post-image view image_hover"><img src="images/services/ser-img6.jpg" alt="" class="img-responsive zoom_img_effect"></a><a href="meterial.html">
                <h4>Meterial engineering</h4></a>
              <p>Neque porro quisquam est, qui dolorem ipsum quira dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
              <h6><a href="meterial.html">Read more</a></h6>
            </div>
          </div>
        </div>-->
      </div>
    </section>
    <!-- We offer Different Services-->
    <!-- Control in compliance-->
    <section class="container ind-common-pad2 clearfix">
      <div class="quality-wrapper text-center">
        <div class="vision tab-panel fade in">
          <h2>Qualidade e Segurança</h2>
          <p>
            Temos um controle de qualidade de alto nível em conformidade com os regulamentos e normas de segurança nacionais
          </p>
        </div>
        <div class="values tab-panel fade hide">
          <h2>Qualidade e Segurança</h2>
          <p>
            Temos um controle de qualidade de alto nível em conformidade com os regulamentos e normas de segurança nacionais
          </p>
        </div>
        <div class="mission tab-panel fade hide">
          <h2>Qualidade e Segurança</h2>
          <p>
            Temos um controle de qualidade de alto nível em conformidade com os regulamentos e normas de segurança nacionais
          </p>
        </div>
        <div class="vision-wrapper text-center">
          <ul>
            <li><a id="vision" href="javascript:void(0)"><img src="images/services/ser-icon4.png" alt="">
                <p>Visão</p></a></li>
            <li><a id="values" href="javascript:void(0)"><img src="images/services/ser-icon5.png" alt="">
                <p>Valores</p></a></li>
            <li><a id="mission" href="javascript:void(0)"><img src="images/services/ser-icon6.png" alt="">
                <p>Missão</p></a></li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Control in compliance-->
    <!-- Our Services natural resource-->
    <section class="fluid-service-area-home">
      <div class="work-image-ser"><img src="images/services/tecnotri.jpg" alt=""></div>
      <div class="service-promo">
        <div class="service-t-content">
          <div class="test-quote-sec"><img src="images/testimonial/quote-n.png" alt=""></div>
          <div class="testimonial-t-sec">
            <div class="testimonialn-slider">
              <div class="item">
                <div class="name-content clearfix">
                  <div class="tst-img"><img src="images/testimonial/william.jpg" alt=""></div>
                  <div class="client-name">
                    <p><span>Wiliam Valter(CEO & Founder)</span></p>
                    <ul>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="content clearfix">
                  <p>Nascido e criado por uma familia humilde, sempre
tive a ideia de emprender, mesmo muitos tendo uma visao diferente por emprender,
vejo sempre novas oportunidades, todos temos dificuldades na vida, porem só
poucos veem nelas uma forma de negocio, barreiras temos todos os dias, porem
sempre que pensamos em desistir, lembresse, nada vem facil, após criar minha
primeira empresa comecei ver novos rumos e horizontes, a mente fica criando sempre
novas ideias, assim surgiu a ideia de entrar em uns dos maiores mercados do furuto,
o mercado de casas autosustentaveis e inteligentes, criando a eco house e
automação, pensando em levar para todos formas de facilitar a vida cotidiana e
auxiliar o meio ambiente pensando em futuro melhor.</p>
                </div>
                <br><br>
                <!--<div class="sign text-right"><img src="images/testimonial/sign-n.png" alt=""></div>-->
              </div>
              <div class="item">
                <div class="name-content clearfix">
                  <div class="tst-img"><img src="images/testimonial/allan.jpg" alt=""></div>
                  <div class="client-name">
                    <p><span>Allan Junior Heineck(CEO & Founder)</span></p>
                    <ul>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="content clearfix">
                  <p>Nascido no dia 16/01/1999, 23 anos, Formado em Redes e servidores, Técnico em Fibra óptica, 
                    Sócio empresário na empresa WA Telecom e também na empresa EcoHouse Automação, 
                    amante e estudante no ramo da tecnologia buscando qualificação profissional no mercado de 
                    trabalho visando sempre  ajudar e principal foco facilitar a vida das pessoas em seu cotidiano.</p>
                </div>
                <br><br>
                <!--<div class="sign text-right"><img src="images/testimonial/sign-n.png" alt=""></div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
   
    
  </body>

  @endsection

</html>