<!DOCTYPE html>
<html>

@extends('layouts.app')

@section('content')

<body>

 <!-- Inner Header-->
 <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Sobre Nós</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="/">Home</a></li>
          <li><span>Sobre Nós</span></li>
        </ul>
      </div>
    </section>
    <section class="about-tab-box sectpad">
      <div class="container clearfix">
        <div class="row">
          <div class="col-sm-4 col-lg-3">
            <div class="tab-title-box">
              <ul role="tablist" class="clearfix">
                <li data-tab-name="history"><a href="#history" aria-controls="history" role="tab" data-toggle="tab">VISÃO</a></li>
                <li data-tab-name="mission" class="active"><a href="#mission" aria-controls="mission" role="tab" data-toggle="tab">VALORES</a></li>
                <li data-tab-name="vision"><a href="#vision" aria-controls="vision" role="tab" data-toggle="tab">MISSÃO</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-8 col-lg-9">
            <div class="tab-content-box tab-content about-tab">
              <div id="history" class="single-tab-content tab-pane fade">
                <h2>VISÃO</h2>
                <p>SER RECONHECIDA POR OFERECER PRODUTOS E SERVIÇOS DE QUALIDADE COM 
                    ATENDIMENTO QUALIFICADO AO CLIENTE.
                </p>
                <div class="row">
                  <div class="col-sm-12 abot-img"><img src="images/about/abt-img1.jpg" alt="" class="img-responsive"><img src="images/about/abt-img2.jpg" alt="" class="img-responsive"></div>
                </div>
              </div>
              <div id="mission" class="single-tab-content tab-pane fade in active">
                <h2>VALORES</h2>
                <p>SEMPRE QUERENDO LEVAR NOVOS PRODUTOS DE QUALIDADE, FAZENDO SERVIÇOS COM 
                    SEGURANÇA, CRIANDO CADA VEZ MAIS CONHECIMENTO POIS A TECNOLOGIA NAO PARA, 
                    ATENDIMENTO AO CLIENTE SEMPRE COM EXCELENCIA.
                </p>
                <div class="row">
                  <div class="col-sm-12 abot-img"><img src="images/about/abt-img1.jpg" alt="" class="img-responsive"><img src="images/about/abt-img2.jpg" alt="" class="img-responsive"></div>
                </div>
              </div>
              <div id="vision" class="single-tab-content tab-pane fade">
                <h2>MISSÃO</h2>
                <p>CRIAR UM FUTURO INTELIGENTE E AUTOSSUSTENTAVEL CAPAZ DE NOS AUXILIAR NOS 
                    AFAZERES DIARIOS E LEVANDO A IDEIA DE SUSTENTABILIDADE A TODOS.
                </p>
                <div class="row">
                  <div class="col-sm-12 abot-img"><img src="images/about/abt-img1.jpg" alt=""><img src="images/about/abt-img2.jpg" alt=""></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- features Section-->
    <div class="features-section">
      <div class="features-image"><img src="images/features/1.jpg" alt=""></div>
      <div class="features-area">
        <div class="features">
          <div class="features-content">
            <div class="media">
              <div class="media-left"><a href="#"><img src="images/features/phone.png" alt=""></a></div>
              <div class="media-body">
                <h4 class="media-heading">Telefone 24 horas</h4>
                <p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
              </div>
            </div>
            <div class="media">
              <div class="media-left"><a href="#"><img src="images/features/icon.png" alt=""></a></div>
              <div class="media-body">
                <h4 class="media-heading">Agendamento</h4>
                <p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
              </div>
            </div>
          </div>
          <div class="features-content">
            <div class="media">
              <div class="media-left"><a href="#"><img src="images/features/icon2.png" alt=""></a></div>
              <div class="media-body">
                <h4 class="media-heading">Certificados</h4>
                <p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
              </div>
            </div>
            <div class="media">
              <div class="media-left"><a href="#"><img src="images/features/hand.png" alt=""></a></div>
              <div class="media-body">
                <h4 class="media-heading">Preços acessíveis</h4>
                <p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- testimonial-->
    <section class="sectpad testimonial-area">
      <div class="container clearfix">
        <div class="section_header">
          <h2>O QUE NOSSOS CLIENTES DIZEM</h2>
        </div>
        <div class="testimonial-sliders">
          <div class="item">
            <div class="media testimonial">
              <div class="media-left"><a href="#"><img src="images/testimonial/1.jpg" alt=""></a></div>
              <div class="media-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><a href="#">-  John Michale</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="media testimonial">
              <div class="media-left"><a href="#"><img src="images/testimonial/2.jpg" alt=""></a></div>
              <div class="media-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><a href="#">-  John Michale</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="media testimonial">
              <div class="media-left"><a href="#"><img src="images/testimonial/3.jpg" alt=""></a></div>
              <div class="media-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><a href="#">-  John Michale</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="media testimonial">
              <div class="media-left"><a href="#"><img src="images/testimonial/4.jpg" alt=""></a></div>
              <div class="media-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><a href="#">-  John Michale</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="media testimonial">
              <div class="media-left"><a href="#"><img src="images/testimonial/5.jpg" alt=""></a></div>
              <div class="media-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><a href="#">-  John Michale</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="media testimonial">
              <div class="media-left"><a href="#"><img src="images/testimonial/6.jpg" alt=""></a></div>
              <div class="media-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><a href="#">-  John Michale</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Clients-->
    <section class="our-client sectpad">
      <div class="container clearfix">
        <div class="section_header">
          <h2>Clientes</h2>
        </div>
        <div class="client-carousel">
          <div class="client-slider">
            <div class="item"><img src="images/clients/1.jpg" alt=""></div>
            <div class="item"><img src="images/clients/2.jpg" alt=""></div>
            <div class="item"><img src="images/clients/3.jpg" alt=""></div>
            <div class="item"><img src="images/clients/4.jpg" alt=""></div>
            <div class="item"><img src="images/clients/5.jpg" alt=""></div>
            <div class="item"><img src="images/clients/6.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </section>

    </body>

@endsection

</html>